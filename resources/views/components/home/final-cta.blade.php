<section
    id="contact"
    class="home-final-cta"
>
    {{-- =====================================================
         MOTIF DÉCORATIF
    ====================================================== --}}
    <div
        class="home-final-cta__pattern"
        aria-hidden="true"
    >
        <i class="bi bi-buildings"></i>
    </div>


    {{-- =====================================================
         CONTENU
    ====================================================== --}}
    <div class="container">

        <div class="home-final-cta__content">

            {{-- Titre --}}
            <h2 class="home-final-cta__title animate-reveal-up">
                {{ __('Parlons de votre projet') }}
            </h2>


            {{-- Description --}}
            <p class="home-final-cta__description animate-fade-in-up animate-delay-1">
                {{ __('Notre équipe est à votre écoute pour vous accompagner dans vos projets et sécuriser vos décisions.') }}
            </p>


            {{-- CTA --}}
            <a
                href="{{ route('contact') }}"
                class="home-final-cta__button animate-fade-in-up animate-delay-2"
            >
                <span>
                    {{ __('NOUS CONTACTER') }}
                </span>

                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>