@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nueva especialidad</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('especialidades') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-chevron-left"></i>
                        Regresar</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($errors->any())
                @foreach($error->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <strong>Por favor!</strong> {{$error}}
                    <i class = "fas fa-exclamation-triangle"></i>
                </div>
                @endforeach
            @endif
            <form action="{{url('/especialidades')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nanme">Nombre de la especialidad</label>
                    <input type="text" name="nanme" class="form-control" value="{{old('nanme')}}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection