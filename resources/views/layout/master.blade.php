<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.jsx'])

<div id="app"></div>
</head>
<body>
    {{-- Start Navigation Bar   --}}
    @include('layout.navbar')
    {{-- End Navigation Bar     --}}


    {{-- Start Sidebar section   --}}
     @include('layout.sidebar')
     {{-- End Sidebar section   --}}

    {{-- Start Page Content --}}
    @yield('content')
    {{-- End Page Content --}}

</body>
</html>