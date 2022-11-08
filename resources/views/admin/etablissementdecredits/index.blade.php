@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Etablissements de Crédits</h1>
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
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Vue Etablissement de crédits</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.etablissementdecredits.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Logo</th>
                        <th>Raison sociale</th>
                        <th>Description</th>
                        <th>telephone</th>
                        <th>Email</th>
                        <th>Statut</th>
                        <th colspan="2" style="text-align:center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($etablissementdecredits as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/banques/'.$row->logo) }}" alt="" class="w_200"></td>
                            <td>
                                <a href="{{ URL::to('admin/etablissementdecredits/edit/'.$row->id) }}">
                                    {{ $row->raison_sociale }}
                                </a>
                            </td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->telephone}}</td>
                            <td>{{ $row->email }}</td>
                            <td><label class="switch">
                            <input type="checkbox" @if($row->statut == 0) checked @endif>
                            <span class="slider round"></span>
                            </label></td>
                            <td>
                                <a href="{{ URL::to('admin/etablissementdecredits/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ URL::to('admin/etablissementdecredits/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Êtes vous sûr?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
