<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service Home Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Link de Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- Iconos -->    
        <script src="https://kit.fontawesome.com/b91f129f33.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html{
                box-sizing: border-box;
                font-size: 62.5%; /*Reser para Rems - 62.5 = 10pxde 16 px ++*/
            }
            *, *::before, *:after{
                box-sizing: inherit;
            }
            .fondo{
                background-color: #1abc9c;/* Color primary */
            }
            .navegacion{
                background-color: #343a40; /* Color dark */
            }
            .navegacion_titulo{
                font-size: 3rem;
                margin-bottom: 1rem;
            }
            .navegacion_letra{
                font-size: 2rem;
            }
            .imagen{
                margin-top: 5rem;
                text-align: center;
            }
            h1 {
                color: White;
                text-transform: uppercase;
                text-align: center;
                text-decoration: overline;
            }
            p {
                color: White;
                text-transform: capitalize;
                text-align: center;
                font-size: 3rem;
            }
            p a{
                color: White;
                text-transform: capitalize;
                text-align: center;
                font-size: 3rem;
            }
            .iconos{
                color: White;
                font-size: 2.5rem;
                text-align: center;
            }
            .tabla{
                margin-top: 10rem; /* Aqui para ponerlo mas abajo la tabla*/
                padding-top: 1rem;
                padding-bottom: 2rem;
                text-align: center;
                font-size: 3rem;
                background-color: #343a40; /* Color dark */
                color: white;
            }
            .titulo_tabla{
                font-size: 4rem;
            }
            .animate__animated.animate__bounce {
                --animate-duration: 5s;
                --animate-delay: 5s;
            }     
            .animate__animated.animate__bounce {
                --animate-duration: 5s;
                --animate-delay: 5s;
            }     
            
            </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    </head>
    <body class= "fondo">
        <!--Navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navegacion">
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
        </nav>
        <div class="container-fluid">
            <!--Imagen-->
            <div class="row justify-content-center ">
                <div class="col imagen animate__animated animate__pulse">
                    <img src="https://www.interempresas.net/FotosArtProductos/P138118.jpg" alt="Responsive image" >
                </div> 
            </div>
            <!-- Fondo-->
            <div class="row justify-content-center">
                <div class="col"> 
                    <h1 class="display-3 animate__animated animate__bounce">
                            SERVICE HOME STORE
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col iconos"> 
                   <!-- <i class="fas fa-screwdriver"> - </i>-->
                    <i class="fas fa-hard-hat"> - </i>
                    <i class="fas fa-brush"> - </i>
                    <i class="fas fa-faucet"> - </i>
                    <i class="fas fa-paint-roller"> - </i>
                    <i class="fas fa-handshake"> - </i>
                    <i class="fas fa-user-shield"> - </i>
                    <i class="fas fa-laptop-medical"> - </i>
                    <i class="fas fa-hammer"> - </i>
                   <!--   <i class="fas fa-wrench"> - </i>-->
                    <i class="fas fa-tools"></i>
                </div>
            </div>
        </div>
    </body>
</html>
