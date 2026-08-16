<header class="blog-header ">

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            {{-- =====================================================
                 LOGO
            ====================================================== --}}
            <a
                class="navbar-brand blog-header__brand"
                href="{{ route('home') }}"
            >
                <span class="blog-header__brand-name">
                    DUTRIEUX
                </span>

                <span class="blog-header__brand-tagline">
                    CABINET
                </span>
            </a>


            {{-- =====================================================
                 BOUTON MENU MOBILE
            ====================================================== --}}
            <button
                class="navbar-toggler blog-header__toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#blogNavbar"
                aria-controls="blogNavbar"
                aria-expanded="false"
                aria-label="{{ __('Ouvrir la navigation') }}"
            >
                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- =====================================================
                 NAVIGATION
            ====================================================== --}}
            <div
                class="collapse navbar-collapse"
                id="blogNavbar"
            >

                <ul class="navbar-nav blog-header__nav mx-auto mb-2 mb-lg-0">

                    {{-- Accueil --}}
                    <li class="nav-item blog-header__nav-item">

                        <a
                            class="nav-link blog-header__link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}"
                        >
                            {{ __('ACCUEIL') }}
                        </a>

                    </li>


                    {{-- Services --}}
                    <li class="nav-item blog-header__nav-item">

                        <a
                            class="nav-link blog-header__link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}"
                        >
                            {{ __('NOS SERVICES') }}
                        </a>

                    </li>


                    {{-- Blog --}}
                    <li class="blog-header__nav-item">

                        <a
                            class="blog-header__link {{ request()->routeIs('blog') || request()->routeIs('blog.show') ? 'active' : '' }}"
                            href="{{ route('blog') }}"
                        >
                            {{ __('ARTICLES & BLOG') }}
                        </a>

                    </li>


                    {{-- Contact --}}
                    <li class="blog-header__nav-item">

                        <a
                            class="nav-link blog-header__link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}"
                        >
                            {{ __('CONTACT') }}
                        </a>

                    </li>


                </ul>


                {{-- =================================================
                     ACTIONS
                ================================================== --}}
                <div class="blog-header__actions d-flex align-items-center">

                    {{-- =================================================
                         SÉLECTEUR DE LANGUE
                    ================================================== --}}
                    <div class="dropdown blog-header__language">

                        <button
                            class="btn blog-header__language-button dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            {{ strtoupper(app()->getLocale()) }}
                        </button>


                        <ul class="dropdown-menu dropdown-menu-end blog-header__language-menu">

                            {{-- Français --}}
                            <li>
                                <a
                                    class="dropdown-item blog-header__language-item {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                                    href="{{ route('language.switch', 'fr') }}"
                                >
                                    {{ __('Français') }}
                                </a>
                            </li>


                            {{-- English --}}
                            <li>
                                <a
                                    class="dropdown-item blog-header__language-item {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                    href="{{ route('language.switch', 'en') }}"
                                >
                                    {{ __('English') }}
                                </a>
                            </li>

                        </ul>

                    </div>

                    <a
                        href="{{ route('appointment') }}"
                        class="blog-header__appointment"
                    >
                        {{ __('PENDRE RENDEZ-VOUS') }}
                    </a>

                </div>

            </div>

        </div>

    </nav>

</header>