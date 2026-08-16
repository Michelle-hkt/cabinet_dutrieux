@props([
    'articles',
])

<section class="blog-section">

    <div class="container">

        {{-- =====================================================
             HEADER
        ====================================================== --}}

        <div class="blog-section__header">

            <h1 class="blog-section__title animate-reveal-up">
                {{ __('Nos articles') }}
            </h1>

        </div>


        {{-- =====================================================
             ARTICLES
        ====================================================== --}}

        <div class="row g-4 blog-grid">

            @foreach($articles as $article)

                <div class="col-12 col-md-6 col-lg-4">

                    <x-blog.blog-item
                        :title="$article['title']"
                        :description="$article['description']"
                        :category="$article['category']"
                        :date="$article['date']"
                        :image="asset($article['image'])"
                        blog-label="{{ __('Lire l’article') }}"
                        blog-route="blog.show"
                        :blog-route-parameter="['id' => $article['id']]"
                    />

                </div>

            @endforeach

        </div>


        {{-- =====================================================
             PAGINATION
        ====================================================== --}}

        <nav
            class="blog-pagination"
            aria-label="{{ __('Pagination des articles') }}"
        >

            <ul class="pagination">

                <li class="page-item">

                    <a
                        class="page-link blog-pagination__arrow"
                        href="#"
                        aria-label="{{ __('Page précédente') }}"
                    >
                        <i class="bi bi-chevron-left"></i>
                    </a>

                </li>

                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>

                <li class="page-item">

                    <a
                        class="page-link blog-pagination__arrow"
                        href="#"
                        aria-label="{{ __('Page suivante') }}"
                    >
                        <i class="bi bi-chevron-right"></i>
                    </a>

                </li>

            </ul>

        </nav>

    </div>

</section>