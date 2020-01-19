@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form action="" method="POST">
                    <h1 class="title">Sign Up</h1>
                    @csrf
                    <div class="field">
                        <label for="name"><strong>Name</strong></label>
                        <p class="control">
                            <input type="text" class="input{{$errors->has('name') ? ' is-danger':''}}" name="name" id="name" placeholder="e.g johndoe@example.com">
                        </p>
                        @if($errors->has('name'))
                            <p class="help is-danger">
                                {{$errors->first('name')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="email"><strong>Email</strong></label>
                        <p class="control">
                            <input type="email" class="input{{$errors->has('email') ? ' is-danger':''}}" name="email" id="email" placeholder="e.g johndoe@example.com">
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
                            <button type="submit" class="button is-primary">Sign Up</button>
                        </p>
                        <p class="help">
                            <a href="{{route('login')}}">Already have an account ?</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
