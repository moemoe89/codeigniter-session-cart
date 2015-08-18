<div id="area_list_pesanan_<?php echo $this->session->userdata('id_pesanan');?>">
	  <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                     <th>Kategori</th>
					 <th>Produk</th>
                     <th>Foto</th>
					 <th>Jumlah Pesan</th>
					 <th>Jumlah Jadi</th>
                   </thead>
   
			       <tbody>
				   
				   <?php
					
				
					$i = 0;
				
					foreach($list_pesanan as $row){
						
					?>

					<tr>
					  <td><?php echo $row->kategori;?></td>
					  <td><?php echo $row->nama;?></td>
					  <td><img src="<?php echo base_url();?>assets/images/foto_produk/<?php if($row->foto){echo $row->foto;} else {echo 'no_image.jpg';}?>" width="100" ></td>
					  <td><?php echo $row->jumlah_pesan;?></td>
					  <td><?php echo $row->jumlah_jadi;?></td>
					</tr>
					
					<?php
					$i++;
					}?>
					
    
                   </tbody>
        
</table>

</div>
</div>

