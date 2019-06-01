<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }} - @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .mail-send {
                padding-top: 30px;
                padding-bottom: 30px;
                font-size: 32px;
                /*background: #ffe;*/
                /*color: #999 !important;*/
            }
            .mail-send:hover {
                /*color: #ddd !important;*/
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @yield('content')
        </div>
    </body>
</html>
