@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kelas
                <a href="{{ route('kelas.create') }}" class="btn btn-primary float-right">Tambah Kelas</a></div>
				
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hovered">
                        <tr>
                            <th>No</th>
                            <th>Id kelas</th>
                            <th>Nama kelas</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($kelas as $key=>$kelas)
                        	<tr>
                            	<td>{{++$key}}</td>
                            	<td>{{ $kelas->id }}</td>
                            	<td>{{ $kelas->name }}</td>
                            	<td>
                            		<a href="{{ route('kelas.edit',$kelas->id) }}" class="btn btn-success btn-xs mb-1">Edit</a>
                            		<form class="form-inline" action="{{ route('kelas.destroy',$kelas->id) }}" method="POST">
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
