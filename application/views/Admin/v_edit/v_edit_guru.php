<div class="row"> 
<div class="col-lg-7"> 
<div class="p-5"> <div class="text-center"> 
<h1 class="h4 text-gray-900 mb-4">Edit Data Guru</h1>
</div> 
<form class="user" action="<?php echo base_url().'Page/save_edit_guru'; ?>" method="post" enctype="multipart/form-data"> 
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="niy" name="Niy" value="<?php echo $list['nip'] ?>" require> 
</div>
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="nama" name="Nama" value="<?php echo $list['nama_guru'] ?>" require> 
</div>
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="alamat" name="Alamat" value="<?php echo $list['alamat'] ?>" require> 
</div>
<div class="form-group"> 
<select id="jenkel" class="form-control" name="Jenkel" require> 
<option value="0">
Pilih Jenis Kelamin</option> 
<option value="Pria">Pria</option> 
<option value="Wanita">Wanita</option> 
</select> 
</div>
<div class="form-group"> 
<input type="file" class="form-control form-controluser" id="photo" name="photo" placeholder="Pilih Foto" require> 
</div>  
<div class="form-group"> 
<input type="hidden" class="form-control form-controluser" id="id" name="Id" value="<?php echo $list['id'] ?>" require> 
</div> 
<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Simpan"> 
</form><hr> 
<div class="text-center"> <a class="small" href="Index">Kembali</a> 
</div>
</div>
</div>
</div> 