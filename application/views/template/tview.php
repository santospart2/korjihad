<?php $this->load->view('template/theader') ?>

<body>
  <?php $this->load->view('template/tnav') ?>
  <?php $this->load->view('template/tside') ?>

  <?php $this->load->view($content) ?>

  <?php $this->load->view('template/tfooter') ?>