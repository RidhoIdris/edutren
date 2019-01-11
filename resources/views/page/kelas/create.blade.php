@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kelas</div>
				
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="POST">
                    	@csrf
                    	<div class="form-group">
                    		<input type="text" name="id" value="{{$id}}" readonly class="form-control">
                    	</div>
                    	<div class="form-group">
                    		<input type="text" placeholder="Nama Kelas" autocomplete="off" name="name" class="form-control">
                    	</div>
                    	<button type="input" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
