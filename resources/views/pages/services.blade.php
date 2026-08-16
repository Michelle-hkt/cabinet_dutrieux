@extends('layouts.publicLayout')

@section('title', config('app.name', 'Cabinet Dutrieux'))

@section('content')

    <x-services.hero-service />

    <x-services.service-item
    title="{{ __('Droit immobilier') }}"
    description="{{ __('Achat ou vente d’un bien à Bruxelles, en Flandre ou en Wallonie, financement hypothécaire : notre étude vous accompagne à chaque étape de votre transaction immobilière. De la rédaction des compromis de vente aux actes authentiques, nos recherches méticuleuses vous garantissent une tranquillité d’esprit totale.') }}"
    :points="[
        __('Offre d’achat'),
        __('Achat et vente de biens immobiliers'),
        __('Acte de base - règlement de copropriété'),
        __('Servitude'),
        __('Financement et refinancement hypothécaire'),
        __('etc.')
    ]"
    image="{{ asset('build/assets/services/s.jpeg') }}"
    image-position="right"
    cta-label="{{ __('Prendre rendez-vous') }}"
    cta-route="appointment"
    />

<x-services.service-item
    title="{{ __('Droit des personnes et de la famille') }}"
    description="{{ __('Le droit de la famille englobe des décisions cruciales qui jalonnent la vie : mariage, régime matrimonial, testament, succession. Faire appel à un notaire permet de bénéficier d’un accompagnement précis, garantissant la sécurité et la conformité de vos actes. Nous protégeons les intérêts de toutes les parties avec des conseils avisés et personnalisés, adaptés à chaque situation.') }}"
    :points="[
        __('Contrat de mariage'),
        __('Convention de cohabitation'),
        __('Cession de droits indivis'),
        __('Divorce par consentement mutuel'),
        __('Procuration'),
        __('Mandat extrajudiciaire'),
        __('Planification successorale et patrimoniale'),
        __('etc.')
    ]"
    image="{{ asset('build/assets/services/s1.jpeg') }}"
    image-position="left"
    cta-label="{{ __('Prendre rendez-vous') }}"
    cta-route="appointment"
/>

<x-services.service-item
    title="{{ __('Planification patrimoniale, testaments et successions') }}"
    description="{{ __('Il est essentiel de penser dès aujourd’hui à ce qui adviendra demain. Donation, droits de succession, indivision, dispositions testamentaires : nous répondons à toutes vos questions et vous accompagnons à chaque étape du règlement de votre succession, selon vos désirs et votre situation familiale.') }}"
    :points="[
        __('Vérification, recherche et rédaction testamentaire'),
        __('Inventaire successoral'),
        __('Déclaration et prise en charge de succession'),
        __('Liquidation successorale'),
        __('Déclaration d’hérédité'),
        __('etc.')
    ]"
    image="{{ asset('build/assets/services/s2.jpeg') }}"
    image-position="right"
    cta-label="{{ __('Prendre rendez-vous') }}"
    cta-route="appointment"
/>

<x-services.service-item
    title="{{ __('Droit des sociétés') }}"
    description="{{ __('Créer sa société est une aventure passionnante qui exige rigueur et conformité aux réglementations en vigueur. Notre équipe vous accompagne dès la création de votre entreprise, dans la préparation des documents et contrats essentiels à la bonne marche de vos activités et à la gestion harmonieuse entre actionnaires.') }}"
    :points="[
        __('Constitution de votre société'),
        __('Modification des statuts à la nouvelle loi sur les sociétés 2019'),
        __('Choix du statut, rédaction et modification des statuts (augmentation de capital, objet social, siège social, …)'),
        __('Convention entre actionnaires'),
        __('Fusion d’entreprise'),
        __('Liquidation et dissolution d’entreprise'),
        __('etc.')
    ]"
    image="{{ asset('build/assets/services/s3.jpeg') }}"
    image-position="left"
    cta-label="{{ __('Prendre rendez-vous') }}"
    cta-route="appointment"
/>



@endsection