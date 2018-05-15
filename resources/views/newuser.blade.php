@extends('layout.app')

@section('content')
<!-- Start Contact Area -->
<section id="contact" class="section-full gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="product-area-title text-center">
                  
                    <h2 class="h1">Registrar Usuario</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-30">
                <p>
                    El usuario no se encuentra registrado en el sistema, chance gacela, ingrese el nombre y el correo para crear un nuevo registro, y poder continuar con el proceso de compra
                </p>
                <div class="row">
                  
                
                </div>
            </div>
            <div class="col-lg-6 mt-30">
                <form  action="{{route('nuevo_usuario_paht')}}" method="POST" class="contact-form">
                    {{ csrf_field() }}
                    <div class="single-input color-2 mb-10">
                        <input type="text" name="fname" placeholder="Nombre Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre Completo'" required>
                    </div>
                    <div class="single-input color-2 mb-10">
                        <input type="email" name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
                    </div>
                    <div class="single-input color-2 mb-10">
                        <input type="text" name="subject" placeholder="Cedula" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cedula'" required value="{{$identity}}">
                    </div>

                    <div class="d-flex justify-content-end"><button class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center">Registrar usuario<span class="lnr lnr-arrow-right"></span></button></div>
                    <div class="alert"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@stop