<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('content.admin.head')
    <title>Document</title>
</head>
<body>
    @include(' content.admin.playloader')

    {{-- Prelaode --}}
    @include('components.admin.sidebar')

    {{-- Sidebard --}}
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            {{-- Header --}}
    @include('components.admin.header')
            {{-- contente --}}
            @yield('content')
        </div>
    </div>

    @include('content.admin.script')

</body>
</html>