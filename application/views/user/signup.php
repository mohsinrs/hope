<div class="container">
    <div class="row">
        <p>&nbsp;</p>
    </div>
    <div class="sub-content">
        <h6 class="h-sub-content">Login </h6>
    </div>
    <div class="wpcf7">
        <div>
            <form method="post" action="<?php echo base_url('index/processconsultant') ?>" name="signUp" id="signUp">
                <fieldset>

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" required="required">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" required="required" >

                    <!-- Allow form submission with keyboard without duplicating the dialog button -->
                    <input type="submit" name="btnLogin" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
</div>