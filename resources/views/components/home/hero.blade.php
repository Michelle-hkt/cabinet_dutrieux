<section class="home-hero">

    {{-- Image de fond --}}
    <div class="home-hero__background animate-zoom-out"></div>


    {{-- Forme rouge --}}
    <div class="home-hero__shape animate-fade-in-left animate-delay-100"></div>


    {{-- Contenu --}}
    <div class="container home-hero__container">

        <div class="row h-100 align-items-center">

            <div class="col-lg-7">

                <div class="home-hero__content">

                    <h1 class="home-hero__title animate-fade-in-up animate-delay-500">
                        {{ __('HERO_TITRE_PART_1') }}
                        <br>
                        {{ __('HERO_TITRE_PART_2') }}
                    </h1>


                    <p class="home-hero__description animate-fade-in-up animate-delay-700">
                        {{ __('HERO_DESCRIPTION') }}
                    </p>


                    <div class="home-hero__actions animate-fade-in-up animate-delay-900">

                        <a
                            href="{{ route('services') }}"
                            class="btn home-hero__button home-hero__button--primary"
                        >
                            {{ __('HERO_BTN_1') }}
                        </a>


                        <a
                            href="{{ route('contact') }}"
                            class="btn home-hero__button home-hero__button--outline"
                        >
                            {{ __('HERO_BTN_2') }}
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>