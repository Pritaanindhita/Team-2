<div class="container container-fluid mt-3 ml-3">
	<div class="judul" style="display: flex;">
		<img src="assets/back.png">
		<h3 class="mt-3">Tambah Pekerja</h3>
	</div>
	
	<form class="mt-5 tambah-pekerja">
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>Nama</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="nama" class="form-control" placeholder="ex. Jane Doe">
			   			</div>
					</div>
				</div>
    		</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>NPP</label>
			  			</div>
						<div class="col-sm-8">
							<input type="text" name="npp" class="form-control" placeholder="ex. 10411100124">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>Workshop</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="ws" class="form-control" readonly value="Workshop 3">
			   			</div>
					</div>
		    	</div>
			</div>
		</div>  				   						   					   			  						  
		<div class="row">
			<div class="col-md-6">
		  		<div class="form-group">
					<div class="row">
			   			<div class="col-sm-4">
							<label>Jabatan</label>
						</div>
			   			<div class="col-sm-8">
							<input type="text" name="jabatan" class="form-control" placeholder="ex. Helper">
			   			</div>
					</div>
		    	</div>
			</div>
	    </div>

		<div class="row mb-5">
			<div class="col-md-6">
				<button class="btn text-light float-right btn-simpan" style="background: #2e3092;">Simpan</button>
				<button class="btn btn-outline-dark text-black float-right btn-hapus mr-2" >Hapus</button>
			</div>
	    </div>
	</form>
</div>