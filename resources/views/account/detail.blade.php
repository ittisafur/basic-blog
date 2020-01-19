@extends('account.layouts.app')

@section('account.content')
    <img src="{{$user->avatar}}" alt="{{$user->name}}" class="detail_img">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$user->name}}</th>
                <th>{{$user->first_name}}</th>
                <th>{{$user->last_name}}</th>
                <th>{{$user->contact}}</th>
                <th>{{$user->email}}</th>
            </tr>
        </tbody>
    </table>
@endsection