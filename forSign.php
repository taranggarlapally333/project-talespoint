<?php
    include_once 'Connect.php' ;

    session_start() ;

    $username = mysqli_real_escape_string($conn,$_POST['username']) ;
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']) ;

    $sql = "SELECT * FROM users WHERE user_uid ='$username' " ;
    $sqle = "SELECT * FROM users WHERE user_email ='$username' " ;

    if (isset($_POST['signin']))
    {
          if ( empty($username) || empty($pwd))
          {

              header("Location:sign.php?signin=empty") ;

          }
          else
          {
                if (!preg_match("/^[a-zA-Z]*$/" , $username))
                {

                      
                      header("Location:sign.php?signin=char") ;
                }
                else
                {
                    $result = mysqli_query($conn , $sql) ;
                    if(mysqli_num_rows($result)  > 0 )
                    {
                        while($row = mysqli_fetch_assoc($result))
                        { if($row['user_pwd']==$pwd){


                              
                              $_SESSION['username'] = $row['user_uid'] ;
                              $_SESSION['user_first'] = $row['user_first'] ;
                              $_SESSION['user_last'] = $row['user_last'] ;
                              $_SESSION['status']  = 1 ;

                              header("Location:sign.php?signin=success") ;
                        }else{
                            header("Location:sign.php?signin=wrongpassword") ;
                        }

                        }
                    }
                    else
                    {

                       header("Location:sign.php?signin=noacc") ;
                    }
                }
          }
    }
    else {
            echo "you are not Signed in !" ;

    }
