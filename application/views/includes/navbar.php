<style>
    .navbar .megamenu {
        padding: 1rem;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {

        .navbar .has-megamenu {
            position: static !important;
        }

        .navbar .megamenu {
            left: 0;
            right: 0;
            width: 100%;
            margin-top: 0;
        }

    }

    /* ============ desktop view .end// ============ */

    /* ============ mobile view ============ */
    @media(max-width: 991px) {

        .navbar.fixed-top .navbar-collapse,
        .navbar.sticky-top .navbar-collapse {
            overflow-y: auto;
            max-height: 90vh;
            margin-top: 10px;
        }
    }

    /* ============ mobile view .end// ============ */
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-between " href="<?= site_url('./') ?>">
            <!-- <img class="d-none d-sm-block" src="./img/logo/logo2.png" alt=""> -->
            <img width="60px" height="60px" class=" d-block " src="<?= base_url('issets/img/logo/logo.png') ?>" alt="">
            <div class="navbar-detail text-white my-auto mx-2">
                <h4 class="p-0 m-0" style="font-size: 1.7rem;">AUN-HPN</h4>
                <p class="p-0 m-0 d-none d-sm-block" style="font-size: 1rem;">ASEAN University Network - Health Promotion Network</p>
            </div>
        </a>
        <div class="d-flex flex-column">
            <ul class="navbar-nav topbar">
                <li class="nav-item dropdown has-megamenu d-sm-flex flex-sm-row d-none">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="#" data-bs-toggle="dropdown">About </a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <ul>
                            <li><a href="<?= base_url('about') ?>">HISTORY OF AUN-HPN</a></li>
                            <li><a href="#mission">MISSION OBJECTIVES & OUTCOMES</a></li>
                            <li><a href="#scope">SCOPE OF WORK</a></li>
                            <li><a href="<?= base_url('about') ?>">OUR MEMBERS</a></li>
                            <li>NEWS
                                <ul>
                                    <li><a href="<?= base_url('about') ?>">NEWS</a></li>
                                    <li><a href="<?= base_url('about') ?>">E-NEWSLETTER</a></li>

                                </ul>
                            </li>
                            <li><a href="<?= base_url('about/iac') ?>#scope">F/Q</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown has-megamenu d-sm-flex flex-sm-row d-none">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="#" data-bs-toggle="dropdown"> Our Work </a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <ul>
                            <li><a href="http://">HISTORY OF AUN-HPN</a></li>
                            <li><a href="http://">MISSION OBJECTIVES & OUTCOMES</a></li>
                            <li><a href="http://">SCOPE OF WORK</a></li>
                            <li><a href="http://">OUR MEMBERS</a></li>
                            <li>NEWS
                                <ul>
                                    <li><a href="http://">NEWS</a></li>
                                    <li><a href="http://">E-NEWSLETTER</a></li>

                                </ul>
                            </li>
                            <li><a href="http://">F/Q</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown has-megamenu d-sm-flex flex-sm-row d-none">
                    <a class="nav-link text-uppercase text-white" href="#"> Our People </a>

                </li>
                <li class="nav-item dropdown has-megamenu d-sm-flex flex-sm-row d-none">
                    <a class="nav-link  text-uppercase text-white" href="<?= base_url('/Download') ?>"> Resource </a>

                </li>
                <li class="nav-item dropdown has-megamenu d-sm-flex flex-sm-row d-none">
                    <a class="nav-link  text-uppercase text-white" href="<?= base_url('/about/contactus') ?>"> Contact </a>
                </li>
                <li class="nav-item dropdown has-megamenu  d-sm-flex flex-sm-row d-none">
                    <a class="nav-link text-white text-uppercase" href="www.info-aun-hpn.com" target="blank"> Login </a>
                    <!-- <div class="dropdown-menu megamenu" role="menu">
                        lore555
                    </div> -->
                </li>

            </ul>
            <div class="d-flex  col-12 d-none d-sm-block m-0 p-0 ">
                <div class="input-group ">
                    <input type="text" class="form-control w-50" placeholder="News | Events | Gallery " aria-label="News | Events | Gallery " aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn input-group-text" id="basic-addon2">
                            <p class="m-0"><i class="fas fa-search"></i></p>
                        </button>
                    </div>
                    <button class="btn btn  text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>

        <button class="btn btn d-block d-sm-none text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="offcanvas offcanvas-end bg-white " id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ">
                <ul class="navbar-nav ml-auto  d-flex flex-column  ">
                    <li class="nav-item ">
                        <a href="./" class="nav-link text-left  text-dark">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= site_url('Accadamic') ?>" class="nav-link text-left  text-dark">Our People</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('About') ?>" class="nav-link text-left text-dark">History</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= site_url('Download') ?>" class="nav-link text-left text-dark">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('gallery') ?>" class="nav-link text-left text-dark">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('about/contactus') ?>" class="nav-link text-left text-dark">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('linkto') ?>" class="nav-link text-left text-dark">Link to</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.info-AUN-HPN.com/" target="blank" class="nav-link text-left text-dark">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>