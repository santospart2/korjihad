<main id="main" class="main">

  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <div class="container" style="height: 400px;" id="container1">

            </div>

            <script src="<?= a('flip/js/jquery.min.js') ?>"></script>
            <script src="<?= a('flip/js/html2canvas.min.js') ?>"></script>
            <script src="<?= a('flip/js/three.min.js') ?>"></script>
            <script src="<?= a('flip/js/pdf.min.js') ?>"></script>
            <script type="text/javascript">
              window.PDFJS_LOCALE = {
                pdfJsWorker: 'http://localhost/korjihad/assets/flip/js/pdf.worker.js',
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
                  'http://localhost/korjihad/assets/flip/css/short-black-book-view.css'
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

          </div>
        </div>

      </div>
    </div>
  </section>

  </main>