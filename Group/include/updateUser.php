<?php

?>

            <div class="w3layouts_header">
				<p><span><i class="fa fa-user-o" aria-hidden="true"></i></span></p>
				<h5>Update User</h5>
			</div>
            <div class="w3layouts_skills_grids agileinfo_mail_grids">
                <form action="model/updateuser.php" method="post" class="regForm">
                    <input type="text" name="user_id" value="<?php echo $USER["id"];?>" hidden>
                    <input type="text" name="user_type" value="<?php echo $USER["user_type"];?>" hidden>
                    <div class="container">
                        <div style="width: 500px !important;">
                     <div>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="fname" type="text" placeholder="" required="true" value="<?php echo $USER["fname"];?>"/>
                            <label class="input__label input__label--chisato" for="fname">
                                <span class="input__label-content input__label-content--chisato" data-content="John">First Name <em style="color: red">*</em></span>
                            </label>
                        </span>
                        
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            
                            <input class="input__field input__field--chisato" name="mname" type="text" placeholder="" value="<?php echo $USER["mname"];?>"/>
                            <label class="input__label input__label--chisato" for="mname">
                                <span class="input__label-content input__label-content--chisato" data-content="Jones">Middle Name</span>
                            </label>
                        </span>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="lname" type="text" placeholder="" required="true" value="<?php echo $USER["lname"];?>"/>
                            <label class="input__label input__label--chisato" for="lname">
                                <span class="input__label-content input__label-content--chisato" data-content="Doe">Last Name <em style="color: red">*</em></span>
                            </label>
                        </span>
                    </div>
                    <div>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="tel1" type="text" placeholder="" required="true" value="<?php echo $USER["tel1"];?>"/>
                            <label class="input__label input__label--chisato" for="tel1">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx-xxx-xxxx">Telephone 1 <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="tel2" type="text" placeholder="" value="<?php echo $USER["tel2"];?>"/>
                            <label class="input__label input__label--chisato" for="tel2">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx-xxx-xxxx">Telephone 2</span>
                            </label>
                        </span>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="trn" type="text" placeholder="" value="<?php echo $USER["trn"];?>"/>
                            <label class="input__label input__label--chisato" for="trn">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx-xxx-xxx">Tax Registration Number</span>
                            </label>
                        </span>
                    </div>
                    <div>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="email" type="email" placeholder="" required="true" value="<?php echo $USER["email"];?>"/>
                            <label class="input__label input__label--chisato" for="email">
                                <span class="input__label-content input__label-content--chisato" data-content="exam@ple.com">Email Address <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="password" type="password" placeholder="" />
                            <label class="input__label input__label--chisato" for="password">
                                <span class="input__label-content input__label-content--chisato" data-content="********">Password <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato" style="margin-left: 25mm !important;">
                            <input class="input__field input__field--chisato" name="rpassword" type="password" placeholder="" />
                            <label class="input__label input__label--chisato" for="rpassword">
                                <span class="input__label-content input__label-content--chisato" data-content="********">Re-type Password <em style="color: red">*</em></span>
                            </label>
                        </span>
                    </div>
                    </div>
                    </div>
                    <div class="container">
                    <input type="submit" value="Update" name="regSub" style="margin-left: 26mm !important;"><input type="submit" name="submit" id="regSub" hidden/>
                    </div>
                </form>
            </div>
        