<?php 
session_start();
if(!$_SESSION['username']){
header("location:Login.php");
}
?>
 <?php
	
	//require_once ('connection.inc.php');
	require_once ('connection.inc.php');
	$sql="SELECT * FROM `report` WHERE applicant_id='".$_SESSION['username']."'";
         $result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				 $rrr=$row['result_name'];
			   $srNo = $row['sr_no'];
			   $name = $row['result_name'];
			   $fatherName = $row['result_father'];
			   $cnic = $row['result_cnic'];
			   $mobile = $row['result_mobile'];
			   $monthlyIncome = $row['result_income'];
			   $assetsWorth = $row['result_worth'];
			   $monthlyExpenditures = $row['result_expenditures'];
			   $annualFundAvailablility = $row['result_fund_available'];
			   $monthlyDepositable = $row['result_depisable'];
			   
			   
			}
		}
 
 
 ?>
 <html>
 <head>
 <title>report</title>
 <link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery-3.2.1.min.js"></script>
 </head>
 <body>
 
 <table class="table table-hover table-bordered" >
<tr>
<th class="col-sm-2">Sr. no. </th>
<th class="col-sm-2">Name </th>
<th class="col-sm-2">Father Name</th>
<th class="col-sm-3">CNIC</th>
<th class="col-sm-3">Mobile no.</th>
</tr>
<tr>
	<td>
		<?php  echo $srNo   ?>
	</td>
	<td>
		<?php  echo $name   ?>
	</td>
	<td>
		<?php  echo $fatherName   ?>
	</td>
	<td>
		<?php  echo $cnic   ?>
	</td>
	<td>
		<?php  echo $mobile   ?>
	</td>
</tr>

<tr>
<th class="col-sm-2">Monthly Income</th>
<th class="col-sm-2">Monthly Expenditures</th>
<th class="col-sm-2">Monthly Depositable Income</th>
<th class="col-sm-3">Fund Available</th>
<th class="col-sm-3">Assets worth</th>


</tr>
<tr>
	<td>
		<?php  echo $monthlyIncome   ?>
	</td>
	<td>
		<?php  echo $monthlyExpenditures   ?>
	</td>
	<td>
		<?php  echo $monthlyDepositable   ?>
	</td>
	<td>
		<?php  echo $annualFundAvailablility   ?>
	</td>
	<td>
		<?php  echo $assetsWorth   ?>
	</td>
</tr>

</table>

 
 </body>
 </html>
 