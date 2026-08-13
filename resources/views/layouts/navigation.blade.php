<aside class="admin-sidebar">

    {{-- Logo --}}
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="text-decoration-none">
            <div class="brand-name">
                DUTRIEUX
                <br>
                NOTAIRES
            </div>
        </a>
    </div>

    {{-- Navigation --}}
    <div class="sidebar-content">

        <div class="sidebar-section-title">
            MENU PRINCIPAL
        </div>

        <nav class="sidebar-nav">

            <a href="{{ route('dashboard') }}"
               class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                <span class="sidebar-icon">
                    <i class="bi bi-house"></i>
                </span>

                <span>Tableau de bord</span>
            </a>

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-calendar-event"></i>
                </span>

                <span>Rendez-vous</span>
            </a>

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </span>

                <span>Articles & Blog</span>
            </a>

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-person"></i>
                </span>

                <span>Contacts</span>
            </a>

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-bell"></i>
                </span>

                <span>Notifications</span>
            </a>

        </nav>


        {{-- Administration --}}
        <div class="sidebar-section-title mt-4">
            ADMINISTRATION
        </div>

        <nav class="sidebar-nav">

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-person-badge"></i>
                </span>

                <span>Administrateurs</span>
            </a>

            <a href="#" class="sidebar-link">

                <span class="sidebar-icon">
                    <i class="bi bi-gear"></i>
                </span>

                <span>Paramètres du site</span>
            </a>

        </nav>

    </div>


    {{-- User --}}
    <div class="sidebar-user">

        <div class="sidebar-user-avatar">
            M
        </div>

        <div class="sidebar-user-info">

            <div class="sidebar-user-name">
                Michelle Dupont
            </div>

            <div class="sidebar-user-role">
                Super Admin
            </div>

        </div>

        <div class="sidebar-user-arrow">
            <i class="bi bi-chevron-down"></i>
        </div>

    </div>

</aside>