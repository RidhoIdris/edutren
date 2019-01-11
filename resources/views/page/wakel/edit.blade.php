@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Wali Kelas</div>
				
                <div class="card-body">
                    <form action="{{ route('wakel.update',$wakel->id) }}" method="POST">
                    	@csrf
                    	@method('PUT')
                    	<div class="form-group">
                    		<input type="text" name="id" value="{{$wakel->id}}" readonly class="form-control">
                    	</div>
                    	<div class="form-group">
                    		<select name="guru_id" class="form-control">
                                @foreach ($guru as $guru)
                                <option 
								@if ($guru->id == $wakel->guru_id)
									selected
								@endif
                                 value="{{ $guru->id }}">{{$guru->name}}</option>      
                                @endforeach
                            </select>
                    	</div>
                        <div class="form-group">
                            <select name="kelas_id" class="form-control">
                                @foreach ($kelas as $kelas)
                                <option 
								@if ($kelas->id == $wakel->kelas_id)
									selected
								@endif
                                value="{{ $kelas->id }}">{{$kelas->name}}</option>      
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="tahunAjaran" class="form-control" value="{{ $wakel->tahunAjaran }}"readonly>
                        </div>
                    	<button type="input" class="btn btn-success">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
