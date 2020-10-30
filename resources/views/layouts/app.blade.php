<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
   
    <title>@yield('title-page')</title>
</head>    
<body>
    @include('inc.header')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
   

    @include('inc.footer')

</body>
</html>      