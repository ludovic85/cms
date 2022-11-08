@extends('admin.admin_layouts')
@section('admin_content')
    @push('styles')

    @endpush
    <h1 class="h3 mb-3 text-gray-800"> Indemnisations</h1>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        /* */

        .dual-list .list-group {
            margin-top: 8px;
        }

        .list-left li, .list-right li {
            cursor: pointer;
        }

        .list-arrows {
            padding-top: 100px;
        }

        .list-arrows button {
            margin-bottom: 20px;
        }
        /* search bar client*/
        .card {
            margin-top: 10px;
        }
        .btn-upload {
            padding: 10px 20px;
            margin-left: 10px;
        }
        .upload-input-group {
            margin-bottom: 10px;
        }

        .input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
            height: 45px;
        }
        /* import file client*/

    </style>

    <form action="{{ url('admin/indemnisations/update/'.$indemnisations->id) }}"  method="post" enctype="multipart/form-data">
        @csrf

    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <div class="float-right d-inline">
                <a href="{{ route('admin.indemnisations.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tout afficher</a>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active m-0 mt-2 font-weight-bold text-primary" data-toggle="tab" href="#home">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-0 mt-2 font-weight-bold text-primary" data-toggle="tab" href="#menu1">Banques Mandataires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-0 mt-2 font-weight-bold text-primary" data-toggle="tab" href="#menu2">Clients</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Numero</label>
                            <input type="text" name="numero" class="form-control" value="{{ $indemnisations->numero }}" autofocus>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Statut</label>
                            <select  class="form-control" name="statut" >
                                <option @if($indemnisations->statut == 1) selected @endif value="1">En attente</option>
                                <option @if($indemnisations->statut == 2) selected @endif value="2">En cours</option>
                                <option @if($indemnisations->statut == 3) selected @endif value="3">Bloqué</option>
                                <option @if($indemnisations->statut == 4) selected @endif value="4">Traité</option>
                                <option @if($indemnisations->statut == 5) selected @endif value="5">Terminé</option>
                                <option @if($indemnisations->statut == 6) selected @endif value="6">Clôturé</option>
                            </select>
                        </div>
                        <br>
                        <div class="col-md-12" style="margin-top: 20px;">
                            <label for="">Description</label>
                            <textarea name="descpt" class="form-control" cols="30" rows="5">{{$indemnisations->descpt }}</textarea>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Mandataire</label>
                            <select name="id" class="form-control">
                                @foreach($etablissementsdecredits as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $indemnisations->id_bq ) selected @endif>{{ $row->raison_sociale }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Liquidateur</label>
                            <select name="id_liquidateur" class="form-control">
                                @foreach($etablissementsdecredits as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $indemnisations->id_liquidateur) selected @endif>{{  $row->raison_sociale }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Date faillite</label>
                            <input type="date" class="form-control" value="{{$indemnisations->periode0}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Date début</label>
                            <input type="date" class="form-control" value="{{$indemnisations->periode1}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Date fin</label>
                            <input type="date" class="form-control" value="{{$indemnisations->periode2}}">
                        </div>


                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="container">
                        <div class="row">
                            <div class="dual-list list-left col-md-5">
                                <div class="well text-right">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <span class="input-group-addon fas fa-search fa-2x"></span>
                                                <input type="text" name="SearchDualList" class="form-control" placeholder="rechercher" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="btn-group">
                                                <a class="btn btn-default selector" title="select all"><i class="fas fa-uncheck"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <span style="margin-left: -10px;">LISTE</span>
                                    <ul class="list-group">
                                        @foreach($etablissementsdecredits as $row)
                                            <li class="list-group-item">
                                                @if($row->statut==0)
                                                    {{ $row->raison_sociale }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="list-arrows col-md-1 text-center">
                                <button class=" btn btn-info btn-sm move-left">
                                    <span class="fas fa-chevron-left"></span>
                                </button>
                                </br>
                                <button class="btn btn-danger btn-sm move-right">
                                    <span class="fas fa-chevron-right"></span>
                                </button>
                                {{--                                <button class="btn btn-default btn-sm move-right" style="font-size:15px"><i class="fa fa-arrow-circle-right"></i></button>--}}
                                {{--                                <button class="btn btn-default btn-sm move-left" style="font-size:15px"><i class="fa fa-arrow-circle-left"></i></button>--}}

                            </div>

                            <div class="dual-list list-right col-md-5">
                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="btn-group">
                                                <a class="btn btn-default selector" title="select all"><i class="fas fa-uncheck"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <input type="text" name="SearchDualList" class="form-control" placeholder="rechercher" />
                                                <span class="input-group-addon fas fa-search fa-2x"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <span style="margin-left: -10px;">SELECTION</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"> </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div id="menu2" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-plus-circle"></i> Nouveau client </button>
                            </div>

                        </div>

{{--                        <div class="col-md-6" style="margin-top: 20px;">--}}
{{--                            <div class="input-group rounded">--}}
{{--                                <input type="search" class="form-control rounded" placeholder="Recherche Client" aria-label="Search" aria-describedby="search-addon" />--}}
{{--                                <span class="input-group-text border-0" id="search-addon">--}}
{{--                                        <i class="fas fa-search"></i>--}}
{{--                                      </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col-12 col-md-12">
                                                    <div class="control-group" id="fields">
                                                        <label class="control-label" for="field1">
                                                            Pièces jointes
                                                        </label>
                                                        <div class="controls">
                                                            <div class="entry input-group upload-input-group">
                                                                <input class="form-control" name="fields[]" type="file">
                                                                <button class="btn btn-upload btn-success btn-add" type="button">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>

                                                        </div>
                                                        <button class="btn btn-primary"><i class="fa fa-file-upload"></i> Importer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom & Prénoms</th>
                                <th>Banques Mandataires</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Pieces jointes</th>
                                <th>Montant</th>
                                <th>Statut</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                @foreach($clients as $row)--}}
                            {{--                    <tr>--}}
                            {{--                        <td>{{ $loop->iteration }}</td>--}}
                            {{--                        <td><img src="{{ asset('public/uploads/'.$row->photo) }}" alt="" class="w_100"></td>--}}
                            {{--                        <td>{{ $row->name }}</td>--}}
                            {{--                        <td>--}}
                            {{--                            <a href="{{ URL::to('admin/why-choose/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>--}}
                            {{--                            <a href="{{ URL::to('admin/why-choose/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>--}}
                            {{--                        </td>--}}
                            {{--                    </tr>--}}
                            {{--                @endforeach--}}
                            </tbody>
                        </table>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>

    @push('scripts')
        <script src="{{ asset('public/backend/js/widget_dual_list/dual_list.js') }}"></script>
        <script src="{{ asset('public/backend/js/widget_upload_files/upload_files.js') }}"></script>

    @endpush
@endsection
