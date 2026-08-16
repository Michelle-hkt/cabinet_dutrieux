@props([
    'title',
    'image',
    'description',
    'category' => null,
    'date' => null,
    'blogLabel' => 'Lire l’article',
    'blogRoute' => null,
    'blogRouteParameter' => null,
])


<article class="blog-card">

    {{-- =====================================================
         IMAGE
    ====================================================== --}}

    <div class="blog-card__image-wrapper animate-zoom-out">

        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="blog-card__image"
            loading="lazy"
        >

    </div>


    {{-- =====================================================
         CONTENT
    ====================================================== --}}

    <div class="blog-card__content">

        @if($category)

            <span class="blog-card__category animate-fade-in-up">
                {{ $category }}
            </span>

        @endif


        <h2 class="blog-card__title animate-reveal-up">
            {{ $title }}
        </h2>


        <p class="blog-card__description animate-fade-in-up animate-delay-1">
            {{ $description }}
        </p>


        {{-- =================================================
             FOOTER
        ================================================== --}}

        <div class="blog-card__footer animate-fade-in-up animate-delay-2">

            @if($date)

                <time class="blog-card__date">
                    {{ $date }}
                </time>

            @endif


            @if($blogRoute)

                <a
                    href="{{ route($blogRoute, $blogRouteParameter) }}"
                    class="blog-card__link"
                    aria-label="{{ $blogLabel }} : {{ $title }}"
                >

                    <span>
                        {{ $blogLabel }}
                    </span>

                    <i class="bi bi-arrow-right"></i>

                </a>

            @endif

        </div>

    </div>

</article>