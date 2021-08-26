<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    

   $Empcode = $_POST['Empcode'];
   $Empname = $_POST['Empname'];
   $DOB = $_POST['DOB'];
   $DOJ = $_POST['DOJ'];

   $Designation = $_POST['Designation'];
   $Department = $_POST['Department'];
   
   $Basic = $_POST['Basic'];
   $DA = $_POST['DA'];
   $HRA = $_POST['HRA'];

   $Conveyance = $_POST['Conveyance'];
   $Salary = $_POST['Salary'];
   $location = $_POST['location'];



   if(preg_match ('/[^A-Za-z0-9_ -]/', $Empname) ){
   echo "Ente valid name with no special chrecter";

   ?>
   <a href="http://localhost/php%20konderi%20bhaskar/contact.php"> back</a>
   <?php
}

elseif (  !is_numeric($Empcode)) {
   echo "ente valid numeric code ";
   ?>
   <a href="http://localhost/php%20konderi%20bhaskar/contact.php"> back</a>
   <?php
}

elseif ( strtotime($DOB) > time() ) {
   echo "date is in the future";

   ?>
   <a href="http://localhost/php%20konderi%20bhaskar/contact.php"> back2</a>
   <?php
}

elseif(preg_match ('/[^A-Za-z0-9_ -]/', $Designation) ){
   echo "Ente valid designation";

   ?>
   <a href="http://localhost/php%20konderi%20bhaskar/contact.php"> back1</a>
   <?php
}

elseif( $location != "Ahmedabad" && $location != "Banglore" && $location != "Deheradun" 
&& $location != "Gurgaon" && $location != "Hydrabad" && $location != "Jaipur" 
&& $location != "Kolkata" && $location != "Mumbai" && $location != "Pune"  ){

   echo "Only Ahmedabad Banglore Deheradun Gurgaon Hydrabad Jaipur Kolkata Mumbai Pune  allowed"

   ?>
   <a href="http://localhost/php%20konderi%20bhaskar/contact.php"> back1</a>
   <?php
}




else{

   $Empcode = $_POST['Empcode'];
   $Empname = $_POST['Empname'];
   $DOB = $_POST['DOB'];
   $DOJ = $_POST['DOJ'];

   $Designation = $_POST['Designation'];
   $Department = $_POST['Department'];
     
   $Basic = $_POST['Basic'];
   $DA = $_POST['DA'];
   $HRA = $_POST['HRA'];

   $Conveyance = $_POST['Conveyance'];
   $Salary = $_POST['Salary'];
   $location = $_POST['location'];

   $sql = "INSERT INTO Employees (Empcode, Empname, DOB,DOJ,
   Designation, Department, Basic, DA,
   HRA, Conveyance, Salary , location)

    VALUES ('$Empcode', '$Empname' , '$DOB', '$DOJ' , 
    '$Designation' ,'$Department' , '$Basic' , '$DA'
    , '$HRA' , '$Conveyance' , '$Salary', '$location')";


     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

   }


}

else{

   header("Location: http://localhost/php%20konderi%20bhaskar/contact.php");
die();

}
?>