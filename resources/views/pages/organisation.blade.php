@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/R.jpg') }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $organisation->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $organisation->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 feature-item wow fadeInRight shadow p-4 mb-4 bg-white" style="background-image:url('public/uploads/arriere.jpg');animation:fadeInRight 2s;">
                    <h5 style="color:#00183A;text-align:center"> Cadre Organisationnel du Fonds</h5>
                    <h6 style="color:#00183A; text-decoration:underline;text-align:center"> Architecture fonctionnelle</h6>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">
                        La structure organisationnelle du Fonds est articulée autour des deux organes que sont le Comité de Direction (CODIR), son organe délibérant, et le Secrétariat Permanent, qui en est la « cheville ouvrière ».
                        Le Comité de Direction compte sept membres, à savoir les présidents des Associations Professionnelles des Etablissements de Crédit (APEC) des Etats de la CEMAC et le Président de la COBAC. Le Secrétaire Général de la COBAC participe aux réunions du CODIR avec voix consultative. Il en est de même du Secrétaire Permanent, qui assure le secrétariat des séances et rapporte les affaires inscrites à l’ordre du jour de ces réunions. Il assure la gestion courante du Fonds.
                        Lorsque cet organe est amené à statuer sur une intervention du Fonds auprès d’un établissement de crédit, l’Autorité monétaire du pays concerné siège au CODIR avec voix délibérative. Le Directeur National de la BEAC du pays concerné se voit également invité à y siéger, avec voix consultative. La simplicité de cette architecture répond au souci d’alléger autant que possible les charges de fonctionnement du mécanisme de garantie. C’est dans cet esprit que le choix de désigner les agents du Secrétariat Permanent parmi les effectifs du Secrétariat Général de la COBAC est fait.
                        Cette « prééminence » du rôle de la COBAC résulte également de sa technicité, de son expertise et de son spectre d’actions large sur l’exercice des activités des établissements de crédit.
                        A l’instar de la COBAC, les membres du CODIR ainsi que toutes les personnes habilitées à agir au nom du Fonds bénéficient d’une immunité personnelle pour les actes accomplis dans le cadre de leurs fonctions et sont astreints au secret professionnel.
                    </p>
                </div>
                <div class="col-md-12 feature-item wow fadeInLeft shadow p-4 mb-4 bg-white" style="animation: fadeInLeft 3s;">
                    <br> <center> <img src="{{ asset('public/uploads/organisationfogadac1.jpg') }}" alt="" style="width:auto; height:px;" ></center> <br>



                    <h6 style="color:#00183A; text-decoration:underline;text-align:center">Fonctionnement du Fonds de garantie</h6>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">
                        Le Fonds est principalement alimenté par les contributions des établissements de crédit. Ces dernières font l’objet de placement, et les produits qui en découlent permettent le financement des charges courantes.
                        Le Fonds a la latitude d’intervenir auprès des établissements de crédit de manière préventive ou curative. Tous les établissements de crédit installées dans la CEMAC, y compris ceux qui ne procèdent pas à la collecte des dépôts, sont appelés à participer à l’abondement du Fonds. Leur adhésion au mécanisme de garantie est obligatoire, et ne nécessite pas l’accomplissement de formalités préalables.
                    </p>
                </div>

                <div class="col-md-12 feature-item wow fadeInRight shadow p-4 mb-4 bg-white" style="background-image:url('public/uploads/arriere.jpg');animation: fadeInRight 4s;">
                    <h5 style="color:#00183A;text-align:center"> Les contributions des établissements de crédit</h5>
                    <h6 style="color:#00183A; text-decoration:underline;text-align:center"> Les différents types de contribution</h6>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">
                        Les contributions des établissements de crédit prennent différentes variantes qui peuvent, dans certains cas, être cumulées. <br>
                        <b>Les contributions ordinaires</b>  sont calculées, chaque année, pour tous les établissements de crédit sur la base des états financiers certifiés ou,
                        le cas échéant, des déclarations périodiques réglementaires au 31 décembre de l’année précédente. La formule arrêtée fait intervenir une fraction des dépôts collectés
                        à laquelle s’ajoute une fraction des créances douteuses nettes de provisions. Des planchers sont fixés à 30 millions de FCFA pour les banques et à 5 millions de FCFA
                        pour les établissements ne collectant pas de dépôts. Ces montants sont révisables par le CODIR, sur avis conforme de la COBAC.
                        L’obligation de contribuer, pour cette catégorie d’établissement, trouve sa justification dans la consécration d’une solidarité de place, laquelle est nécessaire pour
                        la cohésion du système et la prévention de crise dont les effets pourraient se révéler systémiques. <br>
                        <b> Des contributions complémentaires</b> peuvent être sollicitées, notamment en cas d’intervention du Fonds, lorsque ses capacités d’intervention sont insuffisantes
                        pour faire face à un sinistre. <br>
                        <b> Des contributions spécifiques</b> sont exigées des nouveaux adhérents. Elles représentent leur droit d’entrée dans le système. A titre transitoire, jusqu’à ce jour,
                        ce droit d’entrée correspond à deux années de cotisations minimales, soit 60 millions de FCFA pour une nouvelle banque ou 10 millions de FCFA pour un nouvel établissement financier. <br>
                        En dernier ressort, la contribution des Etats prend la forme d’une <b> garantie de la puissance publique</b>. Elle est requise, en cas d’intervention du Fonds, afin d’apporter le complément des ressources nécessaires à l’indemnisation des déposants et de rendre plus crédible la protection des épargnants
                    </p></div>
                <div class="col-md-12 feature-item wow fadeInLeft shadow p-4 mb-4 bg-white" style="animation:fadeInLeft 5s;">
                    <h6 style="color:#00183A; text-decoration:underline;text-align:center">Les modalités de liquidation des contributions</h6>

                    <p style="text-align:justify;">
                        La liquidation des contributions s’effectue selon le processus ci-après décrit :
                    <ul style="font-family: 'Times New Roman'; font-size: 18px;">
                        <li>La base de l’assiette de calcul est constituée des données certifiées arrêtées au 31 décembre de l’année N. Si ces dernières ne sont pas disponibles, elles sont remplacées par les données faisant l’objet de la déclaration réglementaire au 31 décembre de l’année N ;
                        </li>
                        <li>le montant de la contribution de chaque établissement de crédit lui est notifié au plus tard le 31 mars de l’année N ;</li>
                        <li>un délai de grâce d’un mois est accordé aux établissements de crédit pour faire parvenir au Secrétariat Permanent leurs éventuelles contestations de l’assiette de calcul ;
                        </li>
                        <li>le 15 mai de l’année N, les contributions sont acquittées par débit automatique du compte de l’établissement dans les livres de la BEAC, et par chèque pour les établissements de crédit ne disposant pas de compte dans les livres de la Banque Centrale.</li>
                    </ul></p>

                    <h6 style="color:#00183A; text-decoration:underline;text-align:center">Le statut juridique et fiscal des contributions</h6>
                    <p style="text-align:justify;font-family: 'Times New Roman'; font-size: 18px;">
                        Ces contributions sont, pour les établissements de crédit, des charges déductibles de l’assiette fiscale pour la détermination de l’impôt sur les sociétés.
                        Les ressources du fonds sont exonérées de tous impôts et taxes. Elles bénéficient d’un régime de protection contre toute saisie, même lorsque les créances sont placées entre les mains d’un tiers, et d’un privilège sur les autres créances, dont le rang est fonction de la nature de l’intervention du Fonds.
                    </p>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection
