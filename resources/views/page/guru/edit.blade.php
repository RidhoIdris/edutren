@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Guru</div>
				
                <div class="card-body">
                    <form action="{{ route('guru.update',$guru->id) }}" method="POST">
                    	@csrf
                        @method('PUT')
                    	<div class="form-group">
                    		<input type="text" name="id" value="{{$guru->id}}" readonly class="form-control">
                    	</div>
                    	<div class="form-group">
                    		<input type="text" placeholder="Nama Guru" value="{{$guru->name}}" autocomplete="off" name="name" class="form-control">
                    	</div>
                    	<button type="input" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
