<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="padding-bottom: 0em; padding-top: 0em;" href="<?php echo $pathToRoot; ?>">
				<img id="brand-img" src="<?php echo $pathToRoot; ?>assets/images/rm-logo.png">
				<font style="display: inline-block;vertical-align: sub;">Rift motion</font>
			</a>
		</div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-right">
	        <li <?php if($thisPage == "home"){ echo 'class="active"'; } ?>><a href="<?php echo $pathToRoot; ?>index.php">Home</a></li>
	        <li <?php if($thisPage == "team"){ echo 'class="active"'; } ?>><a href="<?php echo $pathToRoot; ?>team.php">The Team</a></li>
	        <li <?php if($thisPage == "uploads"){ echo 'class="active"'; } ?>><a href="<?php echo $pathToRoot; ?>uploads.php">Uploaded Models</a></li>
	      </ul>
	    </div>
	</div>
</nav>