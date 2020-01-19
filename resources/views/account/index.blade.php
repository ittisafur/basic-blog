@extends('account.layouts.app')

@section('account.content')

    @foreach (auth()->user()->articles as $article)
        <h4 class="title">{{$article->title}}</h4>
        <p>{{$article->description}}</p>
    @endforeach
    
@endsection