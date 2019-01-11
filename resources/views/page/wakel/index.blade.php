@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Wali Kelas
                <a href="{{ route('wakel.create') }}" class="btn btn-primary float-right">Tambah Wali Kelas</a></div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hovered">
                        <tr>
                            <th>No</th>
                            <th>Id Wali kelas</th>
                            <th>Nama Guru</th>
                            <th>Nama kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($wakel as $key=>$wakel)
                        	<tr>
                            	<td>{{++$key}}</td>
                            	<td>{{ $wakel->id }}</td>
                            	<td>{{ $wakel->guru->name }}</td>
                            	<td>{{ $wakel->kelas->name }}</td>
                            	<td>{{ $wakel->tahunAjaran }}</td>
                            	<td>
                            		<a href="{{ route('wakel.edit',$wakel->id) }}" class="btn btn-success btn-xs mb-1">Edit</a>
                            		<form class="form-inline" action="{{ route('wakel.destroy',$wakel->id) }}" method="POST">
                            			@csrf
                            			@method('DELETE')
                            			<button onclick="return confirm('Yakin.?')" class="btn btn-danger btn-xs" >Hapus</button>
                            		</form>
                            	</td>
                        	</tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
