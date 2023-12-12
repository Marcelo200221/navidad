@extends('layouts.general')
@section('content')
<section class="py-5 text-center container" id="container">
    <div class="card mx-auto my-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">FELIZ NAVIDAD</h5>
            <p class="card-text">Aquí puedes ver tu regalo de navidad, para verlo</p>
            <a href="{{route('seleccion')}}" class="btn btn-danger">Haz click aquí</a>
        </div>
    </div>
</section>
@endsection
    