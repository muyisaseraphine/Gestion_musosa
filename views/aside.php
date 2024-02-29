<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <span class="d-none d-lg-block text-dark">MUSOSA</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search..." title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="../assets/img/profiles/messages.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2 text-dark">SM. Phine</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Seraphine Muyisa</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Deconnexion</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="index.php">
                <i class="bi bi-grid text-dark"></i>
                <span>Accueil</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="catcompte.php">
                <i class="bi bi-bookmark-plus text-dark"></i>
                <span>Catégories Compte</span>
            </a>
        </li><!-- End Dashboard Nav -->
        
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="compte.php">
                <i class="bi bi-bag-plus text-dark"></i>
                <span>Comptes</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="catmembre.php">
                <i class="bi bi-person-circle text-dark"></i>
                <span>Catégories Béneficaire</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="beneficiaire.php">
                <i class="bi bi-person-walking text-dark"></i>
                <span>Béneficiaires</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="prestation.php">
                <i class="bi bi-clipboard-data text-dark"></i>
                <span>Période Prestation</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="cotisation.php">
                <i class="bi bi-folder-plus text-dark"></i>
                <span>Cotisations</span>
            </a>
        </li><!-- End Dashboard Nav -->
       
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="structure.php">
                <i class="bi bi-house-door text-dark"></i>
                <span>Structures</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="service.php">
                <i class="bi bi-list-ol text-dark"></i>
                <span>Services</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="bon.php">
                <i class="bi bi-sticky text-dark"></i>
                <span>Bon de Soin</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="episode.php">
                <i class="bi bi-clipboard text-dark"></i>
                <span>Episodes</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link bg-transparent text-dark " href="utilisateur.php">
                <i class="bi bi-people-fill text-dark"></i>
                <span>Utilisateur</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed bg-transparent text-dark" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window text-dark"></i><span>Rapports</span><i class="bi bi-chevron-down  text-dark"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse text-dark" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-justify  text-dark"></i><span class="text-dark">Cotisation par Menages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-justify text-dark"></i><span class="text-dark">Cotisation par Sotietés</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->


    </ul>

</aside><!-- End Sidebar-->