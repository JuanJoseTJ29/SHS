<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service Home Store</title>

        <!-- Link de Bootstrap
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <!-- Iconos -->    
        <script src="https://kit.fontawesome.com/b91f129f33.js" crossorigin="anonymous"></script>
        <!--Tipografia-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap');
            *{
                box-sizing: border-box;
            }
            body{
                font-family: 'Montserrat', sans-serif;
                margin: 0;
            }
            /*--------------------Estilos Base--------------------*/
            img{
                display: block;
                width: 100%;
                max-width: 100%;
            }
            h1, h2, h3, h4, h5, h5, h6{
                margin: 0;
            }
            .container{
                width: 100%;
                margin: auto;
            }
            .container--flex{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }
            .column{
                width: 100%;
            } 
            /*--------------------Header--------------------*/
            .main-header{
                width: 100%;
            }
            .logo{
                font-size: 1.8rem;
                color: #2196f3;
                padding: 10px;
                font-family: 'Pacifico', cursive;
                font-weight: 100;
            }
            .main-header__contactInfo__phone{
                background: #2196f3;
                color: white;
                margin: 0 auto;
                padding: 10px;
            }
            .main-header__contactInfo__address{
                padding: 10px;
                margin: 0;
            }
            .main-header [class*="fas fa-"]:before {
                position: relative;
                top: 2px;
                right: 5px;
            }
            /*--------------------Estilos del Nav--------------------*/
            .main-nav{
                width: 100%;
                position: relative;
                z-index: 2000;
                padding: 10px;
            }
            .icon-menu{
                display: block;
                color: white;
                border: 1px solid white;
                border-radius: 3px;
                width: 40px;
                height: 40px;
                line-height: 42px;
                text-align: center;
                cursor: pointer;
                font-style: 1.5rem;
            }
            .social-icon{
                display: flex;
                justify-content: space-between;
            }
            .social-icon [class*="fa"]{
                color: black;
                background-color: white;
                margin-left: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.3rem;
                width: 35px;
                height: 35px;
                border-radius: 50%;
            }
            .social-icon__link{
                text-decoration: none;
            }
            .menu{
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: rgba(0,0,0,.85);
                padding: 0;
                margin: 0;
                list-style: none;
                text-align: center;
                height: 0;
                overflow: hidden;
                transition: height .3s linear;
            }
            .menu__link{
                display: block;
                padding: 15px;
                color: white;
                text-decoration: none;
            }
            .menu__link:hover {
                background:#2196f3;
            }
            .menu__link--select{
                background: #2196f3;
            }
            .mostrar{
                height: 150px;
            }
            /*--------------------Estilos de Banner--------------------*/
            .banner{
                margin-top: -55px;
                position: relative;
            }
            .banner:before{
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.6);
                z-index:1000;
                top: 0;
            }
            .banner__img{
                width: 100%;
                height: 500px;
                object-fit: cover;
            }
            .banner__content{
                width: 90%;
                color: white;
                text-align: center;
                position: absolute;
                z-index: 1500;
                top: 50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
                font-size: 1.5rem;
                font-weight: bold;
            }
            /*--------------------Estilos responsive--------------------*/
            @media screen and (min-width:480px){
                .logo{
                    color: white;
                }
                .main-header__contactInfo{
                    text-align: right;
                }
                .main-header__contactInfo__phone{
                    background: none;
                }
                .main-header__contactInfo__address{
                    color: white;
                }
                .main-nav{
                    background: rgba(0,0,0,0.85);
                }
                .banner{
                    margin-top:-145px;
                    z-index: -1000;
                }
                .banner__img{
                    height: 600px;
                }
                .banner__content{
                    font-style: 2em;
                }
                .main{
                    padding-bottom: 15px;
                }
                .main__about__description .colmn:nth-child(2){
                    padding-left: 20px;
                    font-style: .9em;
                }
                .main__about__description .btn{
                    margin:0;
                }
                .today-special .column{
                    border:5px solid #ddd;
                    padding: 5px;
                }
                .today-special__img{
                    height: 200px;
                    object-fit: cover;
                }
                .main-footer .container--flex{
                    align-items: flex-start;
                }
                .column--50{
                    width: 49%;
                }
                .column--50-25{
                    width: 49%;
                }
                .column--33{
                    width: 32%;
                }
            }
            @media screen and (min-width:768px){
                .main__title{
                    font-size: 2.2em;
                }
                .main__about__description{
                    margin-top:30px;
                }
                .main__about__description .column--50:nth-child(2){
                    font-size: 1em;
                }
                .main__about__description .column--50:nth-child(2) .column__txt{
                    line-height: 30px;
                }
                .column--50-25{
                    width: 24.5%;
                }
                .column__title{
                    font-style: 1em;
                }
                .group__title{
                    font-style: 2.2em;
                }
            }
            @media screen and (min-width:1024px){
                .container{
                    width: 1000px;
                }
                .logo{
                    font-size: 2em;
                    padding: 0;
                }
                .main-header__contactInfo__phone, main-header__contactInfo__address{
                    padding-right: 0;
                    font-style: 1.15em;
                }
                .main-nav{
                    padding: 0;
                }
                .banner__img{
                    height: 700px;
                }
                .banner__content{
                    font-size: 2.5em;
                }
                .icon-menu{
                    display:none;
                }
                .menu{
                    position: static;
                    display: flex;
                    height: auto;
                    width: auto;
                }
                .menu__link{
                    padding: 20px;
                }
                .group--color .container{
                    margin-top: 30px;
                    margin-bottom: 30px;
                    padding: 20px;
                }
                .main__title{
                    font-style: 2.3em;
                }
                .main__about__description .column--50:nth-child(2) .column__txt{
                    line-height: 45px;
                }
                .today-special__title{
                    font-size: 1.4em;
                }
                .today-special__price{
                    font-size: 1.8em;
                }
                .main-footer{
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            }
            @media screen and (min-width:1600px){
                .container{
                    width: 1600px;
                }
                .main__about__description .column:nth-child(1) img{
                    width: 100%;
                    height: 350px;
                    object-fit: cover;
                }
                .today__special__img{
                    height: 300px;
                }
            }
        </style>

    </head>
    <body class= "fondo">
        <!--Navegacion
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary navegacion">
            <a href="#" class="navbar-brand text-white navegacion_titulo">Service Home Store</a>
            <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto ">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item active ">
                            <a href="{{ url('/home') }}" class="nav-link navegacion_letra">Inicio</a>
                        </li>
                    @else
                        <li class="nav-item active ">
                            <a href="{{ route('login') }}" class="nav-link navegacion_letra">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item active ">
                            <a href="{{ route('register') }}" class="nav-link navegacion_letra">Registro</a>
                        </li>
                        @endif
                    @endauth
                @endif
                </ul>
            </div>
        </nav>-->
        <header class="main-header">
            <div class="container container--flex">
                <div class="logo-container column column--50">
                    <h1 class="logo">Service Store Home</h1>
                </div>
                <div class="main-header__contactInfo column column--50">
                    <p class="main-header__contactInfo__phone">
                        <!--Icono de Telefono-->
                        <i class="fas fa-phone-alt">666-666-666</i>
                    </p>
                    <p class="main-header__contactInfo__address">
                        <!--Icono de GPS-->
                        <i class="fas fa-map-marker-alt">Cercado de Lima 15081-Lima, Peru</i>
                    </p>
                </div>
            </div>
        </header>
        <nav class="main-nav">
            <div class="container container--flex">
                <!--Icono de Menu-->
                <span class="icon-menu" id="btnmenu"><i class="fas fa-bars"></i></span>
                <ul class="menu" id="menu">
                    @if (Route::has('login'))
                        @auth
                        <li class="menu__item"><a href="{{ url('/home') }}" class="menu__link menu__link--select">Inicio</a></li>
                        @else
                            <li class="menu__item"><a href="{{ url('/login') }}" class="menu__link">Login</a></li>
                            @if (Route::has('register'))
                                <li class="menu__item"><a href="{{ url('/register') }}" class="menu__link">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
                <div class="social-icon">
                    <!--Icono de Facebook-->
                    <a href="" class="social-icon__link"><i class="fab fa-facebook-f"></i></a>
                    <!--Icono de Twiter-->
                    <a href="" class="social-icon__link"><i class="fab fa-twitter"></i></a>
                    <!--Icono de Mail-->
                    <a href="" class="social-icon__link"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </nav>
        <section class="banner">
            <img src="https://images.pexels.com/photos/257736/pexels-photo-257736.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="banner__img" alt="Responsive image">
            <div class="banner__content">Service Store</div>
        </section>    
        <script>
            let btnMenu = document.getElementById('btnmenu');
            let Menu = document.getElementById('menu');
            btnMenu.addEventListener('click',function(){
                'use strict';
                menu.classList.toggle('mostrar');
            });
        </script>   
    </body>
</html>