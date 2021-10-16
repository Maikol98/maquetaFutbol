@extends('layout')
@section('header')
    <div class="row">
        <div class="col-lg-6">
            <div class="home">
                <h1>Prueba Ahora Un nuevo estilo</h1>
                <p>El Código fair play de la FIFA abraza todos los principios deportivos, morales y éticos que defiende 
                    la FIFA, y por los cuales continuará 
                    luchando en el futuro, independientemente de las influencias y presiones que pueda afrontar.
                </p>
                <a href="" class="boton" style="text-decoration:none">Explorar Ahora &#8594;</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="imagenHome" src="{{ asset('asset/img/image1.png') }}" alt="">
        </div>
    </div>
@endsection
@section('content')
    <br>
    <h4 class="titulo"><b>Productos Destacados</b></h4>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img  class="imagenProducto" src="{{ asset('asset/img/product-1.jpg') }}">
                <h4>Camiseta Roja</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150.00 Bs</p> 
            </div>
            <div class="col-lg-3">
                <img class="imagenProducto" src="{{ asset('asset/img/product-2.jpg') }}">
                <h4>Zapatillas Negras</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>300.00 Bs</p>
            </div><div class="col-lg-3">
                <img class="imagenProducto" src="{{ asset('asset/img/product-3.jpg') }}">
                <h4>Pantallo Gucci</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150.00 Bs</p>
            </div><div class="col-lg-3">
                <img class="imagenProducto" src="{{ asset('asset/img/product-4.jpg') }}">
                <h4>Camiseta Puma Azul Marino</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>200.00 Bs</p>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection