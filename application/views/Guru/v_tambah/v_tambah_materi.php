
<div class="row"> 
<div class="col-lg-7"> 
<div class="p-5"> <div class="text-center"> 
<h1 class="h4 text-gray-900 mb-4">Tambah Data Materi</h1>
</div> 
<form class="user" action="<?php echo base_url().'index.php/Page_guru/tambah_materi'; ?>" method="post" enctype="multipart/form-data"> 
	<input type="hidden" value="<?php echo $this->session->userdata("ses_nama") ?>" name="username">
<div class="form-group">                      
<input type="text" class="form-control form-control-user" id="nam_materi" name="nam_materi" placeholder="Nama Materi" require> 
</div>  
<div class="form-group">
<select class="form-control" name="kelas" id="category" required>
            <option value="">Kelas</option>
                <?php foreach($list1 as $row ):?>
                <option value="<?php echo $row->id_kelas;?>"><?php echo $row->kelas?></option>
                <?php endforeach;?>
			</select>
</div>
<div class="form-group"> 
<input type="file" class="form-control form-controluser" id="materi" name="materi" placeholder="Pilih Materi" require> 
</div>  
<div class="form-group"> 
<input type="hidden" class="form-control form-controluser" id="id" name="Id" value="<?php echo $list['id_mengajar']; ?>" require> 
</div> 
<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
</form><hr> 
<div class="text-center"> <a class="small" href="<?php echo base_url().'Page_guru/data_materi/'.$this->session->userdata("ses_nama")?>">Kembali</a> 
</div>
</div>
</div>
</div> 