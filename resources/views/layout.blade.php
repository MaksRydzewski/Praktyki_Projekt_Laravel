<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{assert('css/style.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            *{
    font-family: sans-serif;
}

body{
    margin: 0px;
    width: 100%;
    height: 100vh;
    background-color:#121215;
}

.conteiner{
display: flex;
flex-wrap: wrap;
}

.content{
    display: flex;
    width: 100%;
    height: 680px;
    background-color:#FFFFFF ;
    margin-left: 50px;
    margin-right: 50px;
    border-radius: 6px;
}

#type,#name,#price,#description,#submit{
    display: flex;
    width: 180px;
    height: 50px;
    margin: 25px;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
    border-radius: 6px;
    color: #82829B;
    background-color:#121215;
    border: 0px;
    font-size: larger;
}

.list{
    display:flex;
    flex-direction:row;
    width: 100%;
    background-color:#18181C ;
    margin-left: 50px;
    margin-right: 50px;
    border-radius: 6px;
}

.dish{
    flex-wrap:wrap;
    margin:10px;
    background:#2F2D36;
    border-radius:10px;
    border: 5px #5F9BD1 solid;
    color:#82829B;
    padding:10px
}

.update{
    margin:10px;
    margin-left:30px;
    padding: 5px;
    background:#228B22;
    border-radius:10px;
    border: 5px #006400 solid;
    color:#006400;
}

.delete{
    margin:10px;
    padding: 5px;
    background:#FF0000;
    border-radius:10px;
    border: 5px #8B0000 solid;
    color:#8B0000;
    margin-left:60px;
}


        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>
