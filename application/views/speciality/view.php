<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<div class="box-title">
				<h3><i class="icon-edit"></i> Add/Edit Speciality</h3>
			</div>
			<div class="box-content nopadding">
				<form action="#" method="POST" class='form-horizontal form-column form-bordered form-validate' id="frmSpeciality">
					<div class="span6">
					
						<div class="control-group">
							<label for="specialityType" class="control-label">Type</label>
							<div class="controls">
								<select name="specialityType" id="specialityType" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="1">Doctor</option>
									<option value="2">Student</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Status</label>
							<div class="controls">
								<div class="check-line">
									<input type="radio" id="active" class='icheck-me' name="isActive" value="1" data-skin="square" data-color="blue" checked> 
									<label class='inline' for="active">Active</label>
								</div>
								<div class="check-line">
									<input type="radio" id="in-active" class='icheck-me' name="isActive" value="0" data-skin="square" data-color="blue"> 
									<label class='inline' for="in-active">In Active</label>
								</div>										
							</div>
						</div>
						
					</div>
					
					<div class="span6">
					
						<div class="control-group">
							<label for="specialityName" class="control-label">Name</label>
							<div class="controls">
								<input type="text" name="specialityName" id="specialityName" class='input-xlarge required' data-rule-required="true">
							</div>
						</div>
					
					</div>
					
					<div class="span12">
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>