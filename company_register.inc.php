 



<?php 
include 'upper.inc.php';
require 'core.inc.php';
require 'connect.inc.php';
?>
<br/><br/><br/><br/><br/>
 <form action="<?php echo $current_file; ?>" method="POST">
         <center> Enter Company Name:<br/>
     <input type="text" name="company_name" value=""><br/><br/>
     Enter Company Details:<br/>
     <textarea name="company_details" value=""></textarea><br/>
     Adhar Card Number:<br/>
             <center><input type="text" name="adhar_id" value=""> </center><span class="error"> * adhar card number should contain 12 unique digit</span><br/><br/>
     <input type="submit" value="Register">
             </center> 
        </form>
 
<?php
if(!loggedin()){
header('Location: login.php');
    
}
else{
echo  nl2br ("\n");
echo  nl2br ("\n");
echo  nl2br ("\n");
echo  nl2br ("\n");

echo '<a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</a>'.'<br/><br/><br/>';
    
    
    if(isset($_POST['company_name'])&&isset($_POST['company_details'])&&$_POST['adhar_id'])
    {
        $company_name = trim($_POST['company_name']);
          $company_details = trim($_POST['company_details']);
        $adhar_id=$_POST['adhar_id'];
        $register_id=rand(1000,100000);
        if(!empty($company_name)&&!empty($company_details)&&!empty($adhar_id)&&strlen((string)$adhar_id)==12)
        {
            $query = "SELECT company_name FROM companydetails WHERE company_name='".mysqli_real_escape_string($mysql_connect, $company_name)."'";
					$query_run = mysqli_query($mysql_connect, $query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows>=1)
					{
						echo 'The company name '.$company_name.' already exists.'.'<br/>';
                        
					}
					else
					{
                        $query = "SELECT adhar_id FROM companydetails WHERE adhar_id='".mysqli_real_escape_string($mysql_connect, $adhar_id)."'";
					$query_run = mysqli_query($mysql_connect, $query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows>=1)
					{
						echo 'Adhar id:'.$adhar_id.'already present! Please enter unique id'.'<br/>';
					}
                        else{
						$query = "INSERT INTO companydetails VALUES ('".mysqli_real_escape_string($mysql_connect, $register_id)."','".mysqli_real_escape_string($mysql_connect, $company_name)."','".mysqli_real_escape_string($mysql_connect, $company_details)."','".mysqli_real_escape_string($mysql_connect, $adhar_id)."')";
                        
                        
						if($query_run = mysqli_query($mysql_connect, $query))
						{
                        
							echo '<br/><br/>'.'You have successfully registered company'.'<br/><br/>'.'Your company registration id is '.$register_id.'<br/><br/>'.'Note your company registration id it will be required during making company changes'.'<br/><br/>';
                            
                            echo '<a href="client_company_search.php"> Click here to see details of your company</a>'.'<br/><br/>';
                            
						}
                        }
        }
    }
   else{
       echo "Field cannot be empty or adhar id is not equal to 12";
   }    
}
}

 ?>
 
 
    <?php
include 'lower.inc.php';
?>