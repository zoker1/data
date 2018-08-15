<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Jadwal Perkuliahan</title>
    <?php $this->load->view('partial/header'); ?>
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>beranda">SYSTEM KAMPUS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

             <li class="active"><a href="<?php echo base_url();?>data" target="">MAHASISWA</a></li>

              <li class="active"><a href="<?php echo base_url();?>crud" target="">DOSEN PENGAJAR</a></li>

              <li class="active"><a href="<?php echo base_url();?>jadwal" target="">JADWAL MATAKUL</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav> <!-- /.navbar  -->
		<br><br><br><br><br>
    <div class="container">
        <?php $this->load->view($konten)?>
	</div><!--/.container-->
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Latest compiled and minified JavaScript -->
	
  </body>
</html>