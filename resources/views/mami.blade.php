@extends('layouts.general')
@section('content')
<div class="recuerdo">
    <div class="card">
        <div class="card-body">
            <h3 id="primerTexto">Mami...</h3>
            <h3 id="segundoTexto" class="oculto">Usted ha sido uno de los pilares fundamentales en mi vida, me ha educado, criado, y enseñado mucho de lo que hoy conforman quien soy. Gracias a usted he podido crecer y llegar hasta donde estoy, y seguramente llegaré mucho más lejos.
                Espero hasta el momento haber sido un buen hijo, y por supuesto seguiré mejorando para darle el cariño y el aprecio que usted se merece,
                se que muchas veces que me pide algo le respondo con cara de culo, o con poco entusiasmo, pero eso no significa que no vaya a hacer las cosas, cualquier cosa que usted me pida hacer, tenga por seguro
                que siempre y cuando dentro de las cosas que soy capaz de hacer, haré todo lo posible para concretarlo o al menos lo intentaré.
                La amo con todo mi corazón y espero tener a mi mami por mucho tiempo más, y claro, poder estar ahí para usted cuando lo necesite.
            </h3>
            <h3 id="tercerTexto" class="oculto">Ahora, quiero que recordemos algunos momentos juntos y junto a nuestra familia.</h3>
            <div id="imagenes" class="oculto">
                <img src="{{asset('img/mami.png')}}" alt="">
                <div>
                    <h3>No encontré muchos momentos, pero porque a usted no le gustan las fotos jejeje, ya tendré más para una segunda vez jeje</h3>
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