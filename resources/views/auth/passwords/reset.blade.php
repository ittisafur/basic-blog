@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form action="{{route('password.update')}}" method="POST">
                    <h1 class="title">Reset Your Password</h1>
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                        <label for="email"><strong>Email</strong></label>
                        <p class="control">
                            <input type="email" value="{{ $email ?? old('email') }}"  class="input{{$errors->has('email') ? ' is-danger':''}}" name="email" id="email" placeholder="e.g johndoe@example.com">
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
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-primary">Reset Password</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
