<?php
    include_once 'Connect.php' ;
    session_start();

    $user_first = mysqli_real_escape_string($conn, $_POST['user_first']) ;
    $user_last = mysqli_real_escape_string($conn, $_POST['user_last'])  ;
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email'])  ;
    $username =mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd =   mysqli_real_escape_string($conn,$_POST['pwd'] )  ;
    $repass =  mysqli_real_escape_string($conn,$_POST['repass']);


    if(isset($_POST['signup']))
    {

         $_SESSION['signup'] =1 ; 
         if(empty($user_first)|| empty($user_last) || empty($user_email) || empty($username) || empty($pwd)|| empty($repass))
         {
                header("Location:sign.php?signup=empty") ;
         }
         else
         {
             
             

               $sql = "SELECT * FROM users WHERE user_uid = '$username'" ;
               
               $result = mysqli_query($conn , $sql) ;
               $sqle = "SELECT * FROM users WHERE user_email = '$user_email'" ;
               $result2 = mysqli_query($conn , $sqle) ;
               if(mysqli_num_rows($result) > 0 )
               {
                  header("Location:sign.php?signup=exist") ;
               }
               
               else if(mysqli_num_rows($result2) > 0 )
               {
                  header("Location:sign.php?signup=emailexist") ;
               }
               else
               {
                 
                       if( $pwd != $repass)
                       {
                          header("Location:sign.php?signup=passnomatch");
                       }
                       else
                       {
                           $sql="insert into users(user_first,user_last,user_email,user_uid,user_pwd) 
                                values('$user_first','$user_last','$user_email','$username','$pwd')";
                                
                                mysqli_query($conn,$sql);
                                
                                $_SESSION['user_first']=$user_first;
                                $_SESSION['user_last']=$user_last;
                                $_SESSION['user_email']=$user_email;
                                $_SESSION['username']=$username;
                                $_SESSION['status']=1;
                                
                                
                                header("Location: index.php?signup=success");
                          
                       }
                  
               }
             
         }
    }
    else {
          echo "please fill the details" ;
    }




 ?>
