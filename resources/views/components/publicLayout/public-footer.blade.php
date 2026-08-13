<footer class="public-footer">

    <div class="container">

        {{-- =====================================================
             MAIN FOOTER
        ====================================================== --}}
        <div class="row gy-5">

            {{-- =================================================
                 BRAND
            ================================================== --}}
            <div class="col-lg-5">

                <a
                    href="{{ url('/') }}"
                    class="public-footer__brand"
                >
                    <span class="public-footer__brand-name">
                        DUTRIEUX
                    </span>

                    <span class="public-footer__brand-tagline">
                        CABINET
                    </span>
                </a>

                <p class="public-footer__description">
                    Une expertise notariale au service de vos projets,
                    de vos transactions et de vos engagements.
                </p>

            </div>


            {{-- =================================================
                 NAVIGATION
            ================================================== --}}
            <div class="col-6 col-lg-3">

                <h3 class="public-footer__title">
                    Navigation
                </h3>

                <ul class="public-footer__links list-unstyled mb-0">

                    <li>
                        <a href="{{ url('/') }}">
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="#services">
                            Nos services
                        </a>
                    </li>

                    <li>
                        <a href="#blog">
                            Article & blog
                        </a>
                    </li>

                    <li>
                        <a href="#rendez-vous">
                            Rendez-vous
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                 CONTACT
            ================================================== --}}
            <div class="col-6 col-lg-4">

                <h3 class="public-footer__title">
                    Contact
                </h3>

                <div class="public-footer__contact">

                    <p>
                        <i class="bi bi-geo-alt"></i>
                        <span>
                            Adresse du cabinet
                        </span>
                    </p>

                    <p>
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+22900000000">
                            +229 00 00 00 00
                        </a>
                    </p>

                    <p>
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:contact@dutrieux.notaires">
                            contact@dutrieux.notaires
                        </a>
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
             FOOTER BOTTOM
        ====================================================== --}}
        <div class="public-footer__bottom">

            <p class="mb-0">
                © {{ date('Y') }} Cabinet Dutrieux.
                Tous droits réservés.
            </p>

            <div class="public-footer__legal">

                <a href="#">
                    Mentions légales
                </a>

                <a href="#">
                    Politique de confidentialité
                </a>

            </div>

        </div>

    </div>

</footer>
