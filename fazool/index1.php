<?php
require "connection.inc.php";
	if(!empty($_POST["save"])) {
		$itemCount = count($_POST["name"]);
		$itemValues=0;
		
		
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["name"][$i]) || !empty($_POST["relation"][$i])) {
				$itemValues++;
			$name=  $_POST["name"][$i]; 
			 $relation= $_POST["relation"][$i];
			 $ocp= $_POST["ocp"][$i];
			  $org= $_POST["org"][$i];
			   $dsg= $_POST["dsg"][$i];
			    $mearng= $_POST["mearng"][$i];
			    $rmrks= $_POST["rmrks"][$i];
			    /**/
			    $anlincome= $_POST["anlincome"][$i]; 
			 $cnic= $_POST["cnic"][$i];
			 $status= $_POST["status"][$i];
			  $prf_status= $_POST["prf_status"][$i];
			   $cmpny_name= $_POST["cmpny_name"][$i];
			      $address= $_POST["address"][$i];
			    $mobile= $_POST["mobile"][$i];
			    $office_num= $_POST["office_num"][$i];
			    $grade= $_POST["grade"][$i];
			    $ntn= $_POST["ntn"][$i];
			    $apid=111;
			       
			       $sql="INSERT INTO `earning_info`(`applicant_id`, `earning_member_name`, `earning_member_relation`, `earning_member_occupation`, `earning_member_organization`, `earning_member_designation`, `earning_member_monthly_earning`, `earning_member_remarks`, `earning_member_annual_income`, `earning_member_cnic`, `earning_member_status`, `earning_member_professional_status`, `earning_member_company_name`, `earning_member_address`, `earning_member_mobile`, `earning_member_office_number`, `earning_member_grade`, `earning_member_ntn`) VALUES
			        ('$apid','$name','$relation','$ocp','$org','$dsg','$mearng','$rmrks','$anlincome','$cnic','$status','$prf_status','$cmpny_name','$address','$mobile','$office_num','$grade','ntn')";
                      if ($mysqli->query($sql)) {
                        echo "Submited";
                      } else {
                     echo "Failed";
                     }
                     
			}

		}
$mysqli->close();
		
	}
?>
<HTML>
<HEAD>
<TITLE>PHP jQuery Dynamic Textbox</TITLE>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
<SCRIPT>
function addMore() {
	$("<DIV>").load("input1.php", function() {
			$("#product").append($(this).html());
	});	
}
function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</SCRIPT>
</HEAD>
<BODY>
<FORM name="frmProduct" class="form-inline" method="post" action="">
<DIV id="outer">

<DIV id="product">
<?php require_once("input1.php") ?>
</DIV>
<DIV class="btn-action float-clear">
<input type="button" name="add_item" value="Add More" onClick="addMore();" />
<input type="button" name="del_item" value="Delete" onClick="deleteRow();" />
<span class="success"><?php if(isset($message)) { echo $message; }?></span>
</DIV>
<DIV class="footer">
<input type="submit" name="save" value="Save" />
</DIV>
</DIV>
</form>
</BODY>
</HTML>

