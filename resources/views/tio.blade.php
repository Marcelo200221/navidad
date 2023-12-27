@extends('layouts.general')
@section('content')
<div class="recuerdo">
    <div class="card">
        <div class="card-body">
            <h3 id="primerTexto">Tio Leo...</h3>
            <h3 id="segundoTexto" class="oculto">
                No me alcanzan las palabras para expresarle lo agradecido que estoy con usted y de que esté en mi vida, 
                ya que me ha educado y aceptado casi literalmente como un hijo más. Ambos sabemos que yo tengo mi papá,
                y que siempre ha estado presente, pero usted es mi segundo papá definitivamente, y lo amo como tal. Gracias por
                todo lo que me ha enseñado, por todo lo que me ha dado y todas las veces que me ha defendido o ayudado cuando
                yo ya no podía más, es una persona que admiro muchisimo, y espero realmente que nunca cambie y que me quede tío leo para rato.
                Lo amo mucho y le deseo una muy feliz navidad .
            </h3>
            <h3 id="tercerTexto" class="oculto">Ahora, quiero que recordemos algunos momentos juntos</h3>
            <div id="imagenes" class="oculto">
                <img src="{{asset('img/mami-tio.png')}}" alt="">
                <div>
                    <h3>Para el proximo año sacaré mas fotitos de los dos, de momento le dejo esta bonita foto de usted con su linda esposa</h3>
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