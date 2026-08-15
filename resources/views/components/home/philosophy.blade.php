<section
    id="philosophie"
    class="home-philosophy"
>

    {{-- =====================================================
         IMAGE DE FOND
    ====================================================== --}}
    <div class="home-philosophy__background animate-zoom-out">

        <img
            src="{{ asset('build/assets/new/im7.jpeg') }}"
            alt="{{ __('Une famille réunie dans un intérieur chaleureux') }}"
            loading="lazy"
        >

    </div>


    {{-- =====================================================
         OVERLAY BORDEAUX
    ====================================================== --}}
    <div class="home-philosophy__overlay"></div>


    {{-- =====================================================
         CONTENU
    ====================================================== --}}
    <div class="container">

        <div class="home-philosophy__content animate-reveal-left">

            {{-- Ligne décorative --}}
            <div class="home-philosophy__line"></div>


            <div class="home-philosophy__text">

                {{-- Titre --}}
                <h2 class="home-philosophy__title animate-fade-in-up animate-delay-1">
                    {{ __('Chaque histoire est unique, chaque conseil doit l’être aussi.') }}
                </h2>


                {{-- Description --}}
                <p class="home-philosophy__description animate-fade-in-up animate-delay-2">
                    {{ __('Votre vie et vos projets méritent une attention et un engagement sur mesure dans un cadre de confiance.') }}
                </p>


                {{-- =================================================
                     LIEN PHILOSOPHIE
                ================================================== --}}
                <div
    class="home-philosophy__statement animate-fade-in-up animate-delay-3"
>
    <span class="home-philosophy__icon">
        <i class="bi bi-compass"></i>
    </span>

    <span class="home-philosophy__statement-text">
        {{ __('NOTRE VISION') }}
    </span>
</div>

            </div>

        </div>

    </div>

</section>