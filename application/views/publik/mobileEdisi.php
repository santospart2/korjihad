
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="<?= b('assets/img/favicon.png') ?>" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= b('assets/img/icon/192x192.png') ?>">
    <link rel="stylesheet" href="<?= b('assets/css/style.css') ?>">
    <link rel="manifest" href="<?= b('__manifest.json') ?>">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary ">
        <div class="pageTitle">
            KORJIHAD
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

      <?php
      $no = 1;
      if ($data) :
          foreach ($data as $d) :
            ?>

            <div class="section mt-3 mb-3">
                <div class="card">
                    <a href="<?= site_url('welcome/vflip/'.$d['id']) ?>"><img src="<?= a('pdf/'.$d['cover']) ?>" class="card-img-top" alt="image" style="height: 300px;"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['edisi'] ?></h5>
                        <a href="<?= site_url('welcome/vflip/'.$d['id']) ?>" class="btn btn-primary">
                            <ion-icon name="cube-outline"></ion-icon>
                            Preview
                        </a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    <?php else : ?>
      Data Kosong
  <?php endif; ?>


</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="index.html" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
        </div>
    </a>
    <a href="app-components.html" class="item">
        <div class="col">
            <ion-icon name="cube-outline"></ion-icon>
        </div>
    </a>
    <a href="page-chat.html" class="item">
        <div class="col">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            <span class="badge badge-danger">5</span>
        </div>
    </a>
    <a href="app-pages.html" class="item">
        <div class="col">
            <ion-icon name="layers-outline"></ion-icon>
        </div>
    </a>
    <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->



<!-- welcome notification  -->
<div id="notification-welcome" class="notification-box">
    <div class="notification-dialog android-style">
        <div class="notification-header">
            <div class="in">
                <img src="<?= b('assets/img/icon/logo.png') ?>" alt="image" class="imaged w24">
            </div>
            <a href="#" class="close-button">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <div class="notification-content">
            <div class="in">
                <h3 class="subtitle">Selamat Datang</h3>
            </div>
        </div>
    </div>
</div>
<!-- * welcome notification -->

<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="<?= b('assets/js/lib/jquery-3.4.1.min.js') ?>"></script>
<!-- Bootstrap-->
<script src="<?= b('assets/js/lib/popper.min.js') ?>"></script>
<script src="<?= b('assets/js/lib/bootstrap.min.js') ?>"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="<?= b('assets/js/plugins/owl-carousel/owl.carousel.min.js') ?>"></script>
<!-- jQuery Circle Progress -->
<script src="<?= b('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') ?>"></script>
<!-- Base Js File -->
<script src="<?= b('assets/js/base.js') ?>"></script>


<script>
    setTimeout(() => {
        notification('notification-welcome', 5000);
    }, 2000);
</script>

</body>

</html>