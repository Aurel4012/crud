<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>livres</title>

        <!-- Fonts -->
        <link href="{{mix('/css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>

        <main id="app">
            <book-list></book-list>
        </main>
      <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
