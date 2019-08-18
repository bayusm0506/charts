<div class="row">
	<div class="col">
		<a href="<?=site_url('anggota/tambah')?>" class="btn btn-success">Tambah Data</a>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	$no = 1;
				foreach ($anggota as $p) {
					echo "<tr>";
						echo "<th scope='row'>".$no++."</td>";
						echo "<td>".$p->nama."</td>";
						echo "<td><a href='".site_url('anggota/edit/').$p->id."'>Edit</a> | <a href='".site_url('anggota/hapus/').$p->id."''>Hapus</a></td>";
					echo "</tr>";
				}
			?>
		  </tbody>
		</table>
	</div>
</div>