
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
    <link rel="stylesheet" href="<?= a('flip/css/lightbox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= a('css/navmenu.css') ?>">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary ">
        <div class="left">
            <a href="<?= site_url('welcome/mobile') ?>" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
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

        <div class="container" style="height: 600px;" id="container1">

        </div>

    </div>

    <script src="<?= a('flip/js/jquery.min.js') ?>"></script>
    <script src="<?= a('flip/js/html2canvas.min.js') ?>"></script>
    <script src="<?= a('flip/js/three.min.js') ?>"></script>
    <script src="<?= a('flip/js/pdf.min.js') ?>"></script>
    <script type="text/javascript">
      window.PDFJS_LOCALE = {
        pdfJsWorker: "<?= a('flip/js/pdf.worker.js') ?>",
        pdfJsCMapUrl: 'cmaps'
    };
</script>
<script src="<?= a('flip/js/3dflipbook.min.js') ?>"></script>

<script type="text/javascript">

  var template = {
    html: 'http://localhost/korjihad/assets/flip/templates/default-book-view.html',
    links: [{
      rel: 'stylesheet',
      href: 'http://localhost/korjihad/assets/flip/css/font-awesome.min.css'
  }],
    styles: [
      'http://localhost/korjihad/assets/flip/css/white-book-view.css'
      ],
    script: 
    'http://localhost/korjihad/assets/flip/js/default-book-view.js',
    sounds: {
      startFlip: 'http://localhost/korjihad/assets/flip/sounds/start-flip.mp3',
      endFlip: 'http://localhost/korjihad/assets/flip/sounds/end-flip.mp3'
  }        
};


$('#container1').FlipBook({
    pdf: 'http://localhost/korjihad/assets/pdf/<?= $data->file ?>',
    template: template
});

</script>




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


</body>

</html>