@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Wali Kelas</div>
				
                <div class="card-body">
                    <form action="{{ route('wakel.store') }}" method="POST">
                    	@csrf
                    	<div class="form-group">
                    		<input type="text" name="id" value="{{$id}}" readonly class="form-control">
                    	</div>
                    	<div class="form-group">
                    		<select name="guru_id" class="form-control">
                                @foreach ($guru as $guru)
                                <option value="{{ $guru->id }}">{{$guru->name}}</option>      
                                @endforeach
                            </select>
                    	</div>
                        <div class="form-group">
                            <select name="kelas_id" class="form-control">
                                @foreach ($kelas as $kelas)
                                <option value="{{ $kelas->id }}">{{$kelas->name}}</option>      
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tahunAjaran" class="form-control" value="{{ date('Y') }}"readonly>
                        </div>
                    	<button type="input" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
