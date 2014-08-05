<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Food</h3>
            </div>
            <div class="box-content nopadding">
                <form action="#" method="POST" class='form-horizontal form-column form-bordered'>
                     <div class="control-group">
                        <label for="State" class="control-label">State</label>
                        <div class="controls">
                            <select name="State" id="State" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Alabama" <?php if (isset($result)) echo $result->State == 'Alabama' ? 'selected' : ''; ?>>Alabama</option>
                                <option value="Alaska" <?php if (isset($result)) echo $result->State == 'Alaska' ? 'selected' : ''; ?>>Alaska</option>
                                <option value="Arizona" <?php if (isset($result)) echo $result->State == 'Arizona' ? 'selected' : ''; ?>>Arizona</option>
                                <option value="Arkansas" <?php if (isset($result)) echo $result->State == 'Arkansas' ? 'selected' : ''; ?>>Arkansas</option>
                                <option value="California" <?php if (isset($result)) echo $result->State == 'California' ? 'selected' : ''; ?>>California</option>
                                <option value="Colorado" <?php if (isset($result)) echo $result->State == 'Colorado' ? 'selected' : ''; ?>>Colorado</option>
                                <option value="Connecticut" <?php if (isset($result)) echo $result->State == 'Connecticut' ? 'selected' : ''; ?>>Connecticut</option>
                                <option value="Delaware" <?php if (isset($result)) echo $result->State == 'Delaware' ? 'selected' : ''; ?>>Delaware</option>
                                <option value="Florida" <?php if (isset($result)) echo $result->State == 'Florida' ? 'selected' : ''; ?>>Florida</option>
                                <option value="Georgia" <?php if (isset($result)) echo $result->State == 'Georgia' ? 'selected' : ''; ?>>Georgia</option>
                                <option value="Hawaii" <?php if (isset($result)) echo $result->State == 'Hawaii' ? 'selected' : ''; ?>>Hawaii</option>
                                <option value="Idaho" <?php if (isset($result)) echo $result->State == 'Idaho' ? 'selected' : ''; ?>>Idaho</option>
                                <option value="Illinois" <?php if (isset($result)) echo $result->State == 'Illinois' ? 'selected' : ''; ?>>Illinois</option>
                                <option value="Indiana" <?php if (isset($result)) echo $result->State == 'Indiana' ? 'selected' : ''; ?>>Indiana</option>
                                <option value="Iowa" <?php if (isset($result)) echo $result->State == 'Iowa' ? 'selected' : ''; ?>>Iowa</option>
                                <option value="Kansas" <?php if (isset($result)) echo $result->State == 'Kansas' ? 'selected' : ''; ?>>Kansas</option>
                                <option value="Kentucky" <?php if (isset($result)) echo $result->State == 'Kentucky' ? 'selected' : ''; ?>>Kentucky</option>
                                <option value="Louisiana" <?php if (isset($result)) echo $result->State == 'Louisiana' ? 'selected' : ''; ?>>Louisiana</option>
                                <option value="Maine" <?php if (isset($result)) echo $result->State == 'Maine' ? 'selected' : ''; ?>>Maine</option>
                                <option value="Maryland" <?php if (isset($result)) echo $result->State == 'Maryland' ? 'selected' : ''; ?>>Maryland</option>
                                <option value="Massachusetts" <?php if (isset($result)) echo $result->State == 'Massachusetts' ? 'selected' : ''; ?>>Massachusetts</option>
                                <option value="Michigan" <?php if (isset($result)) echo $result->State == 'Michigan' ? 'selected' : ''; ?>>Michigan</option>
                                <option value="Minnesota" <?php if (isset($result)) echo $result->State == 'Minnesota' ? 'selected' : ''; ?>>Minnesota</option>
                                <option value="Mississippi" <?php if (isset($result)) echo $result->State == 'Mississippi' ? 'selected' : ''; ?>>Mississippi</option>
                                <option value="Missouri" <?php if (isset($result)) echo $result->State == 'Missouri' ? 'selected' : ''; ?>>Missouri</option>
                                <option value="Montana" <?php if (isset($result)) echo $result->State == 'Montana' ? 'selected' : ''; ?>>Montana</option>
                                <option value="Nebraska" <?php if (isset($result)) echo $result->State == 'Nebraska' ? 'selected' : ''; ?>>Nebraska</option>
                                <option value="Nevada" <?php if (isset($result)) echo $result->State == 'Nevada' ? 'selected' : ''; ?>>Nevada</option>
                                <option value="New Hampshire" <?php if (isset($result)) echo $result->State == 'New Hampshire' ? 'selected' : ''; ?>>New Hampshire</option>
                                <option value="New Jersey" <?php if (isset($result)) echo $result->State == 'New Jersey' ? 'selected' : ''; ?>>New Jersey</option>
                                <option value="New Mexico" <?php if (isset($result)) echo $result->State == 'New Mexico' ? 'selected' : ''; ?>>New Mexico</option>
                                <option value="New York" <?php if (isset($result)) echo $result->State == 'New York' ? 'selected' : ''; ?>>New York</option>
                                <option value="North Carolina" <?php if (isset($result)) echo $result->State == 'North Carolina' ? 'selected' : ''; ?>>North Carolina</option>
                                <option value="North Dakota" <?php if (isset($result)) echo $result->State == 'North Dakota' ? 'selected' : ''; ?>>North Dakota</option>
                                <option value="Ohio" <?php if (isset($result)) echo $result->State == 'Ohio' ? 'selected' : ''; ?>>Ohio</option>
                                <option value="Oklahoma" <?php if (isset($result)) echo $result->State == 'Oklahoma' ? 'selected' : ''; ?>>Oklahoma</option>
                                <option value="Oregon" <?php if (isset($result)) echo $result->State == 'Oregon' ? 'selected' : ''; ?>>Oregon</option>
                                <option value="Pennsylvania" <?php if (isset($result)) echo $result->State == 'Pennsylvania' ? 'selected' : ''; ?>>Pennsylvania</option>
                                <option value="Rhode Island" <?php if (isset($result)) echo $result->State == 'Rhode Island' ? 'selected' : ''; ?>>Rhode Island</option>
                                <option value="South Carolina" <?php if (isset($result)) echo $result->State == 'South Carolina' ? 'selected' : ''; ?>>South Carolina</option>
                                <option value="South Dakota" <?php if (isset($result)) echo $result->State == 'South Dakota' ? 'selected' : ''; ?>>South Dakota</option>
                                <option value="Tennessee" <?php if (isset($result)) echo $result->State == 'Tennessee' ? 'selected' : ''; ?>>Tennessee</option>
                                <option value="Texas" <?php if (isset($result)) echo $result->State == 'Texas' ? 'selected' : ''; ?>>Texas</option>
                                <option value="Utah" <?php if (isset($result)) echo $result->State == 'Utah' ? 'selected' : ''; ?>>Utah</option>
                                <option value="Vermont" <?php if (isset($result)) echo $result->State == 'Vermont' ? 'selected' : ''; ?>>Vermont</option>
                                <option value="Virginia" <?php if (isset($result)) echo $result->State == 'Virginia' ? 'selected' : ''; ?>>Virginia</option>
                                <option value="Washington" <?php if (isset($result)) echo $result->State == 'Washington' ? 'selected' : ''; ?>>Washington</option>
                                <option value="West Virginia" <?php if (isset($result)) echo $result->State == 'West Virginia' ? 'selected' : ''; ?>>West Virginia</option>
                                <option value="Wisconsin" <?php if (isset($result)) echo $result->State == 'Wisconsin' ? 'selected' : ''; ?>>Wisconsin</option>
                                <option value="Wyoming" <?php if (isset($result)) echo $result->State == 'Wyoming' ? 'selected' : ''; ?>>Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="City" class="control-label">City</label>
                        <div class="controls">
                            <input type="text" name="City" id="City" class='input-xlarge required' value="<?php echo isset($result) ? $result->City : ''; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntJanuary" class="control-label">January</label>
                        <div class="controls">
                            <input type="text" name="cntJanuary" id="cntJanuary" value="<?php if (isset($result)) echo $result->January; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntFebruary" class="control-label">February</label>
                        <div class="controls">
                            <input type="text" name="cntFebruary" id="cntFebruary" value="<?php if (isset($result)) echo $result->February; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntMarch" class="control-label">March</label>
                        <div class="controls">
                            <input type="text" name="cntMarch" id="cntMarch" value="<?php if (isset($result)) echo $result->March; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntApril" class="control-label">April</label>
                        <div class="controls">
                            <input type="text" name="cntApril" id="cntApril" value="<?php if (isset($result)) echo $result->April; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntMay" class="control-label">May</label>
                        <div class="controls">
                            <input type="text" name="cntMay" id="cntMay" value="<?php if (isset($result)) echo $result->May; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntJune" class="control-label">June</label>
                        <div class="controls">
                            <input type="text" name="cntJune" id="cntJune" value="<?php if (isset($result)) echo $result->June; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntJuly" class="control-label">July</label>
                        <div class="controls">
                            <input type="text" name="cntJuly" id="cntJuly" value="<?php if (isset($result)) echo $result->July; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntAugust" class="control-label">August</label>
                        <div class="controls">
                            <input type="text" name="cntAugust" id="cntAugust" value="<?php if (isset($result)) echo $result->August; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntSeptember" class="control-label">September</label>
                        <div class="controls">
                            <input type="text" name="cntSeptember" id="cntSeptember" value="<?php if (isset($result)) echo $result->September; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntOctober" class="control-label">October</label>
                        <div class="controls">
                            <input type="text" name="cntOctober" id="cntOctober" value="<?php if (isset($result)) echo $result->October; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntNovember" class="control-label">November</label>
                        <div class="controls">
                            <input type="text" name="cntNovember" id="cntNovember" value="<?php if (isset($result)) echo $result->November; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cntDecember" class="control-label">December</label>
                        <div class="controls">
                            <input type="text" name="cntDecember" id="cntDecember" value="<?php if (isset($result)) echo $result->December; ?>" class="spinner input-mini">
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