<div class="product-item float-clear" style="width:70%; margin-left:10%; " >
	<label><h2>Land Details</h2></label>
		<div class="container col-sm-12" >
			<table class="table table-hover" >
				<tr>
					<th class="col-sm-3"> Assets Title<span id="title-error" class="signup-error"></span></th>
					<th class="col-sm-3">Qty	</label><span id="lqty-error" class="signup-error"></span></th>
					<th class="col-sm-3">Size<span id="lsize-error" class="signup-error"></span></th>
				</tr>
				<tr>
					<td>
						<select name="tLand[]" id="TypeOfAcc" class="form-control">
						<option value="Residential">Residential</option>
						<option value="Commercial">Commercial /Flat</option>
						<option value="Agricultural">Agricultural</option>
						<option value="Scheme">Employer/Government Scheme</option>
						</select>
					</td>
					<td>
						<input type="text" name="Qty[]" id="lqty" class="form-control">
					</td>
					<td>
						<input type="text" name="Size[]" id="lsize" class="form-control">
					</td>
				</tr>
			</table>
		</div>
		<div class="container col-sm-12" >
			<table class="table table-hover" >
				<tr>
					<th class="col-sm-3">Location (Address)<span id="llocation-error" class="signup-error"></span></th>
					<th class="col-sm-3">Cultivable Area<span id="lCultivableArea-error" class="signup-error"></span></th>
					<th class="col-sm-3">Agricultural Yield per Acre<span id="lYeild-error" class="signup-error"></span></th>
				</tr>
				<tr>
					<td>
						<input type="text" name="Location[]" id="llocation" class="form-control">
					</td>
					<td>
						<input type="text" name="area[]" id="lCultivableArea" class="form-control">
					</td>
					<td>
						<input type="text" name="yield[]" id="lYeild" class="form-control">
					</td>

				</tr>
			</table>
		</DIV>	
		
	<DIV class="float-left"><input type="checkbox" name="item_index[]" class="form-control" /></DIV>
</DIV>