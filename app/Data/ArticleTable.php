<?php

namespace App\Data;

class ArticleTable
{
    public static function all(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | 1. IMMOBILIER
            |--------------------------------------------------------------------------
            */

            1 => [
                'id' => 1,

                'category' => 'IMMOBILIER',

                'title' => 'Acheter un bien immobilier en Belgique : les étapes à connaître avant de signer',

                'description' => 'Découvrez les principales étapes à connaître avant de concrétiser votre projet d’achat immobilier en Belgique.',

                'date' => '12 Jan 2025',

                'image' => 'build/assets/services/s.jpeg',

                'content' => [

                    [
                        'title' => '1. Avant l’achat : bien préparer son projet immobilier',

                        'content' => 'Acheter un bien immobilier est une décision importante qui mérite d’être préparée avec attention. Avant de faire une offre, il est essentiel de définir son budget, en tenant compte non seulement du prix du bien, mais aussi des différents frais liés à l’acquisition. Il faut notamment prévoir les frais d’acte, les droits d’enregistrement ou la TVA selon le type de bien, ainsi que les éventuels frais liés au financement. Une estimation claire de sa capacité financière permet d’éviter les mauvaises surprises et de rechercher un bien adapté à sa situation.

                        Il est également recommandé de vérifier attentivement les caractéristiques du bien avant de s’engager. Sa situation urbanistique, son état, les éventuelles servitudes, les charges de copropriété ou encore certains documents administratifs peuvent avoir une influence importante sur l’achat. Le notaire peut accompagner l’acquéreur dans ces vérifications et l’aider à comprendre les aspects juridiques de la transaction.',
                    ],

                    [
                        'title' => '2. L’offre et le compromis de vente : des engagements à prendre au sérieux',

                        'content' => 'Une fois le bien trouvé, l’acheteur peut être amené à formuler une offre. Cette étape ne doit pas être prise à la légère : selon son contenu et les circonstances, une offre peut engager juridiquement son auteur. Il est donc préférable de s’assurer que les principales conditions de l’achat sont clairement définies avant de la signer. Lorsque l’offre est acceptée, les parties peuvent ensuite conclure un compromis de vente, qui fixe les conditions de la transaction.

                        Le compromis constitue une étape essentielle puisqu’il formalise l’accord entre le vendeur et l’acheteur. Il précise notamment le prix, les conditions de la vente et les éventuelles conditions suspensives, comme l’obtention d’un crédit hypothécaire. Le notaire intervient ensuite pour effectuer les différentes vérifications nécessaires et préparer l’acte authentique. Même si le compromis est parfois appelé « compromis de vente », il ne s’agit pas d’un simple document provisoire : il constitue un engagement important pour les deux parties.',
                    ],

                    [
                        'title' => '3. L’acte authentique : finaliser officiellement l’achat',

                        'content' => 'Après la signature du compromis, plusieurs démarches sont réalisées avant la signature de l’acte authentique. Le notaire effectue les recherches et contrôles nécessaires afin de vérifier la situation juridique et administrative du bien et de préparer la vente dans les meilleures conditions. Cette période permet également de réunir les documents nécessaires et, lorsque l’achat est financé par un emprunt, de coordonner la signature de l’acte de crédit hypothécaire avec celle de l’acte de vente.

                        La signature de l’acte authentique marque la finalisation de la transaction. Le solde du prix est alors payé et la propriété est officiellement transférée à l’acquéreur, sous réserve des modalités prévues dans l\'acte. Le notaire assure également les formalités nécessaires après la signature. Pour l’acquéreur, être accompagné dès les premières étapes permet donc de mieux comprendre ses engagements, d’anticiper les frais et de sécuriser son projet immobilier.',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | 2. IMMOBILIER
            |--------------------------------------------------------------------------
            */

            2 => [
                'id' => 2,

                'category' => 'IMMOBILIER',

                'title' => 'Quels frais prévoir lors de l’achat d’un bien immobilier en Belgique ?',

                'description' => 'Prix du bien, taxes, frais d’acte et financement : découvrez les principaux coûts à anticiper lors d’un achat immobilier en Belgique.',

                'date' => '05 Fev 2025',

                'image' => 'build/assets/blog/d.jpeg',

                'content' => [

                    [
                        'title' => '1. Le prix du bien ne représente pas le coût total de l’achat',

                        'content' => 'Lorsqu’on prépare l’achat d’un logement en Belgique, il est important de ne pas se limiter au prix affiché par le vendeur. À ce montant s’ajoutent plusieurs frais liés à la transaction, dont certains sont incontournables. Le montant à prévoir dépend notamment de la Région dans laquelle se situe le bien, de sa nature et de la situation de l’acquéreur. Anticiper ces coûts permet de déterminer plus précisément son budget et d’éviter de mauvaises surprises au moment de la signature.

                        Parmi les principaux frais figurent notamment les droits d’enregistrement ou, dans certaines situations, la TVA. Le régime applicable peut varier selon qu’il s’agit d’un logement existant ou d’une construction neuve, ainsi que selon les conditions propres à l’acquéreur. Il est donc important de vérifier dès le début du projet quel régime fiscal s’applique à l’achat envisagé.',
                    ],

                    [
                        'title' => '2. Les frais liés à l’acte notarié et au financement',

                        'content' => 'L’acquisition d’un bien immobilier implique également des frais liés à l’intervention du notaire. Ceux-ci comprennent notamment les honoraires du notaire, ainsi que différents frais administratifs et débours nécessaires à la réalisation de l’acte. Le notaire joue un rôle essentiel dans la sécurisation juridique de la transaction et dans l’accomplissement des formalités nécessaires au transfert de propriété.

                        Lorsque l’achat est financé par un crédit hypothécaire, il faut également tenir compte des frais liés à l’acte de crédit. Selon la situation, cela peut comprendre notamment certains droits, honoraires et frais administratifs. Ces dépenses viennent s’ajouter au coût du financement et doivent donc être intégrées dans le calcul global du budget avant de s’engager.',
                    ],

                    [
                        'title' => '3. Comment bien anticiper son budget d’achat ?',

                        'content' => 'Avant de signer une offre ou un compromis, il est conseillé d’établir une estimation complète du coût de l’opération. Le prix du bien, les taxes, les frais d’acte, les éventuels frais liés au crédit ainsi que les dépenses nécessaires après l’acquisition doivent être pris en compte. Une vision globale permet de déterminer le montant réellement nécessaire et d’adapter, si besoin, son projet immobilier.

                        Le notaire peut accompagner l’acquéreur dans cette préparation en lui permettant de mieux comprendre les frais liés à son projet et les démarches à accomplir. Chaque situation étant différente, une estimation personnalisée reste préférable à une simple règle générale. Bien préparer son budget en amont permet ainsi d’aborder l’achat immobilier avec davantage de sérénité et de prendre une décision en toute connaissance de cause.',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | 3. IMMOBILIER
            |--------------------------------------------------------------------------
            */

            3 => [
                'id' => 3,

                'category' => 'IMMOBILIER',

                'title' => 'Vendre son bien immobilier : que fait réellement le notaire et quelles sont les étapes ?',

                'description' => 'Découvrez les principales étapes d’une vente immobilière et le rôle du notaire dans la préparation et la sécurisation de la transaction.',

                'date' => '19 Mars 2025',

                'image' => 'build/assets/new/im4.jpeg',

                'content' => [

                    [
                        'title' => '1. Préparer la vente et réunir les documents nécessaires',

                        'content' => 'La vente d’un bien immobilier ne commence pas le jour de la signature chez le notaire. Plusieurs démarches doivent être réalisées en amont afin de vérifier que le bien peut être vendu dans de bonnes conditions. Le vendeur doit notamment réunir différents documents concernant le logement, sa situation administrative, énergétique et, lorsqu’il s’agit d’un appartement, la copropriété. Ces informations permettent au futur acquéreur de disposer d’une vision claire du bien avant de s’engager.

                        Le notaire accompagne le vendeur dans cette préparation et effectue les recherches juridiques nécessaires. Il vérifie notamment la situation de propriété du bien, les éventuelles hypothèques, servitudes ou autres éléments susceptibles d’avoir une incidence sur la vente. Cette étape permet d’identifier suffisamment tôt les éventuelles difficultés et de préparer une transaction sécurisée.',
                    ],

                    [
                        'title' => '2. De l’offre au compromis de vente',

                        'content' => 'Une fois l’acquéreur trouvé, celui-ci peut formuler une offre d’achat. Cette étape doit être prise au sérieux, car une offre peut avoir des conséquences juridiques selon ses conditions et son acceptation. Il est donc préférable de faire vérifier son contenu avant de s’engager, notamment lorsque certaines conditions particulières doivent être prévues.

                        Lorsque les parties sont d’accord, elles peuvent signer un compromis de vente. Ce document précise les principales conditions de la transaction : identité des parties, description du bien, prix, modalités de paiement et éventuelles conditions suspensives. Le compromis constitue un engagement important pour le vendeur comme pour l’acheteur. Le notaire poursuit ensuite les différentes vérifications nécessaires à la préparation de l’acte authentique.',
                    ],

                    [
                        'title' => '3. La signature de l’acte authentique et le transfert de propriété',

                        'content' => 'Après le compromis, le notaire accomplit les formalités nécessaires avant la signature définitive. Il vérifie notamment les informations relatives au bien et s’assure que les conditions nécessaires à la vente sont réunies. Cette période permet également de préparer les documents définitifs et de régler les différents aspects administratifs et financiers de la transaction.

                        La vente est officiellement finalisée lors de la signature de l’acte authentique. Le prix est payé selon les modalités prévues et la propriété est transférée à l’acquéreur conformément à l’acte. Le notaire effectue ensuite les formalités nécessaires pour assurer l’opposabilité de la vente. Pour le vendeur, son accompagnement permet donc de sécuriser chaque étape, depuis la préparation du dossier jusqu’à la finalisation de la transaction.',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | 4. SUCCESSION
            |--------------------------------------------------------------------------
            */

            4 => [
                'id' => 4,

                'category' => 'SUCCESSION',

                'title' => 'Succession en Belgique : que se passe-t-il après le décès d’un proche ?',

                'description' => 'Comprendre les principales étapes d’une succession en Belgique permet aux héritiers d’aborder les démarches avec davantage de sérénité.',

                'date' => '28 Juil 2025',

                'image' => 'build/assets/new/im3.jpeg',

                'content' => [

                    [
                        'title' => '1. Comprendre ce qui se passe au moment du décès',

                        'content' => 'Lorsqu’un proche décède, sa succession s’ouvre automatiquement. Son patrimoine, comprenant notamment ses biens, ses comptes, ses placements et éventuellement ses dettes, doit alors être identifié afin de déterminer ce qui revient aux héritiers. La première étape consiste à établir qui sont les personnes appelées à la succession et à vérifier s’il existe un testament ou d’autres dispositions prises par le défunt.

                        Les héritiers ne sont toutefois pas toujours obligés d’accepter la succession sans réserve. Selon leur situation, ils peuvent notamment accepter la succession, l’accepter sous bénéfice d’inventaire ou y renoncer. Ce choix mérite d’être réfléchi, particulièrement lorsque le défunt pouvait avoir des dettes. Le notaire peut accompagner les héritiers dans cette démarche et les aider à comprendre les conséquences de chaque option.',
                    ],

                    [
                        'title' => '2. Identifier les biens, les dettes et les droits des héritiers',

                        'content' => 'Une succession peut comprendre des éléments très différents : maison ou appartement, comptes bancaires, véhicules, investissements, parts d’entreprise ou encore objets de valeur. Elle peut également comporter des emprunts ou d’autres dettes. Il est donc nécessaire d’établir une situation complète du patrimoine du défunt avant de procéder au partage entre les héritiers.

                        Le notaire intervient notamment pour vérifier la situation juridique des biens, rechercher certains éléments du patrimoine et déterminer les droits de chaque héritier. Lorsqu’il existe plusieurs héritiers, il peut également accompagner les parties dans l’organisation du partage. L’objectif est de permettre une transmission aussi claire et sécurisée que possible, tout en tenant compte des dispositions légales et des éventuelles volontés exprimées par le défunt.',
                    ],

                    [
                        'title' => '3. Le règlement de la succession et les droits de succession',

                        'content' => 'Le règlement d’une succession implique également des obligations fiscales. Selon la Région compétente et la situation des héritiers, des droits de succession peuvent être dus sur le patrimoine transmis. Leur montant dépend notamment de la valeur des biens reçus et du lien de parenté entre le défunt et les héritiers. Il est donc important d’anticiper ces aspects afin de connaître les conséquences financières de la succession.

                        Le notaire peut accompagner les héritiers dans les différentes formalités liées au règlement de la succession, notamment dans la préparation des documents nécessaires et dans les démarches fiscales. Chaque succession étant différente, une analyse personnalisée est essentielle. Faire appel à un notaire permet ainsi aux héritiers d’être accompagnés dans une période souvent difficile et de régler la succession dans un cadre juridique sécurisé.',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | 5. PATRIMOINE
            |--------------------------------------------------------------------------
            */

            5 => [
                'id' => 5,

                'category' => 'PATRIMOINE',

                'title' => 'Comment protéger et transmettre son patrimoine en Belgique ? Les solutions à connaître',

                'description' => 'Découvrez les principales solutions permettant de protéger, organiser et transmettre son patrimoine en Belgique.',

                'date' => '01 Août 2025',

                'image' => 'build/assets/blog/p5.jpeg',

                'content' => [

                    [
                        'title' => '1. Anticiper pour mieux protéger son patrimoine',

                        'content' => 'La constitution d’un patrimoine est souvent le résultat de nombreuses années de travail, d’épargne et d’investissements. Pourtant, la question de sa protection et de sa transmission est parfois repoussée à plus tard. Anticiper permet pourtant de mieux organiser ses biens et de tenir compte de sa situation familiale, professionnelle et financière. Une bonne planification patrimoniale permet notamment de réfléchir à ce que l’on souhaite transmettre, aux personnes que l’on souhaite protéger et aux conditions dans lesquelles cette transmission doit s’effectuer.

                        La situation de chaque personne étant différente, il n’existe pas une solution unique pour protéger son patrimoine. Le régime matrimonial, la composition de la famille, la nature des biens détenus ou encore l’existence d’une entreprise peuvent avoir une influence importante sur les choix à envisager. Un accompagnement notarial permet d’analyser ces différents éléments et de construire une organisation adaptée aux objectifs de chacun.',
                    ],

                    [
                        'title' => '2. Donation, testament et autres outils de transmission',

                        'content' => 'Plusieurs mécanismes peuvent être utilisés pour organiser la transmission d’un patrimoine. La donation peut, dans certaines situations, permettre de transmettre une partie de ses biens de son vivant, tout en définissant certaines conditions. Le testament permet quant à lui d’exprimer ses dernières volontés et d’organiser la transmission de ses biens dans le respect des règles successorales applicables.

                        D’autres outils peuvent également jouer un rôle dans une stratégie patrimoniale, notamment le contrat de mariage ou certaines dispositions relatives à la propriété des biens. Le choix d’un mécanisme dépend toujours de la situation personnelle et des objectifs poursuivis. Il est donc important de ne pas se limiter à une solution prise isolément, mais de considérer l’ensemble du patrimoine et les conséquences juridiques et fiscales des décisions envisagées.',
                    ],

                    [
                        'title' => '3. Préparer la transmission de son patrimoine avec un notaire',

                        'content' => 'Une planification patrimoniale efficace ne consiste pas uniquement à transmettre des biens. Elle vise également à préserver les intérêts de la personne qui transmet et à anticiper les éventuelles difficultés entre héritiers. Préparer sa succession à l’avance peut notamment permettre de clarifier ses volontés, de faciliter les démarches futures et, dans certaines situations, d’anticiper les conséquences fiscales de la transmission.

                        Le notaire peut accompagner cette réflexion à différentes étapes de la vie et adapter les solutions lorsque la situation évolue. Mariage, naissance d’un enfant, acquisition d’un bien, création d’une entreprise ou changement de situation familiale peuvent être autant d’occasions de revoir son organisation patrimoniale. Anticiper sa transmission, c’est donc avant tout prendre le temps de réfléchir à l’avenir et de mettre en place un cadre adapté à ses volontés.',
                    ],

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | 6. ENTREPRISE
            |--------------------------------------------------------------------------
            */

            6 => [
                'id' => 6,

                'category' => 'ENTREPRISE',

                'title' => 'Créer une entreprise en Belgique : pourquoi faire appel au notaire et quelles sont les étapes ?',

                'description' => 'Découvrez les principales étapes de la création d’une entreprise en Belgique et le rôle du notaire dans la constitution de la société.',

                'date' => '02 Août 2025',

                'image' => 'build/assets/blog/b.jpeg',

                'content' => [

                    [
                        'title' => '1. Choisir la forme juridique adaptée à son projet',

                        'content' => 'Créer une entreprise est une étape importante qui nécessite de faire plusieurs choix avant de commencer son activité. Parmi les premières décisions figure le choix de la forme juridique. En Belgique, la société à responsabilité limitée (SRL) est notamment utilisée par de nombreux entrepreneurs, mais d’autres formes de sociétés peuvent être envisagées selon le projet, le nombre d’associés et les objectifs poursuivis.

                        Ce choix ne doit pas être fait uniquement en fonction de la simplicité de création. Il peut avoir des conséquences sur la responsabilité des associés, l’organisation de la société, le financement du projet et sa gouvernance. Le notaire peut accompagner les futurs associés dans cette réflexion et les aider à mettre en place une structure cohérente avec leur projet entrepreneurial.',
                    ],

                    [
                        'title' => '2. Préparer les statuts et constituer la société',

                        'content' => 'Une fois la forme juridique choisie, plusieurs démarches sont nécessaires pour constituer la société. Les futurs associés doivent notamment définir les règles qui organiseront son fonctionnement : répartition des parts, pouvoirs des dirigeants, prise de décisions, droits des associés et modalités de fonctionnement de la société. Ces éléments sont notamment repris dans les statuts.

                        Dans les cas où l’intervention d’un notaire est requise, celui-ci établit l’acte constitutif et veille au respect des formalités légales. Il peut également attirer l’attention des fondateurs sur certains choix importants à effectuer avant la constitution. Cette étape est essentielle, car les statuts constituent le cadre juridique dans lequel la société évoluera.',
                    ],

                    [
                        'title' => '3. Après la constitution : donner vie à l’entreprise',

                        'content' => 'La signature de l’acte de constitution ne constitue pas la fin du processus. Après la création de la société, plusieurs formalités doivent encore être accomplies pour permettre à l’entreprise de démarrer son activité dans de bonnes conditions. Selon le projet, cela peut notamment concerner l’inscription à la Banque-Carrefour des Entreprises, l’activation de la TVA, l’ouverture d’un compte bancaire professionnel ou encore certaines démarches liées à l’activité exercée.

                        Le rôle du notaire ne se limite cependant pas à la création de la société. Il peut également accompagner l’entrepreneur lors d’étapes importantes de la vie de l’entreprise : modification des statuts, entrée ou sortie d’un associé, réorganisation, transmission ou dissolution. Pour un entrepreneur, bénéficier d’un accompagnement juridique dès le départ permet ainsi de construire une entreprise sur des bases solides et d’anticiper les évolutions futures.',
                    ],

                ],
            ],

        ];
    }


    public static function find(int $id): ?array
    {
        return self::all()[$id] ?? null;
    }
}