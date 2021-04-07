<!-- Header -->
	<?php include("konfigurimi.php"); ?>
		
				<?php
            $rezultati = mysqli_query($lidhu_fillim, "CALL zgjedhTeDhenatFillim('Header')");
			mysqli_next_result($lidhu_fillim);
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
				<header id="header" class="alt">
				<div class="logo">
				</div>		
				<a href="#menu" class="toggle"><span>Menytë</span></a>
			</header>
		
		
		<section id="banner"style="background:url('images/<?php echo $Fajlli;?>'); background-repeat:no-repeat; background-size: cover;">
				<div class="inner">
					<h1 style="margin-top:15%;margin-bottom:15%;"><?php echo $Titulli?></h1>
					
				</div>
				
		
			</section><?php } ?>
			
				