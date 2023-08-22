<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= a('flip/css/lightbox.css') ?>">
  <link rel="stylesheet" href="<?= a('flip/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?= a('swiper/style.css') ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= a('css/navmenu.css') ?>">
  <script type="text/javascript" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script type="text/javascript" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>

 <nav class="navbar navbar-dark bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none">

  <div class="navigation">
    <ul class="navbar-nav nav-justified w-100">
      <li class="list active">
        <a href="<?= site_url('welcome') ?>">
          <span class="icon" style="--clr:#f44336;">
            <ion-icon name="home-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon" style="--clr:#ffa117;">
            <ion-icon name="person-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon" style="--clr:#0fc70f;">
            <ion-icon name="chatbubble-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon" style="--clr:#2196f3;">
            <ion-icon name="camera-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list">
        <a href="#">
          <span class="icon" style="--clr:#b145e9;">
            <ion-icon name="settings-outline"></ion-icon>
          </span>
        </a>
      </li>
      <div class="indicator"></div>
    </ul>
  </div>
</nav>

<h1>KORJIHAD</h1>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $no = 1;
    if ($data) :
      foreach ($data as $d) :
        ?>

        <div class="swiper-slide">
          <a href="<?= site_url('welcome/vflip/'.$d['id']) ?>"><img src="<?= a('pdf/'.$d['cover']) ?>"></a>
        </div>    

      <?php endforeach; ?>

    <?php else : ?>
      Data Kosong
    <?php endif; ?>
  </div>
</div>


<script type="text/javascript">
  const list = document.querySelectorAll(".list");
  function activeLink() {
    list.forEach((item) => item.classList.remove("active"));
    this.classList.add("active");
  }
  list.forEach((item) => item.addEventListener("click", activeLink));

</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 15,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
  });
</script>

</body>
</html>
