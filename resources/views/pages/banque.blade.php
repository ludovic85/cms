@extends('layouts.app')

@section('content')
   <div class="page-banner" style="background-image: url({{ asset('public/uploads/banner_customer.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
{{--            <h1>{{ $banque->name }}</h1>--}}
            <h1>Banques Adhérentes</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
{{--                    <li class="breadcrumb-item active" aria-current="page">{{ $banque->name }}</li>--}}
                    <li class="breadcrumb-item active" aria-current="page">Banques Adhérentes</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- {!! $banque->detail !!}
                    <p>test</p> -->
                    <div class="table-responsive" style="background-image:url('public/uploads/arriere.jpg');">
                    <h1 style="text-align:center;"><b>LISTES DES BANQUES</b></h1>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Logo</th>
                        <th>Raison sociale</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($etablissementdecredits as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align:center;">
                                <div>
                                <img src="{{ asset('public/banques/'.$row->logo) }}" alt="" style="width:100px; height:50px;">
                                </div>
                            </td>
                            <td style="text-align: center">{{ $row->raison_sociale }}</td>
                            <td style="text-align:center;">
                              <span style="background-color:#009900; border-color:#009900;" class="btn btn-primary" href="#actif" data-parent="#accordion" data-toggle="collapse">Adhérent</span>
                              <span style="background-color:#00183A; border-color:#00183A;" class="btn btn-danger" href="#details" data-parent="#accordion" data-toggle="collapse">Détails</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection

