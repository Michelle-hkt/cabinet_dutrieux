<section
    id="approche"
    class="home-approach"
>

    {{-- =====================================================
         MOTIF DÉCORATIF
    ====================================================== --}}
    <div
        class="home-approach__decoration"
        aria-hidden="true"
    >
        <i class="bi bi-building"></i>
    </div>


    <div class="container">

        {{-- =====================================================
             HEADER
        ====================================================== --}}
        <div class="home-approach__header">

            <span class="home-approach__kicker animate-reveal-left">
                {{ __('NOTRE APPROCHE') }}
            </span>

            <h2
                class="home-approach__title animate-reveal-up animate-delay-1"
            >
                {{ __('Une méthode claire, humaine et structurée.') }}
            </h2>

            <p
                class="home-approach__subtitle animate-fade-in-up animate-delay-2"
            >
                {{ __('Nous vous accompagnons à chaque étape avec une méthode éprouvée.') }}
            </p>

        </div>


        {{-- =====================================================
             TIMELINE
        ====================================================== --}}
        <div class="home-approach__timeline">

            {{-- Ligne --}}
            <div
                class="home-approach__line animate-line-grow"
                aria-hidden="true"
            ></div>


            {{-- =================================================
                 ÉTAPE 01 — ÉCOUTER
            ================================================== --}}
            <article
                class="home-approach__step animate-scale-in animate-delay-1"
            >

                <div class="home-approach__circle">
                    <i class="bi bi-ear"></i>
                </div>

                <div class="home-approach__step-content">

                    <span class="home-approach__number">
                        01
                    </span>

                    <h3 class="home-approach__step-title">
                        {{ __('ÉCOUTER') }}
                    </h3>

                    <p class="home-approach__step-description">
                        {{ __('Comprendre votre situation, vos besoins et vos attentes.') }}
                    </p>

                </div>

            </article>


            {{-- =================================================
                 ÉTAPE 02 — ANALYSER
            ================================================== --}}
            <article
                class="home-approach__step animate-scale-in animate-delay-2"
            >

                <div class="home-approach__circle">
                    <i class="bi bi-search"></i>
                </div>

                <div class="home-approach__step-content">

                    <span class="home-approach__number">
                        02
                    </span>

                    <h3 class="home-approach__step-title">
                        {{ __('ANALYSER') }}
                    </h3>

                    <p class="home-approach__step-description">
                        {{ __('Identifier les enjeux juridiques et les solutions possibles.') }}
                    </p>

                </div>

            </article>


            {{-- =================================================
                 ÉTAPE 03 — CONSEILLER
            ================================================== --}}
            <article
                class="home-approach__step animate-scale-in animate-delay-3"
            >

                <div class="home-approach__circle">
                    <i class="bi bi-pen"></i>
                </div>

                <div class="home-approach__step-content">

                    <span class="home-approach__number">
                        03
                    </span>

                    <h3 class="home-approach__step-title">
                        {{ __('CONSEILLER') }}
                    </h3>

                    <p class="home-approach__step-description">
                        {{ __('Vous proposer des solutions adaptées et un avis objectif.') }}
                    </p>

                </div>

            </article>


            {{-- =================================================
                 ÉTAPE 04 — SÉCURISER
            ================================================== --}}
            <article
                class="home-approach__step animate-scale-in animate-delay-4"
            >

                <div class="home-approach__circle">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="home-approach__step-content">

                    <span class="home-approach__number">
                        04
                    </span>

                    <h3 class="home-approach__step-title">
                        {{ __('SÉCURISER') }}
                    </h3>

                    <p class="home-approach__step-description">
                        {{ __('Rédiger les actes et sécuriser vos décisions de façon pérenne.') }}
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>