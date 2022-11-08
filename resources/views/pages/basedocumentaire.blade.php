@extends('layouts.app')
@section('content')

    <div class="page-banner" style="background-image: url({{ asset('public/uploads/archives1.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $basedocumentaire->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $basedocumentaire->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="feature-item wow fadeInUp">
                                <div class="icon">
                                    <a href="" target="_bank"> <img src="" alt="" style="width:150px;"></a>
                                </div>
                                <h6 style="text-align:center; font-size:small;"><b></b></h6>
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-item wow fadeInUp">
                                <div class="icon">
                                    <a href="" target="_bank"> <img src="" alt="" style="width:150px;"></a>
                                </div>
                                <h6 style="text-align:center; font-size:small;"><b></b></h6>
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-item wow fadeInUp">
                                <div class="icon">
                                    <a href="" target="_bank"> <img src="" alt="" style="width:150px;"></a>
                                </div>
                                <h6 style="text-align:center; font-size:small;"> <b> </b></h6>
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-item wow fadeInUp">
                                <div class="icon">

                                </div>

                                <p>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>









    </div>
    </div>
@endsection
