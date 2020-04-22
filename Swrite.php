
<?php

  include_once  'header.php' ;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Write your Story</title>
    <link rel="stylesheet" href="stylesw.css">
  </head>
  <body>
      <div class="container-fluid"  id = "main">

            <!--after selecting the img we need to show it-->
            <div class="row">
                <div class="col-lg-6"  >
                  <ul  id = "subStory">
                    <li><textarea   class = "form-control textarea-lg"  name="Story" rows="20" cols="60" placeholder="Write your Story here..."></textarea></li>
                    <li><a  type = "button"  class = "btn btn-primary" href="#">publish</a></li>
                  </ul>
                </div>
                <div class="col-lg-6"  >
                  <ul  id = "sDetails">
                    <li><input type="file" name="storyimg" placeholder="">
                        <h5>story image</h5>
                    </li>
                     <li  style="list-style : none ; "> <input  class = "form-control input-lg" type="text" name="title" placeholder="title"> </li>
                     <li   style="list-style : none ; "> <textarea   class = "form-control textarea-lg" name="description" rows="8" cols="22"  placeholder= " description"></textarea> </li>
                     <li  style="list-style : none ; "> <input   class = "form-control input-lg" type="text" name="hastags" placeholder="#hastags"> </li>
                     <li    style="list-style : none ; "> <input   class = "form-control input-lg" type="text" name="part title" placeholder="part title"> </li>
                  </ul>
                </div>

            </div>




      </div>
  </body>
</html>
