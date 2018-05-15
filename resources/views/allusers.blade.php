@extends('layout.app')

@section('content')
<!-- Start Contact Area -->
<section id="contact" class="section-full gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="product-area-title text-center">

                    <h2 class="h1">Usuarios</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-30">


                <table style="width:100%">
                    @foreach($alluser as $users)
                    <tr>
                        <th>{{$users->name}}</th>
                        <th>{{$users->email}}</th> 
                        <th>{{$users->identity}}</th>
                        <th> <a href="{{url('usuario', $users->id)}}"> CHANCE</a> </th>
                   
                    </tr>

                 
                    @endforeach

                </table>    

            </div>

        </div>
    </div>
</section>
<!-- End Contact Area -->
@stop