@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Création indemnisation</h1>

    <form action="{{ route('admin.indemnisations.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Ajouter indemnisation</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.indemnisations.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tout afficher</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="m-0 mt-2 font-weight-bold text-info">Informations de base</h6>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Numero *</label>
                            <input type="text" name="numero" class="form-control" value="{{ old('numero') }}" autofocus>
                        </div>
                    </div>
                        <div class="col-md-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Statut  *</label>
                                <select  class="form-control" name="statut"  value="{{ old('statut') }}">
                                    <option value="0">Sélectionner</option>
                                    <option value="1">En attente</option>
                                    <option value="2">En cours</option>
                                    <option value="3">Bloqué</option>
                                    <option value="4">Traité</option>
                                    <option value="5">Terminé</option>
                                    <option value="6">Clôturé</option>
                                </select>
                            </div>
                    </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="descpt" class="form-control h_100" cols="30" rows="10">{{ old('descpt') }}</textarea>
                                </div>
                        </div>

                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Banque en faillite *</label>
                            <select name="id_bq" class="form-control" value="{{ old('id_bq') }}">
                                <option> Sélectionner</option>
                                @foreach($banques as $value)
                                    <option value="{{$value->id}}">{{$value->raison_sociale}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Liquidateur </label>
                            <select name="id_liquidateur" class="form-control" value="{{ old('id_liquidateur') }}">
                                <option> Sélectionner</option>
                                @foreach($banques as $value)
                                    <option value="{{$value->id}}">{{$value->raison_sociale}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="m-0 mt-2 font-weight-bold text-info">Périodicité</h6>
                            <hr>
                        </div>
                        <div class="col-md-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Date de la faillite*</label>
                                <input type="date" class="form-control"  name="periode0" {{ old('periode0') }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Date de début*</label>
                                <input type="date" class="form-control"  name="periode1" {{ old('periode1') }}">
                            </div>
                      </div>
                        <div class="col-md-6 col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Date de  fin*</label>
                                <input type="date" class="form-control"  name="periode2" {{ old('periode2') }}">
                            </div>
                        </div>
                            <div class="col-md-12" style="text-align: right;">
                                <button type="submit" class="btn btn-success btn-lg">Valider</button>
                                <button type="reset" class="btn btn-dark btn-lg">Cancel</button>
                            </div>
                    </div>
             </div>
        </div>
    </form>

@endsection
