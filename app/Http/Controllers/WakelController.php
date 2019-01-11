<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wakel;
use App\Guru;
use App\Kelas;

class WakelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wakel = Wakel::all();

        return view('page.wakel.index',compact('wakel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $kelas = Kelas::all();
        $AWAL = 'WKL';
        $noUrutAkhir = Wakel::max('id');
        $noUrut = (int)substr($noUrutAkhir, 3,3);
        $noUrut++;
        $id = $AWAL.sprintf("%03s",$noUrut);
        return view('page.wakel.create',compact('guru','kelas','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Wakel::where('id','=',request('id'))->exists()) {
            return redirect()->route('wakel.create');
        }else{
            Wakel::create([
                'id'          => request('id'),
                'guru_id'     => request('guru_id'),
                'kelas_id'    => request('kelas_id'),
                'tahunAjaran' => request('tahunAjaran')
            ]);

            return redirect()->route('wakel.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wakel = Wakel::findOrFail($id);
        $guru  = Guru::all();
        $kelas = Kelas::all();
        return view('page.wakel.edit',compact('wakel','guru','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $wakel = Wakel::findOrFail($id);
       $wakel->update([
        'guru_id'     => request('guru_id'),
        'kelas_id'    =>request('kelas_id'),
        'tahunAjaran' =>request('tahunAjaran')
       ]);

       return redirect()->route('wakel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wakel = Wakel::findOrFail($id);
        $wakel->delete();

        return redirect()->route('wakel.index');
    }
}
