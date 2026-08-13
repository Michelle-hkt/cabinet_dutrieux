<section
    id="cabinet"
    class="home-cabinet"
>

    <div class="container">

        <div class="row g-5 align-items-center">

            {{-- =====================================================
                 COLONNE 1 — TEXTE
            ====================================================== --}}
            <div class="col-lg-4">

                <div class="home-cabinet__content">

                    {{-- Kicker --}}
                    <span class="home-cabinet__kicker animate-reveal-left">
                        {{ __('LE CABINET') }}
                    </span>

                    {{-- Titre --}}
                    <h2 class="home-cabinet__title animate-reveal-up animate-delay-1">
                        {{ __('Une expertise juridique au service de vos projets et de votre avenir.') }}
                    </h2>

                    {{-- Description --}}
                    <div class="home-cabinet__description animate-fade-in-up animate-delay-2">

                        <p>
                            {{ __('Notre mission est de vous apporter des conseils clairs, structurés et adaptés à chaque étape importante de votre vie.') }}
                        </p>

                        <p>
                            {{ __('Notre métier : l’humain, l’écoute et la rigueur au cœur de notre engagement.') }}
                        </p>

                    </div>

                    {{-- CTA --}}
                    <a
                        href="{{ route('services') }}"
                        class="home-cabinet__button animate-fade-in-up animate-delay-3"
                    >
                        {{ __('En savoir plus sur le cabinet') }}
                    </a>

                </div>

            </div>


            {{-- =====================================================
                 COLONNE 2 — VALEURS
            ====================================================== --}}
            <div class="col-lg-4">

                <div class="home-cabinet__values">

                    {{-- Écoute --}}
                    <article
                        class="home-cabinet__value animate-scale-in animate-delay-1"
                    >
                        <div class="home-cabinet__icon">
                            <i class="bi bi-ear"></i>
                        </div>

                        <h3 class="home-cabinet__value-title">
                            {{ __('Écoute') }}
                        </h3>

                        <p class="home-cabinet__value-description">
                            {{ __('Une écoute attentive pour comprendre vos besoins.') }}
                        </p>
                    </article>


                    {{-- Expertise --}}
                    <article
                        class="home-cabinet__value animate-scale-in animate-delay-2"
                    >
                        <div class="home-cabinet__icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <h3 class="home-cabinet__value-title">
                            {{ __('Expertise') }}
                        </h3>

                        <p class="home-cabinet__value-description">
                            {{ __('Une expertise technique solide et reconnue.') }}
                        </p>
                    </article>


                    {{-- Rigueur --}}
                    <article
                        class="home-cabinet__value animate-scale-in animate-delay-3"
                    >
                        <div class="home-cabinet__icon">
                            <i class="bi bi-card-checklist"></i>
                        </div>

                        <h3 class="home-cabinet__value-title">
                            {{ __('Rigueur') }}
                        </h3>

                        <p class="home-cabinet__value-description">
                            {{ __('Une méthode rigoureuse, précise et proactive.') }}
                        </p>
                    </article>


                    {{-- Confidentialité --}}
                    <article
                        class="home-cabinet__value animate-scale-in animate-delay-4"
                    >
                        <div class="home-cabinet__icon">
                            <i class="bi bi-lock"></i>
                        </div>

                        <h3 class="home-cabinet__value-title">
                            {{ __('Confidentialité') }}
                        </h3>

                        <p class="home-cabinet__value-description">
                            {{ __('Secret professionnel en toute discrétion.') }}
                        </p>
                    </article>

                </div>

            </div>


            {{-- =====================================================
                 COLONNE 3 — IMAGES
            ====================================================== --}}
            <div class="col-lg-4">

                <div class="home-cabinet__visual">

                    {{-- Grande image --}}
                    <div
                        class="home-cabinet__image home-cabinet__image--large animate-zoom-out"
                    >
                        <img
                            src="{{ asset('build/assets/img.png') }}"
                            alt="{{ __('Façade du cabinet') }}"
                            loading="lazy"
                        >
                    </div>


                    {{-- Petite image --}}
                    <div
                        class="home-cabinet__image home-cabinet__image--small animate-scale-in animate-delay-2"
                    >
                        <img
                            src="{{ asset('build/assets/img1.png') }}"
                            alt="{{ __('Intérieur élégant du cabinet') }}"
                            loading="lazy"
                        >

                        {{-- Badge --}}
                        <div class="home-cabinet__badge">
                            <i class="bi bi-house"></i>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>