<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Observership /Externship/ Electives opportunities</h3>
            </div>
            <div class="box-content nopadding">
                <form action="#" method="POST" class='form-horizontal form-column form-bordered'>
                    <div class="control-group">
                        
                        <div class="controls">
                            <input type="hidden" name="Offertype" id="txtHospital" class='input-xlarge required' value="rotation" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtHospital" class="control-label">Hospital</label>
                        <div class="controls">
                            <input type="text" name="txtHospital" id="txtHospital" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Hospital; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Applicable</label>
                        <div class="controls">
                            <label class='checkbox'>
                                <input type="checkbox" name="multi"> Check this option to add Offer for many years
                            </label>											
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
                            <input type="text" name="foodCity" id="txtCity" class='input-xlarge required' value="<?php echo isset($result) ? $result->FoodCity : ''; ?>" data-rule-required="true">
                        </div>
                    </div>

                    
                    
                    
                    <div class="control-group">
                        <label for="year" class="control-label">Year</label>
                        <div class="controls">
                            <select name="year" id="select" class='input-large'>
                                <option value="">Select One</option>
                                <option value="2014" <?php if (isset($result)) echo $result->Year == '2014' ? 'selected' : ''; ?>>2014</option>
                                <option value="2015" <?php if (isset($result)) echo $result->Year == '2015' ? 'selected' : ''; ?>>2015</option>
                                <option value="2016" <?php if (isset($result)) echo $result->Year == '2016' ? 'selected' : ''; ?>>2016</option>
                                <option value="2017" <?php if (isset($result)) echo $result->Year == '2017' ? 'selected' : ''; ?>>2017</option>
                                <option value="2018" <?php if (isset($result)) echo $result->Year == '2018' ? 'selected' : ''; ?>>2018</option>
                                <option value="2019" <?php if (isset($result)) echo $result->Year == '2019' ? 'selected' : ''; ?>>2019</option>
                                <option value="2020" <?php if (isset($result)) echo $result->Year == '2020' ? 'selected' : ''; ?>>2020</option>
                                <option value="2021" <?php if (isset($result)) echo $result->Year == '2021' ? 'selected' : ''; ?>>2021</option>
                                <option value="2022" <?php if (isset($result)) echo $result->Year == '2022' ? 'selected' : ''; ?>>2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="Tyear" class="control-label">Till Year</label>
                        <div class="controls">
                            <select name="Tyear" id="select" class='input-large'>
                                <option value="">Select One</option>
                                <option value="2014" <?php if (isset($result)) echo $result->TillTear == '2014' ? 'selected' : ''; ?>>2014</option>
                                <option value="2015" <?php if (isset($result)) echo $result->TillTear == '2015' ? 'selected' : ''; ?>>2015</option>
                                <option value="2016" <?php if (isset($result)) echo $result->TillTear == '2016' ? 'selected' : ''; ?>>2016</option>
                                <option value="2017" <?php if (isset($result)) echo $result->TillTear == '2017' ? 'selected' : ''; ?>>2017</option>
                                <option value="2018" <?php if (isset($result)) echo $result->TillTear == '2018' ? 'selected' : ''; ?>>2018</option>
                                <option value="2019" <?php if (isset($result)) echo $result->TillTear == '2019' ? 'selected' : ''; ?>>2019</option>
                                <option value="2020" <?php if (isset($result)) echo $result->TillTear == '2020' ? 'selected' : ''; ?>>2020</option>
                                <option value="2021" <?php if (isset($result)) echo $result->TillTear == '2021' ? 'selected' : ''; ?>>2021</option>
                                <option value="2022" <?php if (isset($result)) echo $result->TillTear == '2022' ? 'selected' : ''; ?>>2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="january" class="control-label">January</label>
                        <div class="controls">
                            <input type="text" name="january" id="textfield" value="<?php if (isset($result)) echo $result->January; ?>" class="spinner input-mini">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="february" class="control-label">February</label>
                        <div class="controls">
                            <input type="text" name="february" id="textfield" value="<?php if (isset($result)) echo $result->Febuary; ?>" class="spinner input-mini">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="march" class="control-label">March</label>
                        <div class="controls">
                            <input type="text" name="march" id="textfield" value="<?php if (isset($result)) echo $result->March; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="april" class="control-label">April</label>
                        <div class="controls">
                            <input type="text" name="april" id="textfield" value="<?php if (isset($result)) echo $result->April; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="may" class="control-label">May</label>
                        <div class="controls">
                            <input type="text" name="may" id="textfield" value="<?php if (isset($result)) echo $result->May; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="june" class="control-label">June</label>
                        <div class="controls">
                            <input type="text" name="june" id="textfield" value="<?php if (isset($result)) echo $result->June; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="july" class="control-label">July</label>
                        <div class="controls">
                            <input type="text" name="july" id="textfield" value="<?php if (isset($result)) echo $result->July; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="august" class="control-label">August</label>
                        <div class="controls">
                            <input type="text" name="august" id="textfield" value="<?php if (isset($result)) echo $result->August; ?>" class="spinner input-mini">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="september" class="control-label">September</label>
                        <div class="controls">
                            <input type="text" name="september" id="textfield" value="<?php if (isset($result)) echo $result->September; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="october" class="control-label">October</label>
                        <div class="controls">
                            <input type="text" name="october" id="textfield" value="<?php if (isset($result)) echo $result->October; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="november" class="control-label">November</label>
                        <div class="controls">
                            <input type="text" name="november" id="textfield" value="<?php if (isset($result)) echo $result->November; ?>" class="spinner input-mini">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="december" class="control-label">December</label>
                        <div class="controls">
                            <input type="text" name="december" id="textfield" value="<?php if (isset($result)) echo $result->December; ?>" class="spinner input-mini">
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