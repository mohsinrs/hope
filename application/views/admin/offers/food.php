<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Food</h3>
            </div>
            <div class="box-content nopadding">
                <form action="#" method="POST" class='form-horizontal form-column form-bordered'>

                   
                    
                    <div class="control-group">
                        <label for="txtStudent" class="control-label">No Of Students</label>
                        <div class="controls">
                            <input type="text" name="txtStudent" id="textfield" value="<?php if (isset($result)) echo $result->TotalStudent; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label for="foodState" class="control-label">State</label>
                        <div class="controls">
                            <select name="foodState" id="foodState" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Alabama" <?php if (isset($result)) echo $result->FoodState == 'Alabama' ? 'selected' : ''; ?>>Alabama</option>
                                <option value="Alaska" <?php if (isset($result)) echo $result->FoodState == 'Alaska' ? 'selected' : ''; ?>>Alaska</option>
                                <option value="Arizona" <?php if (isset($result)) echo $result->FoodState == 'Arizona' ? 'selected' : ''; ?>>Arizona</option>
                                <option value="Arkansas" <?php if (isset($result)) echo $result->FoodState == 'Arkansas' ? 'selected' : ''; ?>>Arkansas</option>
                                <option value="California" <?php if (isset($result)) echo $result->FoodState == 'California' ? 'selected' : ''; ?>>California</option>
                                <option value="Colorado" <?php if (isset($result)) echo $result->FoodState == 'Colorado' ? 'selected' : ''; ?>>Colorado</option>
                                <option value="Connecticut" <?php if (isset($result)) echo $result->FoodState == 'Connecticut' ? 'selected' : ''; ?>>Connecticut</option>
                                <option value="Delaware" <?php if (isset($result)) echo $result->FoodState == 'Delaware' ? 'selected' : ''; ?>>Delaware</option>
                                <option value="Florida" <?php if (isset($result)) echo $result->FoodState == 'Florida' ? 'selected' : ''; ?>>Florida</option>
                                <option value="Georgia" <?php if (isset($result)) echo $result->FoodState == 'Georgia' ? 'selected' : ''; ?>>Georgia</option>
                                <option value="Hawaii" <?php if (isset($result)) echo $result->FoodState == 'Hawaii' ? 'selected' : ''; ?>>Hawaii</option>
                                <option value="Idaho" <?php if (isset($result)) echo $result->FoodState == 'Idaho' ? 'selected' : ''; ?>>Idaho</option>
                                <option value="Illinois" <?php if (isset($result)) echo $result->FoodState == 'Illinois' ? 'selected' : ''; ?>>Illinois</option>
                                <option value="Indiana" <?php if (isset($result)) echo $result->FoodState == 'Indiana' ? 'selected' : ''; ?>>Indiana</option>
                                <option value="Iowa" <?php if (isset($result)) echo $result->FoodState == 'Iowa' ? 'selected' : ''; ?>>Iowa</option>
                                <option value="Kansas" <?php if (isset($result)) echo $result->FoodState == 'Kansas' ? 'selected' : ''; ?>>Kansas</option>
                                <option value="Kentucky" <?php if (isset($result)) echo $result->FoodState == 'Kentucky' ? 'selected' : ''; ?>>Kentucky</option>
                                <option value="Louisiana" <?php if (isset($result)) echo $result->FoodState == 'Louisiana' ? 'selected' : ''; ?>>Louisiana</option>
                                <option value="Maine" <?php if (isset($result)) echo $result->FoodState == 'Maine' ? 'selected' : ''; ?>>Maine</option>
                                <option value="Maryland" <?php if (isset($result)) echo $result->FoodState == 'Maryland' ? 'selected' : ''; ?>>Maryland</option>
                                <option value="Massachusetts" <?php if (isset($result)) echo $result->FoodState == 'Massachusetts' ? 'selected' : ''; ?>>Massachusetts</option>
                                <option value="Michigan" <?php if (isset($result)) echo $result->FoodState == 'Michigan' ? 'selected' : ''; ?>>Michigan</option>
                                <option value="Minnesota" <?php if (isset($result)) echo $result->FoodState == 'Minnesota' ? 'selected' : ''; ?>>Minnesota</option>
                                <option value="Mississippi" <?php if (isset($result)) echo $result->FoodState == 'Mississippi' ? 'selected' : ''; ?>>Mississippi</option>
                                <option value="Missouri" <?php if (isset($result)) echo $result->FoodState == 'Missouri' ? 'selected' : ''; ?>>Missouri</option>
                                <option value="Montana" <?php if (isset($result)) echo $result->FoodState == 'Montana' ? 'selected' : ''; ?>>Montana</option>
                                <option value="Nebraska" <?php if (isset($result)) echo $result->FoodState == 'Nebraska' ? 'selected' : ''; ?>>Nebraska</option>
                                <option value="Nevada" <?php if (isset($result)) echo $result->FoodState == 'Nevada' ? 'selected' : ''; ?>>Nevada</option>
                                <option value="New Hampshire" <?php if (isset($result)) echo $result->FoodState == 'New Hampshire' ? 'selected' : ''; ?>>New Hampshire</option>
                                <option value="New Jersey" <?php if (isset($result)) echo $result->FoodState == 'New Jersey' ? 'selected' : ''; ?>>New Jersey</option>
                                <option value="New Mexico" <?php if (isset($result)) echo $result->FoodState == 'New Mexico' ? 'selected' : ''; ?>>New Mexico</option>
                                <option value="New York" <?php if (isset($result)) echo $result->FoodState == 'New York' ? 'selected' : ''; ?>>New York</option>
                                <option value="North Carolina" <?php if (isset($result)) echo $result->FoodState == 'North Carolina' ? 'selected' : ''; ?>>North Carolina</option>
                                <option value="North Dakota" <?php if (isset($result)) echo $result->FoodState == 'North Dakota' ? 'selected' : ''; ?>>North Dakota</option>
                                <option value="Ohio" <?php if (isset($result)) echo $result->FoodState == 'Ohio' ? 'selected' : ''; ?>>Ohio</option>
                                <option value="Oklahoma" <?php if (isset($result)) echo $result->FoodState == 'Oklahoma' ? 'selected' : ''; ?>>Oklahoma</option>
                                <option value="Oregon" <?php if (isset($result)) echo $result->FoodState == 'Oregon' ? 'selected' : ''; ?>>Oregon</option>
                                <option value="Pennsylvania" <?php if (isset($result)) echo $result->FoodState == 'Pennsylvania' ? 'selected' : ''; ?>>Pennsylvania</option>
                                <option value="Rhode Island" <?php if (isset($result)) echo $result->FoodState == 'Rhode Island' ? 'selected' : ''; ?>>Rhode Island</option>
                                <option value="South Carolina" <?php if (isset($result)) echo $result->FoodState == 'South Carolina' ? 'selected' : ''; ?>>South Carolina</option>
                                <option value="South Dakota" <?php if (isset($result)) echo $result->FoodState == 'South Dakota' ? 'selected' : ''; ?>>South Dakota</option>
                                <option value="Tennessee" <?php if (isset($result)) echo $result->FoodState == 'Tennessee' ? 'selected' : ''; ?>>Tennessee</option>
                                <option value="Texas" <?php if (isset($result)) echo $result->FoodState == 'Texas' ? 'selected' : ''; ?>>Texas</option>
                                <option value="Utah" <?php if (isset($result)) echo $result->FoodState == 'Utah' ? 'selected' : ''; ?>>Utah</option>
                                <option value="Vermont" <?php if (isset($result)) echo $result->FoodState == 'Vermont' ? 'selected' : ''; ?>>Vermont</option>
                                <option value="Virginia" <?php if (isset($result)) echo $result->FoodState == 'Virginia' ? 'selected' : ''; ?>>Virginia</option>
                                <option value="Washington" <?php if (isset($result)) echo $result->FoodState == 'Washington' ? 'selected' : ''; ?>>Washington</option>
                                <option value="West Virginia" <?php if (isset($result)) echo $result->FoodState == 'West Virginia' ? 'selected' : ''; ?>>West Virginia</option>
                                <option value="Wisconsin" <?php if (isset($result)) echo $result->FoodState == 'Wisconsin' ? 'selected' : ''; ?>>Wisconsin</option>
                                <option value="Wyoming" <?php if (isset($result)) echo $result->FoodState == 'Wyoming' ? 'selected' : ''; ?>>Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="foodCity" class="control-label">City</label>
                        <div class="controls">
                            <input type="text" name="foodCity" id="foodCity" class='input-xlarge required' value="<?php echo isset($result) ? $result->FoodCity : ''; ?>" data-rule-required="true">
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