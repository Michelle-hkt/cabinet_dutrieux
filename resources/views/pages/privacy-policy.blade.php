@extends('layouts.blogLayout')

@section('title', 'Politique de confidentialité — Cabinet Dutrieux')

@section('content')

<style>
    .privacy-page {
        background-color: #f9f1f1;
        padding: 90px 20px 100px;
    }

    .privacy-container {
        width: 100%;
        max-width: 920px;
        margin: 0 auto;
    }

    .privacy-header {
        text-align: center;
        margin-bottom: 65px;
    }

    .privacy-eyebrow {
        margin-bottom: 14px;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        text-transform: uppercase;
    }

    .privacy-title {
        margin: 0;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .privacy-divider {
        width: 55px;
        height: 1px;
        margin: 25px auto 22px;
        background-color: #9a7379;
    }

    .privacy-updated {
        margin: 0;
        color: #80656a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.85rem;
        font-style: italic;
    }

    .privacy-card {
        background-color: #ffffff;
        padding: 60px 70px;
        border: 1px solid #eee3e4;
        box-shadow: 0 12px 40px rgba(104, 31, 45, 0.05);
    }

    .privacy-introduction {
        margin-bottom: 50px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.95rem;
        line-height: 1.85;
    }

    .privacy-introduction p {
        margin: 0 0 18px;
    }

    .privacy-section {
        margin-top: 52px;
    }

    .privacy-section:first-of-type {
        margin-top: 0;
    }

    .privacy-section-title {
        margin: 0 0 22px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.55rem;
        font-weight: 700;
        line-height: 1.35;
    }

    .privacy-subtitle {
        margin: 32px 0 14px;
        color: #30292b;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.12rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .privacy-text {
        margin: 0 0 18px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .privacy-list {
        margin: 15px 0 22px;
        padding-left: 22px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.92rem;
        line-height: 1.8;
    }

    .privacy-list li {
        margin-bottom: 7px;
        padding-left: 4px;
    }

    .privacy-list li::marker {
        color: #8b2c3a;
    }

    .privacy-contact {
        margin: 25px 0;
        padding: 25px 28px;
        background-color: #f7f5f5;
        border-left: 3px solid #8b2c3a;
    }

    .privacy-contact p {
        margin: 0 0 7px;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .privacy-contact p:last-child {
        margin-bottom: 0;
    }

    .privacy-contact strong {
        color: #30292b;
    }

    .privacy-highlight {
        margin: 25px 0;
        padding: 22px 25px;
        background-color: #fbe8e8;
        color: #575052;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.75;
    }

    .privacy-highlight strong {
        color: #681f2d;
    }

    .privacy-link {
        color: #681f2d;
        font-weight: 600;
        text-decoration: underline;
        text-decoration-color: #c9aeb3;
        text-underline-offset: 3px;
    }

    .privacy-link:hover {
        color: #8b2c3a;
    }

    .privacy-final-note {
        margin-top: 60px;
        padding-top: 35px;
        border-top: 1px solid #e5d9db;
    }

    .privacy-final-note-title {
        margin: 0 0 18px;
        color: #681f2d;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .privacy-final-note p {
        margin: 0 0 15px;
        color: #63565a;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 0.88rem;
        line-height: 1.8;
    }

    @media screen and (max-width: 768px) {

        .privacy-page {
            padding: 60px 15px 70px;
        }

        .privacy-header {
            margin-bottom: 40px;
        }

        .privacy-title {
            font-size: 2.25rem;
        }

        .privacy-card {
            padding: 40px 25px;
        }

        .privacy-section {
            margin-top: 42px;
        }

        .privacy-section-title {
            font-size: 1.35rem;
        }

        .privacy-subtitle {
            font-size: 1.05rem;
        }

        .privacy-text,
        .privacy-list {
            font-size: 0.88rem;
        }
    }

    @media screen and (max-width: 480px) {

        .privacy-page {
            padding: 45px 12px 55px;
        }

        .privacy-title {
            font-size: 1.9rem;
        }

        .privacy-card {
            padding: 30px 20px;
        }

        .privacy-eyebrow {
            font-size: 0.62rem;
            letter-spacing: 0.16em;
        }

        .privacy-introduction {
            font-size: 0.88rem;
        }

        .privacy-section-title {
            font-size: 1.25rem;
        }

        .privacy-contact,
        .privacy-highlight {
            padding: 20px;
        }
    }
</style>


<section class="privacy-page">

    <div class="privacy-container">

        {{-- =========================================================
             HEADER
        ========================================================== --}}

        <header class="privacy-header">

            <div class="privacy-eyebrow">
                Cabinet Dutrieux
            </div>

            <h1 class="privacy-title">
                Politique de confidentialité
            </h1>

            <div class="privacy-divider"></div>

        </header>


        {{-- =========================================================
             CONTENU
        ========================================================== --}}

        <article class="privacy-card">


            {{-- INTRODUCTION --}}

            <div class="privacy-introduction">

                <p>
                    Le Cabinet Dutrieux, étude notariale établie en Belgique,
                    accorde une importance particulière à la protection de vos
                    données à caractère personnel et au respect de votre vie privée.
                </p>

                <p>
                    La présente politique de confidentialité a pour objectif de vous
                    informer de manière claire et transparente sur la manière dont vos
                    données à caractère personnel sont collectées, utilisées,
                    conservées et protégées lorsque vous utilisez le site internet
                    du Cabinet Dutrieux ou lorsque vous entrez en relation avec
                    l'étude dans le cadre de ses activités notariales.
                </p>

                <p>
                    Le Cabinet Dutrieux traite vos données conformément au
                    <strong>Règlement (UE) 2016/679 du 27 avril 2016 relatif à la
                    protection des données à caractère personnel (« RGPD »)</strong>,
                    aux dispositions légales belges applicables ainsi qu'aux règles
                    et obligations propres à la profession notariale en matière de
                    confidentialité, de secret professionnel et de protection des données.
                </p>

            </div>


            {{-- =========================================================
                 1. RESPONSABLE DU TRAITEMENT
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    1. Responsable du traitement
                </h2>

                <p class="privacy-text">
                    Le responsable du traitement de vos données à caractère personnel est :
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>Cabinet Dutrieux</strong>
                    </p>

                    <p>
                        Étude notariale
                    </p>

                    <p>
                        Rue du Mail<br>
                        1050 Ixelles<br>
                        Belgique
                    </p>

                    <p>
                        <strong>Numéro d'entreprise :</strong>
                        +32 465 50 28 01
                    </p>

                    <p>
                        <strong>Téléphone :</strong>
                        +32 465 50 28 01
                    </p>

                    <p>
                        <strong>E-mail :</strong>
                        contact@cabinetdutrieux.be
                    </p>

                    <p>
                        <strong>E-mail relatif à la protection des données :</strong>
                        contact@cabinetdutrieux.be
                    </p>

                </div>

                <p class="privacy-text">
                    Le Cabinet Dutrieux détermine les finalités et les moyens des
                    traitements de données à caractère personnel réalisés dans le
                    cadre de son activité.
                </p>

                <p class="privacy-text">
                    Lorsque la réglementation applicable l'exige, le Cabinet Dutrieux
                    fait appel à un délégué à la protection des données (DPO).
                    Les coordonnées de celui-ci seront indiquées dans la présente
                    politique lorsqu'elles sont applicables.
                </p>

            </section>


            {{-- =========================================================
                 2. DONNÉES PERSONNELLES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    2. Quelles données personnelles pouvons-nous traiter ?
                </h2>

                <p class="privacy-text">
                    Selon la nature de votre relation avec le Cabinet Dutrieux,
                    différentes catégories de données peuvent être traitées.
                </p>


                <h3 class="privacy-subtitle">
                    2.1. Données communiquées via le site internet
                </h3>

                <p class="privacy-text">
                    Lorsque vous utilisez le formulaire de contact, le formulaire
                    de demande de rendez-vous ou tout autre formulaire disponible
                    sur le site, nous pouvons notamment traiter :
                </p>

                <ul class="privacy-list">
                    <li>nom et prénom ;</li>
                    <li>adresse e-mail ;</li>
                    <li>numéro de téléphone ;</li>
                    <li>objet de votre demande ;</li>
                    <li>contenu du message ;</li>
                    <li>informations relatives à votre demande de rendez-vous ;</li>
                    <li>date et heure souhaitées pour un rendez-vous ;</li>
                    <li>toute autre information que vous choisissez volontairement de nous communiquer.</li>
                </ul>

                <p class="privacy-text">
                    Nous vous invitons à ne communiquer, via les formulaires du site,
                    que les informations nécessaires au traitement de votre demande.
                </p>


                <h3 class="privacy-subtitle">
                    2.2. Données traitées dans le cadre d'un dossier notarial
                </h3>

                <p class="privacy-text">
                    Dans le cadre de l'exercice de ses missions, le Cabinet Dutrieux
                    peut être amené à traiter des catégories plus larges de données,
                    notamment :
                </p>

                <ul class="privacy-list">
                    <li>données d'identification ;</li>
                    <li>coordonnées ;</li>
                    <li>données relatives à l'état civil ;</li>
                    <li>données relatives à la situation familiale ;</li>
                    <li>données relatives à la capacité juridique des personnes ;</li>
                    <li>données patrimoniales ;</li>
                    <li>données immobilières ;</li>
                    <li>données financières et fiscales ;</li>
                    <li>données professionnelles ;</li>
                    <li>données relatives aux sociétés et à leurs représentants ;</li>
                    <li>données relatives aux testaments, successions et donations ;</li>
                    <li>données contenues dans les actes et documents notariés ;</li>
                    <li>toute autre donnée nécessaire à l'accomplissement d'une mission notariale.</li>
                </ul>

                <p class="privacy-text">
                    Certaines de ces données peuvent présenter un caractère
                    particulièrement confidentiel. Leur traitement est soumis aux
                    obligations professionnelles applicables aux notaires,
                    notamment au secret professionnel et au devoir de discrétion.
                </p>

            </section>


            {{-- =========================================================
                 3. COLLECTE
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    3. Dans quelles situations collectons-nous vos données ?
                </h2>

                <p class="privacy-text">
                    Vos données peuvent notamment être collectées lorsque :
                </p>

                <ul class="privacy-list">
                    <li>vous utilisez le formulaire de contact du site ;</li>
                    <li>vous demandez un rendez-vous ;</li>
                    <li>vous correspondez avec l'étude par e-mail, téléphone ou courrier ;</li>
                    <li>vous confiez un dossier au Cabinet Dutrieux ;</li>
                    <li>vous participez à une opération ou à un acte notarié ;</li>
                    <li>vous êtes partie ou intervenant dans un dossier traité par l'étude ;</li>
                    <li>vous nous fournissez volontairement des documents ou informations nécessaires au traitement de votre dossier ;</li>
                    <li>nous devons obtenir certaines informations auprès de sources authentiques, d'administrations ou de professionnels habilités, conformément à la législation applicable.</li>
                </ul>

                <p class="privacy-text">
                    Dans le cadre de ses missions notariales, le notaire peut être
                    légalement autorisé ou tenu de recueillir certaines informations
                    auprès de sources officielles et d'administrations.
                </p>

            </section>


            {{-- =========================================================
                 4. FINALITÉS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    4. Pourquoi utilisons-nous vos données ?
                </h2>

                <p class="privacy-text">
                    Vos données sont traitées uniquement pour des finalités
                    déterminées, explicites et légitimes.
                </p>


                <h3 class="privacy-subtitle">
                    4.1. Répondre à vos demandes
                </h3>

                <ul class="privacy-list">
                    <li>répondre à votre demande ;</li>
                    <li>vous recontacter ;</li>
                    <li>vous fournir les informations demandées ;</li>
                    <li>identifier le service ou le collaborateur compétent.</li>
                </ul>


                <h3 class="privacy-subtitle">
                    4.2. Gérer les rendez-vous
                </h3>

                <ul class="privacy-list">
                    <li>enregistrer votre demande ;</li>
                    <li>vérifier les disponibilités ;</li>
                    <li>organiser le rendez-vous ;</li>
                    <li>vous confirmer ou modifier celui-ci ;</li>
                    <li>vous contacter en cas de changement ou de nécessité liée au rendez-vous.</li>
                </ul>


                <h3 class="privacy-subtitle">
                    4.3. Gérer les dossiers notariaux
                </h3>

                <ul class="privacy-list">
                    <li>analyser votre situation ;</li>
                    <li>vous conseiller dans le cadre de la mission confiée ;</li>
                    <li>préparer les documents nécessaires ;</li>
                    <li>rédiger et recevoir les actes notariés ;</li>
                    <li>accomplir les formalités légales et administratives ;</li>
                    <li>communiquer avec les parties, professionnels et autorités concernés ;</li>
                    <li>assurer le suivi administratif, juridique et financier du dossier ;</li>
                    <li>respecter les obligations légales et réglementaires applicables au notariat.</li>
                </ul>


                <h3 class="privacy-subtitle">
                    4.4. Respecter nos obligations légales
                </h3>

                <p class="privacy-text">
                    Certaines données doivent être traitées afin de respecter les
                    obligations légales et réglementaires auxquelles le notaire est soumis.
                </p>

                <p class="privacy-text">
                    Cela peut notamment concerner les obligations relatives à
                    l'identification des parties, à la lutte contre le blanchiment
                    de capitaux, aux obligations fiscales, aux formalités administratives
                    et aux différentes obligations propres à l'activité notariale.
                </p>

            </section>


            {{-- =========================================================
                 5. BASES LÉGALES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    5. Sur quelles bases légales traitons-nous vos données ?
                </h2>

                <p class="privacy-text">
                    Selon le contexte, le traitement de vos données peut reposer
                    sur différentes bases juridiques prévues par le RGPD.
                </p>

                <ul class="privacy-list">
                    <li>
                        <strong>l'exécution de mesures précontractuelles ou d'un contrat</strong>,
                        lorsque vous nous contactez afin de préparer une prestation
                        ou lorsque vous nous confiez une mission ;
                    </li>

                    <li>
                        <strong>le respect d'une obligation légale</strong>,
                        lorsque le traitement est imposé par la législation applicable ;
                    </li>

                    <li>
                        <strong>l'exécution d'une mission d'intérêt public ou relevant
                        de l'exercice de l'autorité publique</strong>, lorsque cela
                        est applicable aux missions notariales ;
                    </li>

                    <li>
                        <strong>l'intérêt légitime</strong>, lorsque celui-ci constitue
                        une base juridique appropriée et que vos droits et libertés
                        ne prévalent pas ;
                    </li>

                    <li>
                        <strong>votre consentement</strong>, lorsque celui-ci est
                        juridiquement requis.
                    </li>
                </ul>

            </section>


            {{-- =========================================================
                 6. DONNÉES OBLIGATOIRES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    6. Les données sont-elles obligatoires ?
                </h2>

                <p class="privacy-text">
                    Certaines informations sont indispensables pour permettre au
                    Cabinet Dutrieux de répondre à votre demande ou d'accomplir
                    une mission notariale.
                </p>

                <p class="privacy-text">
                    Lorsque certaines données sont nécessaires à l'accomplissement
                    d'une obligation légale ou à l'exécution d'une mission, leur
                    absence peut empêcher l'étude :
                </p>

                <ul class="privacy-list">
                    <li>de traiter votre demande ;</li>
                    <li>de vous proposer un rendez-vous ;</li>
                    <li>d'ouvrir ou de traiter un dossier ;</li>
                    <li>d'établir certains documents ou actes ;</li>
                    <li>d'accomplir les formalités nécessaires.</li>
                </ul>

                <p class="privacy-text">
                    Lorsque vous utilisez un formulaire du site, seuls les champs
                    nécessaires à son fonctionnement sont demandés comme obligatoires.
                </p>

            </section>


            {{-- =========================================================
                 7. DESTINATAIRES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    7. À qui vos données peuvent-elles être communiquées ?
                </h2>

                <p class="privacy-text">
                    Le Cabinet Dutrieux ne vend ni ne loue vos données personnelles.
                </p>

                <p class="privacy-text">
                    Selon la nature du dossier et uniquement lorsque cela est
                    nécessaire ou légalement requis, certaines données peuvent être
                    communiquées à des destinataires habilités, notamment :
                </p>

                <ul class="privacy-list">
                    <li>administrations publiques ;</li>
                    <li>autorités judiciaires ou administratives ;</li>
                    <li>services fiscaux ;</li>
                    <li>organismes ou institutions compétents dans le cadre des missions notariales ;</li>
                    <li>autres notaires lorsque cela est nécessaire à l'accomplissement d'une opération ;</li>
                    <li>banques et établissements financiers lorsque cela est nécessaire au dossier ;</li>
                    <li>avocats, experts, comptables ou autres professionnels intervenant dans le dossier ;</li>
                    <li>prestataires techniques agissant pour le compte de l'étude ;</li>
                    <li>autres parties concernées par une opération notariale, dans les limites de ce qui est nécessaire et autorisé.</li>
                </ul>

                <p class="privacy-text">
                    Ces communications ne sont effectuées que lorsqu'elles sont
                    nécessaires à l'accomplissement des missions du Cabinet Dutrieux,
                    à l'exécution d'une obligation légale ou lorsque vous les avez
                    autorisées lorsque cette autorisation est nécessaire.
                </p>

            </section>


            {{-- =========================================================
                 8. SOUS-TRAITANTS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    8. Recours à des prestataires et sous-traitants
                </h2>

                <p class="privacy-text">
                    Le Cabinet Dutrieux peut faire appel à des prestataires externes
                    pour certaines fonctions techniques ou administratives, par exemple :
                </p>

                <ul class="privacy-list">
                    <li>hébergement du site internet ;</li>
                    <li>gestion et sécurisation des systèmes informatiques ;</li>
                    <li>messagerie électronique ;</li>
                    <li>maintenance informatique ;</li>
                    <li>outils de gestion des rendez-vous ;</li>
                    <li>services nécessaires au fonctionnement du site.</li>
                </ul>

                <p class="privacy-text">
                    Lorsque ces prestataires traitent des données personnelles pour
                    le compte du Cabinet Dutrieux, ils sont sélectionnés avec une
                    attention particulière portée à la sécurité et à la protection
                    des données.
                </p>

            </section>


            {{-- =========================================================
                 9. TRANSFERTS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    9. Transferts de données en dehors de l'Espace économique européen
                </h2>

                <p class="privacy-text">
                    Le Cabinet Dutrieux privilégie, dans la mesure du possible,
                    des solutions permettant de traiter les données au sein de
                    l'Espace économique européen.
                </p>

                <p class="privacy-text">
                    Lorsque l'utilisation d'un prestataire implique un transfert
                    de données vers un pays situé en dehors de l'Espace économique
                    européen, le Cabinet Dutrieux veille à ce que ce transfert
                    soit effectué conformément au RGPD et qu'un mécanisme juridique
                    approprié garantisse un niveau de protection adéquat.
                </p>

            </section>


            {{-- =========================================================
                 10. CONSERVATION
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    10. Combien de temps conservons-nous vos données ?
                </h2>

                <p class="privacy-text">
                    La durée de conservation dépend de la nature des données et
                    de la finalité du traitement.
                </p>

                <p class="privacy-text">
                    Les données relatives aux demandes de contact ou de rendez-vous
                    sont conservées pendant la durée nécessaire à leur traitement
                    et, lorsque cela est justifié, pendant une durée supplémentaire
                    nécessaire à la gestion administrative ou à la défense des
                    droits du cabinet.
                </p>

                <p class="privacy-text">
                    Les données relatives aux dossiers notariaux peuvent, quant à
                    elles, être conservées pendant les durées imposées ou autorisées
                    par les dispositions légales et réglementaires applicables à la
                    profession notariale.
                </p>

                <p class="privacy-text">
                    En raison de la nature particulière des actes et dossiers
                    notariaux, certaines données doivent être conservées pendant
                    des périodes importantes afin de respecter les obligations
                    légales, d'assurer la conservation des actes et de permettre
                    l'exercice des droits des personnes concernées.
                </p>

            </section>


            {{-- =========================================================
                 11. SÉCURITÉ
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    11. Comment protégeons-nous vos données ?
                </h2>

                <p class="privacy-text">
                    Le Cabinet Dutrieux met en œuvre des mesures techniques et
                    organisationnelles destinées à protéger les données personnelles
                    contre :
                </p>

                <ul class="privacy-list">
                    <li>l'accès non autorisé ;</li>
                    <li>la perte ;</li>
                    <li>la destruction ;</li>
                    <li>l'altération ;</li>
                    <li>la divulgation non autorisée ;</li>
                    <li>toute autre forme de traitement illicite.</li>
                </ul>

                <p class="privacy-text">
                    Ces mesures peuvent notamment comprendre :
                </p>

                <ul class="privacy-list">
                    <li>la limitation des accès aux données ;</li>
                    <li>l'authentification des utilisateurs ;</li>
                    <li>la gestion des droits d'accès ;</li>
                    <li>la sécurisation des systèmes informatiques ;</li>
                    <li>la sauvegarde des données ;</li>
                    <li>la sécurisation des communications électroniques ;</li>
                    <li>la sensibilisation des collaborateurs à la confidentialité ;</li>
                    <li>des mesures de protection contre les accès non autorisés.</li>
                </ul>

            </section>


            {{-- =========================================================
                 12. SECRET PROFESSIONNEL
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    12. Secret professionnel et confidentialité
                </h2>

                <p class="privacy-text">
                    La confidentialité constitue un principe essentiel de
                    l'activité notariale.
                </p>

                <p class="privacy-text">
                    Les informations auxquelles le notaire a accès dans le cadre
                    de ses fonctions peuvent être soumises au secret professionnel
                    ou au devoir de discrétion conformément aux règles applicables
                    à la profession notariale.
                </p>

                <p class="privacy-text">
                    Le notaire est notamment tenu à un devoir de discrétion qui
                    limite la communication d'informations à des tiers, sauf lorsque
                    cette communication est nécessaire ou utile à l'opération dont
                    il est chargé ou lorsqu'une disposition légale l'autorise ou l'impose.
                </p>

                <p class="privacy-text">
                    La protection des données personnelles s'inscrit ainsi dans
                    un cadre plus large comprenant les obligations professionnelles,
                    légales et déontologiques propres au notariat.
                </p>

            </section>


            {{-- =========================================================
                 13. DROITS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    13. Vos droits
                </h2>

                <p class="privacy-text">
                    Conformément au RGPD, vous disposez, selon les circonstances
                    et sous réserve des limitations prévues par la loi, de différents
                    droits concernant vos données personnelles.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit d'accès
                </h3>

                <p class="privacy-text">
                    Vous pouvez demander à savoir si vos données personnelles sont
                    traitées et, dans certaines conditions, obtenir une copie des
                    données vous concernant ainsi que certaines informations sur
                    leur traitement.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit de rectification
                </h3>

                <p class="privacy-text">
                    Vous pouvez demander la correction de données personnelles
                    inexactes ou leur complément lorsqu'elles sont incomplètes.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit à l'effacement
                </h3>

                <p class="privacy-text">
                    Vous pouvez, dans certaines situations prévues par le RGPD,
                    demander l'effacement de vos données.
                </p>

                <p class="privacy-text">
                    Ce droit n'est toutefois pas absolu. Certaines données doivent
                    notamment être conservées lorsque leur conservation est imposée
                    par une obligation légale ou nécessaire à l'exercice des missions
                    notariales.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit à la limitation du traitement
                </h3>

                <p class="privacy-text">
                    Dans certaines situations, vous pouvez demander que le traitement
                    de vos données soit limité.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit d'opposition
                </h3>

                <p class="privacy-text">
                    Lorsque le traitement repose sur certains fondements juridiques,
                    vous pouvez vous opposer au traitement de vos données pour des
                    raisons tenant à votre situation particulière.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit à la portabilité
                </h3>

                <p class="privacy-text">
                    Lorsque les conditions prévues par le RGPD sont réunies, vous
                    pouvez recevoir certaines données personnelles dans un format
                    structuré, couramment utilisé et lisible par machine, ou demander
                    leur transmission à un autre responsable du traitement.
                </p>


                <h3 class="privacy-subtitle">
                    D'un droit de retirer votre consentement
                </h3>

                <p class="privacy-text">
                    Lorsque le traitement repose sur votre consentement, vous pouvez
                    retirer celui-ci à tout moment.
                </p>

                <p class="privacy-text">
                    Le retrait du consentement n'affecte pas la licéité des traitements
                    effectués avant ce retrait.
                </p>

            </section>


            {{-- =========================================================
                 14. EXERCER SES DROITS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    14. Comment exercer vos droits ?
                </h2>

                <p class="privacy-text">
                    Pour exercer vos droits ou obtenir des informations complémentaires
                    concernant le traitement de vos données, vous pouvez contacter
                    le Cabinet Dutrieux :
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>Cabinet Dutrieux</strong>
                    </p>

                    <p>
                        Rue du Mail<br>
                        1050 Ixelles<br>
                        Belgique
                    </p>

                    <p>
                        <strong>E-mail :</strong>
                        [ADRESSE E-MAIL À COMPLÉTER]
                    </p>

                </div>

                <p class="privacy-text">
                    Votre demande doit permettre au cabinet de vous identifier de
                    manière raisonnable afin d'éviter qu'une personne non autorisée
                    puisse accéder à vos données.
                </p>

                <p class="privacy-text">
                    Le Cabinet Dutrieux traitera votre demande conformément aux
                    délais et conditions prévus par le RGPD et les dispositions
                    légales applicables.
                </p>

            </section>


            {{-- =========================================================
                 15. RÉCLAMATION
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    15. Droit d'introduire une réclamation
                </h2>

                <p class="privacy-text">
                    Si vous estimez que le traitement de vos données personnelles
                    ne respecte pas les règles applicables en matière de protection
                    des données, vous pouvez contacter le Cabinet Dutrieux afin
                    de rechercher une solution.
                </p>

                <p class="privacy-text">
                    Vous disposez également du droit d'introduire une réclamation
                    auprès de l'autorité de contrôle compétente en Belgique :
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>Autorité de protection des données (APD)</strong>
                    </p>

                    <p>
                        Rue de la Presse 35<br>
                        1000 Bruxelles<br>
                        Belgique
                    </p>

                    <p>
                        <strong>Site officiel :</strong>
                        <a
                            href="https://www.autoriteprotectiondonnees.be"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="privacy-link"
                        >
                            autoriteprotectiondonnees.be
                        </a>
                    </p>

                </div>

                <p class="privacy-text">
                    L'Autorité de protection des données constitue l'autorité belge
                    compétente en matière de protection des données à caractère personnel.
                </p>

            </section>


            {{-- =========================================================
                 16. COOKIES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    16. Cookies
                </h2>

                <p class="privacy-text">
                    Le site internet du Cabinet Dutrieux peut utiliser des cookies
                    ou technologies similaires nécessaires à son fonctionnement.
                </p>

                <p class="privacy-text">
                    Les cookies peuvent notamment être utilisés afin :
                </p>

                <ul class="privacy-list">
                    <li>d'assurer le fonctionnement technique du site ;</li>
                    <li>de mémoriser certaines préférences ;</li>
                    <li>d'améliorer la sécurité ;</li>
                    <li>d'établir des statistiques de fréquentation lorsque cela est applicable.</li>
                </ul>

                <p class="privacy-text">
                    Lorsque certains cookies nécessitent votre consentement, celui-ci
                    sera recueilli conformément à la réglementation applicable.
                </p>

            </section>


            {{-- =========================================================
                 17. FORMULAIRES
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    17. Formulaires de contact et de rendez-vous
                </h2>

                <p class="privacy-text">
                    Les informations communiquées via les formulaires du site sont
                    destinées au Cabinet Dutrieux et sont utilisées uniquement dans
                    la mesure nécessaire pour traiter votre demande.
                </p>

                <p class="privacy-text">
                    Le formulaire de contact peut notamment permettre à l'étude de recevoir :
                </p>

                <ul class="privacy-list">
                    <li>votre identité ;</li>
                    <li>vos coordonnées ;</li>
                    <li>votre message ;</li>
                    <li>les informations nécessaires pour vous répondre.</li>
                </ul>

                <p class="privacy-text">
                    Le formulaire de rendez-vous peut notamment permettre à l'étude de recevoir :
                </p>

                <ul class="privacy-list">
                    <li>votre identité ;</li>
                    <li>vos coordonnées ;</li>
                    <li>votre demande ;</li>
                    <li>vos disponibilités ou préférences de rendez-vous ;</li>
                    <li>les informations strictement nécessaires à l'organisation de celui-ci.</li>
                </ul>

                <div class="privacy-highlight">

                    <strong>Important :</strong>
                    nous vous recommandons de ne pas transmettre de données sensibles
                    ou de documents confidentiels via le formulaire de contact, sauf
                    lorsque cela vous est expressément demandé par l'étude et via un
                    moyen de transmission approprié.

                </div>

            </section>


            {{-- =========================================================
                 18. SITES TIERS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    18. Liens vers des sites tiers
                </h2>

                <p class="privacy-text">
                    Le site du Cabinet Dutrieux peut contenir des liens vers des
                    sites internet ou services appartenant à des tiers.
                </p>

                <p class="privacy-text">
                    Le Cabinet Dutrieux n'est pas responsable des pratiques de
                    confidentialité, du contenu ou de la sécurité de ces sites tiers.
                </p>

                <p class="privacy-text">
                    Nous vous invitons à consulter leurs propres politiques de
                    confidentialité avant de leur communiquer des données personnelles.
                </p>

            </section>


            {{-- =========================================================
                 19. MODIFICATIONS
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    19. Modifications de la présente politique
                </h2>

                <p class="privacy-text">
                    La présente politique de confidentialité peut être mise à jour
                    afin de tenir compte :
                </p>

                <ul class="privacy-list">
                    <li>de l'évolution de la législation ;</li>
                    <li>des recommandations des autorités compétentes ;</li>
                    <li>de l'évolution des activités du Cabinet Dutrieux ;</li>
                    <li>de l'évolution du site internet et de ses fonctionnalités ;</li>
                    <li>de l'évolution des technologies utilisées.</li>
                </ul>

                <p class="privacy-text">
                    La version la plus récente sera publiée sur cette page et
                    indiquera sa date de dernière mise à jour.
                </p>

            </section>


            {{-- =========================================================
                 20. CONTACT
            ========================================================== --}}

            <section class="privacy-section">

                <h2 class="privacy-section-title">
                    20. Contact
                </h2>

                <p class="privacy-text">
                    Pour toute question concernant la présente politique de
                    confidentialité ou le traitement de vos données personnelles,
                    vous pouvez contacter :
                </p>

                <div class="privacy-contact">

                    <p>
                        <strong>Cabinet Dutrieux</strong>
                    </p>

                    <p>
                        Étude notariale
                    </p>

                    <p>
                        Rue du Mail<br>
                        1050 Ixelles<br>
                        Belgique
                    </p>

                    <p>
                        <strong>E-mail :</strong>
                        [À COMPLÉTER]
                    </p>

                    <p>
                        <strong>Téléphone :</strong>
                        [À COMPLÉTER]
                    </p>

                </div>

            </section>


            {{-- =========================================================
                 INFORMATIONS IMPORTANTES
            ========================================================== --}}

            <div class="privacy-final-note">

                <h2 class="privacy-final-note-title">
                    Informations importantes
                </h2>

                <p>
                    La présente politique constitue un modèle adapté au contexte
                    d'un cabinet notarial belge et à un site internet comprenant
                    notamment des formulaires de contact et de prise de rendez-vous.
                </p>

                <p>
                    Avant sa mise en ligne définitive, elle doit être vérifiée et
                    complétée avec les informations propres au Cabinet Dutrieux,
                    notamment l'identité juridique exacte du responsable du traitement,
                    le numéro d'entreprise, les coordonnées officielles, l'adresse
                    e-mail destinée aux demandes relatives aux données personnelles,
                    ainsi que les outils réellement utilisés par le site.
                </p>

                <p>
                    Les informations relatives à l'hébergement, à la messagerie,
                    aux cookies, aux éventuels services d'analyse, de statistiques,
                    de carte ou de prise de rendez-vous, ainsi que les durées de
                    conservation effectivement appliquées par l'étude doivent
                    également être vérifiées.
                </p>

                <div class="privacy-highlight">

                    <strong>Attention :</strong>
                    cette politique ne doit pas être publiée comme un document
                    juridiquement définitif sans cette vérification préalable.

                </div>

            </div>

        </article>

    </div>

    </section>

@endsection