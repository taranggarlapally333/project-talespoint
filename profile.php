<?php
include "header.php"; 
?>

<div class="container-fluid profile-header">
	<div class="profile-pic col-md-3">
		<img src="img/profilepic.png" height="200px">
	</div>
	
	<div class="profile-info col-md-9">
		<div class="fullname">
		<?php
		echo "<h2>".$_SESSION['user_first']." ".$_SESSION['user_last']."</h2>"
		?>
		</div>
		<div class="username">
		<?php
		echo "<p>@".$_SESSION['username']."</p>"
		?>
		</div>
	    
	    <div class="col-md-6  bio">
	    	<br>
	    	<br>
	    <p>I'm a self learned artist, actor, and a writer</p>
	    </div>
	    
	    <div class="col-md-6">
	    	<br>
		<button class="btn-edit-profile btn btn-default btn-lg" onclick="window.location.href='Settings.php#editprofile'">Edit Profile</button>
	    </div>
		
	</div>
</div>



<?php
include "profile-myworks.php"
?>


<?php
include "profile-mylist.php"
?>




</body>
</html>
