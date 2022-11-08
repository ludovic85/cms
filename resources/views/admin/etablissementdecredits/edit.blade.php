@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Modification de l'établisssement de crédit</h1>

    <form action="{{ url('admin/etablissementdecredits/update/'.$etablissementdecredits->id) }}"  method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Modifier l'établissement</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.etablissementdecredits.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tout afficher</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Raison sociale *</label>
                            <input type="text" name="raison_sociale" class="form-control" value="{{ $etablissementdecredits->raison_sociale }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ $etablissementdecredits->slug }}">
                        </div>
                        <div class="form-group">
                            <label for="">Type d'établissement</label>
                            <select name="typeEts" class="form-control">
                                <option @if($etablissementdecredits->typeEts == 0) selected @endif value="0">Banque</option>
                                <option @if($etablissementdecredits->typeEts == 1) selected @endif value="1">Microfinance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control"  name="telephone" value="{{ $etablissementdecredits->telephone }}">
                        </div>
                        <div class="form-group">
                            <label for="">Logo *</label>
                            <div>
                                <input type="file" name="logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <img src="{{ asset('public/banques/'.$etablissementdecredits->logo) }}" alt="Logo" class="w_300">
                            </div>
                        </div>
                        <div>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="seo_title" class="form-control" value="{{ $etablissementdecredits->seo_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea name="seo_description" class="form-control h_100" cols="30" rows="10">{{ $etablissementdecredits->seo_description }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Email *</label>
                            <input type="text" class="form-control"  name="email" value="{{ $etablissementdecredits->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pays</label>
                            <select  class="form-control" name="pays" >

                                <option @if($etablissementdecredits->pays == 2) selected @endif value="2">Congo</option>
                                <option @if($etablissementdecredits->pays == 3) selected @endif value="3">Gabon</option>
                                <option @if($etablissementdecredits->pays == 4) selected @endif value="4">Guinée équatoriale</option>
                                <option @if($etablissementdecredits->pays == 5) selected @endif value="5">RCA</option>
                                <option @if($etablissementdecredits->pays == 6) selected @endif value="6">Tchad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" class="form-control" value= "{{$etablissementdecredits->adresse }}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="10">{{$etablissementdecredits->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Statut</label>
                            <select name="statut"  class="form-control">
                                <option @if($etablissementdecredits->statut == 0) selected @endif value="0">Actif</option>
                                <option @if($etablissementdecredits->statut == 1) selected @endif value="1">Inactif</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-lg">Valider</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

@endsection
