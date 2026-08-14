<section
    id="equipe"
    class="home-team"
>

    <div class="container">

        {{-- =====================================================
             HEADER
        ====================================================== --}}
        <div class="home-team__header">

            <div class="home-team__heading">

                <span class="home-team__kicker animate-reveal-left">
                    L'ÉQUIPE
                </span>

                <h2 class="home-team__title animate-reveal-up animate-delay-1">
                    Nos Membres Associés.
                </h2>

            </div>


            {{-- =================================================
                 NAVIGATION CAROUSEL
            ================================================== --}}
            <div class="home-team__controls">

                <button
                    class="home-team__control"
                    type="button"
                    data-bs-target="#teamCarousel"
                    data-bs-slide="prev"
                    aria-label="{{ __('Membre précédent') }}"
                >
                    <i class="bi bi-arrow-left"></i>
                </button>


                <button
                    class="home-team__control"
                    type="button"
                    data-bs-target="#teamCarousel"
                    data-bs-slide="next"
                    aria-label="{{ __('Membre suivant') }}"
                >
                    <i class="bi bi-arrow-right"></i>
                </button>

            </div>

        </div>


        {{-- =====================================================
             CAROUSEL
        ====================================================== --}}
        <div
            id="teamCarousel"
            class="carousel slide home-team__carousel"
            data-bs-interval="false"
        >

            <div class="carousel-inner">


                {{-- =================================================
                     SLIDE 1
                ================================================== --}}
                <div class="carousel-item active">

                    <div class="row g-4">

                        {{-- Benoît GEUBELLE --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card animate-delay-1"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t1.jpeg') }}"
                                        alt="{{ __('Maître Benoît GEUBELLE') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                   Maître Benoît GEUBELLE
                                </h3>

                                <span class="home-team__role">
                                    Notaire titulaire
                                </span>

                            </article>

                        </div>


                        {{-- Marina RENIERS --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card animate-delay-2"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t2.jpeg') }}"
                                        alt="{{ __('Marina RENIERS') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                    Marina RENIERS
                                </h3>

                                <span class="home-team__role">
                                    Collaboratrice
                                </span>

                            </article>

                        </div>


                        {{-- Alicia MOLDES GONZALEZ --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card animate-delay-3"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t3.jpeg') }}"
                                        alt="{{ __('Alicia MOLDES GONZALEZ') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                    Alicia MOLDES GONZALEZ
                                </h3>

                                <span class="home-team__role">
                                    Juriste
                                </span>

                            </article>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     SLIDE 2
                ================================================== --}}
                <div class="carousel-item">

                    <div class="row g-4">

                        {{-- Eric BRASSEUR --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t4.jpeg') }}"
                                        alt="{{ __('Eric BRASSEUR') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                    Eric BRASSEUR
                                </h3>

                                <span class="home-team__role">
                                    Juriste
                                </span>

                            </article>

                        </div>


                        {{-- Luc POSSOZ --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t5.jpeg') }}"
                                        alt="{{ __('Luc POSSOZ') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                    Luc POSSOZ
                                </h3>

                                <span class="home-team__role">
                                    Notaire honoraire
                                </span>

                            </article>

                        </div>


                        {{-- Eline DEMUYNCK --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t6.jpeg') }}"
                                        alt="{{ __('Eline DEMUYNCK') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                   Eline DEMUYNCK
                                </h3>

                                <span class="home-team__role">
                                    Collaboratrice
                                </span>

                            </article>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     SLIDE 3
                ================================================== --}}
                <div class="carousel-item">

                    <div class="row g-4 justify-content-center">

                        {{-- Océane FEUILLET --}}
                        <div class="col-12 col-md-6 col-lg-4">

                            <article
                                class="home-team__card animate-team-card"
                            >

                                <div class="home-team__photo">

                                    <img
                                        src="{{ asset('build/assets/t7.jpeg') }}"
                                        alt="{{ __('Océane FEUILLET') }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h3 class="home-team__name">
                                    Océane FEUILLET
                                </h3>

                                <span class="home-team__role">
                                    Juriste
                                </span>

                            </article>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             INDICATEURS
        ====================================================== --}}
        <div class="carousel-indicators home-team__indicators">

            <button
                type="button"
                data-bs-target="#teamCarousel"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="{{ __('Équipe - page 1') }}"
            ></button>

            <button
                type="button"
                data-bs-target="#teamCarousel"
                data-bs-slide-to="1"
                aria-label="{{ __('Équipe - page 2') }}"
            ></button>

            <button
                type="button"
                data-bs-target="#teamCarousel"
                data-bs-slide-to="2"
                aria-label="{{ __('Équipe - page 3') }}"
            ></button>

        </div>

    </div>

</section>