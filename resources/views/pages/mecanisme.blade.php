@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/meca1.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $mecanisme->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $mecanisme->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

         <div class="page-content">
            <div class="container">
                <div class="row">
                <div class="col-md-12 shadow p-4 mb-4 bg-white feature-item wow fadeInLeft" style="background-image:url('public/uploads/arriere.jpg');animation:fadeInLeft 3s;">
                <h5 style="color:#00183A; text-align:center;"><b> QU’EST-CE QU’UN MECANISME D'ASSURANCE DES DEPÔTS ?</b></h5>


                    <p style="font-family: 'Times New Roman'; font-size: 20px;text-align:justify;">
                    Vous êtes-vous déjà demandé ce qui adviendrait de vos dépôts si votre banque faisait faillite ?
                    Dans les six Etats de la Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC), il existe un système d’assurance-dépôts pour protéger votre épargne.
                    </p>

                    <h6 style="text-decoration:underline;text-align:center;"><b>Définition</b></h6>
                        <p style="font-family: 'Times New Roman'; font-size: 20px;text-align:justify;">
                      <b>  L’Association internationale des assureurs-dépôts</b> (IADI) créée le 6 mai 2002, définit l’assurance-dépôts comme étant un système mis en place pour protéger
                        les déposants contre la perte de leurs dépôts assurés dans le cas où une banque est incapable de respecter ses obligations envers les déposants.
                        Pour que ce régime d’assurance-dépôts soit efficace, l’IADI a édicté dix-huit principes fondamentaux à respecter par les juridictions1 qui mettent en place
                        un tel mécanisme.
                        </p>

                        <h6 style="text-decoration:underline;text-align:center;"><b>Types de mécanisme</b></h6>

  <p style="font-family: 'Times New Roman'; font-size: 20px;text-align:justify;">Les mécanismes d’assurance de dépôts sont généralement classés en trois (04) principales catégories : <b>« Paybox », « Paybox Plus », « Loss Minimiser » et « Risk Minimiser »</b> </p>
                    </div>
             <br>
            </div>

                <div class="col-md-12 faq shadow p-4 mb-4 bg-white feature-item wow fadeInRight" style="animation:fadeInRight 4s;">
                    <div class="panel-group " id="accordion1" role="tablist" aria-multiselectable="true">
                        @php $i=1; @endphp
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ 1 }}">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ 1 }}" aria-expanded="false" aria-controls="collapse{{ 1 }}">
                                            PAYBOX ou Garantie simple
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ 1 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 1 }}">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('public/uploads/preventive.jpg') }}" alt="" style="width:300px; height:200px;">
                                            </div>
                                            <div class="col-md-8">
                                                <p style="font-family: 'Times New Roman'; font-size: 18px;text-align:justify;"> Mandat dans lequel l’assureur des dépôts est seulement responsable du remboursement des <b>dépôts garantis</b>.
                                                    De cette façon, si une banque venait à faire faillite, et que ses clients n’étaient pas remboursés, l’assureur des dépôts se charge alors de rembourser
                                                    les clients de la banque dans les délais prévus et jusqu’à un certain montant.
                                                    Dans le monde, un nombre important de juridictions ont opté pour ce type de mandat d’assurance des dépôts.
                                                    Nous avons des exemples tels que l’Allemagne (The Deposit Protection Fund of the Association of German Banks), la Suisse (Esisuisse) ou encore
                                                    la Belgique (Hellenic Deposit and Investment Guarantee Fund).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true" style="margin-top: -30px ">
                        @php $i=2; @endphp
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{ 2 }}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ 2 }}" aria-expanded="false" aria-controls="collapse{{ 2 }}">
                                        PAYBOX PLUS ou Garantie "plus"
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ 2 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 2 }}">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('public/uploads/garantieplus.jfif') }}" alt="" style="width:300px; height:200px;">

                                        </div>
                                        <div class="col-md-8">
                                            <p style="font-family: 'Times New Roman'; font-size: 18px;text-align:justify;"> Mandat dans lequel, en plus du remboursement des dépôts garantis (Paybox), l’assureur des dépôts assume d’autres responsabilités.
                                                Ces responsabilités peuvent s’étendre à un rôle limité dans l’organisation de la résolution des crises bancaires.
                                                Il peut s’agir à titre d’exemple d’un soutien financier ponctuel à une banque en difficulté.
                                                Plusieurs Fonds de garantie ont été créé sur ce modèle. On peut citer entre autres le Fonds de Garantie des Dépôts dans l’Union Monétaire Ouest Africaine (FGD-UMOA) et
                                                le Financial Services Compensation Scheme au Royaume-Uni.
                                                Les mandats Paybox et Paybox plus sont les plus rependu, environ ¾ dans le monde.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true" style="margin-top: -30px ">
                        @php $i=3; @endphp
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{ 3 }}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ 3 }}" aria-expanded="false" aria-controls="collapse{{ 3 }}">
                                        LOSS MINIMISER ou Limitation de perte
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ 3 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 3 }}">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('public/uploads/why-choose-4.jpg') }}" alt="" style="width:250px; height:150px;">
                                        </div>
                                        <div class="col-md-8">
                                            <p style="font-family: 'Times New Roman'; font-size: 18px;text-align:justify;"> Il s’agit d’un mandat dans lequel l’assureur des dépôts s’engage activement dans la sélection d’une gamme de stratégies de résolution à moindre coût.
                                                Il joue un rôle plus actif dans la conduite du processus de résolution avec intervention en amont. Ainsi, il peut intervenir à titre préventif si une banque est en difficulté.
                                                Dans ce cadre, l’assureur de dépôt peut par exemple financer des mesures de restructuration ou de transfert d’actifs aptes à sauver les dépôts des clients.
                                                De même, il est doté des compétences élargies en matière de financement des outils de redressement des banques en difficulté et de traitement des crises systémiques.
                                                C’est le modèle du Fonds de Garantie des Dépôts et de Résolution (FGDR) en France.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true" style="margin-top: -30px ">
                        @php $i=4; @endphp
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading{{ 4 }}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{ 4 }}" aria-expanded="false" aria-controls="collapse{{ 4 }}">
                                        RISK MINIMISER ou Limitation de risque
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ 4 }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ 4 }}">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('public/uploads/risk.jpg') }}" alt="" style="width:250px; height:150px;">
                                        </div>
                                        <div class="col-md-8">
                                            <p style="font-family: 'Times New Roman'; font-size: 18px;text-align:justify;" >  Mandat dans lequel un assureur des dépôts a des pouvoirs plus étendus que les précédents mandats. Il est chargé entre autres, de contrôler l’adhésion au régime d’assurance
                                                des dépôts et l’annulation des polices d’assurance, d’évaluer et de surveiller les risques et d’assurer la surveillance prudentielle dans banques.
                                                On retrouve ce dispositif au Canada (Canada Deposit Insurance Corporation), en Malaisie (Malaysia Deposit Insurance Corporation) et en Corée (Korea Deposit Insurance Corporation).
                                                Dans cette classification, les missions dévolues au FOGADAC s’apparentent à celle d’un système Paybox Plus. En effet, le Fonds peut, dans le cadre d’une intervention préventive,
                                                apporter un soutien financier à un établissement de crédit dont la situation laisse craindre à brefs délais une indisponibilité totale ou partielle des dépôts ou de tous les autres
                                                fonds remboursables.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
