@props([
    'title',
    'description',
    'points' => [],
    'image',
    'imagePosition' => 'right',
    'ctaLabel' => 'Prendre rendez-vous',
    'ctaRoute' => null,
])


<article
    class="service-card
        service-card--{{ $imagePosition }}"
>


    <div class="container">

        <div class="row align-items-center ">


            {{-- =====================================================
                 COLONNE TEXTE
            ====================================================== --}}
            <div
                class="
                    col-lg-6
                    service-card__text
                    {{ $imagePosition === 'left' ? 'order-lg-2' : 'order-lg-1' }}
                "
            >

                <div class="service-card__content">


                    {{-- Titre --}}
                    <h2 class="service-card__title animate-reveal-up">
                        {{ __($title) }}
                    </h2>


                    {{-- Description --}}
                    <p class="service-card__description animate-fade-in-up animate-delay-1">
                        {{ __($description) }}
                    </p>


                    {{-- =================================================
                         POINTS CLÉS
                    ================================================== --}}
                    @if(count($points) > 0)

                        <ul class="service-card__points">

                            @foreach($points as $index => $point)

                                <li
                                    class="service-card__point animate-fade-in-up animate-delay-{{ min($index + 2, 5) }}"
                                >

                                    <span class="service-card__point-icon">
                                        <i class="bi bi-check"></i>
                                    </span>

                                    <span class="service-card__point-text">
                                        {{ __($point) }}
                                    </span>

                                </li>

                            @endforeach

                        </ul>

                    @endif


                    {{-- =================================================
                         CTA
                    ================================================== --}}
                    @if($ctaRoute)

                        <a
                            href="{{ route($ctaRoute) }}"
                            class="service-card__button animate-fade-in-up animate-delay-4"
                        >
                            <span>
                                {{ __($ctaLabel) }}
                            </span>

                            <i class="bi bi-arrow-right"></i>
                        </a>

                    @endif


                </div>

            </div>



            {{-- =====================================================
                 COLONNE IMAGE
            ====================================================== --}}
            <div
                class="
                    col-lg-6
                    service-card__visual
                    {{ $imagePosition === 'left' ? 'order-lg-1' : 'order-lg-2' }}
                "
            >

                <div class="service-card__image-wrapper animate-zoom-out">

                    <img
                        src="{{ ($image) }}"
                        alt="{{ __($title) }}"
                        class="service-card__image"
                        loading="lazy"
                    >

                </div>

            </div>


        </div>

    </div>

</article>