<?php

  include_once 'header.php' ;

 ?>
<!DOCTYPE html>
<!--
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Settings</title>
    <link rel="stylesheet" href="stylesettings.css">
  </head>
-->
  <body>
      <div class="container">
        <h3 id="editprofile">Edit Profile</h3>
        <hr>
        <ul  id = "details">

          <li>Name <input type="text" name="name"  placeholder="Your Name">

              Username<input type="text" name="username" placeholder="Your username"> </li>
          <li>bio</li>
          <li><textarea name="bio" rows="8" cols="80"></textarea> </li>
          <li> Mobile : <input type="text" name="mobileNum" placeholder="Your Mobile number">

               Email id :<input type="email" name="emailid" placeholder="Your Email">
          </li>
        </ul>
        <h3 id="editsettings"><span class = "glyphicon glyphicon-cog"></span> Settings</h3>
        <hr>
      </div>
      <div class="container">
            <ul>
                  <li>
                    <h4>Make Profile private (no one will be able to find or read your Stories)</h4>
                    <input type="checkbox" name="proPrivate">

                  </li>
                  <li>
                    <h4>Allow people to find you </h4>
                    <input type="checkbox" name="public" value="">

                  </li>
            </ul>

            <ul>

            <li>  <a href="#">Dowload personal info(HTML)</a> </li>

            <li>  <a  class = "btn btn-warning" href="#">Save</a></li>

            <li>  <a  class = "btn btn-danger" href="#">Delete Account</a> </li>
            </ul>
      </div>
  </body>
</html>
