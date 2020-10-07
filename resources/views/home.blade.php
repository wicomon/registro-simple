@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3">Se registraron sus datos con exito!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p class="h4">Te agradecemos por registrarte al simulacro virtual del examen de admisión que se realizará el día domingo 11 de octubre.</p>

                    <p class="h4">El viernes 09 de octubre se publicará en nuestra <a href="https://www.unfv.edu.pe/ceprevi/">página oficial de ceprevi</a> los turnos que usted rendirá su examen.</p>
                    <div class="container text-center mt-5">
                        <img src="/images/ok.png" class="img-fluid" width="200px" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
