<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="row page-title-header mb-0">
              <div class="col-12">
                <div class="page-header">
                  <h2 class="page-title">Dashboard</h2>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ">
                 
					</ul>
					<div class="quick-links ml-auto">
					<a href="#" role="button" data-toggle="modal" data-target="#advanced-search" 
			  aria-expanded="false" aria-controls="advanced-search" 
			  class="nav-link btn btn-secondary"><i class="fa fa-search"></i> Pencarian Lanjut</a>
                    <div class="dropdown ml-1 toolbar-item">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-download"></i> Download Data</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <a class="dropdown-item" href="<?php echo site_url('/home/dl').($_SERVER['QUERY_STRING']? '?'.$_SERVER['QUERY_STRING'] : '') ?>"><i class="fa fa-file-excel-o"></i> Ekspor ke Excel (XLS)</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
			  </div>
	</div>

	<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
                <div class="card card-statistics bg-blue-gradient">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-file-document-box-multiple icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right text-white">Jumlah Dokumen</p>
                        <div class="fluid-container">
                          <h1 class="font-weight-medium text-right mb-0"><?php echo $countArsip;?></h1>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
                <div class="card card-statistics bg-orange-gradient">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-swap-horizontal-bold icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right text-white">Sirkulasi</p>
                        <div class="fluid-container">
                          <h1 class="font-weight-medium text-right mb-0"><?php echo $countSirkulasi;?></h1>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-6 mb-3 stretch-card">
                <div class="card card-statistics bg-green-gradient">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-account-multiple icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right text-white">Pengguna</p>
                        <div class="fluid-container">
                          <h1 class="font-weight-medium text-right mb-0"><?php echo $countUser;?></h1>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
            </div>

            </div>

	<div class="card">
	<div class="card-header py-2">
	<strong>Data Arsip Dokumen</strong>
	</div>
	<!-- modal -->
	<div class="modal fade" id="advanced-search" tabindex="-1" role="dialog" aria-labelledby="advanced-search" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="modal-header py-3">
              <h4 class="modal-title">Pencarian Lanjut</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
	<div class="modal-body">
	<form action="<?php echo site_url('/home/search'); ?>" method="get" id="srcmain">
		<div class="row">
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Uraian</label>
			<div class="col-sm-9">
			<input id="uraian" name="uraian" class="form-control input-md" type="text" value="<?php echo $src['uraian'] ?>">
			</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">No Arsip</label>
			<div class="col-sm-9">
			<input id="noarsip" name="noarsip" class="form-control input-md" type="text" value="<?php echo $src['noarsip'] ?>">
			</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Retensi</label>
			<div class="col-sm-9">
			<select class="form-control" name="retensi" id="retensi">
				<option value="all" >Semua</option>
				<option value="sudah" <?php echo ($src['retensi']=='sudah'?'selected=selected':''); ?> >Sudah</option>
				<option value="belum" <?php echo ($src['retensi']=='belum'?'selected=selected':''); ?> >Belum</option>
			</select>
			</div>
			</div>
			</div>
		</div>

		<div class="row">
            <div class="col-md-4">
		
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Bagian</label>
			<div class="col-sm-9">
			<select class="form-control" name="penc" id="penc">
				<option value="all" >Semua</option>
				<?php
					if(isset($penc)) {
						foreach($penc as $p) {
							echo "<option value=\"".$p['id']."\" ".($src['penc']==$p['id']?"selected=selected":"").">"." - ".$p['nama_pencipta']."</option>";
						}
					}
				?>
			</select>
				</div>
				</div>
				</div>
				<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Unit</label>
			<div class="col-sm-9">
			<select class="form-control" name="peng" id="peng">
				<option value="all" >Semua</option>
				<?php
					if(isset($peng)) {
						foreach($peng as $p) {
							echo "<option value=\"".$p['id']."\" ".($src['peng']==$p['id']?"selected=selected":"").">"." - ".$p['nama_pengolah']."</option>";
						}
					}
				?>
			</select>
				</div>
			</div>
				</div>
				<div class="col-md-4">
				<div class="form-group row">
				<label class="col-sm-3 col-form-label">Lokasi</label>
				<div class="col-sm-9">
			<select class="form-control" name="lok" id="lok">
				<option value="all" >Semua</option>
				<?php
					if(isset($lok)) {
						foreach($lok as $p) {
							echo "<option value=\"".$p['id']."\" ".($src['lok']==$p['id']?"selected=selected":"").">"." - ".$p['nama_lokasi']."</option>";
						}
					}
				?>
			</select>
				</div>
			</div>
			</div>
			
		</div>

		<div class="row">
            <div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Tanggal</label>
			<div class="col-sm-9">
			<input id="tanggal" name="tanggal" class="form-control input-md" type="text" value="<?php echo $src['tanggal'] ?>">
			</div>
			</div>
			</div>
			
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Ket</label>
			<div class="col-sm-9">
			<select class="form-control" name="ket" id="ket">
				<option value="all" >Semua</option>
				<option value="asli" <?php echo ($src['ket']=='asli'?'selected=selected':''); ?> >Asli</option>
				<option value="copy" <?php echo ($src['ket']=='copy'?'selected=selected':''); ?> >Copy</option>
			</select>
			</div>
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Kode</label>
			<div class="col-sm-9">
			<select class="form-control" name="kode" id="zkode">
				<option value="all" >Semua</option>
				<?php
					if(isset($kode)) {
						foreach($kode as $p) {
							echo "<option value=\"".$p['kode']."\" ".($src['kode']==$p['kode']?"selected=selected":"").">".$p['kode']." - ".$p['nama']."</option>";
						}
					}
				?>
			</select>
			</div>
			</div>
			</div>
	
		</div>
		<div class="row">
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Media</label>
			<div class="col-sm-9">
			<select class="form-control" name="med" id="med">
				<option value="all" >Semua</option>
				<?php
					if(isset($med)) {
						foreach($med as $p) {
							echo "<option value=\"".$p['id']."\" ".($src['med']==$p['id']?"selected=selected":"").">"." - ".$p['nama_media']."</option>";
						}
					}
				?>
			</select>
			</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="form-group row">
			<label class="col-sm-3 col-form-label">Nama Proyek / Dokumen</label>
			<div class="col-sm-15">
            <input id="nobox" name="nobox" class="form-control input-md" type="text" value="<?php echo $src['nobox'] ?>">
				</div>
				</div>
				</div>
				<div class="col-md-4">
				<div class="form-group">
				<button class="btn btn-primary" type="submit" id="singlebutton" name="singlebutton" ><i class="fa fa-search"></i> Cari</button>
			</div>
				</div>	
		</div>
		
	</form>
	</div>
	<!-- ./modal body -->
	 <!--<div class="modal-footer">
                           <button type="button" class="btn btn-success trigger-submit"><i class="fa fa-search"></i> Cari</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                          </div>-->
	</div>
	</div>
	</div>
	<!-- ./modal -->

        <!-- Title -->
        
    <div class="card-body">
	<?php
	if ($this->session->flashdata('zz')) {
		echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('zz') . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button></div>';
	}
	?>
        <!-- /.row -->
        <!-- Page Features --> 
        <div class="table-responsive">
			<table id="order-listing2" class="table table-bordered table-hover" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>No Arsip</th>
						<th>Tanggal Entri</th>
						<th>Jenis Proyek</th>
						<th>Nama Proyek / Dokumen</th>
						<th>Status Dokumen</th>
						<th>Ket.Dok</th>
						<th>File</th>
					
						<!-- <th>No. Box</th> -->
						<!-- <th>Retensi</th> -->
						<th class="width-sm"></th>
						<th class="width-sm"></th>
						<th class="width-sm"></th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($data as $a) {
							echo "<tr>";
							echo "<td>".$a['noarsip']."</td>";
							echo "<td>".$a['tanggal']."</td>";
							echo "<td>".$a['nama_kode']."</td>";
							echo "<td>".$a['nobox']."</td>";
							echo "<td>".$a['uraian']."</td>";
							echo "<td>".$a['ket']."</td>";
							if($a['file']=="") {
								echo "<td></td>";
							}else {
								echo "<td align=\"center\"><a href='".base_url('files/'.$a['file'])."' target='_blank'><i class='fa fa-file fa-lg' aria-hidden='true'></i></a></td>";
							}
							
							echo "<td align=\"center\"><a href='".site_url('home/view/'.$a['id'])."' ><i class=\"fa fa-search fa-lg text-primary\"></i></a></td>";
							echo "<td align=\"center\">";
							if(isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata']=='on') {
								echo "<a href='".site_url('/admin/vedit/'.$a['id'])."'><i class='fa fa-pencil fa-lg text-dark' aria-hidden='true'></i></a>";
							}
							echo "</td>";
							echo "<td align=\"center\">";
							if(isset($_SESSION['akses_modul']['entridata']) && $_SESSION['akses_modul']['entridata']=='on') {
								echo "<a class='deldata' id='".$a['id']."' href='#' data-toggle=\"modal\" data-target=\"#deldata\"><i class=\"fa fa-trash fa-lg text-danger\"></i></a>";
							}
							echo "</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
        </div><!-- table responsive -->

		<div class="mt-2">
		<?php
		echo $pages;
		?>
		</div>
		<!-- /.row -->
		</div>
        </div>

<div class="modal fade" id="deldata">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-3">
        <h4 class="modal-title">Hapus Data</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
		<form id="fdeldata" class="form-horizontal" role="form" method="post" action="<?php echo site_url("/admin/del1"); ?>">
			<h4 class="modal-title">Data yang akan anda hapus telah disetujui dan diketahui oleh Atasan yang bersangkutan. Reminder "Sebelum anda hapus, pastikan kembali data tersebut sudah dibackup dan memiliki copiannya." Terima kasih.</h4>
            <input type="hidden" name="id" id="deliddata" value="">
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="deldatago">Hapus</button>
	  </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->