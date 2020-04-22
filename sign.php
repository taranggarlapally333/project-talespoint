<?php

session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesign.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        p{
            color:purple;
            text-align:center;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size:20px;
        }
        .error{
            color:red;
            text-align:center;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size:15px;
        }
    </style>
  </head>
  <body>

      <?php

          if(isset($_SESSION['status']) == 1)
          {

              echo "You are logged in as user".$_SESSION['user_first'] ;
              header("Location:index.php");
          }
          else
          {
             echo "<p>Hey there! You are not logged in!<p>" ;
          }


       ?>
      <div class="container" id = "tab"   style = " width : 500px;">

            <img src="img/logo-black.png" alt="ndd"    style = "width :100px;">
            <ul class= "nav nav-tabs">
              <?php
                  if (isset($_SESSION['signup']))
                  {
                      echo "<li  >  <a  data-toggle = 'tab' href='#signin'>Signin</a></li>
                      <li class = 'active'> <a  data-toggle = 'tab' href='#Signup'>Signup</a> </li>" ;
                  }
                  else {
                    echo "<li class = 'active'>  <a  data-toggle = 'tab' href='#signin'>Signin</a></li>
                    <li > <a   data-toggle = 'tab' href='#Signup'>Signup</a> </li>" ;
                  }


               ?>
            </ul>

            <div class="container-inner">
              <div class="tab-content">
                <?php
                    if(isset($_SESSION['signup']))
                    {
                          echo "<div id='signin'   class = 'tab-pane fade in'>
                              <form class='form' action= 'forSign.php' method='post'>
                                <ul    id = 'signinList'>
                                  <li>  UserName: <input   class = 'form-control textarea-lg'   type='text' name='username' placeholder='Enter your username'></li>

                                  <li>Password: <input  class = 'form-control textarea-lg'  type='password' name='pwd'  password='Enter Password'></li>
                                  <button class= 'btn btn-primary' type='submit' name='signin'>Sign in</button>
                                </ul>

                              </form>
                              </div>" ;


                    }
                    else {
                      echo "<div id='signin'   class = 'tab-pane fade in active'>
                          <form class='form' action= 'forSign.php' method='post'>
                            <ul    id = 'signinList'>
                              <li>  UserName: <input   class = 'form-control textarea-lg'   type='text' name='username' placeholder='Enter your username'></li>

                              <li>Password: <input  class = 'form-control textarea-lg'  type='password' name='pwd'  password='Enter Password'></li>
                              <button class= 'btn btn-primary' type='submit' name='signin'>Sign in</button>
                            </ul>

                          </form>
                          </div>" ;
                    }




                 ?>
                    <?php
                      $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

                        if ( strpos($full_url , 'signin=empty'))
                        {
                                  echo "<p class='error'> All the columns must be filled </p>" ;
                        }
                        else if(strpos($full_url , 'signin=char'))
                        {
                                      echo "<p class='error'>Username or Password entered is invalid</p>" ;
                        }
                        else if(strpos($full_url , 'signin=noacc')){
                                echo "<p class='error'>It seems you don't have an account,  sign up instead</p>" ;
                        }
                        else if(strpos($full_url , 'signin=wrongpassword')){
                                echo "<p class='error'>The password you entered is invalid. Please check the password and try again</p>" ;
                        }



                     ?>


                    <?php
                        if(isset($_SESSION['signup']))
                        {
                            echo "<div  id = 'Signup' class='tab-pane fade in active'>
                              <form class='form' action = 'forSignup.php' method='post'>
                                <ul    id = 'signinList'>
                                  <li> First Name: <input  class = 'form-control textarea-lg'   type='text' name='user_first' placeholder='Enter First name'></li>
                                  <li> Last Name: <input   class = 'form-control textarea-lg'   type='text' name='user_last'  placeholder='Enter last name '></li>
                                  <li> Email id :  <input   class = 'form-control textarea-lg'   type='email' name='user_email' placeholder='enter Email address'> </li>
                                  <li> Username : <input  class = 'form-control textarea-lg'   type='text' name='uid' placeholder='Enter a Username'></li>
                                  <li> Password :  <input  class = 'form-control textarea-lg'   type='password' name='pwd' placeholder='Set a password'> </li>
                                  <li> Retype-password : <input  class = 'form-control textarea-lg'  type='password' name='repass' placeholder='retype-password'> </li>
                                  <button class = 'btn btn-primary' type='submit' name='signup'>Sign up</button>
                                </ul>
                              </form>
                                </div>" ;
                        }
                        else
                        {
                          echo "<div  id = 'Signup' class='tab-pane fade in'>
                            <form class='form' action = 'forSignup.php' method='post'>
                              <ul    id = 'signinList'>
                                <li> First Name: <input  class = 'form-control textarea-lg'   type='text' name='user_first' placeholder='Enter First name'></li>
                                <li> Last Name: <input   class = 'form-control textarea-lg'   type='text' name='user_last'  placeholder='Enter last name '></li>
                                <li> Email id :  <input   class = 'form-control textarea-lg'   type='email' name='user_email' placeholder='enter Email address'> </li>
                                <li> Username : <input  class = 'form-control textarea-lg'   type='text' name='uid' placeholder='Enter a Username'></li>
                                <li> Password :  <input  class = 'form-control textarea-lg'   type='password' name='pwd' placeholder='Set a password'> </li>
                                <li> Retype-password : <input  class = 'form-control textarea-lg'  type='password' name='repass' placeholder='retype-password'> </li>
                                <button class = 'btn btn-primary' type='submit' name='signup'>Sign up</button>
                              </ul>
                            </form>
                              </div>" ;
                        }



                     ?>
                  <?php
                          $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

                            if( strpos($full_url , "signup=empty"))
                            {
                              echo "<p class='error'>All the columns must be filled</p>" ;
                            }
                            else if (strpos($full_url , "signup=char"))
                            {
                                      echo "<p class='error'>Invalid fields (Username , First Name , Last Name) </p>" ;
                            }
                            else if(strpos($full_url , "signup=exist"))
                            {
                                    echo "<p class='error'>Account with this Username already exits. Please choose an other username</p>" ;
                            }
                            else if(strpos($full_url , "signup=emailexist"))
                            {
                                    echo "<p class='error'>You already have an account with this E-mail. Sign in instead</p>" ;
                            }
                            else if(strpos($full_url , "signup=passlen"))
                            {
                                  echo "<p class='error'>Invalid password</p>" ;
                            }
                            else if (strpos($full_url , "signup=passnomatch"))
                            {
                                  echo "<p class='error'>Please re-check the password</p>" ;
                            }
                            else
                            {


                              if (isset($_SESSION['status'])==1)
                              {
                                  echo "<p class='error'>Login successful</p>" ;
                              }

                            }


                   ?>





              </div>  <!-- tab-content-->
            </div>
      </div>
  </body>
</html>
