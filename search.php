
<?php
include "header.php";
?>


<div class="container">
<h2 style="font-family: arial; font-size: 20px;">Search Results...
</h2>
</div>



<?php
include "dbh.php";

if(isset($_POST['submit'])){
	$key=mysqli_real_escape_string($conn,$_POST['search-input']);
	$by=mysqli_real_escape_string($conn,$_POST['search-by']);
	if($by=="title"){
		/*seach by title*/
		$sql="select * from stories where story_name LIKE '%".$key."%';";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				echo "<div class='container'>

					<div class='mystory col-md-3'>
						<br>
						<img src='img/books/".$row['imgid']."'>
					</div>

					<div class='col-md-9'>
						<a class='mylabel' href='#'>
							<br>
							<br>
					 <h2>".$row['story_name']."</h2>
						<p class='p'>".$row['username']."</p>
						<p class='views'>
							<span class='glyphicon glyphicon-star' style='color:gold'></span>260
							&nbsp;<i class='fa fa-eye'></i>450
						</p>
						<p class='description'>".$row['story_desc']."</p>
						<br>
						<button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"read.php"'."'>Read</button>
					</a>
					</div>
					</div>";
			}
		}else{
			echo "<div class='container'><p class='p'>No results found <i class='far fa-frown' style='font-size:24px;color:gold;'
></i></p></div>";
		}
	}else{
		/* search by author*/
		$sql="select * from users where concat(user_first,' ',user_last) LIKE '%".$key."%';";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){

				$sql2="select * from stories where username='".$row['user_uid']."';";
		        $result2=mysqli_query($conn,$sql2);

		        if(mysqli_num_rows($result2)>0){
		        	echo "<div class='container'><p class='p'>Stories written by author: ".$row['user_first']." ".$row['user_last']."</p></div>";
		        	while ($row2=mysqli_fetch_assoc($result2)) {
		        		echo "<div class='container'>

					<div class='mystory col-md-3'>
						<br>
						<img src='img/books/".$row2['imgid']."'>
					</div>

					<div class='col-md-9'>
						<a class='mylabel' href='#'>
							<br>
							<br>
					 <h2>".$row2['story_name']."</h2>
						<p class='p'>".$row2['username']."</p>
						<p class='views'>
							<span class='glyphicon glyphicon-star' style='color:gold'></span>260
							&nbsp;<i class='fa fa-eye'></i>450
						</p>
						<p class='description'>".$row2['story_desc']."</p>
						<br>
						<button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"read.php"'."'>Read</button>
					</a>
					</div>
					</div>";
		        	}
		        }else{
		        	echo "<div class='container'><p class='p'>Author: ".$row['user_first']." ".$row['user_last'].", hasn't written any stories yet</p></div>";
		        }
		        

			}

	}
}
}else{
	echo "type what you want to search";
}

?>

<!--
<div class="container">

<div class="mystory col-md-3">
	<br>
	<img src="img/mystory.jpg">
</div>

<div class="col-md-9">
	<a class="mylabel" href="#">
		<br>
		<br>
 <h2>THE DARK SAVIOR</h2>
	<p class="p">Tarang Garlapally</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue">Read</button>
</a>
</div>
</div>




<div class="container">

<div class="mystory col-md-3">
	<br>
	<img src="img/mystory.jpg">
</div>

<div class="col-md-9">
	<a class="mylabel" href="#">
		<br>
		<br>
 <h2>THE DARK SAVIOR</h2>
	<p class="p">Tarang Garlapally</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue">Read</button>
</a>
</div>


</div>
-->