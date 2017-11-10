<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Lock Software</title>
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#60c238">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/theme.css">
    </head>
    <body>
        <noscript>
          This is your fallback content in case JavaScript fails to load.
        </noscript>
        <div id="app"></div>
        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
