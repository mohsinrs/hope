<div class="row-fluid">
	<div class="span12">
		<div class="box">
            <?php echo $this->session->flashdata('message'); ?>
			<div class="box-title">
				<h3><i class="icon-edit"></i> Add/Edit Student</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" method="POST" class='form-horizontal form-column form-bordered form-validate' id="frmStudent">
					<div class="span6">
					
						<div class="control-group">
							<label for="txtName" class="control-label">Full Name</label>
							<div class="controls">
								<input type="text" name="txtName" id="txtName" class='input-xlarge required' data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="cmbGraduation" class="control-label">Year of Graduation</label>
							<div class="controls">
								<select name="cmbGraduation" id="cmbGraduation" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtStep2Score" class="control-label">USMLE Step 2 Score</label>
							<div class="controls">
								<input type="text" name="txtStep2Score" id="txtStep2Score" value="0" class="spinner input-mini">
							</div>
						</div>
						<div class="control-group">
							<label for="txtQualification" class="control-label">Postgraduate Qualifications</label>
							<div class="controls">
								<textarea name="txtQualification" id="txtQualification" class='input-xlarge required' data-rule-required="true"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="cmbState" class="control-label">State of Residence</label>
							<div class="controls">
								<select name="cmbState" id="cmbState" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="Alabama&nbsp;">Alabama&nbsp;</option> 
									<option value="Alaska&nbsp;">Alaska&nbsp;</option> 
									<option value="Arizona&nbsp;">Arizona&nbsp;</option> 
									<option value="Arkansas&nbsp;">Arkansas&nbsp;</option> 
									<option value="California">California</option> 
									<option value="Colorado">Colorado</option> 
									<option value="Connecticut&nbsp;">Connecticut&nbsp;</option> 
									<option value="Delaware">Delaware</option> 
									<option value="Florida&nbsp;">Florida&nbsp;</option> 
									<option value="Georgia&nbsp;">Georgia&nbsp;</option> 
									<option value="Hawaii&nbsp;">Hawaii&nbsp;</option> 
									<option value="Idaho">Idaho</option> 
									<option value="Illinois">Illinois</option> 
									<option value="Indiana">Indiana</option> 
									<option value="Iowa&nbsp;">Iowa&nbsp;</option> 
									<option value="Kansas">Kansas</option> 
									<option value="Kentucky&nbsp;">Kentucky&nbsp;</option> 
									<option value="Louisiana">Louisiana</option> 
									<option value="Maine&nbsp;">Maine&nbsp;</option> 
									<option value="Maryland">Maryland</option> 
									<option value="Massachusetts&nbsp;">Massachusetts&nbsp;</option>
									<option value="Michigan">Michigan</option> 
									<option value="Minnesota&nbsp;">Minnesota&nbsp;</option> 
									<option value="Mississippi&nbsp;">Mississippi&nbsp;</option> 
									<option value="Missouri&nbsp;">Missouri&nbsp;</option> 
									<option value="Montana">Montana</option> 
									<option value="Nebraska&nbsp;">Nebraska&nbsp;</option> 
									<option value="Nevada">Nevada</option> 
									<option value="New Hampshire">New Hampshire</option> 
									<option value="New Jersey&nbsp;">New Jersey&nbsp;</option> 
									<option value="New Mexico&nbsp;">New Mexico&nbsp;</option> 
									<option value="New York">New York</option> 
									<option value="North Carolina&nbsp;">North Carolina&nbsp;</option> 
									<option value="North Dakota&nbsp;">North Dakota&nbsp;</option> 
									<option value="Ohio">Ohio</option> 
									<option value="Oklahoma">Oklahoma</option> 
									<option value="Oregon">Oregon</option> 
									<option value="Pennsylvania">Pennsylvania</option> 
									<option value="Rhode Island">Rhode Island</option> 
									<option value="South Carolina">South Carolina</option> 
									<option value="South Dakota&nbsp;">South Dakota&nbsp;</option> 
									<option value="Tennessee&nbsp;">Tennessee&nbsp;</option> 
									<option value="Texas">Texas</option> 
									<option value="Utah">Utah</option> 
									<option value="Vermont">Vermont</option> 
									<option value="Virginia">Virginia</option> 
									<option value="Washington">Washington</option> 
									<option value="West Virginia">West Virginia</option> 
									<option value="Wisconsin">Wisconsin</option> 
									<option value="Wyoming">Wyoming</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtAddress" class="control-label">Home Address</label>
							<div class="controls">
								<textarea name="txtAddress" id="txtAddress" class='input-xlarge required' data-rule-required="true"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Preferred method of contact</label>
							<div class="controls">
								<div class="check-line">
									<input type="radio" id="pmcEmail" class='icheck-me' name="rdoPMC" value="email" data-skin="square" data-color="blue" checked> 
									<label class='inline' for="pmcEmail">Email address only</label>
								</div>
								<div class="check-line">
									<input type="radio" id="pmcPhone" class='icheck-me' name="rdoPMC" value="phone" data-skin="square" data-color="blue"> 
									<label class='inline' for="pmcPhone">Phone number only</label>
								</div>
								<div class="check-line">
									<input type="radio" id="pmcEmailPhone" class='icheck-me' name="rdoPMC" value="email-phone" data-skin="square" data-color="blue"> 
									<label class='inline' for="pmcEmailPhone">Email address and phone number</label>
								</div>										
							</div>
						</div>
						
					</div>
					
					<div class="span6">
						
						<div class="control-group">
							<label for="cmbGender" class="control-label">Gender</label>
							<div class="controls">
								<select name="cmbGender" id="cmbGender" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtStep1Score" class="control-label">USMLE Step 1 Score</label>
							<div class="controls">
								<input type="text" name="txtStep1Score" id="txtStep1Score" value="0" class="spinner input-mini">
							</div>
						</div>
						<div class="control-group">
							<label for="cmbStep2CS" class="control-label">USMLE STEP 2 CS</label>
							<div class="controls">
								<select name="cmbStep2CS" id="cmbStep2CS" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="2014">Passed in first attempt</option>
									<option value="2013">Passed in more than one attempts</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtEmail" class="control-label">Email Address</label>
							<div class="controls">
								<input type="text" name="txtEmail" id="txtEmail" class='input-xlarge required email' data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="txtCity" class="control-label">City</label>
							<div class="controls">
								<input type="text" name="txtCity" id="txtCity" class='input-xlarge required' data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="txtPhone" class="control-label">Phone Number</label>
							<div class="controls">
								<input type="text" name="txtPhone" id="txtPhone" class='input-xlarge required' data-rule-required="true">
							</div>
						</div>
					
					</div>
					
					<div class="span12">
						<div class="form-actions">
							<button type="submit" name="submit" value="frmStudentSubmit" class="btn btn-primary">Save</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>