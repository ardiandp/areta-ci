
 <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                <div class="mdc-card p-0">"
                	<a href="<?php echo base_url('jurusan/input')?>" class="mdc-button mdc-button--unelevated filled-button--success">Tambah </a>
                  <h6 class="card-title card-padding pb-0">Data Jurusan</h6>
                  <div class="table-responsive">
                  	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Jurusan</th>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $no=1;foreach ($jurusan as $key => $value) { ?>
  		<tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $value->kode_jurusan ?></td>
      <td><?php echo $value->nama_jurusan ?></td>
      <td><a href="<?php echo base_url('jurusan/edit/'.$value->kode_jurusan)?>" class="mdc-button mdc-button--raised">Edit</a> <a href="<?php echo base_url('jurusan/delete/'.$value->kode_jurusan)?>" class="mdc-button mdc-button--unelevated filled-button--warning">Hapus</a></td>
    </tr>
  	<?php } ?>
    
    
  </tbody>
</table>
 </div>
                </div>
              </div>
            
     
            </div>
          </div>
        </main>