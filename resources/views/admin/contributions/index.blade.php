@extends('admin.admin_layouts')
@section('admin_content')

    <h1 class="h3 mb-3 text-gray-800"> Contributions</h1>
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

    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active m-0 mt-2 font-weight-bold text-primary" data-toggle="tab" href="#home">Contributions</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link m-0 mt-2 font-weight-bold text-primary" data-toggle="tab" href="#menu1">Utilisateur</a>--}}
{{--                </li>--}}
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Numéro</label>
                            <input type="text" name="numero" class="form-control" value="">
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Description</label>
                            <input type="text" name="descpt" class="form-control" value="">
                        </div>

                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Banque</label>
                            <select  name="banque" id="banque" class="form-control">
                                <option>Sélectionner</option>
                                <option>banque 2</option>
                                <option>banque 3</option>
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Catégorie</label>
                            <select  name="categorie" id="categorie" class="form-control">
                                <option>Sélectionner</option>
                                <option>catégorie 2</option>
                                <option>catégorie 3</option>
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Période 1</label>
                            <input type="date" name="periode1" class="form-control" value="">
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <label for="">Période 2</label>
                            <input type="date" name="periode2" class="form-control" value="">
                        </div>

                    </div>
                </div>
{{--                        <div id="menu1" class="container tab-pane fade">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6" style="margin-top: 20px;">--}}
{{--                                    <label for="">Nom</label>--}}
{{--                                    <input type="text" name="nom" class="form-control" value="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6" style="margin-top: 20px;">--}}
{{--                                    <label for="">Mot de passe</label>--}}
{{--                                    <input type="password" name="motdepasse" class="form-control" value="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6" style="margin-top: 20px;">--}}
{{--                                    <label for="">Téléphone</label>--}}
{{--                                    <input type="tel" name="telephone" id="telephone" class="form-control" value="">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
            </div>
            </div>
        </div>
    </div>
@endsection
