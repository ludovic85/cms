@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_term) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $processus->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $processus->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="special">
        <div class="bg" style="background-image:url('public/uploads/arriere.jpg');"></div>
        <div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h2 style="text-align: center;color:#00183A;">Processus d'indemnisation en bref</h2>
                    <div class="video-section">
                        <div class="bg video-section-bg" style="opacity: 0.9;background-color: #0d1028;">
                        <div class="video-button-container">
                            <video style="width:800px; height:400px;" controls>
                                <source src="{{ asset('public/uploads/Fogadac 2b.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                 <div class="col-md-12  shadow p-4 mb-4 bg-white" style="background-image:url('public/uploads/arriere.jpg');">
</br>
                    <h5 style="color:#00183A;text-align:center;"><b>PROCESSUS D’INDEMNISATION</b></h5>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;">
                    Le processus d’indemnisation débute à partir du moment où la Commission Bancaire prononce l’indisponibilité des dépôts et demande
                     l’intervention de la COBAC et s’achève au moment du recouvrement des sommes avancées par le FOGADAC. Comme le stipule l’article <b>42 du règlement
                      COBAC R-2009/03 du 15 décembre 2009</b> relatif à l’organisation et au fonctionnement du FOGADAC, le Fonds indemnise dans un délai de <b> deux (02) mois</b>
                      les créances admises au titre de la garantie. La présente note décrit les différentes étapes du processus d’indemnisation des déposants en cas de faillite
                      d’un établissement de crédit dans la CEMAC. Celles-ci sont détaillées à l’article <b>19 de la décision n°01/11-FGD-CD du 11 février 2011</b> portant règlement intérieur
                       du FOGADAC et se déclinent ainsi qu’il suit :
                     <div class="wow fadeInRight" style="animation: fadeInRight 3s;" >
                         <div class="row">
                             <div class="col-md-3">
                                 <img src="{{ asset('public/uploads/coffrediv1.png') }}" alt="" style="width:200px; height:200px;">
                             </div>
                             <div class="col-md-9">

                                         <b> Constatation de l’indisponibilité des dépôts par la COBAC</b>

                                 <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;" >
                                     La Commission Bancaire constate l’indisponibilité des dépôts, la notifie au FOGADAC et demande son intervention.
                                     Ce faisant, le Comité de Direction se réunit en session extraordinaire pour statuer sur les modalités d’indemnisation.</p>
                             </div>
                         </div>
                        </div>

                     <br/>
                            <div class="wow fadeInLeft" style="animation: fadeInLeft 4s;">
                                <div class="row">
                                    <div class="col-md-9">

                                        <b> Publication du communiqué de presse du Président et établissement des attestations de créances par le FOGADAC </b>

                                        <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;">
                                            Le Secrétariat Permanent publie un avis par voie de presse pour annoncer le déclenchement de la procédure d’indemnisation.
                                            De même, à partir des registres bancaires, il établit les attestations des montants des créances ou droits éligibles à
                                            la procédure d'indemnisation qui sont transmises à la clientèle par lettre recommandée avec accusé de réception ou par tout
                                            autre moyen laissant trace écrite.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('public/uploads/communiq1.png') }}" alt="" style="width:250px; height:120px;">
                                    </div>

                                </div>
                         </div>
                     <br/>

                        <div class="wow fadeInRight" style="animation: fadeInRight 5s;">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('public/uploads/attest.png') }}" alt="" style="width:250px; height:120px;">
                                </div>
                                <div class="col-md-9">
                                    <b> Confirmation de l’attestation de créances et communication du numéro de compte par le client </b>
                                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;">
                                        Le client dispose d’un délai de quinze (15) jours après l’envoi, pour retourner l’attestation approuvée en faisant connaître le numéro de compte
                                        dans un autre établissement de crédit qui devra être crédité du montant de l’indemnisation et, le cas échéant, formuler d’éventuelles remarques ou
                                        contestations.</p>
                                </div>

                            </div>

                           </div>
                     <br/>

                            <div class="wow fadeInLeft" style="animation: fadeInLeft 6s;">
                                <div class="row">
                                    <div class="col-md-9">
                                        <b> Réception de la confirmation de l’attestation de créances et règlement de l’indemnisation par le Fonds</b>

                                        <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;">
                                            A l’expiration du délai de quinze (15) jours ou dès réception de la confirmation de l’attestation, le FOGADAC engage le règlement de l’indemnisation
                                            des déposants. A défaut d’indication d’un numéro de compte, les coordonnées de la banque mandataire chargée de payer des dépôts couverts sont communiquées
                                            aux déposants.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('public/uploads/retrait_attest.jpg') }}" alt="" style="width:250px; height:120px;">
                                    </div>

                                </div>
                          </div>

                     <div class="wow fadeInRight" style="animation: fadeInRight 7s;">
                         <div class="row">
                             <div class="col-md-3">
                                 <img src="{{ asset('public/uploads/coffrefull.png') }}" alt="" style="width:200px; height:200px;">
                             </div>
                             <div class="col-md-9">
                                 <b> Recouvrement des Fonds de l’indemnisation par le FOGADAC</b>
                                 <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 20px;">
                                     Après paiement, le Fonds se subroge dans les droits des déposants indemnisés vis-à-vis du Liquidateur.
                                     Par ailleurs, il convient de préciser que dès le jour de la publication de l’indisponibilité des dépôts,
                                     les déposants qui n’ont pas été saisis personnellement par le FOGADAC disposent d’un délai de deux (02) mois pour faire valoir leur droit d’intervention.
                                     A l’expiration de cette période, le Fonds indemnise les ayants droit des autres déposants concernés.
                                     Enfin, le délai d’indemnisation peut faire l’objet de deux (02) prorogations au maximum qui ne peuvent excéder au total quatre (04) mois.
                                     Dans ce cas de figure, la décision de prorogation est publiée par le Secrétariat Permanent
                                 </p>
                             </div>
                         </div>
                           </div>
                </div>


            </div>
        </div>
    </div>
@endsection
