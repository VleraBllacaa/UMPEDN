		<?php include("konfigurimi.php");?>
		<footer id="footer" class="wrapper">
				<div class="inner">
					<div class="copyright">
												<?php
            $rezultati = mysqli_query($lidhu_fund, "CALL zgjedhTeDhenatFund()");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
				
					<?php echo $Titulli; ?>
				
			<?php } ?>
						
					
		
				</div>
				</div>
			</footer>	
					
		