@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/mission.jpeg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $missions->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $missions->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container mt-3 shadow p-4 mb-4 bg-white" style="background-image:url('public/uploads/arriere.jpg');">
                        <h5 style="text-align:center; color:#00183A; ">  NOS MISSIONS</h5>
                        <p style="font-family: 'Times New Roman'; font-size: 18px;">Le mécanisme d’assurance des dépôts a pour principale mission de renforcer la confiance du public dans le système financier en contribuant à sa stabilité.</p>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Intervention Préventive</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Intervention Curative</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <h5 style="color:#00183A;">L’action préventive du Fonds</h5>
                                <p style="text-align:justify; font-family: 'Times New Roman'; font-size: 18px;">Le FOGADAC peut, sur saisine du Secrétariat Général de la COBAC, apporter son concours pour permettre la réalisation d’un assainissement financier ou d’une reprise totale ou partielle des activités d’un établissement de crédit dont la bonne fin des engagements est compromise.
                                    Cette intervention, dite préventive, s’effectue alors sur les ressources du fonds, dans les limites du montant disponible de celles-ci, sous certaines conditions et après délibération à l’unanimité des membres du CODIR. Ces-derniers peuvent conditionner l’action préventive du Fonds à la présentation, par les actionnaires et dirigeants de l’établissement en cause, d’un plan de restructuration crédible intégrant un échéancier réaliste d’apurement de ses engagements.
                                    A la suite d’une telle intervention, les sommes restituées par l’établissement de crédit en cas de retour à meilleur fortune ou par le liquidateur sont reversées dans la réserve d’intervention du Fonds. Il en est de même pour les sommes remises au Fonds par le liquidateur après l’ouverture d’une procédure collective à l’encontre d’un établissement de crédit dont les dépôts indisponibles ont au préalable été remboursés par le Fonds.
                                    La consécration du rang du privilège des créances du fonds ainsi que du mécanisme subrogatoire vise à prendre en compte cette préoccupation de reconstitution de la réserve d’intervention.</p>
                                </p>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <h5 style="color:#00183A;">L’indemnisation des épargnants en cas d’intervention curative</h5>
                                <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">Le principe est que les dépôts éligibles à l’indemnisation (cités à l’article 5 du Règlement CEMAC N° 01/09/CEMAC/UMAC/COBAC) sont couverts à hauteur de 5 millions de FCFA par ayant droit et par établissement de crédit. Ce plafond de remboursement ne peut être ajusté que dans le cadre d’une procédure d’indemnisation précise, en raison de l’insuffisance des ressources du Fonds pour faire face à toutes les indemnisations, dans les conditions et suivant les modalités prévues par les textes.
                                    Il y a lieu de noter que l’intervention curative du fonds emporte un privilège général sur les biens meubles et immeubles du débiteur, privilège ayant rang des créances fiscales et douanières pour les contributions non acquittées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
