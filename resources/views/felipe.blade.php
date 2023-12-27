@extends('layouts.general')
@section('content')
<div class="recuerdo">
    <div class="card">
        <div class="card-body">
            <h3 id="primerTexto">Felipe...</h3>
            <h3 id="segundoTexto" class="oculto">
                Ay hermano, hay tanto que me gustaría decirte, y creo que empezaré con que eres una inspiración tremenda
                para mi, no hay ninguna duda en que eres una de las personas más inteligentes y sabias que conozco,
                admiro tu forma de tener exito en lo que estudiaste y amas, a pesar de lo que te costó. Se que por bastantes años,
                sobre todo cuando yo era niño, no teníamos la mejor relación, yo era muy pequeño para tener conversaciones como las que
                tenemos hoy en día, y seguramente tu te sentías como responsable mío al ser más grande, pero me alegró enormemente
                cuando comencé a sentir que ya eramos iguales, sigues siendo mi hermano mayor, pero ahora podemos tener conversaciones y
                pasar el rato de buena manera. Lamento si cuando era niño te molestaba que estuviera contigo y tus amigos en sus juntitas, pero todo
                lo que quería era poder pasar el rato contigo y jugar cosa, ya que como sabes, creo que somos igual de ratas jajaja. Por ultimo, eres
                verdaderamente una inspiración para mi, evidentemente no nos desenvolveremos en el mismo campo, pero espero llegar a tener la sabiduría,
                inteligencia y humildad que tu tienes, además de tener la capacidad de ayudar al resto, como tu eres capaz, te amo con todo mi corazón.
            </h3>
            <h3 id="tercerTexto" class="oculto">Ahora, quiero que recordemos algunos momentos juntos</h3>
            <div id="imagenes" class="oculto">
                <img src="{{asset('img/vale-felipoe.png')}}" alt="">
                <div>
                    <h3>No encontré muchos momentos pero este es sin duda uno muy iconico</h3>
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