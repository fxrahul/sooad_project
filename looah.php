<?php 
include 'upper.inc.php';
require 'core.inc.php';
require 'connect.inc.php';
echo  nl2br ("\n");
echo  nl2br ("\n");
echo  nl2br ("\n");
echo  nl2br ("\n");
if(loggedin()){
echo '<a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log Out</a>'.'<br/><br/><br/>';
}
?>
<html>
    <head>
    </head>
    <body>
        <div id="new_block_content1"><center><h1>List of Officials at Head Quarters</h1></center><br><br>
            <table cellspacing="35">
                <tr>
    <th>Name</th>
    <th>Designation</th> 
    <th>Contact Details</th>
                    <th>Email Id</th>
  </tr>
         
                
                <tr>
                    <td>Sh. Tapan Ray</td>
                    <td>Secretary</td>
                    <td>23382324<br>
23384257 (Fax)</td>
                    <td>tapanray@nic.in</td>
                </tr>
                

                
             
                <tr>
                <td>Shri Navrang Saini</td>
                    <td>DGCoA</td>
                    <td>23381226</td>
                    <td>Dr.navrang@mca.gov.in</td>
                </tr>
                
                
                 <tr>
                <td>Shri. A. Asholi<br>
                    Chalai</td>
                    <td>Joint Secretary</td>
                    <td>23389785<br>
23074212(fax)</td>
                    <td>asholi.chalai@nic.in</td>
                </tr>
                
                
                <tr>
                <td>Shri B.P.Pant			</td>
                    <td>Deputy Secretary</td>
                    <td>23381288</td>
                    <td>Bimal.Pant@mca.gov.in</td>
                </tr>
                
                <tr>
                <td>Shri C. Guravaiah		</td>
                    <td>Joint Director</td>
                    <td>24368970</td>
                    <td></td>
                </tr>
                
                
            </table>
        </div>
    </body>
</html>
<?php
include 'lower.inc.php';
?>