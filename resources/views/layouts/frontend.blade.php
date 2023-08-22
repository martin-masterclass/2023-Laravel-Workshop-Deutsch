<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /** CSS Navi */
        .parent {
            display: block;
            position: relative;
            float: left;
            line-height: 30px;
            background-color: #4FA0D8;
            border-right: #CCC 1px solid;
        }

        .parent a {
            margin: 10px;
            color: #FFFFFF;
            text-decoration: none;
        }

        .parent:hover>ul {
            display: block;
            position: absolute;
        }

        .child {
            display: none;
        }

        .child li {
            background-color: #E4EFF7;
            line-height: 30px;
            border-bottom: #CCC 1px solid;
            border-right: #CCC 1px solid;
            width: 100%;
        }

        .child li a {
            color: #000000;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0px;
            min-width: 10em;
        }

        ul ul ul {
            left: 100%;
            top: 0;
            margin-left: 1px;
        }
    </style>
</head>
<body class="bg-gray-400 flex flex-col">

<!-- Wrapper für Zentrierung -->
<div class="mx-auto w-4/5 max-w-screen-xl bg-blue-50 flex-1">

    <!-- Sticky Header -->
    <header class="bg-blue-600 text-white p-4 sticky top-0 z-50">
        <div class="flex justify-between items-center">
            <div class="flex">
                <h1 class="text-xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
                <!-- Navigation -->
                <ul class="ml-12" id="menu">
                    <li class="parent"><a href="#">Oberpunkt 1</a>
                        <ul class="child">
                            <li class="parent"><a href="#">Unterpunkt 1.1 <span class="expand">»</span></a>
                                <ul class="child">
                                    <li><a href="#">Unterpunkt 1.1.1</a></li>
                                    <li class="parent"><a href="#">Oberpunkt 1.1.2 <span class="expand">»</span></a>
                                        <ul class="child">
                                            <li><a href="#">Unterpunkt 1.1.2.1</a></li>
                                            <li><a href="#">Unterpunkt 1.1.2.2</a></li>
                                            <li><a href="#">Unterpunkt 1.1.2.3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Unterpunkt 1.2</a></li>
                        </ul>
                    </li>
                    <li class="parent"><a href="#">Oberpunkt 2</a></li>
                    <li class="parent"><a href="#">Oberpunkt 3</a></li>
                </ul>
            </div>

            <a href="/login" class="bg-white text-blue-600 px-4 py-2 rounded">Login</a>
        </div>
    </header>

    {{ $slot }}

    <!-- Footer -->
    <footer class="bg-blue-600 text-white p-4 mt-4">
        <p>© <?=date("Y")?> {{ config('app.name', 'Laravel') }}. Alle Rechte vorbehalten. Adresse: {{ config('company.address') }}</p>
    </footer>

</div>

</body>
</html>
