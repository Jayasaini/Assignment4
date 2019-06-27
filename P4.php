<html>
 <head>
  <title>Scores</title>
  </head>
  

  <body> 
<?php
       date_default_timezone_set('Asia/Calcutta'); 
       $First=$_POST['first'];
       $Last=$_POST['last'];
       $time=date('H:i:s');

	     $answer1 = $_POST['ans-1'];
            $answer2 = $_POST['ans-2'];
            $answer3 = $_POST['ans-3'];
            $answer4 = $_POST['ans-4'];
            $answer5 = $_POST['ans-5'];
            $answer6 = $_POST['ans-6'];
            $answer7 = $_POST['ans-7'];
            $answer8 = $_POST['ans-8'];
            $answer9 = $_POST['ans-9'];
            $answer10 = $_POST['ans-10'];
	 	

	    	$Score=0;	    
     	  
	   if ($answer1 == "a") { $Score++; }
   	   if ($answer2 == "c") { $Score++; }
          if ($answer3 == "a") { $Score++; }
	   if ($answer4 == "a") { $Score++; }
	   if ($answer5 == "c") { $Score++; }
	   if ($answer6 == "b") { $Score++; }
	   if ($answer7 == "a") { $Score++; }
	   if ($answer8 == "c") { $Score++; }
	   if ($answer9 == "a") { $Score++; }
	   if ($answer10 == "P4.php") { $Score++; }
    
     echo " Your Score is:";
     echo" $Score/10 Correct ";
    
//create connection
    $host="localhost";
    $User= "root";
    $password= "";
    $dbname="test";
   
    $conn= mysqli_connect($host, $User, $password, $dbname);
    
    if(mysqli_connect_error())
     {
      die('Connection failed (' .mysqli_connect_errno().')'
       .mysqli_connect_error());}
  
$sql = "INSERT INTO  Store (`First name`, `Last name`, `Score`, `time`) VALUES ('$First','$Last','$Score','$time')";
if($conn->query($sql)==TRUE)
{ echo "Response recorded";
}
else{
echo "Error:" .$sql ."<br>" .$conn->error;
}

mysqli_close($conn);
  ?>

</body>
</html>
 
