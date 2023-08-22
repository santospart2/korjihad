<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= a('flip/css/lightbox.css') ?>">
  <link rel="stylesheet" href="<?= a('flip/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= a('css/navmenu.css') ?>">

</head>
<body>



<div class="container" style="height: 600px; width: 700px;" id="container1">

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
      'http://localhost/korjihad/assets/flip/css/black-book-view.css'
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


</body>
</html>
