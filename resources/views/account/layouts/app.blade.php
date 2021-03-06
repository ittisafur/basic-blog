@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-one-quarter">
                    @include('account.layouts.partials._navigation')
                </div>
                <div class="column">
                    @yield('account.content')
                </div>
            </div>
        </div>
    </div>
@endsection