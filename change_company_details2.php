<?php
include 'upper.inc.php';
    require 'core.inc.php';
require 'connect.inc.php';
if(loggedin())
{
    echo '<br/><br/><br/><br/><br/><br/>';
echo '<a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</a>'.'<br/><br/><br/>';
    
}
else{
header('Location: login.php');
}
?>

<?php
 if(isset($_POST['new_company_name']) AND isset($_POST['new_company_details']) AND isset($_POST['register_id']))
    {
        $register_id=trim($_POST['register_id']);
        $new_company_name= trim($_POST['new_company_name']);
        $new_company_details=trim($_POST['new_company_details']);
        if(!empty($new_company_name) AND !empty($new_company_details) AND !empty($register_id))
        {
            $query = "UPDATE companydetails SET company_name='".mysqli_real_escape_string($mysql_connect, $new_company_name)."', company_details='".mysqli_real_escape_string($mysql_connect, $new_company_details)."' WHERE register_id='".mysqli_real_escape_string($mysql_connect, $register_id)."'";
		if($query_run = mysqli_query($mysql_connect, $query))
        {
            header('Location: change_company_details_success.php'); 
        }
        }
     else{
         echo 'field cannot be empty!';
     }
        }
     ?>

         <form action="<?php echo $current_file; ?>" method="POST">
            <center> Enter register id:<br/>
             <input type="text" name="register_id" value=""><br/>
             change company name:<br/>
             <input type="text" name="new_company_name" value=""><br/>
             change company details:<br/>
             <textarea name="new_company_details" value=""></textarea><br/>
        <input type="submit" value="submit">
                </center>
</form>

     <?php
         include 'lower.inc.php';
     ?>
