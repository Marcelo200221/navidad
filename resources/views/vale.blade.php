@extends('layouts.general')
@section('content')
<div class="recuerdo">
    <div class="card">
        <div class="card-body">
            <h3 id="primerTexto">Vale...</h3>
            <h3 id="segundoTexto" class="oculto">
                Son muchas las cosas que podría decir, y aún así no me alcanzaría
                para poder expresar el amor y aprecio que te tengo. Se que en su momento quizas no eramos muy cercanos,
                pero no sabes lo que me alegró cuando noté que las cosas entre nosotros comenzaron a cambiar y empecé
                a notar realmente que había una bonita relación de hermanos, y encontrar a una inspiración tan grande como tú.
                Literalmente tu inspiraste la mejor y más importante parte de mi vida, me introdujiste a un mundo increible del
                cual estoy orgulloso de ser parte, y no solo eso, sino que me mostraste lo que es el esfuerzo, la dedicación y como estos
                son el camino al exito, no por nada estas donde estás, tienes el reconocimiento que tienes y además tienes las habilidades
                que tienes. Siempre serás una referencia y modelo a seguir para mi, por favor, nunca cambies, te amo.
            </h3>
            <h3 id="tercerTexto" class="oculto">Ahora, quiero que recordemos algunos momentos juntos</h3>
            <div id="imagenes" class="oculto">
                <img src="{{asset('img/vale.png')}}" alt="">
                <img src="{{asset('img/vale-2.png')}}" alt="">
                <img src="{{asset('img/vale-3.png')}}" alt="">
                <div>
                    <h3>Son muy poquitos, así que habrá que saber sacar más fotitos jeje.</h3>
                    <h1>TE AMO <i class="fa-solid fa-heart"></i></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;" class="boton" id="boton">
        <a type="button" class="btn btn-danger" href="{{route('despedida')}}">Continuar</a>
    </div>
</div>
<div class="pulsar">
    <p>Pulsa la pantalla para continuar</p>
</div>
@endsection