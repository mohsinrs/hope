<div class="row-fluid">
    <div class="span12">
        <div class="box box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Add/Edit Doctor</h3>
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
                        <label for="txtFirstName" class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text" name="txtFirstName" id="txtFirstName" class='input-xlarge required' value="<?php if (isset($result)) echo $result->FirstName; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtLastName" class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="txtLastName" id="txtLastName" class='input-xlarge required' value="<?php if (isset($result)) echo $result->LastName; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbGender" class="control-label">Gender</label>
                        <div class="controls">
                            <select name="cmbGender" id="cmbGender" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Male" <?php if (isset($result)) echo $result->Gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php if (isset($result)) echo $result->Gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="txtGraduation" class="control-label">Year of Graduation</label>
                        <div class="controls">
                            <select name="txtGraduation" id="txtGraduation" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="2014" <?php if (isset($result)) echo $result->GraduationYear == '2014' ? 'selected' : ''; ?>>2014</option>
                                <option value="2013" <?php if (isset($result)) echo $result->GraduationYear == '2013' ? 'selected' : ''; ?>>2013</option>
                                <option value="2012" <?php if (isset($result)) echo $result->GraduationYear == '2012' ? 'selected' : ''; ?>>2012</option>
                                <option value="2011" <?php if (isset($result)) echo $result->GraduationYear == '2011' ? 'selected' : ''; ?>>2011</option>
                                <option value="2010" <?php if (isset($result)) echo $result->GraduationYear == '2010' ? 'selected' : ''; ?>>2010</option>
                                <option value="2009" <?php if (isset($result)) echo $result->GraduationYear == '2009' ? 'selected' : ''; ?>>2009</option>
                                <option value="2008" <?php if (isset($result)) echo $result->GraduationYear == '2008' ? 'selected' : ''; ?>>2008</option>
                                <option value="2007" <?php if (isset($result)) echo $result->GraduationYear == '2007' ? 'selected' : ''; ?>>2007</option>
                                <option value="2006" <?php if (isset($result)) echo $result->GraduationYear == '2006' ? 'selected' : ''; ?>>2006</option>
                                <option value="2005" <?php if (isset($result)) echo $result->GraduationYear == '2005' ? 'selected' : ''; ?>>2005</option>

                                <option value="2004" <?php if (isset($result)) echo $result->GraduationYear == '2004' ? 'selected' : ''; ?>>2004</option>
                                <option value="2003" <?php if (isset($result)) echo $result->GraduationYear == '2003' ? 'selected' : ''; ?>>2003</option>
                                <option value="2002" <?php if (isset($result)) echo $result->GraduationYear == '2002' ? 'selected' : ''; ?>>2002</option>
                                <option value="2001" <?php if (isset($result)) echo $result->GraduationYear == '2001' ? 'selected' : ''; ?>>2001</option>
                                <option value="2000" <?php if (isset($result)) echo $result->GraduationYear == '2000' ? 'selected' : ''; ?>>2000</option>
                                <option value="1999" <?php if (isset($result)) echo $result->GraduationYear == '2000' ? 'selected' : ''; ?>>1999</option>
                                <option value="1998" <?php if (isset($result)) echo $result->GraduationYear == '1999' ? 'selected' : ''; ?>>1998</option>
                                <option value="1997" <?php if (isset($result)) echo $result->GraduationYear == '1998' ? 'selected' : ''; ?>>1997</option>
                                <option value="1996" <?php if (isset($result)) echo $result->GraduationYear == '1997' ? 'selected' : ''; ?>>1996</option>
                                <option value="1995" <?php if (isset($result)) echo $result->GraduationYear == '1996' ? 'selected' : ''; ?>>1995</option>

                                <option value="1994" <?php if (isset($result)) echo $result->GraduationYear == '1994' ? 'selected' : ''; ?>>1994</option>
                                <option value="1993" <?php if (isset($result)) echo $result->GraduationYear == '1993' ? 'selected' : ''; ?>>1993</option>
                                <option value="1992" <?php if (isset($result)) echo $result->GraduationYear == '1992' ? 'selected' : ''; ?>>1992</option>
                                <option value="1991" <?php if (isset($result)) echo $result->GraduationYear == '1991' ? 'selected' : ''; ?>>1991</option>

                                <option value="1990" <?php if (isset($result)) echo $result->GraduationYear == '1990' ? 'selected' : ''; ?>>1990</option>
                                <option value="1989" <?php if (isset($result)) echo $result->GraduationYear == '1989' ? 'selected' : ''; ?>>1989</option>
                                <option value="1988" <?php if (isset($result)) echo $result->GraduationYear == '1988' ? 'selected' : ''; ?>>1988</option>
                                <option value="1987" <?php if (isset($result)) echo $result->GraduationYear == '1987' ? 'selected' : ''; ?>>1987</option>
                                <option value="1986" <?php if (isset($result)) echo $result->GraduationYear == '1986' ? 'selected' : ''; ?>>1986</option>
                                <option value="1985" <?php if (isset($result)) echo $result->GraduationYear == '1985' ? 'selected' : ''; ?>>1985</option>
                                <option value="1984" <?php if (isset($result)) echo $result->GraduationYear == '1984' ? 'selected' : ''; ?>>1984</option>
                                <option value="1983" <?php if (isset($result)) echo $result->GraduationYear == '1983' ? 'selected' : ''; ?>>1983</option>
                                <option value="1982" <?php if (isset($result)) echo $result->GraduationYear == '1982' ? 'selected' : ''; ?>>1982</option>
                                <option value="1981" <?php if (isset($result)) echo $result->GraduationYear == '1981' ? 'selected' : ''; ?>>1981</option>



                                <option value="1980" <?php if (isset($result)) echo $result->GraduationYear == '1980' ? 'selected' : ''; ?>>1980</option>
                                <option value="1979" <?php if (isset($result)) echo $result->GraduationYear == '1979' ? 'selected' : ''; ?>>1979</option>
                                <option value="1978" <?php if (isset($result)) echo $result->GraduationYear == '1978' ? 'selected' : ''; ?>>1978</option>
                                <option value="1977" <?php if (isset($result)) echo $result->GraduationYear == '1977' ? 'selected' : ''; ?>>1977</option>
                                <option value="1976" <?php if (isset($result)) echo $result->GraduationYear == '1976' ? 'selected' : ''; ?>>1976</option>
                                <option value="1975" <?php if (isset($result)) echo $result->GraduationYear == '1975' ? 'selected' : ''; ?>>1975</option>
                                <option value="1974" <?php if (isset($result)) echo $result->GraduationYear == '1974' ? 'selected' : ''; ?>>1974</option>
                                <option value="1973" <?php if (isset($result)) echo $result->GraduationYear == '1973' ? 'selected' : ''; ?>>1973</option>
                                <option value="1972" <?php if (isset($result)) echo $result->GraduationYear == '1972' ? 'selected' : ''; ?>>1972</option>
                                <option value="1971" <?php if (isset($result)) echo $result->GraduationYear == '1971' ? 'selected' : ''; ?>>1971</option>


                                <option value="1970" <?php if (isset($result)) echo $result->GraduationYear == '1970' ? 'selected' : ''; ?>>1970</option>
                                <option value="1969" <?php if (isset($result)) echo $result->GraduationYear == '1969' ? 'selected' : ''; ?>>1969</option>
                                <option value="1968" <?php if (isset($result)) echo $result->GraduationYear == '1968' ? 'selected' : ''; ?>>1968</option>
                                <option value="1967" <?php if (isset($result)) echo $result->GraduationYear == '1967' ? 'selected' : ''; ?>>1967</option>
                                <option value="1966" <?php if (isset($result)) echo $result->GraduationYear == '1966' ? 'selected' : ''; ?>>1966</option>
                                <option value="1965" <?php if (isset($result)) echo $result->GraduationYear == '1965' ? 'selected' : ''; ?>>1965</option>
                                <option value="1964" <?php if (isset($result)) echo $result->GraduationYear == '1964' ? 'selected' : ''; ?>>1964</option>
                                <option value="1963" <?php if (isset($result)) echo $result->GraduationYear == '1963' ? 'selected' : ''; ?>>1963</option>
                                <option value="1962" <?php if (isset($result)) echo $result->GraduationYear == '1962' ? 'selected' : ''; ?>>1962</option>
                                <option value="1961" <?php if (isset($result)) echo $result->GraduationYear == '1961' ? 'selected' : ''; ?>>1961</option>

                                <option value="1960" <?php if (isset($result)) echo $result->GraduationYear == '1960' ? 'selected' : ''; ?>>1960</option>
                                <option value="1959" <?php if (isset($result)) echo $result->GraduationYear == '1959' ? 'selected' : ''; ?>>1959</option>
                                <option value="1958" <?php if (isset($result)) echo $result->GraduationYear == '1958' ? 'selected' : ''; ?>>1958</option>
                                <option value="1957" <?php if (isset($result)) echo $result->GraduationYear == '1957' ? 'selected' : ''; ?>>1957</option>
                                <option value="1956" <?php if (isset($result)) echo $result->GraduationYear == '1956' ? 'selected' : ''; ?>>1956</option>
                                <option value="1955" <?php if (isset($result)) echo $result->GraduationYear == '1955' ? 'selected' : ''; ?>>1955</option>
                                <option value="1954" <?php if (isset($result)) echo $result->GraduationYear == '1954' ? 'selected' : ''; ?>>1954</option>
                                <option value="1953" <?php if (isset($result)) echo $result->GraduationYear == '1953' ? 'selected' : ''; ?>>1953</option>
                                <option value="1952" <?php if (isset($result)) echo $result->GraduationYear == '1952' ? 'selected' : ''; ?>>1952</option>
                                <option value="1951" <?php if (isset($result)) echo $result->GraduationYear == '1951' ? 'selected' : ''; ?>>1951</option>


                                <option value="1950" <?php if (isset($result)) echo $result->GraduationYear == '1950' ? 'selected' : ''; ?>>1950</option>
                                <option value="1949" <?php if (isset($result)) echo $result->GraduationYear == '1949' ? 'selected' : ''; ?>>1949</option>
                                <option value="1948" <?php if (isset($result)) echo $result->GraduationYear == '1948' ? 'selected' : ''; ?>>1948</option>
                                <option value="1947" <?php if (isset($result)) echo $result->GraduationYear == '1947' ? 'selected' : ''; ?>>1947</option>
                                <option value="1946" <?php if (isset($result)) echo $result->GraduationYear == '1946' ? 'selected' : ''; ?>>1946</option>
                                <option value="2010" <?php if (isset($result)) echo $result->GraduationYear == '1945' ? 'selected' : ''; ?>>1945</option>
                                <option value="1944" <?php if (isset($result)) echo $result->GraduationYear == '1944' ? 'selected' : ''; ?>>1944</option>
                                <option value="1943" <?php if (isset($result)) echo $result->GraduationYear == '1943' ? 'selected' : ''; ?>>1943</option>
                                <option value="1942" <?php if (isset($result)) echo $result->GraduationYear == '1942' ? 'selected' : ''; ?>>1942</option>
                                <option value="1941" <?php if (isset($result)) echo $result->GraduationYear == '1941' ? 'selected' : ''; ?>>1941</option>
                                <option value="1940" <?php if (isset($result)) echo $result->GraduationYear == '1940' ? 'selected' : ''; ?>>1940</option>
                            </select>
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="txtCity" class="control-label">City</label>
                        <div class="controls">
                            <input type="text" name="txtCity" id="txtCity" class='input-xlarge required' value="<?php if (isset($result)) echo $result->City; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtZip" class="control-label">Zip</label>
                        <div class="controls">
                            <input type="text" name="txtZip" id="txtZip" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Zip; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtPhone" class="control-label">Phone</label>
                        <div class="controls">
                            <input type="text" name="txtPhone" id="txtPhone" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Phone; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtQualification" class="control-label">Qualifications</label>
                        <div class="controls">
                            <input type="text" name="txtQualification" id="txtQualification" class='input-xlarge required' data-rule-required="true" value="<?php echo isset($result) ? $result->Qualification : ''; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtInstitute" class="control-label">Institute</label>
                        <div class="controls">
                            <input type="text" name="txtInstitute" id="txtInstitute" class='input-xlarge required' data-rule-required="true" value="<?php echo isset($result) ? $result->Institute : ''; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbDesignation" class="control-label">Designation</label>
                        <div class="controls">
                            <select name="cmbDesignation" id="cmbDesignation" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Male" <?php if (isset($result)) echo $result->Designation == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php if (isset($result)) echo $result->Designatin == 'Female' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtDetails" class="control-label">Details</label>
                        <div class="controls">
                            <textarea name="txtDetails" id="txtDetails" class='input-xlarge required' data-rule-required="true"><?php echo isset($result) ? $result->Detail : ''; ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="txtEmail" class="control-label">Email Address</label>
                        <div class="controls">
                            <input type="text" name="txtEmail" id="txtEmail" class='input-xlarge required email' value="<?php echo isset($result) ? $result->Email : ''; ?>" data-rule-required="true">
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
                            <select name="txtState" id="cmbState" class='input-large chosen-select' data-rule-required="true">
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
                        <label for="txtCountry" class="control-label">Country</label>
                        <div class="controls">
                            <input type="text" name="txtCountry" id="txtCountry" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Country; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="txtFax" class="control-label">Fax</label>
                        <div class="controls">
                            <input type="text" name="txtFax" id="txtFax" class='input-xlarge required' value="<?php if (isset($result)) echo $result->Fax; ?>" data-rule-required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbSpeciality" class="control-label">Speciality</label>
                        <div class="controls">
                            <select name="cmbSpeciality" id="cmbSpeciality" class='input-large chosen-select' data-rule-required="true">
                                <option value="0">Select</option><option value="Abdominal Radiology">Abdominal Radiology</option><option value="Abdominal Surgery">Abdominal Surgery</option><option 
                                    value="Addiction Medicine">Addiction Medicine</option><option value="Addiction Psychiatry">Addiction Psychiatry</option><option value="Adolescent Medcine">Adolescent 
                                    Medcine</option><option value="Adolescent Medicine-Internal Medicine">Adolescent Medicine-Internal Medicine</option><option value="Adolescent Medicine-
                                                                                                                                                            Pediatrics">Adolescent Medicine-Pediatrics</option><option value="Adult Reconstructive Orthopedics">Adult Reconstructive Orthopedics</option><option value="Aerospace 
                                                                                                                                                            Medicine">Aerospace Medicine</option><option value="Allergy">Allergy</option><option value="Allergy &amp; Immunology/Clinical &amp; Lab Immunology">Allergy & 
                                    Immunology/Clinical & Lab Immunology</option><option value="Allergy And Immunology">Allergy And Immunology</option><option value="Anatomic And Clinical 
                                                                                                                                                           Pathology">Anatomic And Clinical Pathology</option><option value="Anatomic Pathology">Anatomic Pathology</option><option 
                                                                                                                                                           value="Anesthesiology">Anesthesiology</option><option value="Blood Banking/Transfusion Medicine">Blood Banking/Transfusion Medicine</option><option value="Cardiac 
                                                                                                                                                           Electrophysiology">Cardiac Electrophysiology</option><option value="Cardiothoracic Radiology">Cardiothoracic Radiology</option><option value="Cardiovascular 
                                                                                                                                                           Diseases">Cardiovascular Diseases</option><option value="Chemical Pathology">Chemical Pathology</option><option value="Child &amp; Adolescent Psychiatry">Child & 
                                    Adolescent Psychiatry</option><option value="Child Neurology">Child Neurology</option><option value="Clinical &amp; Lab Dermatological Immunology">Clinical & Lab 
                                    Dermatological Immunology</option><option value="Clinical &amp; Lab Immunology-Internal Medicine">Clinical & Lab Immunology-Internal Medicine</option><option 
                                    value="Clinical &amp; Lab Immunology-Pediatrics">Clinical & Lab Immunology-Pediatrics</option><option value="Clinical Biochemical Genetics">Clinical Biochemical 
                                    Genetics</option><option value="Clinical Cytogenetics">Clinical Cytogenetics</option><option value="Clinical Molecular Genetics">Clinical Molecular 
                                    Genetics</option><option value="Clinical Neurophysiology">Clinical Neurophysiology</option><option value="Clinical Pathology">Clinical Pathology</option><option 
                                    value="Clinical Pharmacology">Clinical Pharmacology</option><option value="Colon And Rectal Surgery">Colon And Rectal Surgery</option><option value="Cosmetic 
                                    Surgery">Cosmetic Surgery</option><option value="Craniofacial Surgery">Craniofacial Surgery</option><option value="Critical Care Medicine-Anesthesiology">Critical Care 
                                    Medicine-Anesthesiology</option><option value="Critical Care Medicine-Internal Medicine">Critical Care Medicine-Internal Medicine</option><option value="Critical Care 
                                                                                                                                                                                  Medicine-Obstetrics &amp; Gynecology">Critical Care Medicine-Obstetrics & Gynecology</option><option value="Cytopathology">Cytopathology</option><option 
                                                                                                                                                                                  value="Dermatologic Surgery">Dermatologic Surgery</option><option value="Dermatology">Dermatology</option><option 
                                                                                                                                                                                  value="Dermatopathology">Dermatopathology</option><option value="Developmental-Behavioral Pediatrics">Developmental-Behavioral Pediatrics</option><option 
                                                                                                                                                                                  value="Diabetes">Diabetes</option><option value="Diagnostic Radiology">Diagnostic Radiology</option><option value="Emergency Medicine">Emergency 
                                    Medicine</option><option value="Endocrinology, Diabetes &amp; Metabolism">Endocrinology, Diabetes & Metabolism</option><option value="Endovascular Surgical 
                                                                                                                                                               Neuroradiology">Endovascular Surgical Neuroradiology</option><option value="Epidemiology">Epidemiology</option><option value="Facial Plastic Surgery">Facial Plastic 
                                    Surgery</option><option value="Family Medicine">Family Medicine</option><option value="Forensic Pathology">Forensic Pathology</option><option value="Forensic 
                                                                                                                                                                              Psychiatry">Forensic Psychiatry</option><option value="Gastroenterology">Gastroenterology</option><option value="General Practice">General Practice</option><option 
                                                                                                                                                                              value="General Preventive Medicine">General Preventive Medicine</option><option value="General Surgery">General Surgery</option><option value="Geriatric Medicine-
                                                                                                                                                                              Family Practice">Geriatric Medicine-Family Practice</option><option value="Geriatric Medicine-Internal Medicine">Geriatric Medicine-Internal Medicine</option><option 
                                                                                                                                                                              value="Geriatric Psychiatry">Geriatric Psychiatry</option><option value="Gynecological Oncology">Gynecological Oncology</option><option 
                                                                                                                                                                              value="Gynecology">Gynecology</option><option value="Hand Surgery">Hand Surgery</option><option value="Head And Neck Surgery">Head And Neck Surgery</option><option 
                                                                                                                                                                              value="Hematology-Internal Medicine">Hematology-Internal Medicine</option><option value="Hematology-Pathology">Hematology-Pathology</option><option 
                                                                                                                                                                              value="Hematology/Oncology">Hematology/Oncology</option><option value="Hepatology">Hepatology</option><option value="Hospitalist">Hospitalist</option><option 
                                                                                                                                                                              value="Immunology">Immunology</option><option value="Infectious Diseases">Infectious Diseases</option><option value="Internal Medicine">Internal 
                                    Medicine</option><option value="Internal Medicine/Pediatrics">Internal Medicine/Pediatrics</option><option value="Interventional Cardiology">Interventional 
                                    Cardiology</option><option value="Legal Medicine">Legal Medicine</option><option value="Maternal &amp; Fetal Medicine">Maternal & Fetal Medicine</option><option 
                                    value="Medical Genetics">Medical Genetics</option><option value="Medical Management">Medical Management</option><option value="Medical Microbiology">Medical 
                                    Microbiology</option><option value="Medical Oncology">Medical Oncology</option><option value="Medical Toxicology-Emergency Medicine">Medical Toxicology-Emergency 
                                    Medicine</option><option value="Medical Toxicology-Pediatrics">Medical Toxicology-Pediatrics</option><option value="Medical Toxicology-Preventive Medicine">Medical 
                                    Toxicology-Preventive Medicine</option><option value="Molecular Genetic Pathology (Medical Genetics)">Molecular Genetic Pathology (Medical Genetics)</option><option 
                                    value="Molecular Genetic Pathology (Pathology)">Molecular Genetic Pathology (Pathology)</option><option value="Musculoskeletal Oncology">Musculoskeletal 
                                    Oncology</option><option value="Musculoskeletal Radiology">Musculoskeletal Radiology</option><option value="Neonatal-Perinatal Medicine">Neonatal-Perinatal 
                                    Medicine</option><option value="Nephrology">Nephrology</option><option value="Neurodevelopmental Disabilities (Pediatrics)">Neurodevelopmental Disabilities 
                                    (Pediatrics)</option><option value="Neurodevelopmental Disabilities (Psychiatry)">Neurodevelopmental Disabilities (Psychiatry)</option><option value="Neurological 
                                                                                                                                                                               Surgery">Neurological Surgery</option><option value="Neurology">Neurology</option><option value="Neurology/Diagnostic Radiology/Neuroradiology">Neurology/Diagnostic 
                                    Radiology/Neuroradiology</option><option value="Neuropathology">Neuropathology</option><option value="Neuropsychiatry">Neuropsychiatry</option><option 
                                    value="Neuroradiology">Neuroradiology</option><option value="Nuclear Cardiology">Nuclear Cardiology</option><option value="Nuclear Medicine">Nuclear 
                                    Medicine</option><option value="Nuclear Radiology">Nuclear Radiology</option><option value="Nutrition">Nutrition</option><option 
                                    value="Obstetrics">Obstetrics</option><option value="Obstetrics And Gynecology">Obstetrics And Gynecology</option><option value="Occupational Medicine">Occupational 
                                    Medicine</option><option value="Ophthalmology">Ophthalmology</option><option value="Oral And Maxillofacial Surgery">Oral And Maxillofacial Surgery</option><option 
                                    value="Orthopedic Surgery">Orthopedic Surgery</option><option value="Orthopedic Surgery Of The Spine">Orthopedic Surgery Of The Spine</option><option value="Orthopedic 
                                    Trauma">Orthopedic Trauma</option><option value="Orthopedics-Foot And Ankle">Orthopedics-Foot And Ankle</option><option value="Osteopathic Manipulative 
                                    Medicine">Osteopathic Manipulative Medicine</option><option value="Other Specialty">Other Specialty</option><option 
                                    value="Otolaryngology">Otolaryngology</option><option value="Otology">Otology</option><option value="Pain Management">Pain Management</option><option value="Pain 
                                    Management (Physical Medicine &amp; Rehabilitati)">Pain Management (Physical Medicine & Rehabilitati)</option><option value="Pain Medicine">Pain 
                                    Medicine</option><option value="Palliative Medicine">Palliative Medicine</option><option value="Pediatric Allergy">Pediatric Allergy</option><option value="Pediatric 
                                                                                                                                                                                     Anesthesiology">Pediatric Anesthesiology</option><option value="Pediatric Cardiology">Pediatric Cardiology</option><option value="Pediatric Cardiothoracic 
                                                                                                                                                                                     Surgery">Pediatric Cardiothoracic Surgery</option><option value="Pediatric Critical Care Medicine">Pediatric Critical Care Medicine</option><option value="Pediatric 
                                                                                                                                                                                     Dermatology">Pediatric Dermatology</option><option value="Pediatric Emergency Medicine-Emergency Medicine">Pediatric Emergency Medicine-Emergency 
                                    Medicine</option><option value="Pediatric Emergency Medicine-Pediatrics">Pediatric Emergency Medicine-Pediatrics</option><option value="Pediatric 
                                                                                                                                                                 Endocrinology">Pediatric Endocrinology</option><option value="Pediatric Hematology-Oncology">Pediatric Hematology-Oncology</option><option value="Pediatric Infectious 
                                                                                                                                                                 Diseases">Pediatric Infectious Diseases</option><option value="Pediatric Nephrology">Pediatric Nephrology</option><option value="Pediatric Ophthalmology">Pediatric 
                                    Ophthalmology</option><option value="Pediatric Otolaryngology">Pediatric Otolaryngology</option><option value="Pediatric Pathology">Pediatric Pathology</option><option 
                                    value="Pediatric Pulmonology">Pediatric Pulmonology</option><option value="Pediatric Radiology">Pediatric Radiology</option><option value="Pediatric Rehabilitation 
                                    Medicine">Pediatric Rehabilitation Medicine</option><option value="Pediatric Rheumatology">Pediatric Rheumatology</option><option value="Pediatric Surgery-
                                    Neurology">Pediatric Surgery-Neurology</option><option value="Pediatric Surgery-Surgery">Pediatric Surgery-Surgery</option><option value="Pediatric Urology">Pediatric 
                                    Urology</option><option value="Pediatrics">Pediatrics</option><option value="Pediatrics Orthopedics">Pediatrics Orthopedics</option><option value="Pharmaceutical 
                                                                                                                                                                            Medicine">Pharmaceutical Medicine</option><option value="Physical Medicine And Rehabilitation">Physical Medicine And Rehabilitation</option><option value="Plastic 
                                                                                                                                                                            Surgery">Plastic Surgery</option><option value="Plastic Surgery Within The Head And Neck">Plastic Surgery Within The Head And Neck</option><option 
                                                                                                                                                                            value="Proctology">Proctology</option><option value="Psychiatry">Psychiatry</option><option value="Psychoanalysis">Psychoanalysis</option><option value="Public Health 
                                                                                                                                                                            And General Preventive Medicine">Public Health And General Preventive Medicine</option><option value="Pulmonary Critical Care Medicine">Pulmonary Critical Care 
                                    Medicine</option><option value="Pulmonary Diseases">Pulmonary Diseases</option><option value="Radiation Oncology">Radiation Oncology</option><option 
                                    value="Radiological Physics">Radiological Physics</option><option value="Radiology">Radiology</option><option value="Reproductive Endocrinology">Reproductive 
                                    Endocrinology</option><option value="Rheumatology">Rheumatology</option><option value="Selective Pathology">Selective Pathology</option><option value="Sleep 
                                                                                                                                                                                Medicine">Sleep Medicine</option><option value="Spinal Cord Injury">Spinal Cord Injury</option><option value="Sports Medicine (Physical Medicine &amp; 
                                                                                                                                                                                Rehabilitati)">Sports Medicine (Physical Medicine & Rehabilitati)</option><option value="Sports Medicine-Emergency Medicine">Sports Medicine-Emergency 
                                    Medicine</option><option value="Sports Medicine-Family Practice">Sports Medicine-Family Practice</option><option value="Sports Medicine-Internal Medicine">Sports 
                                    Medicine-Internal Medicine</option><option value="Sports Medicine-Orthopedic Surgery">Sports Medicine-Orthopedic Surgery</option><option value="Sports Medicine-
                                                                                                                                                                         Pediatrics">Sports Medicine-Pediatrics</option><option value="Surgery Critical Care-Surgery">Surgery Critical Care-Surgery</option><option value="Surgical 
                                                                                                                                                                         Oncology">Surgical Oncology</option><option value="Thoracic Surgery">Thoracic Surgery</option><option value="Transitional Year">Transitional Year</option>
                                <option value="Transplantation Surgery">Transplantation Surgery</option>
                                <option value="Trauma Surgery">Trauma Surgery</option>
                                <option value="Undersea Medicine & Hyperbaric Medicine">Undersea Medicine & Hyperbaric Medicine</option>
                                <option value="Unspecified">Unspecified</option>
                                <option value="Urgent Care Medicine">Urgent Care Medicine</option>
                                <option value="Urology">Urology</option>
                                <option value="Vascular & Interventional Radiology">Vascular & Interventional Radiology</option>
                                <option value="Vascular Medicine">Vascular Medicine</option>
                                <option value="Vascular Surgery">Vascular Surgery</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbPracticeType" class="control-label">Practice Type</label>
                        <div class="controls">
                            <select name="cmbPracticeType" id="cmbPracticeType" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Male" <?php if (isset($result)) echo $result->PracticeType == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php if (isset($result)) echo $result->PracticeType == 'Female' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cmbMemberType" class="control-label">Member Type</label>
                        <div class="controls">
                            <select name="cmbMemberType" id="cmbMemberType" class='input-large chosen-select' data-rule-required="true">
                                <option value="">Select One</option>
                                <option value="Male" <?php if (isset($result)) echo $result->MemberType == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php if (isset($result)) echo $result->MemberType == 'Female' ? 'selected' : ''; ?>>Female</option>
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