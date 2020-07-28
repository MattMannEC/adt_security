<?php
require 'header.php';
?>
<section id="successSection">
    <div class="container successContainer d-flex justify-content-center flex-column">
            <h1 class="successMessageTitle successMessage text-center successTitle py-2 py-sm-4">Thank you !</h1>
            <h3 class="successMessage text-center successText">Your details have been submitted. We will be in touch with you shortly.</h3>
            <img src="img/adt_logo.png" class="adtLogo mx-auto successLogo py-4 py-sm-5" alt="ADT Logo">
    </div>
</section>
<section id="formSection">
    <form action="frontController.php" class="container formContainer d-flex justify-content-center flex-column py-1 py-sm-2" method="post" id="ajax_form_contact">
        <h2 class="formTitle py-2 px-1 py-sm-5">Get A Free Quote</h2>    
        <div class="form-group">
            <label for="exampleInputEmail1">Email address <span class="server-message email-message"></span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Full Name <span class="server-message fullname-message"></span></label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="fullName" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Post Code <span class="server-message postcode-message"></span></label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="postCode" maxlength="10" placeholder="Post Code" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone Number <span class="server-message phonenumber-message"></span></label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" maxlength="12" placeholder="Phone Number" required>
        </div>
        
        <div id="server-results"></div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</section>

<?php

require 'footer.php';

?>