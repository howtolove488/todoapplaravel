<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Demo Post</title>
    </head>
    <body>
    	<h1>{{ $posts->title }}</h1>
    	<h1>{{ $posts->body }}</h1>
    </body>    
</html>    