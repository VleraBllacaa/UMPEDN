			
			
			<nav id="menu">
			
	
				<ul class="links">
			<?php
            $rezultati = mysqli_query($lidhu_meny, "CALL zgjedhMenytePrd()");
			
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					 <li><a href="<?php echo $rreshti['Linku']; ?>"><?php echo $rreshti['Emri']; ?></a></li> 
					<?php } 		?>
				</ul>
				
			</nav>
		
			