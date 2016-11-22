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

<html>
    <head>
    </head>
    <body>
         <form action="<?php echo $current_file; ?>" method="POST">
          <center> Enter Company Name:<br/>
     <input type="text" name="company_name" value=""><br/>
        <input type="submit" value="search">
             </center>
        </form>
    </body>
</html>

<?php 

    if(isset($_POST['company_name']))
    {
        $company_name_search= trim($_POST['company_name']);
        if(!empty($company_name_search)){
$company_name= getcompanyfield($company_name_search);
	$company_details = getcompanyfielddetails($company_name_search);
            $register_id=getcompanyid($company_name_search);
            $adhar_id=getadharid($company_name_search);
            $unique_id=$register_id.$adhar_id;
            echo '<br/><br/>';
             echo 'Company registration id: '.$register_id.'<br/><br/>';
            echo 'Company name: '.$company_name.'<br/><br/>';
            echo 'Company deails: '.$company_details.'<br/><br/>';
             echo 'Adhar id: '.$adhar_id.'<br/><br/>';
            echo 'Company Unique Id: '.$unique_id.'<br/><br/>';
        }
        else{
            echo 'field cannot be empty';
        }
    }
?>

<html>
    <head>
        <body>
            <a href="change_company_details2.php">Click here to change your company details</a>
        </body>
    </head>
</html>






<?php
include 'lower.inc.php';
?>