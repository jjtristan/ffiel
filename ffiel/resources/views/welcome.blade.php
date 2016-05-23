@extends('layouts.app')

@section('nav')
    <div class="row" style="background: #FFFFFF">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <center>
                <img alt="FFIEL" src="{{ asset(env('FFIELFULL')) }}" class="img-responsive">
            </center>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
    {{-- <nav class="navbar navbar-default" style="margin-bottom: 0px; padding-bottom: 0px; background: #FFFFFF">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="margin-top: 0px; padding-top: 0px;">
                    <img alt="FFIEL" src="{{ asset(env('FFIEL')) }}" style="height: 50px;">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#"><strong>Inicio</strong> <span class="sr-only">(current)</span></a></li>
                    <li><a href="#"><strong>Convocatoria</strong></a></li>
                    <li><a href="#"><strong>Galería</strong></a></li>
                    <li><a href="#"><strong>Contacto</strong></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    --}}
@endsection

@section('gallery')
    @include('layouts.index.main')
@endsection

@section('content')
    @include('layouts.index.expositores')
@endsection
