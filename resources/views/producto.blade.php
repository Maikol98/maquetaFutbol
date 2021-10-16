@extends('layout')
@section('header')
    <div class="row">
        <div class="col-lg-4">
            <img class="imagenOferta" src="{{ asset('asset/img/exclusive.png') }}" alt="">
        </div>
        <div class="col-lg-8" style="padding-top:5%; padding-right: 5%">
            <p>Excusivamente habilitado en Fair Play</p>
            <h1>Smart Band 4</h1>
            <small>La pantalla a color llega a la Xiaomi Band. Año tras año el fabricante chino ha ido renovando su 'wearable' 
                más popular, pero han necesitado cuatro generaciones para incorporar una pantalla AMOLED a color manteniendo al mismo 
                tiempo su ajustado precio. Hemos estado probando la nueva 
                pulsera cuantificadora durante las últimas semanas y aquí os traemos nuestro análisis de la Xiaomi Mi Band 4.
            </small>
            <br>
            <a href="" class="boton" style="text-decoration:none">Compra Ahora &#8594</a>
        </div>
    </div>
@endsection
@section('content')
<h4 class="titulo"><b>Productos De La Tienda</b></h4>
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
        <div class="col-lg-3">
            <img  class="imagenProducto" src="{{ asset('asset/img/product-5.jpg') }}">
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
            <img class="imagenProducto" src="{{ asset('asset/img/product-6.jpg') }}">
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
            <img class="imagenProducto" src="{{ asset('asset/img/product-7.jpg') }}">
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
            <img class="imagenProducto" src="{{ asset('asset/img/product-8.jpg') }}">
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
        <div class="col-lg-3">
            <img  class="imagenProducto" src="{{ asset('asset/img/product-9.jpg') }}">
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
            <img class="imagenProducto" src="{{ asset('asset/img/product-10.jpg') }}">
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
            <img class="imagenProducto" src="{{ asset('asset/img/product-11.jpg') }}">
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