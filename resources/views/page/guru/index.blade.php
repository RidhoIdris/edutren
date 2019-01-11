@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Guru
                <a href="{{ route('guru.create') }}" class="btn btn-primary float-right">Tambah Guru</a></div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hovered">
                        <tr>
                            <th>No</th>
                            <th>Id Guru</th>
                            <th>Nama  Guru</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($gurus as $key=>$guru)
                        	<tr>
                            	<td>{{++$key}}</td>
                            	<td>{{ $guru->id }}</td>
                            	<td>{{ $guru->name }}</td>
                            	<td>
                            		<a href="{{ route('guru.edit',$guru->id) }}" class="btn btn-success btn-xs mb-1">Edit</a>
                            		<form class="form-inline" action="{{ route('guru.destroy',$guru->id) }}" method="POST">
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
