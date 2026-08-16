@extends('layouts.blogLayout')

@section('title', config('app.name', 'Cabinet Dutrieux Notaires'))

@section('content')

<section class="blog-detail">

    <div class="container blog-detail__container">

        {{-- =====================================================
             HERO ARTICLE
        ====================================================== --}}

        <div class="blog-detail__hero">

            {{-- IMAGE --}}
            <div class="blog-detail__hero-image-wrapper">

                <img
                    src="{{ asset($article['image']) }}"
                    alt="{{ $article['title'] }}"
                    class="blog-detail__hero-image"
                >

            </div>


            {{-- INFORMATIONS ARTICLE --}}
            <div class="blog-detail__hero-content">

                @if(!empty($article['category']))
                    <span class="blog-detail__category">
                        {{ $article['category'] }}
                    </span>
                @endif


                <h1 class="blog-detail__title">
                    {{ $article['title'] }}
                </h1>


                @if(!empty($article['description']))
                    <p class="blog-detail__excerpt">
                        {{ $article['description'] }}
                    </p>
                @endif


                <div class="blog-detail__meta">

                    @if(!empty($article['date']))
                        <span class="blog-detail__meta-item">
                            <i class="bi bi-calendar3" aria-hidden="true"></i>
                            <span>{{ $article['date'] }}</span>
                        </span>
                    @endif

                    <span class="blog-detail__meta-separator">•</span>

                    <span class="blog-detail__meta-item">
                        <i class="bi bi-clock" aria-hidden="true"></i>
                        <span>{{ $article['reading_time'] ?? '6 min de lecture' }}</span>
                    </span>

                </div>

            </div>

        </div>


        {{-- =====================================================
             CONTENU ARTICLE
        ====================================================== --}}

        <div class="blog-detail__body">

            @foreach($article['content'] as $section)

                <div class="blog-detail__section">

                    @if(!empty($section['title']))
                        <h2 class="blog-detail__section-title">
                            {{ $section['title'] }}
                        </h2>
                    @endif


                    @if(!empty($section['content']))
                        <p class="blog-detail__paragraph">
                            {{ $section['content'] }}
                        </p>
                    @endif

                </div>

            @endforeach
        </div>

    </div>

</section>

@endsection