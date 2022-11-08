@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/fonds-garantie.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $presentation->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $presentation->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
        <!-- <h2 style="text-align:center; color:#00183A; "><b> PRESENTATION GENERALE DU FONDS</b></h2> </br> -->
            <div class="row">
                <div class="col-md-4  fadeIn  shadow p-4 mb-4 bg-white" style="animation:fadeIn 5s;">
                <img src="{{ asset('public/uploads/fogadacSiege.png') }}" alt="" style="">
                </div>
                <div class="col-md-8 shadow p-4 mb-4 bg-white feature-item wow fadeInRight " style="background-image:url('public/uploads/arriere.jpg');animation:fadeInRight 3s;">
                    <h5 style="text-align:center; color:#00183A;">C’est Quoi Le FOGADAC ?</h5>
                   <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;"> Les mécanismes d’assurance des dépôts revêtent un intérêt particulier dans le secteur bancaire et/ou financier.
                    En effet, le maintien de la confiance dans le système bancaire, élément de sa solidité, et donc de sa stabilité, est tributaire de l’aptitude du régulateur
                     à prendre efficacement en charge la problématique de la protection des dépôts, en cas de défaillance d’un établissement de crédit.
                     Dans la CEMAC, l’inexistence d’un tel mécanisme de protection explicite des épargnants était la faiblesse résiduelle du cadre réglementaire en matière
                      de supervision des établissements de crédit. Afin de la corriger et de renforcer le dispositif prudentiel en vigueur, la Commission Bancaire de l’Afrique Centrale (COBAC) a entrepris
                    un chantier de mise en œuvre d’un fonds de garantie des dépôts dans la Communauté.  C’est dans cette optique que le Fonds de Garantie des Dépôts en Afrique Centrale (FOGADAC), ci-dessous dénommé « <b>le Fonds</b> » a ainsi été créé par règlement CEMAC
                    .<b>n° 01/09/CEMAC/UMAC/COBAC du 20 avril 2009. </b>Le démarrage effectif de ses activités a été amorcé suite à la réunion inaugurale de son organe délibérant,
                        tenue à Yaoundé le 21 février 2011. La présentation générale du FOGADAC s’organise autour de son cadre général juridique et organisationnel ainsi que de son fonctionnement.
                </div>

                    </p>

                <div class="col-md-12 feature-item wow fadeInUp shadow p-4 mb-4 bg-white" style="background-image:url('public/uploads/arriere.jpg');animation:fadeInUp 4s;">
                <h6 style="color:#00183A; text-decoration:underline;text-align:center">Le statut juridique du Fonds</h6>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">
                        Afin d’accomplir de manière optimale ses missions et, en particulier, de gérer de manière efficace et efficiente les éléments de son patrimoine,
                        le Fonds s’est vu doté de la personnalité juridique. Au regard de l’octroi d’une personnalité morale, de la mission d’intérêt général qui est la
                        sienne en matière de protection des avoirs monétaires des épargnants et, enfin, de sa vocation régionale, les caractéristiques du Fonds lui confèrent
                        le statut d’établissement public à vocation sous-régionale.
                        Les règles de fonctionnement de cette catégorie d’établissement sont prévues dans les principes généraux de droit, ainsi que dans les textes CEMAC et COBAC
                        qui, sur le plan de leur positionnement, sont hiérarchiquement supérieurs aux normes de droit interne des Etats concernés.
                        Le siège du FOGADAC est établi au sein du Secrétariat Général de la COBAC.</p>

                </div>
            </div>
            </div>

            </div>

        </div>
    </div>
@endsection
