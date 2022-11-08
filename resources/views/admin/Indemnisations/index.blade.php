@extends('admin.admin_layouts')
@section('admin_content')

    <h1 class="h3 mb-3 text-gray-800"> Panel Indemnisation</h1>
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

    </style>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Vue Indemnisations</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.indemnisations.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Créer Indemnisation </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Statut</th>
                        <th>Liquidateur</th>
                        <th>Banque en faillite</th>
                        <th>Description</th>
                        <th>Date faillite</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th colspan="2" style="text-align:center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($indemnisations as $row)
                        <tr>
                            <td><a href="{{ URL::to('admin/indemnisations/edit/'.$row->id) }}">{{ $row->numero }}</a></td>
                            <td>
                                @if($row->statut_ind == 1)
                                    <span class="label label-warning">En attente</span>
                                @elseif($row->statut_ind == 2)
                                    <span class="label label-success">En cours</span>
                                @elseif($row->statut_ind == 3)
                                    <span class="label label-danger">Bloqué</span>
                                @elseif($row->statut_ind == 4)
                                    <span class="label label-danger">Traité</span>
                                @elseif($row->statut_ind == 5)
                                    <span class="label label-danger">Terminé</span>
                                @else
                                    <span class="label label-danger">Clôturé</span>
                                @endif
                            </td>
                            <td>{{ $row->raison_sociale_liquidateur }}</td>
                            <td>{{ $row->raison_sociale_faillite}}</td>
                            <td>{{ $row->descpt }}</td>
                            <td>{{ $row->periode0 }}</td>
                            <td>{{ $row->periode1 }}</td>
                            <td>{{ $row->periode2 }}</td>
                            <td>
                                <a href="{{ URL::to('admin/indemnisations/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ URL::to('admin/indemnisations/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
