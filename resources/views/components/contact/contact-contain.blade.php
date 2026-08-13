<section class="contact-section py-5">

    <div class="container">

        <div class="row g-15 contact-wrapper">

            {{-- ============================
                 COORDONNÉES
            ============================= --}}
            <div class="col-lg-4 ">

                <div class="contact-info">

    <img
        src="{{ asset('build/assets/c.jpeg') }}"
        alt=""
        class="contact-info__image"
    >

    <div class="contact-info__overlay"></div>

    <div class="contact-info__content">

        <h2 class="contact-info__title">
            {{ __('Cabinet Dutrieux') }}
        </h2>

        <div class="contact-info__items">

            {{-- Adresse --}}
            <div class="contact-info__item d-flex gap-3">
                <i class="bi bi-geo-alt contact-info__icon"></i>

                <div>
                    <div class="contact-info__label">
                        {{ __('Adresse') }}
                    </div>

                    <div class="contact-info__value">
                        Rue du Commerce 124/1<br>
                        1000 Bruxelles • Belgique
                    </div>
                </div>
            </div>

            {{-- Téléphone --}}
            <div class="contact-info__item d-flex gap-3">
                <i class="bi bi-telephone contact-info__icon"></i>

                <div>
                    <div class="contact-info__label">
                        {{ __('Téléphone') }}
                    </div>

                    <div class="contact-info__value">
                        +32 465 50 28 01
                    </div>
                </div>
            </div>

            {{-- Email --}}
            <div class="contact-info__item d-flex gap-3">
                <i class="bi bi-envelope contact-info__icon"></i>

                <div>
                    <div class="contact-info__label">
                        {{ __('Email') }}
                    </div>

                    <a
                        href="mailto:hounkpatinmichelle@gmail.com"
                        class="contact-info__value contact-info__link"
                    >
                        hounkpatinmichelle@gmail.com
                    </a>
                </div>
            </div>

            {{-- Horaires --}}
            <div class="contact-info__item d-flex gap-3">
                <i class="bi bi-clock contact-info__icon"></i>

                <div>
                    <div class="contact-info__label">
                        {{ __('Horaires') }}
                    </div>

                    <div class="contact-info__value">
                        Lun - Ven:<br>8h30 à 12h30<br>
                        13h30 à 17h00
                    </div>

                    <div class="contact-info__appointment">
                        {{ __('Prenez rendez-vous') }}
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

            </div>


            {{-- ============================
                 FORMULAIRE
            ============================= --}}
            <div class="col-lg-8">

                <div class="contact-form">

                    <form >

                        @csrf

                        {{-- Prénom / Nom --}}
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-floating contact-field">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="first_name"
                                        name="first_name"
                                        placeholder="Prénom"
                                        value="{{ old('first_name') }}"
                                        required
                                    >

                                    <label for="first_name">
                                        {{ __('Prénom') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating contact-field">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="last_name"
                                        name="last_name"
                                        placeholder="Nom"
                                        value="{{ old('last_name') }}"
                                        required
                                    >

                                    <label for="last_name">
                                        {{ __('Nom') }}
                                    </label>
                                </div>
                            </div>

                        </div>


                        {{-- Email / Téléphone --}}
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-floating contact-field">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Email"
                                        value="{{ old('email') }}"
                                        required
                                    >

                                    <label for="email">
                                        {{ __('Email') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating contact-field">
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        placeholder="Téléphone"
                                        value="{{ old('phone') }}"
                                    >

                                    <label for="phone">
                                        {{ __('Téléphone') }}
                                    </label>
                                </div>
                            </div>

                        </div>


                        {{-- Objet --}}
                        <div class="form-floating contact-field">
                            <input
                                type="text"
                                class="form-control"
                                id="subject"
                                name="subject"
                                placeholder="Objet"
                                value="{{ old('subject') }}"
                                required
                            >

                            <label for="subject">
                                {{ __('Objet') }}
                            </label>
                        </div>


                        {{-- Message --}}
                        <div class="form-floating contact-field">
                            <textarea
                                class="form-control contact-field__textarea"
                                id="message"
                                name="message"
                                placeholder="Message"
                                required
                            >{{ old('message') }}</textarea>

                            <label for="message">
                                {{ __('Message') }}
                            </label>
                        </div>


                        {{-- RGPD --}}
                        <div class="form-check contact-consent">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="privacy"
                                name="privacy"
                                value="1"
                                required
                            >

                            <label
                                class="form-check-label"
                                for="privacy"
                            >
                                {{ __('J’accepte que mes données soient traitées par le Cabinet Dutrieux afin de répondre à ma demande. Pour plus d’informations, consultez notre') }}

                                <a href="#">
                                    {{ __('politique de confidentialité') }}
                                </a>.
                            </label>

                        </div>


                        {{-- CTA --}}
                        <div class="text-end">

                            <button
                                type="submit"
                                class="btn contact-form__button"
                            >
                                {{ __('Envoyer ma demande') }}

                                <i class="bi bi-arrow-right"></i>
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>