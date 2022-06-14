@extends('layouts.auth-master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col m-4 text-left">
            <h1 class=""> Figaro </h1>
            <p class=""> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="col m-4">
            <div class=" border rounded-4">
                <form class="px-4 py-3" method="POST" action="{{ route('login.perform') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                    @include('layouts.partials.messages')

                    <h1 class="text-center">Login</h1>

                    <div class="mb-4 mt-4">
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="E-Mail or Username"  required="required" autofocus>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                    </div>
                    <div class="mb-4 mt-4">
                    <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>

                </form>
            </div>
        </div>
    </div>
</div>




@endsection
