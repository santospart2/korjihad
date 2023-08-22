
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title><?= $title ?></title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
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



    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="carousel-slider owl-carousel owl-theme">

            <?php
            $no = 1;
            if ($data) :
              foreach ($data as $d) :
                ?>

                <div class="item p-2">
                    <a href="<?= site_url('welcome/view/'.$d['id']) ?>"><img src="<?= a('pdf/'.$d['cover']) ?>" class="imaged w-100 square mb-4" style="height: 400px;"></a>
                    <h2><?= $d['edisi'] ?></h2>
                </div>

            <?php endforeach; ?>

        <?php else : ?>
          Data Kosong
      <?php endif; ?>
  </div>

  <div class="listview-title mt-2">List</div>
  <ul class="listview image-listview media mb-2">

    <?php
    $no = 1;
    if ($data) :
      foreach ($data as $d) :
        ?>


        <li>
            <a href="<?= site_url('welcome/view/'.$d['id']) ?>" class="item">
                <div class="imageWrapper">
                    <img src="<?= a('pdf/'.$d['cover']) ?>" alt="image" style="width: 40px; height: 40px;" >
                </div>
                <div class="in">
                    <div>
                        <?= $d['edisi'] ?>
                        <div class="text-muted"><?= date('d F Y',strtotime($d['tgl'])) ?></div>
                    </div>
                    <span class="badge badge-primary"></span>
                </div>
            </a>
        </li>

    <?php endforeach; ?>

<?php else : ?>
  Data Kosong
<?php endif; ?>
</ul>


</div>
<!-- * App Capsule -->

<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="<?= site_url('welcome/mobile') ?>" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
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
        notification('notification-welcome', 1000);
    }, 500);
</script>

</body>

</html>