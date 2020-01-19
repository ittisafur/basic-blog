@extends('account.layouts.app')

@section('account.content')

<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    <h1 class="title">Create a Post</h1>
                    @csrf
                    <div class="field">
                        <label for="title"><strong>Title</strong></label>
                        <p class="control">
                            <input type="text" class="input{{$errors->has('title') ? ' is-danger':''}}" name="title" id="title" placeholder="e.g Your Great Title">
                        </p>
                        @if($errors->has('title'))
                            <p class="help is-danger">
                                {{$errors->first('title')}}
                            </p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="description"><strong>Description</strong></label>
                        <p class="control">
                            <textarea name="description" class="textarea{{$errors->has('description') ? ' is-danger':''}}" placeholder="e.g. Your Great Story"></textarea>
                        </p>
                        @if($errors->has('description'))
                            <p class="help is-danger">
                                {{$errors->first('description')}}
                            </p>
                        @endif
                    </div>
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input{{$errors->has('avatar') ? ' is-danger':''}}" type="file" name="featured_image">
                            <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Featured Image
                            </span>
                            </span>
                        </label>
                        @if($errors->has('avatar'))
                            <p class="help is-danger">
                                {{$errors->first('avatar')}}
                            </p>
                        @endif
                    </div>
                    <br>
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