<section
    id="services"
    class="home-expertise"
>
    <div class="container">

        {{-- =====================================================
             HEADER
        ====================================================== --}}
        <div class="home-expertise__header">

            <span class="home-expertise__kicker animate-reveal-left">
                {{ __('NOS DOMAINES D’EXPERTISE') }}
            </span>

            <h2 class="home-expertise__title animate-reveal-up animate-delay-1">
                {{ __('Des expertises variées pour des situations uniques.') }}
            </h2>

        </div>


        {{-- =====================================================
             SERVICES
        ====================================================== --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4 home-expertise__grid">

            {{-- =================================================
                 IMMOBILIER
            ================================================== --}}
            <div class="col">
                <article class="home-expertise__card animate-scale-in animate-delay-1">

                    <div class="home-expertise__card-content">

                        <div class="home-expertise__icon">
                            <i class="bi bi-house"></i>
                        </div>

                        <h3 class="home-expertise__card-title">
                            {{ __('IMMOBILIER') }}
                        </h3>

                        <p class="home-expertise__card-description">
                            {{ __('Conseiller vos projets immobiliers, de l’achat à la vente.') }}
                        </p>

                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="home-expertise__link"
                    >
                        {{ __('En savoir plus') }}
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>
            </div>


            {{-- =================================================
                 FAMILLE
            ================================================== --}}
            <div class="col">
                <article class="home-expertise__card animate-scale-in animate-delay-2">

                    <div class="home-expertise__card-content">

                        <div class="home-expertise__icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <h3 class="home-expertise__card-title">
                            {{ __('FAMILLE') }}
                        </h3>

                        <p class="home-expertise__card-description">
                            {{ __('Organiser et sécuriser les décisions importantes de votre vie familiale.') }}
                        </p>

                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="home-expertise__link"
                    >
                        {{ __('En savoir plus') }}
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>
            </div>


            {{-- =================================================
                 SUCCESSIONS
            ================================================== --}}
            <div class="col">
                <article class="home-expertise__card animate-scale-in animate-delay-3">

                    <div class="home-expertise__card-content">

                        <div class="home-expertise__icon">
                            <i class="bi bi-archive"></i>
                        </div>

                        <h3 class="home-expertise__card-title">
                            {{ __('SUCCESSIONS') }}
                        </h3>

                        <p class="home-expertise__card-description">
                            {{ __('Organiser et sécuriser la transmission de votre patrimoine.') }}
                        </p>

                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="home-expertise__link"
                    >
                        {{ __('En savoir plus') }}
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>
            </div>


            {{-- =================================================
                 PATRIMOINE
            ================================================== --}}
            <div class="col">
                <article class="home-expertise__card animate-scale-in animate-delay-4">

                    <div class="home-expertise__card-content">

                        <div class="home-expertise__icon">
                            <i class="bi bi-wallet2"></i>
                        </div>

                        <h3 class="home-expertise__card-title">
                            {{ __('PATRIMOINE') }}
                        </h3>

                        <p class="home-expertise__card-description">
                            {{ __('Structurer et protéger votre patrimoine selon vos objectifs.') }}
                        </p>

                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="home-expertise__link"
                    >
                        {{ __('En savoir plus') }}
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>
            </div>


            {{-- =================================================
                 ENTREPRISES
            ================================================== --}}
            <div class="col">
                <article class="home-expertise__card animate-scale-in animate-delay-5">

                    <div class="home-expertise__card-content">

                        <div class="home-expertise__icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <h3 class="home-expertise__card-title">
                            {{ __('ENTREPRISES') }}
                        </h3>

                        <p class="home-expertise__card-description">
                            {{ __('Accompagner les entrepreneurs dans leurs opérations juridiques.') }}
                        </p>

                    </div>

                    <a
                        href="{{ route('services') }}"
                        class="home-expertise__link"
                    >
                        {{ __('En savoir plus') }}
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </article>
            </div>

        </div>

    </div>
</section>