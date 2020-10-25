@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1 text-center">Inscripciones Finalizadas !!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p class="h2">El proceso de inscripción ha finalizado muchas gracias por tu interés en participar.</p>

                    <div class="container text-center mt-5">
                        <img src="/images/ok.png" class="img-fluid" width="200px" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
