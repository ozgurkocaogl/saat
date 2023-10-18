<?php 

function UrunListeGorunumu($Urun)
{
	?>
	<div class="list-unstyled-item list-hours-item d-flex text-dark "data-toggle="tooltip" data-placement="top" title="Ürünü İncele">
		<a href="UrunDetay.php?id=<?php echo $Urun['urun_id'] ?>">
			
				<img src="<?php echo $Urun['resim']  ?>" class="img-rounded" alt="" width="400" height="250">
				
			
			<div class="section-heading-lower">
            <span class="ms-auto text-dark "><b><?php echo number_format($Urun['urun_fiyat'],2,",",".")." TL" ?></b></span>
			<span class="ms-auto text-dark"><b><span class="section-heading-lower"><p><?php echo $Urun['urun_marka'] ?></b></span></p></span>
			<span class="ms-auto text-dark"><b><p><?php echo $Urun['urun_model'] ?></b></p></span>
			</div>
		</a>
	</div>
	<?php 

}

?>