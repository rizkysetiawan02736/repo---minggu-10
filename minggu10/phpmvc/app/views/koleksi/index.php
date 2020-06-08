<div class="container mt-5">

     <div class="row">
	      <div class="col-6">
		       <h3>Koleksi Buku</h3> 
			       <?php foreach( $data['bku'] as $bku ) : ?>   
				<ul>
				  <li><?= $bku['judul']; ?></li>
				  <li><?= $bku['pengarang']; ?></li>
				  <li><?= $bku['penerbit']; ?></li>
                </ul>				
				   <?php endforeach; ?>
		  </div>
	 </div>	  
</div>