<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Themis - Gestão de Clínicas</title>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
    </body>
</html>
