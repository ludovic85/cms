@extends('layouts.app')


@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/archives1.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $base_doc->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $base_doc->name }}</li>
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
                       <a href="{{ asset('public/uploads/Décision_N°01-11-FGD-CD_RI_FOGADAC.pdf')}}" target="_bank"> <img src="{{ asset('public/uploads/loi.png') }}" alt="" style="width:150px;"></a>
                    </div>
                    <h6 style="text-align:center; font-size:small;"><b>Décision N°01-11-FGD-CD portant Règlement intérieur du FOGADAC</b></h6>
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-item wow fadeInUp">
                    <div class="icon">
                       <a href="{{ asset('public/uploads/FOGADAC_COMMUNIQUE.pdf') }}" target="_bank"> <img src="{{ asset('public/uploads/loi.png') }}" alt="" style="width:150px;"></a>
                    </div>
                    <h6 style="text-align:center; font-size:small;"><b> FOGADAC communiqué de presse</b></h6>
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-item wow fadeInUp">
                    <div class="icon">
                       <a href="{{ asset('public/uploads/Règlement_COBAC_R-2009-03_FOGADAC.pdf') }}" target="_bank"> <img src="{{ asset('public/uploads/loi.png') }}" alt="" style="width:150px;"></a>
                    </div>
                    <h6 style="text-align:center; font-size:small;"> <b>Règlement COBAC R-2009-03 relatif à l'organisation et au fonctionnement du FOGADAC </b></h6>
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-item wow fadeInUp">
                    <div class="icon">
                       <a href="{{ asset('public/uploads/Règlement_N°01-09-CEMAC-UMAC-COBAC_FOGADAC.pdf') }}" target="_bank"> <img src="{{ asset('public/uploads/loi.png') }}" alt="" style="width:150px;"></a>
                    </div>
                    <h6 style="text-align:center;font-size:small;"> <b>Règlement N°01-09-CEMAC-UMAC-COBAC portant création du FOGADAC</b></h6>
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
