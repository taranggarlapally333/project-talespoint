<?php
include "header.php";
if($_SESSION['status']==0)
{
header("Location: sign.php");
}
?>
<div class="container">

<?php
echo "<p class='p'>How are you doing, ".$_SESSION['user_first']."?</p>";
?>
<!-- display latest story-->
<br>
<div class="mystory col-md-3">
	<a href="#" class="col-md-12 contwriting">Continue writing..</a>
  <?php
  include "temp/dbh.php";
  $sql="select * from stories where username='".$_SESSION['username']."';";
  $result=mysqli_query($conn,$sql);
  $nrows=mysqli_num_rows($result);
  if($nrows>0){
    while($row=mysqli_fetch_assoc($result)){
      echo "<img src='img/books/".$row['imgid']."'>";
      break;
    }
  }
  else{
    echo "<br><p class='p'>You haven't written any stories yet</p>";
  }
  ?>
	
</div>
<div class="col-md-3">
	<a class="mylabel" href="#">
		<br>
		<br>
    <?php
    include "temp/dbh.php";
    $sql="select * from stories where username='".$_SESSION['username']."';";
    $result=mysqli_query($conn,$sql);
    $nrows=mysqli_num_rows($result);
    if($nrows>0){
      while($row=mysqli_fetch_assoc($result)){
        echo "<h2>".$row['story_name']."</h2>";
        echo "<p class='p'>".$row['username']."</p>";
        echo "<p class='views'>
    <span class='glyphicon glyphicon-star' style='color:gold'></span>260
    &nbsp;<i class='fa fa-eye'></i>450
  </p>
  <br>
  <br> 
  <button class='btn btn-default btn-lg' id='btncontinue' onclick='"."window.location.href=".'"Swrite.php"'."'>Continue Writing</button>";
  break;
    }
  }

    ?>
    <!--
 <h2>THE DARK SAVIOR</h2>
	<p class="p">Tarang Garlapally</p>
	<p class="views">
		<span class="glyphicon glyphicon-star" style="color:gold"></span>260
		&nbsp;<i class="fa fa-eye"></i>450
	</p>
	<br>
	<br>
	<button class="btn btn-default btn-lg" id="btncontinue">Continue...</button>
-->
</a>
</div>



<!-- display carousel-->

<div class="col-md-6">
	<br>
	<p class="p">Popular on TalesPoint</p>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-img item active">
       <img class="center-block" src="img/books/book1.jpg" alt="book1">
       
      <div class="carousel-caption">
      	<a class="carouselcaption" href="read.php">
      		<h2>THE DARK SAVIOR</h2>
      		<p>Tarang Garlapally</p>
      		<br>
      		<h4>Read Story</h4>
      	</a> 	
      </div>
    </div>

    <div class="carousel-img item">
      <img src="img/books/book2.jpg" alt="book2">
      <div class="carousel-caption">
      	<a class="carouselcaption" href="read.php">
      		<h2>THE CONSCIENCE</h2>
      		<p>Karthik Pasupulatei</p>
      		<br>
      		<h4>Read Story</h4>
      	</a> 	
      </div>
    </div>

    <div class="carousel-img item">
      <img src="img/books/book3.jpg" alt="book3">
      <div class="carousel-caption">
      	<a class="carouselcaption" href="read.php">
      		<h2>THE SAD SAGA</h2>
      		<p>Josh Brussel</p>
      		<br>
      		<h4>Read Story</h4>
      	</a> 	
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<br>
<br>
<br>
<Br>
<div class="container">
<p class="p">Top Categories</p>

<?php
include "home2.php";
?>
<!-- Footer -->

</div>


</body>


</html>