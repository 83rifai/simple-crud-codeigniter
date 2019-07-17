			
<div class="col-xl-8 col-lg-8">
    <div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Data Barang</h6>
		</div>
		<div class="card-body">
		<form class="user" method="post" action="<?=base_url('barang/simpan')?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama"  placeholder="Nama Barang">
				</div>
				
				<div class="form-group">
                  <input type="text" class="form-control form-control-user" name="kode"  placeholder="Kode Barang">
				</div>
				
				<div class="form-group">
                  <input type="text" class="form-control form-control-user" name="harga" placeholder="Harga Barang">
				</div>
				<hr>
				<button type="submit" class="btn btn-success btn-icon-split">
					<span class="icon text-white-50">
                      <i class="fas fa-check"></i>
					</span>
					<span class="text">Simpan</span>
				</button>
			
              </form>
		</div>
	</div>
</div>
