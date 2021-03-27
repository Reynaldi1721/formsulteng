<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');  
       }
       else
       {
           $to = "aldyju9@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
           else
               {
           echo("gagal kirim email karna tidak bayar huan");  
       }
       }
    }
    else
    {
        header("location:index.php");
    }
?>
