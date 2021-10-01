<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row page-title-header mb-0">
              <div class="col-12">
                <div class="page-header">
                  <h3 class="page-title">Data Arsip</h3>
                  <div class="quick-link-wrapper d-md-flex flex-md-wrap">
				  <div class="quick-links">
					<a class="btn btn-primary" href="<?php echo site_url('/admin/vedit/'.$id); ?>"><i class="fa fa-pencil"></i> Edit Arsip</a>
                  </div>
				  </div>
                </div>
			  </div>
	</div>

<div class="card">
	<div class="card-header py-3">
	<a href="<?php echo base_url('/home');?>"> 
		<i class="fa fa-arrow-left"></i>&ensp;Kembali
	</a>
	</div>
<div class="card-body">
<!-- Form Name -->
<div class="row">
<div class="col-md-6"> <!-- 1st column -->

<div class="view-group row">
	<label class="col-md-4 control-label" for="noarsip">Nomor Arsip</label>
	<label class="col-md-8 isi">: <?php echo $noarsip; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="tanggal">Tanggal</label>
	<label class="col-md-8 isi">: <?php echo  date_format(date_create($tanggal),'d-M-Y');
		//if($f=='sudah') {
			//echo "<br />&nbsp;<div class=\"badge badge-warning text-dark\">Retensi expired: ".date_format(date_create($b),'d-M-Y')."</div>";
		//}else {
			//echo "<br />&nbsp;<div class=\"badge badge-warning text-dark\">Retensi tgl: ".date_format(date_create($b),'d-M-Y')."</div>";
		//}
	?>
	</label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="pencipta">Pencipta Arsip</label>
	<label class="col-md-8 isi">: <?php echo $nama_pencipta; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="unitpengolah">Unit Pengolah & Pengontrol</label>
	<label class="col-md-8 isi">: <?php echo $nama_pengolah; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="kode">Kode Klasifikasi</label>
	<label class="col-md-8 isi">: <?php echo $nama_kode." - ".$nama; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="uraian">Uraian</label>
	<label class="col-md-8 isi">: <?php echo $uraian; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="lokasi">Lokasi Arsip</label>
	<label class="col-md-8 isi">: <?php echo $nama_lokasi; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="media">Jenis Media</label>
	<label class="col-md-8 isi">: <?php echo $nama_media; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="ket">Keterangan Dokumen</label>
	<label class="col-md-15 isi">: <?php echo strtoupper($ket); ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="jumlah">Jumlah</label>
	<label class="col-md-8 isi">: <?php echo $jumlah; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-10 control-label" for="nobox">Nama Proyek</label>
	<label class="col-md-8 isi">: <?php echo $nobox; ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="nobox">File</label>
	<label class="col-md-8 isi">: <?php echo ($file==""?"":"<a href='".base_url('files/'.$file)."' target='_blank'>".$file."</a>"); ?></label>
</div>

<div class="view-group row">
	<label class="col-md-4 control-label" for="nobox">Nama penginput</label>
	<label class="col-md-8 isi">: <i class="fa fa-user"></i> <?php echo $username; ?></label>
</div>

</div><!-- /1st column -->

<div class="col-md-6"><!-- 2nd column -->
<h4>File Preview</h4>
    <div id="pdf1"></div>

</div><!-- /2nd column -->
</div><!-- /.row -->

</div><!-- card-body -->
</div>

<script>PDFObject.embed("<?php echo base_url('files/'.$file);?>", "#pdf1");</script>
