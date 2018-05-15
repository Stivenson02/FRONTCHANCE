@extends('layout.app')

@section('content')
<!-- Start Contact Area -->
<section id="contact" class="section-full gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="product-area-title text-center">
                  
                    <h2 class="h1">Chance Gacela</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-30">
                <p>Ingresar numero de juego y total a pagar </p>
          
            </div>
            <div class="col-lg-6 mt-30">
                <form  action="{{route('nuevo_chance_paht')}}" method="POST" class="contact-form">
                    {{ csrf_field() }}
                    <div class="single-input color-2 mb-10">
                        <input type="number" name="juego" placeholder="Numero de Juego" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero de juego'" required>
                    </div>
                     <div class="single-input color-2 mb-10">
                         <input type="number" name="apuesta" placeholder="Numero de Juego" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero de juego'" required>
                    </div>
                    <div class="single-input color-2 mb-10">
                        <input type="hidden" name="id_user"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cedula'" required value="{{$people}}">
                    </div>

                    <div class="d-flex justify-content-end"><button class="mt-10 primary-btn d-inline-flex text-uppercase align-items-center">Registrar Chance<span class="lnr lnr-arrow-right"></span></button></div>
                    <div class="alert"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@stop