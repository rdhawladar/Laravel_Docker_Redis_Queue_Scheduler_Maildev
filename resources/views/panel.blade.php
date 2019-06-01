@extends('layout')
@section('title', 'Mailer')
@section('content')
    <div class="col-md-4 text-center">
		@if($errors->any())
			<h1 class="p-3  alert-success">{{$errors->first()}}</h1>
		@endif
    	<h1 class="badge-primary">username: {{$username}}</h1>
        <a class="btn btn-lg btn-secondary text-white font-weight-bold w-100 mail-send mb-2" href="{{route('sending')}}">SEND MAIL</a>
        <a class="btn btn-danger text-white w-100" href="{{route('logout')}}">Logout</a>
    </div>
@endsection
