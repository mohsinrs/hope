<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Match Offer</h3>
            </div>
            
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-bordered form-validate' id="frmMatch">
                    <div class="control-group">
                        <label for="txtName" class="control-label">Graduate Name</label>
                        <div class="controls">
                            <?php echo $graduate->FirstName . ' ' . $graduate->LastName ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label">Graduate Specialty</label>
                        <div class="controls">
                            <?php echo $graduate->Text ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbOffer" class="control-label">Offer</label>
                        <div class="controls">
                            <select name="cmbOffer" id="cmbOffer" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <?php if(is_array($offers)):  ?>
                                    <?php foreach($offers as $offer):  ?>
                                        <option value="<?php echo $offer->OfferID; ?>"><?php echo $offer->Hospital.' - '.$offer->State.' - '.$offer->OfferType; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbMonth" class="control-label">Month</label>
                        <div class="controls">
                            <select name="cmbMonth" id="cmbMonth" class='input-large required' data-rule-required="true">
                            </select>
                        </div>
                    </div>

                    <div class="span12">
                        <div class="form-actions">
                            <button type="submit" name="submit" value="frmMatch" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#chkUSMLE').change(function() {
            if ($(this).prop('checked')) {
                $('.usmle').removeClass('hide');
            } else {
                $('.usmle').addClass('hide');
            }
        });
        $('#chkUSMLE').trigger('change');
    });
    
    $(document).on('change', '#cmbOffer', function(){
        $.get('/hope/admin/students/getoffermonths/'+ $(this).val() , function(response){
            response = '<option value="">Select One</option>' + response;
            $('#cmbMonth').html(response);
        });
    });
</script>