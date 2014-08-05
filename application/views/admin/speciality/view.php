<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Specialty</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-bordered form-validate' id="frmSpeciality">

                    <div class="control-group">
                        <label for="txtText" class="control-label">Text</label>
                        <div class="controls">
                            <input type="text" name="txtText" id="txtText" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Text; ?>" data-rule-required="true">
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label">Status</label>
                        <div class="controls">
                            <div class="check-line">
                                <input type="radio" id="active" class='icheck-me' name="isActive" value="1" data-skin="square" data-color="blue" <?php if (isset($result)) { echo $result->IsActive == 1 ? 'checked' : ''; } else { echo 'checked'; } ?>> 
                                <label class='inline' for="active">Active</label>
                            </div>
                            <div class="check-line">
                                <input type="radio" id="in-active" class='icheck-me' name="isActive" value="0" data-skin="square" data-color="blue" <?php if (isset($result)) echo $result->IsActive == 0 ? 'checked' : ''; ?>> 
                                <label class='inline' for="in-active">In Active</label>
                            </div>										
                        </div>
                    </div>

                    <div class="span12">
                        <div class="form-actions">
                            <button type="submit" name="submit" value="frmSpecialitySubmit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>