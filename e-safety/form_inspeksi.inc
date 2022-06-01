<style>
	.simpan_btn{
		background: #2e3092 ;
	}
	.reset_btn{
		border-color: #2e3092 ;
	}
	.reset_btn:hover{
		background: #2e3092 ;
		color: white;
	}
</style>
<div class="inspeksi container-fluid mt-3 ml-3 mb-5">
	<div class="judul_inspeksi">
		<h2 class="mb-2">Form Inspeksi APD</h2>
	</div>
	<p>Enter the required information below</p>
	<form>
		<div class="data-pekerja">
			<div class="card-body mt-3 shadow rounded">
				<div class="row">
						<div class="col-md-6">
							<div class="row mt-2">
								<div class="col-sm-4">
									<label>Workshop</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="workshop" class="form-control" placeholder="Workshop 3" readonly>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-sm-4">
									<label>Nama</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="nama" class="form-control" placeholder="Syahrul Romadoni" readonly>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-sm-4">
									<label>Bagian</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="bagian" class="form-control" placeholder="Pengelasan" readonly>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="row mt-2">
								<div class="col-sm-4">
									<label>Tanggal</label>
								</div>
								<div class="col-sm-8">
									<input type="date" name="tanggal" class="form-control">
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-sm-4">
									<label>NPP</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="npp" class="form-control" placeholder="855566" readonly>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-sm-4">
									<label>Pekerjaan</label>
								</div>
								<div class="col-sm-8">
									<input type="text" name="pekerjaan" class="form-control" placeholder="Welder" readonly>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

		<?php 
			include "apd_wajib.inc"; 
			//include "apd_pengelasan.inc";
			include "apd_pengecatan.inc";
		?>

		<a href="" class=" float-right">
			<button class="btn text-light simpan_btn mt-3" type="button">Simpan</button>
	    </a>
	    <a href="" class=" float-right">
			<button class="btn mr-2 reset_btn mt-3" type="button">Reset</button>
	    </a>
	</form>
</div>