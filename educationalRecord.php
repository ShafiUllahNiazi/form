<DIV class="product-item float-clear" style="width:70%; margin-left:10%; ">
<div class="container col-sm-12">
	<table class="table table-hover">
		<tr>
		<th class="col-sm-3">Level Of Study</th>
		<th class="col-sm-3">Name Of Institution <span id="nameofIns-error" class="signup-error"></span></th></th>
		<th class="col-sm-2">Per Month Fee<span id="pmFee-error" class="signup-error"></span></th></th>
		</tr>

		<tr>
		<td>
			<select name="Educational_Record[]" class="form-control">
		  <option value="Bachelors">Bachelors</option>
		  <option value="Intermediate">Intermediate</option>
		  <option value="Secondary">Secondary</option>
		</select>
		</td>
		<td>
			<input type="text" name="institute[]" id="nameofIns" placeholder="Name Of Institution" class="form-control"/>
		</td>
		<td>

		<input type="text" name="fee_monthly[]" id="pmFee" placeholder="in Rupees" class="form-control"/>

		</td>
		</tr>
	</table>
	<table class="table table-hover">
		<tr>
		<th class="col-sm-2">From Year Month<span id="fromYFee-error" class="signup-error"></span></th>
		<th class="col-sm-2">To Year Month<span id="to_year-error" class="signup-error"></span></th>
		<th class="col-sm-2">GPA\Division<span id="gpa-error" class="signup-error"></span></th>
		<th class="col-sm-2">CGPA\%age<span id="cgpa-error" class="signup-error"></span></th>

		</tr>

		<tr>
		<td>

			
			
			<input type="text" name="from_year[]" id="fromYFee" placeholder="month-year" class="form-control"/>

		</td>
		<td>
			
			<input type="text" name="to_year[]" id="toYFee" placeholder="month-year" class="form-control"/>

		</td>
		<td>
			
			<input type="text" name="divison_gpa[]" id="gpa" class="form-control"/>


		</td>
		<td>
			<input type="text" name="cgpa_percentage[]" id="cgpa" class="form-control"/>
		</td>
		</tr>
	</table>
</DIV>
<DIV class="float-left"><input type="checkbox" name="item_index[]" class="form-control"/></DIV>
</div>
