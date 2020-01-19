@extends('account.layouts.app')

@section('account.content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                <form action="{{route('account.update', $user)}}" method="POST" enctype="multipart/form-data">
                    <h1 class="title">Account Information</h1>
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
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input{{$errors->has('avatar') ? ' is-danger':''}}" type="file" name="avatar">
                            <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Choose an image
                            </span>
                            </span>
                        </label>
                        @if($errors->has('avatar'))
                            <p class="help is-danger">
                                {{$errors->first('avatar')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="first_name"><strong>First Name</strong></label>
                        <p class="control">
                            <input type="text" class="input{{$errors->has('first_name') ? ' is-danger':''}}" name="first_name" id="first_name" placeholder="e.g johndoe@example.com">
                        </p>
                        @if($errors->has('first_name'))
                            <p class="help is-danger">
                                {{$errors->first('first_name')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="last_name"><strong>Last Name</strong></label>
                        <p class="control">
                            <input type="text" class="input{{$errors->has('last_name') ? ' is-danger':''}}" name="last_name" id="last_name" placeholder="e.g johndoe@example.com">
                        </p>
                        @if($errors->has('last_name'))
                            <p class="help is-danger">
                                {{$errors->first('last_name')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="contact"><strong>Contact</strong></label>
                        <p class="control">
                            <input type="text" class="input{{$errors->has('contact') ? ' is-danger':''}}" name="contact" id="contact" placeholder="e.g 0000-000-000">
                        </p>
                        @if($errors->has('contact'))
                            <p class="help is-danger">
                                {{$errors->first('contact')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-primary">Update</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection