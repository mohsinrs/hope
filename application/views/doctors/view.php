<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Doctor</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-column form-bordered form-validate' id="frmStudent">
                    <div class="span6">

                        <div class="control-group">
                            <label for="txtUserName" class="control-label">User Name</label>
                            <div class="controls">
                                <input type="text" name="txtUserName" id="txtUserName" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtFirstName" class="control-label">First Name</label>
                            <div class="controls">
                                <input type="text" name="txtFirstName" id="txtFirstName" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtGraduation" class="control-label">Year of Graduation</label>
                            <div class="controls">
                                <input type="text" name="txtGraduation" id="txtGraduation" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtCity" class="control-label">City</label>
                            <div class="controls">
                                <input type="text" name="txtCity" id="txtCity" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtZip" class="control-label">Zip</label>
                            <div class="controls">
                                <input type="text" name="txtZip" id="txtZip" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtPhone" class="control-label">Phone</label>
                            <div class="controls">
                                <input type="text" name="txtPhone" id="txtPhone" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtQualification" class="control-label">Qualifications</label>
                            <div class="controls">
                                <input type="text" name="txtQualification" id="txtQualification" class='input-xlarge required' data-rule-required="true" value="<?php echo isset($result) ? $result->PostQual : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtInstitute" class="control-label">Institute</label>
                            <div class="controls">
                                <input type="text" name="txtInstitute" id="txtInstitute" class='input-xlarge required' data-rule-required="true" value="<?php echo isset($result) ? $result->PostQual : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="cmbDesignation" class="control-label">Designation</label>
                            <div class="controls">
                                <select name="cmbDesignation" id="cmbDesignation" class='input-large chosen-select' data-rule-required="true">
                                    <option value="">Select One</option>
                                    <option value="Male" <?php if(isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php if(isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtDetails" class="control-label">Details</label>
                            <div class="controls">
                                <textarea name="txtDetails" id="txtDetails" class='input-xlarge required' data-rule-required="true"><?php echo isset($result) ? $result->Address : ''; ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="span6">

                        <div class="control-group">
                            <label for="txtEmail" class="control-label">Email Address</label>
                            <div class="controls">
                                <input type="text" name="txtEmail" id="txtEmail" class='input-xlarge required email' value="<?php echo isset($result) ? $result->Email : ''; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtLastName" class="control-label">Last Name</label>
                            <div class="controls">
                                <input type="text" name="txtLastName" id="txtLastName" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtAddress" class="control-label">Address</label>
                            <div class="controls">
                                <textarea name="txtAddress" id="txtAddress" class='input-xlarge required' data-rule-required="true"><?php echo isset($result) ? $result->Address : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtState" class="control-label">State</label>
                            <div class="controls">
                                <input type="text" name="txtState" id="txtState" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtCountry" class="control-label">Country</label>
                            <div class="controls">
                                <input type="text" name="txtCountry" id="txtCountry" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="txtFax" class="control-label">Fax</label>
                            <div class="controls">
                                <input type="text" name="txtFax" id="txtFax" class='input-xlarge required' value="<?php if(isset($result)) echo $result->Name; ?>" data-rule-required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="cmbSpeciality" class="control-label">Speciality</label>
                            <div class="controls">
                                <select name="cmbSpeciality" id="cmbSpeciality" class='input-large chosen-select' data-rule-required="true">
                                    <option value="">Select One</option>
                                    <option value="Male" <?php if(isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php if(isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="cmbPracticeType" class="control-label">Practice Type</label>
                            <div class="controls">
                                <select name="cmbPracticeType" id="cmbPracticeType" class='input-large chosen-select' data-rule-required="true">
                                    <option value="">Select One</option>
                                    <option value="Male" <?php if(isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php if(isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="cmbMemberType" class="control-label">Member Type</label>
                            <div class="controls">
                                <select name="cmbMemberType" id="cmbMemberType" class='input-large chosen-select' data-rule-required="true">
                                    <option value="">Select One</option>
                                    <option value="Male" <?php if(isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php if(isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                </select>
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