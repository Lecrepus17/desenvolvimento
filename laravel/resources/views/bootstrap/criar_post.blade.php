<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOI App Landing Page</title>
    <link rel="stylesheet" href="assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="assets/perfil/img/favicon.png" rel="icon">
  <link href="assets/perfil/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/perfil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/perfil/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/perfil/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/perfil/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/perfil/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/perfil/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/perfil/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">


  <!-- Template Main CSS File -->
  <link href="assets/perfil/css/style.css" rel="stylesheet">
</head>

<body>
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="{{ route('postagens') }}" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">AmiGo</span>
  </a>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
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

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">4</span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><!-- End Messages Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/perfil/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/perfil/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="assets/perfil/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><!-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/perfil/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{route('perfil')}}">
            <i class="bi bi-person"></i>
            <span>Meu perfil</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{route('perfil')}}">
            <i class="bi bi-gear"></i>
            <span>Configurações da conta</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{route('criar_post')}}">
            <i class="bi bi-plus"></i>
            <span>Criar um post</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

    <main>
        <div class="container">
            <section class="page-header">
                <h2>Crie uma postagem</h2>
                <h5>Whether you have questions or you would just like to say hello.</h5>
            </section>
          
            <section class="contact-form-wrapper">
                <form action="index.html">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">YOUR NAME <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name *">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">YOUR EMAIL ADDRESS <sup>*</sup></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="feeney.matteo@schmeler.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="subject">SUBJECT <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="subject" placeholder="Development">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR PHONE NUMBER <sup>*</sup></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="635-396-9570">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="message">HOW CAN WE HELP YOU? <sup>*</sup></label>
                            <textarea name="message" id="message" class="form-control" rows="7" placeholder="Hi there, I would like to ..."></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        <p class="form-footer-text">We'll get back to you in 1-2 business days.</p>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2 class="mb-0">Entre em contato.</h2>
                </div>
            </div>
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <div class="py-3">
                        <img src="assets/images/prof_de_bio.png" alt="logo">
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <nav>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#!" class="nav-link">Telefone</a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">E-mail</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <p>
                        &copy; foi. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.
                    </p>
                    <p>All rights reserved.</p>
                    <nav class="social-menu">
                        <a href="#!"><img src="assets/images/facebook.svg" alt="facebook"></a>
                        <a href="#!"><img src="assets/images/instagram.svg" alt="instagram"></a>
                        <a href="#!"><img src="assets/images/twitter.svg" alt="twitter"></a>
                        <a href="#!"><img src="assets/images/youtube.svg" alt="youtube"></a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/min.js"></script>
    <script src="assets/perfil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/perfil/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/perfil/vendor/echarts/echarts.min.js"></script>
  <script src="assets/perfil/vendor/quill/quill.min.js"></script>
  <script src="assets/perfil/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/perfil/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/perfil/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/perfil/js/main.js"></script>
</body>

</html>
