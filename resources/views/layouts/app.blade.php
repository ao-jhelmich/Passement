<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    ul.menu {
        position: fixed;
        top: 0;
        width: 100%;
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        display: flex;
        justify-content: center;
    }

    li.menu-item a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li.menu-item a:hover {
        background-color: #111;
    }
    div.wrapper {
        height: 100%;
        margin-top: 200px;
        display: flex;
        justify-content: center;
    }

    div.content {
        max-width: 840px;
    }
    </style>
</head>
<body>
    @include('partials.menu')

    <div class="wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>
    
</body>
</html>