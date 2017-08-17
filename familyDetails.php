<div class="product-item float-clear">
	
	<div class="col-sm-12">
		<h2>Family Details</h2>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-3">
			<label>Residence Telephone:</label><span id="telephone-error" class="signup-error"></span>
			<div><input type="text" name="applicant_residence_telephone" id="applicant_residence_telephone" placeholder="Type your Telephone no." class="form-control"/></div>
		</div>
		<div class="col-sm-3">
			<label>Applicant Mobile:</label><span id="mob-error" class="signup-error"></span>
			<div><input type="text" name="applicant_mobile" id="applicant_mobile" placeholder="Type your Mobile no." class="form-control"/></div>
		</div>
		<div class="col-sm-3">
			<label>Total Members in the Family:</label><span id="familyMem-error" class="signup-error"></span>
			<div><input type="text" name="applicant_total_family_members" id="applicant_total_family_members" placeholder="Total no. of family members" class="form-control"/></div>
		</div>
		<div class="col-sm-3">
			<label>Members currently living:</label><span id="currentMem-error" class="signup-error"></span>
			<div><input type="text" name="applicant_living_family_members" id="applicant_living_family_members" placeholder="No. of family members currently living with you" class="form-control"/></div>
		</div>

	</div>
	<div class="col-sm-12">
		<div class="col-sm-3">
			<label>Total Number of Siblings married:</label><span id="marriedMem-error"  class="signup-error"></span>
			<div><input type="text" name="applicant_married_family_members" id="applicant_married_family_members" placeholder="No. of married family members" class="form-control"/></div>
		</div>
		<div class="col-sm-3">
			<label>Total Earning Members in Family:</label><span id="earningMem-error" class="signup-error"></span>
			<div><input type="text" name="applicant_earning_members" id="applicant_earning_members" placeholder="No. of Earning members of family" class="form-control"/></div>	
		</div>
		<div class="col-sm-3">
			<label>Total No of family members not earning</label><span id="notEarnMem-error" class="signup-error"></span>
			<div><input type="text" name="applicant_not_earning_members" id="applicant_not_earning_members" placeholder="No. of  Non-Earning members of family" class="form-control"/></div>			
		</div>
		<div class="col-sm-3">
			<label>Brothers/Sisters/Children studying:</label><span id="sibstudy-error" class="signup-error"></span>
			<div><input type="text" name="applicant_studying_members" id="applicant_studying_members" placeholder="No. of members of family studying" class="form-control"/></div>	
		</div>
		
		
	</div>
	<div class="col-sm-12"><br><br></div>
	<div class="col-sm-12">
		
		<div class="form-group"  style="border:1px solid black;">
			<table class="table" cellpadding="0" cellspacing="0" id="table2">
				<tr >
				<td  ><strong>Name of Family Member</strong><span id="nameMem-error" class="signup-error"></span></td>
				<td  ><strong>Relationship</strong> </td>
				<td  ><strong>Marital Status</strong> </td>
				<td  ><strong>Remarks**</strong> </td>
				
				
				</tr>
				<tr>
				<td  ><input name="membername_0" type="text" id="membername_0"  /></td>
				<td ><input name="membersrelationship_0" type="text" id="membersrelationship_0"  /></td>
				<td ><input name="memberstatus_0" type="text" id="memberstatus_0"  /></td>
				 <td ><input name="memberremarks_0" type="text" id="memberremarks_0"  /></td>
				
				</tr>
			</table>
			<input class="btn btn-success" type="button" value="Add" onclick="addRow1();" />
		</div>
		<p>**Remarks: List down the number of dependents supported by married brother(s)/ sister(s)</p>
	</div>


	

</div>