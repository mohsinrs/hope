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
								<input type="text" name="txtName" id="txtName" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="cmbGraduation" class="control-label">Year of Graduation</label>
							<div class="controls">
								<select name="cmbGraduation" id="cmbGraduation" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="2014" <?php if(isset($result)) echo $result->GraduationYear == '2014' ? 'selected' : ''; ?>>2014</option>
									<option value="2013" <?php if(isset($result)) echo $result->GraduationYear == '2013' ? 'selected' : ''; ?>>2013</option>
									<option value="2012" <?php if(isset($result)) echo $result->GraduationYear == '2012' ? 'selected' : ''; ?>>2012</option>
									<option value="2011" <?php if(isset($result)) echo $result->GraduationYear == '2011' ? 'selected' : ''; ?>>2011</option>
									<option value="2010" <?php if(isset($result)) echo $result->GraduationYear == '2010' ? 'selected' : ''; ?>>2010</option>
									<option value="2009" <?php if(isset($result)) echo $result->GraduationYear == '2009' ? 'selected' : ''; ?>>2009</option>
									<option value="2008" <?php if(isset($result)) echo $result->GraduationYear == '2008' ? 'selected' : ''; ?>>2008</option>
									<option value="2007" <?php if(isset($result)) echo $result->GraduationYear == '2007' ? 'selected' : ''; ?>>2007</option>
									<option value="2006" <?php if(isset($result)) echo $result->GraduationYear == '2006' ? 'selected' : ''; ?>>2006</option>
									<option value="2005" <?php if(isset($result)) echo $result->GraduationYear == '2005' ? 'selected' : ''; ?>>2005</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtStep2Score" class="control-label">USMLE Step 2 Score</label>
							<div class="controls">
								<input type="text" name="txtStep2Score" id="txtStep2Score" value="<?php echo isset($result) ? $result->USMLE2Score : '0'; ?>" class="spinner input-mini">
							</div>
						</div>
						<div class="control-group">
							<label for="txtQualification" class="control-label">Postgraduate Qualifications</label>
							<div class="controls">
								<textarea name="txtQualification" id="txtQualification" class='input-xlarge required' data-rule-required="true"><?php echo isset($result) ? $result->PostQual : ''; ?></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="cmbState" class="control-label">State of Residence</label>
							<div class="controls">
								<select name="cmbState" id="cmbState" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="Alabama" <?php if(isset($result)) echo $result->State == 'Alabama' ? 'selected' : ''; ?>>Alabama</option>
									<option value="Alaska" <?php if(isset($result)) echo $result->State == 'Alaska' ? 'selected' : ''; ?>>Alaska</option>
									<option value="Arizona" <?php if(isset($result)) echo $result->State == 'Arizona' ? 'selected' : ''; ?>>Arizona</option>
									<option value="Arkansas" <?php if(isset($result)) echo $result->State == 'Arkansas' ? 'selected' : ''; ?>>Arkansas</option>
									<option value="California" <?php if(isset($result)) echo $result->State == 'California' ? 'selected' : ''; ?>>California</option>
									<option value="Colorado" <?php if(isset($result)) echo $result->State == 'Colorado' ? 'selected' : ''; ?>>Colorado</option>
									<option value="Connecticut" <?php if(isset($result)) echo $result->State == 'Connecticut' ? 'selected' : ''; ?>>Connecticut</option>
									<option value="Delaware" <?php if(isset($result)) echo $result->State == 'Delaware' ? 'selected' : ''; ?>>Delaware</option>
									<option value="Florida" <?php if(isset($result)) echo $result->State == 'Florida' ? 'selected' : ''; ?>>Florida</option>
									<option value="Georgia" <?php if(isset($result)) echo $result->State == 'Georgia' ? 'selected' : ''; ?>>Georgia</option>
									<option value="Hawaii" <?php if(isset($result)) echo $result->State == 'Hawaii' ? 'selected' : ''; ?>>Hawaii</option>
									<option value="Idaho" <?php if(isset($result)) echo $result->State == 'Idaho' ? 'selected' : ''; ?>>Idaho</option>
									<option value="Illinois" <?php if(isset($result)) echo $result->State == 'Illinois' ? 'selected' : ''; ?>>Illinois</option>
									<option value="Indiana" <?php if(isset($result)) echo $result->State == 'Indiana' ? 'selected' : ''; ?>>Indiana</option>
									<option value="Iowa" <?php if(isset($result)) echo $result->State == 'Iowa' ? 'selected' : ''; ?>>Iowa</option>
									<option value="Kansas" <?php if(isset($result)) echo $result->State == 'Kansas' ? 'selected' : ''; ?>>Kansas</option>
									<option value="Kentucky" <?php if(isset($result)) echo $result->State == 'Kentucky' ? 'selected' : ''; ?>>Kentucky</option>
									<option value="Louisiana" <?php if(isset($result)) echo $result->State == 'Louisiana' ? 'selected' : ''; ?>>Louisiana</option>
									<option value="Maine" <?php if(isset($result)) echo $result->State == 'Maine' ? 'selected' : ''; ?>>Maine</option>
									<option value="Maryland" <?php if(isset($result)) echo $result->State == 'Maryland' ? 'selected' : ''; ?>>Maryland</option>
									<option value="Massachusetts" <?php if(isset($result)) echo $result->State == 'Massachusetts' ? 'selected' : ''; ?>>Massachusetts</option>
									<option value="Michigan" <?php if(isset($result)) echo $result->State == 'Michigan' ? 'selected' : ''; ?>>Michigan</option>
									<option value="Minnesota" <?php if(isset($result)) echo $result->State == 'Minnesota' ? 'selected' : ''; ?>>Minnesota</option>
									<option value="Mississippi" <?php if(isset($result)) echo $result->State == 'Mississippi' ? 'selected' : ''; ?>>Mississippi</option>
									<option value="Missouri" <?php if(isset($result)) echo $result->State == 'Missouri' ? 'selected' : ''; ?>>Missouri</option>
									<option value="Montana" <?php if(isset($result)) echo $result->State == 'Montana' ? 'selected' : ''; ?>>Montana</option>
									<option value="Nebraska" <?php if(isset($result)) echo $result->State == 'Nebraska' ? 'selected' : ''; ?>>Nebraska</option>
									<option value="Nevada" <?php if(isset($result)) echo $result->State == 'Nevada' ? 'selected' : ''; ?>>Nevada</option>
									<option value="New Hampshire" <?php if(isset($result)) echo $result->State == 'New Hampshire' ? 'selected' : ''; ?>>New Hampshire</option>
									<option value="New Jersey" <?php if(isset($result)) echo $result->State == 'New Jersey' ? 'selected' : ''; ?>>New Jersey</option>
									<option value="New Mexico" <?php if(isset($result)) echo $result->State == 'New Mexico' ? 'selected' : ''; ?>>New Mexico</option>
									<option value="New York" <?php if(isset($result)) echo $result->State == 'New York' ? 'selected' : ''; ?>>New York</option>
									<option value="North Carolina" <?php if(isset($result)) echo $result->State == 'North Carolina' ? 'selected' : ''; ?>>North Carolina</option>
									<option value="North Dakota" <?php if(isset($result)) echo $result->State == 'North Dakota' ? 'selected' : ''; ?>>North Dakota</option>
									<option value="Ohio" <?php if(isset($result)) echo $result->State == 'Ohio' ? 'selected' : ''; ?>>Ohio</option>
									<option value="Oklahoma" <?php if(isset($result)) echo $result->State == 'Oklahoma' ? 'selected' : ''; ?>>Oklahoma</option>
									<option value="Oregon" <?php if(isset($result)) echo $result->State == 'Oregon' ? 'selected' : ''; ?>>Oregon</option>
									<option value="Pennsylvania" <?php if(isset($result)) echo $result->State == 'Pennsylvania' ? 'selected' : ''; ?>>Pennsylvania</option>
									<option value="Rhode Island" <?php if(isset($result)) echo $result->State == 'Rhode Island' ? 'selected' : ''; ?>>Rhode Island</option>
									<option value="South Carolina" <?php if(isset($result)) echo $result->State == 'South Carolina' ? 'selected' : ''; ?>>South Carolina</option>
									<option value="South Dakota" <?php if(isset($result)) echo $result->State == 'South Dakota' ? 'selected' : ''; ?>>South Dakota</option>
									<option value="Tennessee" <?php if(isset($result)) echo $result->State == 'Tennessee' ? 'selected' : ''; ?>>Tennessee</option>
									<option value="Texas" <?php if(isset($result)) echo $result->State == 'Texas' ? 'selected' : ''; ?>>Texas</option>
									<option value="Utah" <?php if(isset($result)) echo $result->State == 'Utah' ? 'selected' : ''; ?>>Utah</option>
									<option value="Vermont" <?php if(isset($result)) echo $result->State == 'Vermont' ? 'selected' : ''; ?>>Vermont</option>
									<option value="Virginia" <?php if(isset($result)) echo $result->State == 'Virginia' ? 'selected' : ''; ?>>Virginia</option>
									<option value="Washington" <?php if(isset($result)) echo $result->State == 'Washington' ? 'selected' : ''; ?>>Washington</option>
									<option value="West Virginia" <?php if(isset($result)) echo $result->State == 'West Virginia' ? 'selected' : ''; ?>>West Virginia</option>
									<option value="Wisconsin" <?php if(isset($result)) echo $result->State == 'Wisconsin' ? 'selected' : ''; ?>>Wisconsin</option>
									<option value="Wyoming" <?php if(isset($result)) echo $result->State == 'Wyoming' ? 'selected' : ''; ?>>Wyoming</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtAddress" class="control-label">Home Address</label>
							<div class="controls">
								<textarea name="txtAddress" id="txtAddress" class='input-xlarge required' data-rule-required="true"><?php echo isset($result) ? $result->Address : ''; ?></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Preferred method of contact</label>
							<div class="controls">
								<div class="check-line">
									<input type="radio" id="pmcEmail" class='icheck-me' name="rdoPMC" value="email" data-skin="square" data-color="blue" <?php if(isset($result)) echo $result->ContactMethod == 'email' ? 'checked' : ''; else echo 'checked'; ?>>
									<label class='inline' for="pmcEmail">Email address only</label>
								</div>
								<div class="check-line">
									<input type="radio" id="pmcPhone" class='icheck-me' name="rdoPMC" value="phone" data-skin="square" data-color="blue"  <?php if(isset($result)) echo $result->ContactMethod == 'phone' ? 'checked' : ''; ?>>
									<label class='inline' for="pmcPhone">Phone number only</label>
								</div>
								<div class="check-line">
									<input type="radio" id="pmcEmailPhone" class='icheck-me' name="rdoPMC" value="email-phone" data-skin="square" data-color="blue"  <?php if(isset($result)) echo $result->ContactMethod == 'email-phone' ? 'checked' : ''; ?>>
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
									<option value="Male" <?php if(isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
									<option value="Female" <?php if(isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtStep1Score" class="control-label">USMLE Step 1 Score</label>
							<div class="controls">
								<input type="text" name="txtStep1Score" id="txtStep1Score" value="<?php echo isset($result) ? $result->USMLE1Score : '0'; ?>" class="spinner input-mini">
							</div>
						</div>
						<div class="control-group">
							<label for="cmbStep2CS" class="control-label">USMLE STEP 2 CS</label>
							<div class="controls">
								<select name="cmbStep2CS" id="cmbStep2CS" class='input-large chosen-select' data-rule-required="true">
									<option value="">Select One</option>
									<option value="1" <?php if(isset($result)) echo $result->USMLE2CS == '1' ? 'selected' : ''; ?>>Passed in first attempt</option>
									<option value="0" <?php if(isset($result)) echo $result->USMLE2CS == '0' ? 'selected' : ''; ?>>Passed in more than one attempts</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="txtEmail" class="control-label">Email Address</label>
							<div class="controls">
								<input type="text" name="txtEmail" id="txtEmail" class='input-xlarge required email' value="<?php echo isset($result) ? $result->Email : ''; ?>" data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="txtCity" class="control-label">City</label>
							<div class="controls">
								<input type="text" name="txtCity" id="txtCity" class='input-xlarge required' value="<?php echo isset($result) ? $result->City : ''; ?>" data-rule-required="true">
							</div>
						</div>
						<div class="control-group">
							<label for="txtPhone" class="control-label">Phone Number</label>
							<div class="controls">
								<input type="text" name="txtPhone" id="txtPhone" class='input-xlarge required' value="<?php echo isset($result) ? $result->Phone : ''; ?>" data-rule-required="true">
							</div>
						</div>
					
					</div>
					
					<div class="span12">
						<div class="form-actions">
                            <input type="hidden" name="action" value="<?php echo isset($result) ? 'edit' : 'insert'; ?>">
							<button type="submit" name="submit" value="frmStudentSubmit" class="btn btn-primary">Save</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>