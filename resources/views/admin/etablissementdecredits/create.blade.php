@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Ajouter établisssement</h1>

    <form action="{{ route('admin.etablissementdecredits.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Ajouter établissement</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.etablissementdecredits.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tout afficher</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Raison sociale *</label>
                            <input type="text" name="raison_sociale" class="form-control" value="{{ old('raison_sociale') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Type d'établissement</label>
                            <select name="typeEts" value="{{old('typeEts')}}" class="form-control">
                                <option value="0">Banque</option>
                                <option value="1">Microfinance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control"  name="telephone" {{ old('telephone') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Logo *</label>
                            <div>
                                <input type="file" name="logo">
                            </div>
                        </div>
                        <div>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea name="seo_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_description') }}</textarea>
                                </div>

                            </div>
                        </div>



                    </div>
                    <div class="col-md-6 col-xs-12 col-lg-6">
                        <div class="form-group">
                            <label for="">Email *</label>
                            <input type="text" class="form-control"  name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Pays</label>
                            <select  class="form-control" name="pays"  value="{{ old('pays') }}">
                                <option value="1">Cameroun</option>
                                <option value="2">Congo</option>
                                <option value="3">Gabon</option>
                                <option value="4">Guinee equatoriale</option>
                                <option value="5">RCA</option>
                                <option value="6">Tchad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" name="adresse" class="form-control" value= "{{old('adresse') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Statut</label>
                            <select name="statut" value="{{old('statut')}}" class="form-control">
                                <option value="0">Actif</option>
                                <option value="1">Inactif</option>
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
