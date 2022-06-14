@extends('layouts.auth-master')

@section('content')
<div class="m-4 border rounded-4">
  <form class="px-4 py-3" method="POST" action="{{ route('register.perform') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="m-4 rounded img-thumbnail" src="{!! url('img/cat.jpg') !!}" alt="" width="72" height="57">



    <div class="mb-4 mt-4">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail-Address" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
    </div>
    <div class="mb-4 mt-4">
        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
    </div>
    <div class="mb-4 mt-4">
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
    </div>
    <div class="mb-4 mt-4">
        <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
    </div>
    <div class="mb-4 mt-4">
        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
    </div>

     <button type="submit" class="btn btn-primary">Sign Up</button>

  </form>

</div>

@include('auth.partials.copy')
@endsection
