@extends('layout')
@section('title', 'Login')
@section('content')

    <form class="col-md-3 text-center bg-secondary px-4 py-5 rounded" method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="text-white font-weight-bold mb-5">SIGN IN</h3>
		@if($errors->any())
			<span class="alert-danger">{{$errors->first()}}</span>
		@endif
        <div class="form-group">
            <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="setfoo" name="username">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
@endsection













