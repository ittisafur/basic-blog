<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials._head')
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
</body>
</html>
