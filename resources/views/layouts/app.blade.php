<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
</head>
<body>
    @include('inc.header')
    <!-- @vite(['resources/css/app.css']) -->
    @if (Request::is("/"))
        @include('inc.hero')
    
    @endif
     <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @yield(section: 'content')
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
     </div>
     
     @include('inc.footer')

</body>
</html>
