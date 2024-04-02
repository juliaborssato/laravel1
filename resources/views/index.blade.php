@extends('layout')
@section('content')
    <div class ="jumbotron">
        <p class ="h3 text-center py-4 "> Quiz - O quanto você sabe sobre a Taylor Swift. </p >
    </div >
<div class ="row" >
        <div class ="col-md-6 col-sm-6 text-center imagem" >
            <a href ="# " class =" img-thumbnail logo">
                <img class ="img-fluid" src =" {{asset('storage/imagem/capa.jpg')}}"/>
             </a >
        </div>
    <div class ="col-md-6 col-sm-6 text-center py-4 ">
            <p class ="texto">
                <h4 >Este quiz é para saber o quanto voce sabe sobre a cantora <br >
                    <strong> TAYLOR SWIFT! </strong> </h4 >
            </p >
        <div class ="card-footer py-4 text-center">

            <a href =" /iniciar" class ="btn btn-primary" role ="button">
                Começar </a >
           
        </div>
    </div>
</div>
@endsection