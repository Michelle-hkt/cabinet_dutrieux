<!-- <h1>Dashboard administrateur</h1>

<p>Bienvenue dans l'administration du cabinet notarial.</p> -->

<x-app-layout>

    <div class="dashboard-page">

        {{-- Topbar --}}
        <header class="dashboard-header">

            <div>

                <h1 class="dashboard-title">
                    Tableau de bord
                </h1>

                <p class="dashboard-subtitle">
                    Bonjour Michelle, voici un aperçu de l'activité du Cabinet Dutrieux Notaires.
                </p>

            </div>


            <div class="dashboard-header-actions">

                <div class="dashboard-search">

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Rechercher..."
                    >

                    <i class="bi bi-search"></i>

                </div>

                <button class="dashboard-notification">
                    <i class="bi bi-bell"></i>
                    <span>3</span>
                </button>

                <div class="dashboard-brand-small">
                    DUTRIEUX
                    <br>
                    NOTAIRES
                </div>

            </div>

        </header>


        <div class="dashboard-content">

            {{-- Statistiques --}}
            <div class="row g-3 mb-4">

                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="stat-card">

                        <div class="stat-card-icon stat-icon-red">
                            <i class="bi bi-calendar-event"></i>
                        </div>

                        <div class="stat-card-content">

                            <div class="stat-card-label">
                                Rendez-vous
                            </div>

                            <div class="stat-card-value">
                                24
                            </div>

                            <div class="stat-card-trend">
                                ↑ +8%
                                <span>ce mois</span>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="stat-card">

                        <div class="stat-card-icon stat-icon-orange">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div class="stat-card-content">

                            <div class="stat-card-label">
                                En attente
                            </div>

                            <div class="stat-card-value">
                                6
                            </div>

                            <div class="stat-card-warning">
                                À traiter
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="stat-card">

                        <div class="stat-card-icon stat-icon-red">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>

                        <div class="stat-card-content">

                            <div class="stat-card-label">
                                Articles publiés
                            </div>

                            <div class="stat-card-value">
                                18
                            </div>

                            <div class="stat-card-trend">
                                ↑ +3
                                <span>ce mois</span>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-sm-6 col-xl-3">

                    <div class="stat-card">

                        <div class="stat-card-icon stat-icon-red">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div class="stat-card-content">

                            <div class="stat-card-label">
                                Nouveaux contacts
                            </div>

                            <div class="stat-card-value">
                                12
                            </div>

                            <div class="stat-card-warning">
                                5 non lus
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Première ligne --}}
            <div class="row g-3 mb-4">

                {{-- Rendez-vous --}}
                <div class="col-12 col-xl-7">

                    <div class="dashboard-card">

                        <div class="dashboard-card-header">

                            <h2>
                                Prochains rendez-vous
                            </h2>

                            <a href="#">
                                Voir tous
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                        <div class="table-responsive">

                            <table class="table dashboard-table mb-0">

                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>HEURE</th>
                                        <th>CLIENT</th>
                                        <th>MOTIF</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>12 août 2026</td>
                                        <td>09:30</td>
                                        <td>Jean Dupont</td>
                                        <td>Succession</td>
                                    </tr>

                                    <tr>
                                        <td>12 août 2026</td>
                                        <td>11:00</td>
                                        <td>Marie X.</td>
                                        <td>Immobilier</td>
                                    </tr>

                                    <tr>
                                        <td>13 août 2026</td>
                                        <td>14:30</td>
                                        <td>Paul Martin</td>
                                        <td>Donation</td>
                                    </tr>

                                    <tr>
                                        <td>14 août 2026</td>
                                        <td>10:00</td>
                                        <td>Sophie Leroy</td>
                                        <td>Patrimoine</td>
                                    </tr>

                                    <tr>
                                        <td>14 août 2026</td>
                                        <td>15:00</td>
                                        <td>Thomas Bernard</td>
                                        <td>Droit de la famille</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <div class="dashboard-card-footer">
                            Voir tous les rendez-vous
                            <i class="bi bi-arrow-right"></i>
                        </div>

                    </div>

                </div>


                {{-- Articles --}}
                <div class="col-12 col-xl-5">

                    <div class="dashboard-card">

                        <div class="dashboard-card-header">

                            <h2>
                                Articles récents
                            </h2>

                            <a href="#">
                                Voir tous
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                        <div class="articles-list">

                            @for ($i = 1; $i <= 4; $i++)

                                <div class="article-placeholder">

                                    <div class="article-image-placeholder"></div>

                                    <div class="article-placeholder-content">

                                        <div class="placeholder-line placeholder-line-large"></div>
                                        <div class="placeholder-line placeholder-line-medium"></div>
                                        <div class="placeholder-line placeholder-line-small"></div>

                                    </div>

                                    <div class="article-status-placeholder"></div>

                                </div>

                            @endfor

                        </div>

                    </div>

                </div>

            </div>


            {{-- Deuxième ligne --}}
            <div class="row g-3">

                {{-- Activité --}}
                <div class="col-12 col-xl-7">

                    <div class="dashboard-card">

                        <div class="dashboard-card-header">

                            <h2>
                                Activité récente
                            </h2>

                            <a href="#">
                                Voir tout
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                        <div class="activity-list">

                            @for ($i = 1; $i <= 4; $i++)

                                <div class="activity-item">

                                    <div class="activity-icon">
                                        <i class="bi bi-circle"></i>
                                    </div>

                                    <div class="activity-content">

                                        <div class="placeholder-line placeholder-line-large"></div>

                                        <div class="placeholder-line placeholder-line-small"></div>

                                    </div>

                                    <div class="activity-time">
                                        il y a quelques heures
                                    </div>

                                </div>

                            @endfor

                        </div>

                    </div>

                </div>


                {{-- Statut rendez-vous --}}
                <div class="col-12 col-xl-5">

                    <div class="dashboard-card">

                        <div class="dashboard-card-header">

                            <h2>
                                Rendez-vous par statut
                            </h2>

                            <a href="#">
                                Voir le calendrier
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                        <div class="status-chart-placeholder">

                            <div class="fake-donut">

                                <div class="fake-donut-center">
                                    24
                                </div>

                            </div>

                            <div class="status-list">

                                <div class="status-item">
                                    <span></span>
                                    En attente
                                </div>

                                <div class="status-item">
                                    <span></span>
                                    Confirmés
                                </div>

                                <div class="status-item">
                                    <span></span>
                                    Annulés
                                </div>

                                <div class="status-item">
                                    <span></span>
                                    Terminés
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
