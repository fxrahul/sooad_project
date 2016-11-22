


<?php 
require 'core.inc.php';
require 'connect.inc.php';

if(loggedin())
{
    include 'upper.inc.php';
    echo  nl2br ("\n");
    echo  nl2br ("\n");
        echo  nl2br ("\n");  
    echo  nl2br ("\n");  
    echo  nl2br ("\n");
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
    
	echo 'You\'re logged in, '.$firstname.' '.$surname.'.<br/><br/>';
    echo '<a href="logout.php">Log Out</a>';
    echo  nl2br ("\n");  
    echo  nl2br ("\n");  
    echo '<a href="company_register.inc.php">Click here to Register For Company</a>';
        echo  nl2br ("\n");
    echo  nl2br ("\n");  
    echo  nl2br ("\n");
    echo '<a href="client_company_search.php">Details of your company</a>';
    include 'lower.inc.php';
    
}
else
{
	include 'loginform.inc.php';
}	

?>