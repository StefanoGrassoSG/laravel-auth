@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                       Questa è l'home dell'admin
                    </h1>
                    <br>
                    La home dell'admin è una pagina privata (protetta dal middleware)
                </div>
            </div>
        </div>
    </div>
@endsection