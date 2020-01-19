@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form action="{{route('login')}}" method="POST">
                    <h1 class="is-size-1">Login</h1>
                    @csrf
                    <div class="field">
                        <label for="email"><strong>Email</strong></label>
                        <p class="control">
                            <input name="email" type="email" class="input{{$errors->has('email') ? ' is-danger':''}}" id="email" placeholder="e.g johndoe@example.com">
                        </p>
                        @if($errors->has('email'))
                            <p class="help is-danger">
                                {{$errors->first('email')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password"><strong>Password</strong></label>
                        <div class="control">
                            <input type="password" name="password" id="password{{$errors->has('password') ? ' is-danger': ''}}" class="input" placeholder="**********">
                        </div>
                        @if($errors->has('password'))
                            <p class="help is-danger">
                                {{$errors->first('password')}}
                            </p>
                        @endif
                    </div>
                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-primary">Login</button>
                        </p>
                        <p class="help">
                            <a href="{{route('password.request')}}">Forgot your password ?</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
