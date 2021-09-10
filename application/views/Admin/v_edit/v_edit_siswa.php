<div class="row"> 
<div class="col-lg-7"> 
<div class="p-5"> <div class="text-center"> 
<h1 class="h4 text-gray-900 mb-4">Edit Data Siswa</h1>
</div> 
<form class="user" action="<?php echo base_url('Page/save_edit_siswa'); ?>" method="post" enctype="multipart/form-data"> 
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="Nis" name="Nis" value="<?php echo $list['nis'] ?>"> 
</div>
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="Nama" name="Nama" value="<?php echo $list['nama_siswa'] ?>"> 
</div>
<div class="form-group">                      
<input class="form-control form-control-user" id="Alamat" name="Alamat" value="<?php echo $list['alamat'] ?>">  
</div>
<div class="form-group">
<input type="text" class="form-control form-control-user" id="no" name="no" value="<?php echo $list['No_Telepon'] ?>"> 
</div>
<div class="form-group">
<select class="form-control" name="kelas" id="kelas">
            <option value="">No Selected</option>
                <?php foreach($list1 as $row ):?>
                <option value="<?php echo $row->id_kelas;?>"><?php echo $row->kelas?></option>
                <?php endforeach;?>
			</select>
</div>
<div class="form-group"> 
<select id="Jenkel" class="form-control" name="Jenkel"> 
<option value="0">
Pilih Jenis Kelamin</option> 
<option value="Pria">Pria</option> 
<option value="Wanita">Wanita</option> 
</select> 
</div>
<div class="form-group"> 
<input type="file" class="form-control form-controluser" id="photo" name="photo" placeholder="Pilih Foto"> 
</div>  
<div class="form-group"> 
<input type="hidden" class="form-control form-controluser" id="id" name="id" value="<?php echo $list['id'] ?>"> 
</div> 
<button type="submit" class="btn btn-success btn-icon-split" name="submit">SIMPAN</button> 
</form><hr> 
<div class="text-center"> <a class="small" href="Index">Kembali</a> 
</div>
</div>
</div>
</div> 