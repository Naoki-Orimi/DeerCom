<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deer.Com</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .h-300{
            height: 300px;
        }
        .center-middle {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .category-img{
            height: 100%;
            width: 100%;
        }
        .right-nav{
            padding-top: 20px
        }

        .inner-header .logo {
            height: 70px;
        }

        .logo-btn {
            height: 100%;
        }

        .img-div{
            height: 250px;

        }
        .around{
            padding: 5px;
        }
        .modal-btn{
            padding: 0;
            border: none;
            background: transparent;
        }

        .cbtn{
            padding: 0;
            border: none;
            background: transparent;
        }

        button img{
            display: block;
        }

        .cancel{
            margin-right:0px;
        }

        .nonitem{
            text-align: center;
        }

        .deletebtn{
            border: none;
        }

        .kounyuu{
            position: relative;
            padding: 0.1em 0.5em;
            background: -webkit-linear-gradient(to right, rgb(255, 186, 115), transparent);
            background: linear-gradient(to right, rgb(255, 186, 115), transparent);
            color: #545454;
        }

        .right{
            padding-right: 0px;
        }

        .addbtn{
            border: none;
            border-radius: 5px;
        }

    </style>
</head>
<?php
    $auth = Auth::user();
?>
<body>
    <div id="app" class="contents">
        <header-component v-bind:auth="{{ $auth }}"></header-component>
        <main-component></main-component>
    </div>
    <!-- Js Plugins -->
    <script src="js/app.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/main.js"></script>
</body>

<footer>
    @include('layouts.footer')
</footer>
