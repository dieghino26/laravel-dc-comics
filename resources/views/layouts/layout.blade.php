<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    <title>DC Comics</title>

    <!-- FontsAwesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Jumbotron --}}
    @include('includes.jumbotron')

    <main>
        @yield('main-content')
    </main>

    {{-- InfoNav --}}
    @include('includes.info')

    {{-- Footer --}}
    @include('includes.footer')
</body>

</html>
