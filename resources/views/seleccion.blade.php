@extends('layouts.general')
@section('content')
<section class="py-5 text-center container" id="container">
    <div class="card mx-auto my-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Primero dime, ¿Quien eres?</h5>
            <div class="opciones">
                <a href="{{route('vale')}}" class="btn btn-danger">Vale</a>
                <a href="{{route('felipe')}}" class="btn btn-danger">Felipe</a>
                <a href="{{route('mami')}}" class="btn btn-danger">Mami</a>
                <a href="{{route('tio')}}" class="btn btn-danger">Tio</a>
            </div>
        </div>
    </div>
</section>
@endsection