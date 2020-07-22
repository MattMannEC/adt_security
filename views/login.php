<?php

require 'header.php';

?>

<h1>login page</h1>
<div id="form-container" class='container'>

    <form action="frontController.php" method="post" id="ajax_login_form">
        <div class="form-group">
            <label for="exampleInputEmail1">Username <span class="server-message username-message"></span></label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="passwordHelp" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password <span class="server-message password-message"></span></label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php

require 'footer.php';

?>