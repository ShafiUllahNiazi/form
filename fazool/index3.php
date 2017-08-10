
<?php
	if(!empty($_POST["save"])) {
		$itemCount = count($_POST["Sr#"]);
		$itemValues=0;
		
		
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["Sr#"][$i]) || !empty($_POST["id"][$i])) {
				$itemValues++;
			echo  $_POST["Sr#"][$i]; 
			 echo $_POST["id"][$i];
			 echo $_POST["Asset-Title"][$i];
			  echo $_POST["Asset-Holder-Relation"][$i];
			   echo $_POST["Asset-Total"][$i];
			    

			}
		}
		
	}
?>  
<div id="Assetsworth-field" style="display:none;">
	
		<label>Assets worth (Current Market Value in Pak. Rs.)</label>
		<FORM name="frmProduct" class="form-inline" method="post" action="">
<DIV id="outer">

<DIV id="product">
<?php require_once("input3.php") ?>
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
		
	</div>