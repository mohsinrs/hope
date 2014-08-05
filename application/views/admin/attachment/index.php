<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="alert alert-success">
                    <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add Attachment</h3>
            </div>
            <div class="box-content nopadding">
                <form action="" method="POST" class='form-horizontal form-bordered form-validate' id="frmAttachment">

                    <div class="control-group">
                        <label for="cmbStudent" class="control-label">Graduates</label>
                        <div class="controls">
                            <select name="cmbStudent" id="cmbStudent" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <?php if(is_array($result)):  ?>
                                    <?php foreach($result as $student):  ?>
                                        <option value="<?php echo $student->StudentID; ?>"><?php echo $student->FirstName.' '.$student->LastName; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbOffer" class="control-label">Offer</label>
                        <div class="controls">
                            <select name="cmbOffer" id="cmbOffer" class='input-large required' data-rule-required="true">
                                <option value="">Select One</option>
                                <?php if(is_array($offer)):  ?>
                                    <?php foreach($offer as $offer):  ?>
                                        <option value="<?php echo $offer->OfferID; ?>"><?php echo $offer->Hospital.' '.$offer->State.' '.$offer->OfferType; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <?php
//                    if(is_array($month)){
//                    echo "<pre>";
//                        print_r($month);
//                    echo "</pre>";    
//                    }
                    ?>
                    <div class="control-group">
                        <label for="cmbMonth" class="control-label">Month</label>
                        <div class="controls">
                            <select name="cmbMonth" id="cmbMonth" class='input-large required' data-rule-required="true">
<!--                                <option value="">Select One</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Student">Student</option>-->
                            </select>
                        </div>
                    </div>

                    <div class="span12">
                        <div class="form-actions">
                            <button type="submit" name="submit" value="frmAttachmentSubmit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).on('change', '#cmbOffer', function(){
        $.get('getoffermonths/id/'+ $(this).val() , function(response){
            response = '<option value="">Select One</option>' + response;
            $('#cmbMonth').html(response);
        });
    });
</script>