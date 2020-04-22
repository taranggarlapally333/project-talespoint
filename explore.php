<?php
include "header.php";
?>


<div class="container">
<h2 style="font-family: arial; font-size: 20px;">EXPLORE AND ADD TO YOUR LISTS
</h2>
</div>

<div class="container explore">
		<a href="explore.php?result=sci-fi" class="category col-md-2">SCI-FI</a>
		<a href="explore.php?result=adventure" class="category col-md-2">ADVENTURE</a>
		<a href="explore.php?result=mystery" class="category col-md-2">MYSTERY</a>
		<a href="explore.php?result=horror" class="category col-md-2">HORROR</a>
		<a href="explore.php?result=fan-fic" class="category col-md-2">FAN-FIC</a>
</div>
<div class="container explore">
		<a href="explore.php?result=romance" class="category col-md-2">ROMANCE</a>
		<a href="explore.php?result=superhero" class="category col-md-2">SUPERHERO</a>
		<a href="explore.php?result=fantasy" class="category col-md-2">FANTASY</a>
		<a href="explore.php?result=history" class="category col-md-2">HISTORY</a>
		<a href="explore.php?result=poetry" class="category col-md-2">POETRY</a>
</div>

<div class="container">
	<br>
	<br>
	<?php
                      $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

                        if ( strpos($full_url , 'result=sci-fi'))
                        {
                                  echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'SCI-FI'</h2>" ;
                                  $genre="sci-fi";
                        }
                        else if(strpos($full_url , 'result=adventure'))
                        {
                                      echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'ADVENTURE'</h2>" ;
                                      $genre="adventure";
                        }
                        else if(strpos($full_url , 'result=mystery')){
                               echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'MYSTERY'</h2>" ;
                               $genre="mystery";
                        }
                        else if(strpos($full_url , 'result=horror')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'HORROR'</h2>" ;
                                $genre="horror";
                        }
                        else if(strpos($full_url , 'result=fan-fic')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'FAN-FIC'</h2>" ;
                                $genre="fan-fic";
                          }
                        else if(strpos($full_url , 'result=romance')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'ROMANCE'</h2>" ;
                                $genre="romance";
                        }
                        else if(strpos($full_url , 'result=superhero')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'SUPERHERO'</h2>" ;
                                $genre="superhero";
                        }
                        else if(strpos($full_url , 'result=fantasy')){
                               echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'FANTASY'</h2>" ;
                               $genre="fantasy";
                        }
                        else if(strpos($full_url , 'result=history')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'HISTORY'</h2>" ;
                                $genre="history";
                        }
                        else if(strpos($full_url , 'result=poetry')){
                                echo "<h2 style='".'font-family:"Comic Sans MS", cursive, sans-serif; font-size: 20px;'."'>You have chosen 'POETRY'</h2>" ;
                                $genre="poetry";
                        }



                     ?>

</div>

<?php
include "dbh.php";


$sql="select * from stories where story_genre='".$genre."';";
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
					<p class='p'>Genre: ".$row['story_genre']."</p>
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
	echo "<div class='container'>";
	echo "<p class='p'>There are no stories under this genre yet.</p>";
	echo "<p class='p'>Be the first to write one!</p>";
	echo "<button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"Swrite.php"'."'>Write a new story</button>";
	echo "</div>";
}

?>

</body>
</html>



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
	<button class="btn btn-default btn-lg" id="btncontinue" onclick="window.location.href='read.php'">Read</button>
</a>
</div>
</div>
-->