@extends('layout.app')

@section('content')
        <!-- Start Banner Area -->
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner-content text-center">
                            <p class="text-uppercase text-white">Sistemas distribuidos</p>
                            <h1 class="text-uppercase text-white">Chance Gacela</h1>
                            <form  method="POST" action="{{route('consulta_paht')}}">
                                 {{ csrf_field() }}
                                <input type="number" name="identity" class="text-center">
                                <input class="primary-btn banner-btn" type="submit" value="Buscar" required>
                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
     
        <!-- Start Digital Studio -->
        <section class="section-full studio-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="studio-content">
                            <p class="text-uppercase text-white">Conexion RPC</p>
                            <h2 class="h1 text-white text-uppercase mb-20">de un sistema distribuido para <br> CHANCE GACELA</h2>
                            <p class="text-white mb-30">Con una conexion a un punto, se simula esta vista como una sede en cualquier punto territorial que se conecta a una base de datos instala en BOGOTA, y a la ves a una replica instalada en cualquier otro punto</p>
                            <a href="#" class="primary-btn text-white d-inline-flex align-items-center">Empezar<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Digital Studio -->
@stop