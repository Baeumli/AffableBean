<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-4">
        <div id="app">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <div class="content pb-4">
                        @include('inc.navbar')
                        <main class="py-4 p-4">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <div class="header mb-5">
                                        <a id="logo" href="/"><img  class="img-fluid d-block mx-auto" src="/images/affable-logo.png" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    @include('inc.sidebar')
                                </div>
                                <div class="col-md-9">
                                    @yield('content')
                                </div>
                            </div>

                        </main>
                        <footer>
                            @include('inc.footer')
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>