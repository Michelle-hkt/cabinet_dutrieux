

<div class="main-contain-form">

    @if ($errors->any())
        <div class="alert alert-danger mb-4 auto-dismiss-alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success mb-4 auto-dismiss-alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('appointment.send') }}" method="POST" class="appointment-form"
    >

        @csrf

        {{-- =====================================================
             TITRE
        ====================================================== --}}

        <div class="appointment-form__header">
            <h2 class="appointment-form__title">
                {{ __('Prendre rendez-vous') }}
            </h2>
        </div>


        {{-- =====================================================
     CALENDRIER
====================================================== --}}

<div class="appointment-form__section">

    <div class="appointment-form__section-title">
        {{ __('Calendrier') }}
    </div>

    <div
        id="appointment-calendar"
        class="appointment-calendar"
    ></div>

    {{-- Valeur réellement envoyée au serveur --}}
    <input
        type="hidden"
        name="date"
        id="appointment-date"
        value="{{ old('date') }}"
        required
    >

</div>


        {{-- =====================================================
             MOTIF / HEURE
        ====================================================== --}}

        <div class="appointment-form__section">

            <div class="row g-4">

                {{-- Motif --}}
                <div class="col-md-6">

                    <label
                        for="appointment-reason"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Motif du rendez-vous') }}
                    </label>

                    <select
                        name="reason"
                        id="appointment-reason"
                        class="form-select appointment-form__select"
                        required
                    >
                        <option value="" selected disabled>
                            {{ __('Sélectionnez un motif') }}
                        </option>

                        <option value="immobilier">
                            {{ __('Immobilier') }}
                        </option>

                        <option value="famille">
                            {{ __('Famille') }}
                        </option>

                        <option value="succession">
                            {{ __('Succession') }}
                        </option>

                        <option value="patrimoine">
                            {{ __('Patrimoine') }}
                        </option>

                        <option value="entreprise">
                            {{ __('Entreprise') }}
                        </option>

                        <option value="other">
                            {{ __('Autre') }}
                        </option>
                    </select>

                </div>


                {{-- Heure --}}
                <div class="col-md-6">

                    <label
                        for="appointment-time"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Heure du rendez-vous') }}
                    </label>

                    <select
                        name="time"
                        id="appointment-time"
                        class="form-select appointment-form__select"
                        required
                    >
                        <option value="" selected disabled>
                            {{ __('Choisissez une heure') }}
                        </option>

                        <option value="08:30">08h30</option>
                        <option value="09:00">09h00</option>
                        <option value="09:30">09h30</option>
                        <option value="10:00">10h00</option>
                        <option value="10:30">10h30</option>
                        <option value="11:00">11h00</option>
                        <option value="11:30">11h30</option>
                        <option value="12:00">12h00</option>

                        <option value="13:30">13h30</option>
                        <option value="14:00">14h00</option>
                        <option value="14:30">14h30</option>
                        <option value="15:00">15h00</option>
                        <option value="15:30">15h30</option>
                        <option value="16:00">16h00</option>
                        <option value="16:30">16h30</option>
                    </select>

                </div>

            </div>

        </div>


        {{-- =====================================================
             COORDONNÉES
        ====================================================== --}}

        <div class="appointment-form__section">

            <div class="appointment-form__section-header">
                <h3 class="appointment-form__subtitle">
                    {{ __('Vos coordonnées') }}
                </h3>
            </div>


            {{-- Nom / Prénom --}}
            <div class="row g-4">

                <div class="col-md-6">

                    <label
                        for="lastname"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Nom') }} *
                    </label>

                    <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        class="form-control appointment-form__input"
                        placeholder="{{ __('Votre nom') }}"
                        value="{{ old('lastname') }}"
                        required
                    >

                </div>


                <div class="col-md-6">

                    <label
                        for="firstname"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Prénom') }} *
                    </label>

                    <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        class="form-control appointment-form__input"
                        placeholder="{{ __('Votre prénom') }}"
                        value="{{ old('firstname') }}"
                        required
                    >

                </div>

            </div>


            {{-- Email / Téléphone --}}
            <div class="row g-4 mt-1">

                <div class="col-md-6">

                    <label
                        for="appointment-email"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Email') }} *
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="appointment-email"
                        class="form-control appointment-form__input"
                        placeholder="adresse@email.com"
                        value="{{ old('email') }}"
                        required
                    >

                </div>


                <div class="col-md-6">

                    <label
                        for="appointment-phone"
                        class="form-label appointment-form__label"
                    >
                        {{ __('Téléphone') }} *
                    </label>

                    <input
                        type="tel"
                        name="phone"
                        id="appointment-phone"
                        class="form-control appointment-form__input"
                        placeholder="06 12 34 56 78"
                        value="{{ old('phone') }}"
                        required
                    >

                </div>

            </div>


            {{-- Message --}}
            <div class="mt-4">

                <label
                    for="appointment-message"
                    class="form-label appointment-form__label"
                >
                    {{ __('Message ou notes pour le rendez-vous') }}
                </label>

                <textarea
                    name="message"
                    id="appointment-message"
                    class="form-control appointment-form__textarea"
                    rows="4"
                    value="{{ old('message') }}"
                    placeholder="{{ __('Précisions éventuelles...') }}"
                >{{ old('message') }}</textarea>

            </div>

        </div>


        {{-- =====================================================
             CONFIRMATION
        ====================================================== --}}

        <div class="appointment-form__footer">

            <button
                type="submit"
                class="btn appointment-form__submit"
            >
                {{ __('Confirmer mon rendez-vous') }}

                <i class="bi bi-arrow-right"></i>
            </button>

        </div>

    </form>

</div>