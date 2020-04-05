<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Calendar</title>

    <!-- Fontfaces CSS-->
    <link href="dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href='dashboard/vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />

    <!-- Main CSS-->
    <link href="dashboard/css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    </style>

</head>

<!-- animsition overrides all click events on clickable things like a,
      since calendar doesn't add href's be default,
      it leads to odd behaviors like loading 'undefined'
      moving the class to menus lead to only the menu having the effect -->
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="dashboard/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Halaman Awal</a>
                           <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="dashboard/index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="dashboard/index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="dashboard/index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="dashboard/index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="prestasi.php">
                                <i class="fas fa-chart-bar"></i>Prestasi</a>
                        </li>
                        <li>
                            <a href="khs.php">
                                <i class="fas fa-table"></i>Kartu Hasil Studi</a>
                        </li>
                        <li>
                            <a href="rekap.php">
                                <i class="fas fa-copy"></i>Rekap</a>
                        </li>
                        <li>
                            <a href="poin_mahasiswa.php">
                                <i class="fas fa-check-square"></i>Poin Mahasiswa</a>
                        </li>
                        <li>
                            <a href="profil_mahasiswa.php">
                                <i class="far fa-check-square"></i>Profil Mahasiswa</a>
                        </li>
                        <li>
                            <a href="kalender.php">
                                <i class="fas fa-calendar-alt"></i>Kalender Akademik</a>
                        </li>
                        <li>
                            <a href="denah.php">
                                <i class="fas fa-map-marker-alt"></i>Denah Poltek</a>
                        </li>
                       <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="dashboard/login.html">Login</a>
                                </li>
                                <li>
                                    <a href="dashboard/register.html">Register</a>
                                </li>
                                <li>
                                    <a href="dashboard/forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="dashboard/button.html">Button</a>
                                </li>
                                <li>
                                    <a href="dashboard/badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="dashboard/tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="dashboard/card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="dashboard/alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="dashboard/progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="dashboard/modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href=dashboard/switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="dashboard/grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="dashboard/fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="dashboard/typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="dashboard/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Halaman Awal</a>
                           <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="dashboard/index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="dashboard/index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="dashboard/index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="dashboard/index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="prestasi.php">
                                <i class="fas fa-chart-bar"></i>Prestasi</a>
                        </li>
                        <li>
                            <a href="khs.php">
                                <i class="fas fa-table"></i>Kartu Hasil Studi</a>
                        </li>
                         <li>
                            <a href="rekap.php">
                                <i class="fas fa-copy"></i>Rekap</a>
                        </li>
                        <li>
                            <a href="poin_mahasiswa.php">
                                <i class="fas fa-check-square"></i>Poin Mahasiswa</a>
                        </li>
                        <li>
                            <a href="profil_mahasiswa.php">
                                <i class="far fa-check-square"></i>Profil Mahasiswa</a>
                        </li>
                        <li>
                            <a href="kalender.php">
                                <i class="fas fa-calendar-alt"></i>Kalender Akademik</a>
                        </li>
                        <li>
                            <a href="denah.php">
                                <i class="fas fa-map-marker-alt"></i>Denah Poltek</a>
                        </li>
                       <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="dashboard/login.html">Login</a>
                                </li>
                                <li>
                                    <a href="dashboard/register.html">Register</a>
                                </li>
                                <li>
                                    <a href="dashboard/forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="dashboard/button.html">Button</a>
                                </li>
                                <li>
                                    <a href="dashboard/badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="dashboard/tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="dashboard/card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="dashboard/alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="dashboard/progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="dashboard/modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="dashboard/switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="dashboard/grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="dashboard/fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="dashboard/typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Cari disini ...." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>Kamu punya 1 pesan</p>
                                            </div>
                                           <!-- <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="dashboard/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Pak Ade</h6>
                                                    <p>Skuy Login !!</p>
                                                    <span class="time">1 tahun yang lalu</span>
                                                </div>
                                            </div> -->
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="dashboard/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Hasan</h6>
                                                    <p>Solder oren yang dikelas udah lu taroh Lab ?</p>
                                                    <span class="time">1 Minggu yang lalu</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">Lihat semua pesan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>Kamu punya 1 email</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="dashboard/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Kerja kelompok dimana ? hp saya error ga bisa buka WA wkwk</p>
                                                    <span>Pak Ade, Kemarin</span>
                                                </div>
                                            </div>
                                           <!-- <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="dashboard/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="dashboard/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div> -->
                                            <div class="email__footer">
                                                <a href="#">Lihat semua email</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Kamu punya 3 pemberitahuan</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Ada 1 email yang belum dibuka !</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Update profil berhasil :)</p>
                                                    <span class="date">Maret 10, 2018 12:10</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Ada 1 pesan yang belum dibuka !</p>
                                                    <span class="date">Juni, 2018 15:00</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">Semua pemberitahuan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="dashboard/images/icon/avatar-01.jpg" alt="Mahasiswa" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Mahasiswa</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="dashboard/images/icon/avatar-01.jpg" alt="Mahasiswa" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Mahasiswa</a>
                                                    </h5>
                                                 <!--   <span class="email">johndoe@example.com</span> -->
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                              <!--  <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div> -->
                                                <div class="account-dropdown__item">
                                                    <a href="profil_mahasiswa.php">
                                                        <i class="zmdi zmdi-settings"></i>Profil Mahasiswa</a>
                                                </div>
                                               <!-- <div class="account-dropdown__item">
                                                    <a href="profil_mahasiswa.php">
                                                        <i class="zmdi zmdi-money-box"></i>Ganti Password</a>
                                                </div> -->
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Keluar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                              <div class="au-card">
                                <div id="calendar"></div>
                              </div>
                            </div><!-- .col -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>. Develop by Sandi, Hasan, Pak Ade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="dashboard/vendor/slick/slick.min.js">
    </script>
    <script src="dashboard/vendor/wow/wow.min.js"></script>
    <script src="dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="dashboard/vendor/select2/select2.min.js"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="dashboard/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="dashboard/vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

    <!-- Main JS-->
    <script src="dashboard/js/main.js"></script>

    <script type="text/javascript">
$(function() {
  // for now, there is something adding a click handler to 'a'
  var tues = moment().day(2).hour(19);

  // build trival night events for example data
  var events = [
    {
      title: "Special Conference",
      start: moment().format('YYYY-MM-DD'),
      url: '#'
    },
    {
      title: "Doctor Appt",
      start: moment().hour(9).add(2, 'days').toISOString(),
      url: '#'
    }

  ];

  var trivia_nights = []

  for(var i = 1; i <= 4; i++) {
    var n = tues.clone().add(i, 'weeks');
    console.log("isoString: " + n.toISOString());
    trivia_nights.push({
      title: 'Trival Night @ Pub XYZ',
      start: n.toISOString(),
      allDay: false,
      url: '#'
    });
  }

  // setup a few events
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    events: events.concat(trivia_nights)
  });
});
    </script>


</body>

</html>
<!-- end document-->
