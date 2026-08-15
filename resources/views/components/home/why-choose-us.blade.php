<section
    id="pourquoi-nous"
    class="home-why-us"
>

    <div class="container">

        <div class="row g-5 align-items-center">

            {{-- =====================================================
                 COLONNE GAUCHE — CONTENU
            ====================================================== --}}
            <div class="col-lg-6">

                <div class="home-why-us__content">

                    {{-- Kicker --}}
                    <span class="home-why-us__kicker animate-reveal-left">
                        {{ __('POURQUOI NOUS CHOISIR') }}
                    </span>


                    {{-- Titre --}}
                    <h2 class="home-why-us__title animate-reveal-up animate-delay-1">
                        {{ __('Un accompagnement basé sur la confiance.') }}
                    </h2>


                    {{-- =================================================
                         POINTS FORTS
                    ================================================== --}}
                    <div class="home-why-us__points">

                        {{-- Réaction et proximité --}}
                        <article
                            class="home-why-us__point animate-fade-in-up animate-delay-2"
                        >

                            <div class="home-why-us__point-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <div class="home-why-us__point-content">

                                <h3 class="home-why-us__point-title">
                                    {{ __('Réaction et proximité') }}
                                </h3>

                                <p class="home-why-us__point-description">
                                    {{ __('Un interlocuteur dédié et disponible à chaque étape.') }}
                                </p>

                            </div>

                        </article>


                        {{-- Réactivité --}}
                        <article
                            class="home-why-us__point animate-fade-in-up animate-delay-3"
                        >

                            <div class="home-why-us__point-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <div class="home-why-us__point-content">

                                <h3 class="home-why-us__point-title">
                                    {{ __('Réactivité') }}
                                </h3>

                                <p class="home-why-us__point-description">
                                    {{ __('Nous vous répondons avec précision et efficacité.') }}
                                </p>

                            </div>

                        </article>


                        {{-- Solutions sur-mesure --}}
                        <article
                            class="home-why-us__point animate-fade-in-up animate-delay-4"
                        >

                            <div class="home-why-us__point-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <div class="home-why-us__point-content">

                                <h3 class="home-why-us__point-title">
                                    {{ __('Solutions sur-mesure') }}
                                </h3>

                                <p class="home-why-us__point-description">
                                    {{ __('Des conseils adaptés à votre situation et à vos objectifs.') }}
                                </p>

                            </div>

                        </article>

                    </div>

                </div>

            </div>


            {{-- =====================================================
                 COLONNE DROITE — IMAGE
            ====================================================== --}}
            <div class="col-lg-6">

                <div class="home-why-us__visual">

                    <div class="home-why-us__image animate-zoom-out">

                        <img
                            src="{{ asset('build/assets/new/im4.jpeg') }}"
                            alt="{{ __('Salle de réunion du cabinet') }}"
                            loading="lazy"
                        >

                    </div>


                    {{-- Badge --}}
                    <div
                        class="home-why-us__badge animate-scale-in animate-delay-4"
                    >
                        <i class="bi bi-plus-lg"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>