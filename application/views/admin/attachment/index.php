<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add Attachment</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-bordered form-validate' id="frmDoctor">
                    <!--
                    <div class="control-group">
                        <label for="txtUserName" class="control-label">User Name</label>
                        <div class="controls">
                            <input type="text" name="txtUserName" id="txtUserName" class='input-xlarge required' value="<?php if (isset($result)) echo $result->UserName; ?>" data-rule-required="true">
                        </div>
                    </div>
                    -->
                    <div class="control-group">
                        <label for="cmbStudent" class="control-label">Student</label>
                        <div class="controls">
                            <select name="cmbStudent" id="cmbStudent" class='input-large chosen-select' data-rule-required="true">
                                
                                
                                
                                <option value="">Select One</option>
                                <?php
                                if(is_array($result['student'])) {
                                    foreach($result['student'] as $key => $value) { ?>
                                
                                <option value="<?php echo $value->Name?>"><?php echo $value->Name?></option>
                                
                            
                                    <?php }
                                }
                                    ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbOffer" class="control-label">Offers</label>
                        <div class="controls">
                            <select name="cmbOffer" id="cmbOffer" class='input-large chosen-select' data-rule-required="true">
                                
                                
                                
                                <option value="">Select One</option>
                                <?php
                                if(is_array($result['offer'])) {
                                    foreach($result['offer'] as $key => $value) { ?>
                                
                                <option value="<?php echo $value->OfferType.'-'.$value->FoodState?>"><?php echo $value->OfferType.'-'.$value->FoodState?></option>
                                
                            
                                    <?php }
                                }
                                    ?>
                            </select>
                            
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
