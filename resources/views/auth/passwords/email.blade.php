@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form action="{{route('password.email')}}" method="POST">
                    <h1 class="is-size-1">Reset Password</h1>
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
                        <p class="control">
                            <button class="button is-primary">Send Password Reset link to mail</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
