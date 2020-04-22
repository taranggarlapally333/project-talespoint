<div class="container">
	<br>
	<a href="#" class="contwriting" id="myworks">My Works</a>
</div>


<div class="container">

<?php
include "temp/dbh.php";
  $sql="select * from stories where username='".$_SESSION['username']."';";
  $result=mysqli_query($conn,$sql);
  $nrows=mysqli_num_rows($result);
  if($nrows>0){
    while($row=mysqli_fetch_assoc($result)){
    	echo "<br>
<div class='mystory col-md-3'>

	<img src='img/books/".$row['imgid']."'>
</div>
<div class='col-md-3'>
	<a class='mylabel' href='#'>
		<br>
		<br>
 <h2>".$row['story_name']."</h2>
	<p class='p'>".$row['username']."</p>
	<p class='views'>
		<span class='glyphicon glyphicon-star' style='color:gold'></span>260
		&nbsp;<i class='fa fa-eye'></i>450
	</p>
	<br>
	<br>
	<button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"Swrite.php"'."'>Continue Writing</button>
</a>
</div>";
    }
}
else{

	echo "<br><p class='p'>You haven't written any stories yet</p>";
}
?>
</div>
<!--
<br>
<div class="mystory col-md-3">

	<img src="img/mystory.jpg">
</div>
<div class="col-md-3">
	<a class="mylabel" href="#">
		<br>
		<br>
 <h2>DARK DORMS</h2>
	<p class="p">Karthik pasupulatei</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<br>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue">Continue...</button>
</a>
</div>







<div class="mystory col-md-3">
	<img src="img/mystory.jpg">
</div>
<div class="col-md-3">
	<a class="mylabel" href="#">
		<br>
		<br>
 <h2>AVATAR OF ARMS</h2>
	<p class="p">Karthik pasupulatei</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<br>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue" onclick='"."window.location.href=".'"Swrite.php"'."'>Continue Writing</button>
</a>
</div>
</div>


-->

