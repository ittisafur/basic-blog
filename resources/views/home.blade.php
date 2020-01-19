@extends('layouts.app')

@section('content')

<div class="hero is-fullheight is-primary has-background height-modifier">
  <img alt="Fill Murray" class="hero-background is-transparent" src="{{asset('img/bg.jpeg')}}" />
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered">
        The Clean Blog v2
      </h1>
      <h3 class="subtitle has-text-centered">
        Just a laravel App
      </h3>
    </div>
  </div>
</div>

<div class="section">
  <div class="container"> 
    <div class="columns">
      <div class="column is-half is-offset-one-quarter">
        @foreach($articles as $article)
          <h2 class="title">{{$article->title}}</h2>
          <p>{{$article->description}}</p>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
