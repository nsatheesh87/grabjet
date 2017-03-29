<div class="col-sm-6 col-sm-offset-3">
			<form>
	<div class="bookingBox">

			<div class="form-group pick-up">
				<label class="control-label"> PICK-UP </label>
				<input type="text" name="pick-up" id="pick-up" class="form-control" />
			</div>
			<hr class="border-line"/>
			<div class="form-group drop-off">
				<label class="control-label"> DROP-OFF </label>
				<input type="text" name="drop-off" id="drop-off" class="form-control" />
			</div>
			<hr class="border-line"/>
			<div class="row form-grid  text-center">
				<div class="border-right col-sm-6">
					<div class="form-group">
						<select name="package[]" class="selectpicker" multiple>
							<option value="1"> FLIGHT ATTENDANT (+$300) </option>
							<option value="2"> FULL KITCHEN (+$100) </option>
							<option value="3"> MASSAGE (+$50) </option>
							<option value="4"> JACUZZI (+$180) </option>
						</select>
						
					</div>
				</div>
				<hr style="border-bottom: 1px solid #ccc;" class="hidden-md hidden-lg"/>
				<div class="col-sm-6">
					<div class="form-group">
						<input style="background-color: transparent; text-align: center;" type="text" id="pick-a-date" class="form-control" placeholder="PICK A DATE" name="pick-a-date" />
					</div>
				</div>
			</div>
	</div>
	<div style="margin-top:55px;" class="row">
				<div class="col-sm-12">
				<button class="btn btn-block btn-green"> <span class="pull-left"> REQUEST A JET</span> <span id="total_amount" data-amount="199" class="pull-right">$199</span></button>
				</div>
			</div>
</form>
</div>