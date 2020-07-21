<?php

require 'header.php';

?>

<h1>contact form</h1>

<div id="success-screen" class="container success-container">
        <h2 class="success-message">Thank you, your details have been submitted.</h2>
        <a href="index.php">homepage</a>
    </div>

    <div id="form-container" class='container'>
        <form action="../main.php" method="post" id="ajax_form">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address <span class="server-message email-message"></span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Full Name <span class="server-message fullname-message"></span></label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="fullName" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Post Code <span class="server-message postcode-message"></span></label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="postCode" maxlength="10" placeholder="Post Code">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone Number <span class="server-message phonenumber-message"></span></label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" maxlength="12" placeholder="Phone Number">
            </div>
            
            <div id="server-results"></div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php

require 'footer.php';

?>