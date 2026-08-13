<header class="public-header header--transparent position-fixed top-0 start-0 w-100">

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            {{-- =====================================================
                 LOGO
            ====================================================== --}}
            <a
                class="navbar-brand navbar-brand-dutrieux"
                href="{{ route('home') }}"
            >
                <span class="brand-name">
                    DUTRIEUX
                </span>

                <span class="brand-tagline">
                    CABINET
                </span>
            </a>


            {{-- =====================================================
                 BOUTON MENU MOBILE
            ====================================================== --}}
            <button
                class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#publicNavbar"
                aria-controls="publicNavbar"
                aria-expanded="false"
                aria-label="Ouvrir la navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- =====================================================
                 NAVIGATION
            ====================================================== --}}
            <div
                class="collapse navbar-collapse"
                id="publicNavbar"
            >

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    {{-- Accueil --}}
                    <li class="nav-item">
                        <a
                            class="nav-link public-header__link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}"
                        >
                            {{ __('ACCUEIL') }}
                        </a>
                    </li>


                    {{-- Services --}}
                    <li class="nav-item">
                        <a
                            class="nav-link public-header__link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}"
                        >
                            {{ __('NOS SERVICES') }}
                        </a>
                    </li>


                    {{-- Blog --}}
                    <li class="nav-item">
                        <a
                            class="nav-link public-header__link {{ request()->routeIs('blog') ? 'active' : '' }}"
                            href="{{ route('blog') }}"
                        >
                            {{ __('ARTICLES & BLOG') }}
                        </a>
                    </li>

                    {{-- Contact --}}
                    <li class="nav-item">
                        <a
                            class="nav-link public-header__link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}"
                        >
                            {{ __('CONTACT') }}
                        </a>
                    </li>


                    {{-- Rendez-vous --}}
                    <li class="nav-item">
                        <a
                            class="nav-link public-header__link {{ request()->routeIs('appointment') ? 'active' : '' }}"
                            href="{{ route('appointment') }}"
                        >
                            {{ __('RENDEZ-VOUS') }}
                        </a>
                    </li>

                </ul>


                {{-- =================================================
                     ACTIONS
                ================================================== --}}
                <div class="d-flex align-items-center gap-3">

                    {{-- =================================================
                         SÉLECTEUR DE LANGUE
                    ================================================== --}}
                    <div class="dropdown public-header__language">

                        <button
                            class="btn dropdown-toggle public-header__language-button"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            {{ strtoupper(app()->getLocale()) }}
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">

                            {{-- Français --}}
                            <li>
                                <a
                                    class="dropdown-item {{ app()->getLocale() === 'fr' ? 'active' : '' }}"
                                    href="{{ route('language.switch', 'fr') }}"
                                >
                                    {{ __('Français') }}
                                </a>
                            </li>

                            {{-- English --}}
                            <li>
                                <a
                                    class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                    href="{{ route('language.switch', 'en') }}"
                                >
                                    {{ __('English') }}
                                </a>
                            </li>

                        </ul>

                    </div>


                    {{-- =================================================
                         DASHBOARD
                    ================================================== --}}
                    @auth

        {{-- Utilisateur connecté --}}
        <a
            href="{{ route('dashboard') }}"
            class="public-header__account"
        >
            {{ __('Dashboard') }}
        </a>

    @else

        {{-- Utilisateur non connecté --}}
        <a
            href="{{ route('login') }}"
            class="public-header__account"
        >
            {{ __('Connexion') }}
        </a>

    @endauth

                </div>

            </div>

        </div>

    </nav>

</header>