<div class="row">
	<div class="col">
		<form action="<?=site_url('anggota/update')?>" method="post">
			<input type="hidden" name="id" value="<?=$anggota->id?>">
		  <div class="form-group">
		    <label for="exampleInputNama">Nama</label>
		    <input type="text" name="nama" class="form-control" placeholder="Enter Nama" value="<?=$anggota->nama?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>