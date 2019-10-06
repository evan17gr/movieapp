<?php

if (isset($_GET["error"])){
    if ($_GET["error"] == "emptyfields"){
        echo "<i class=\"fa fa-warning icon\"></i>";
        echo "<p class='signuperror'>Fill in all the fields</p>";
    }
    elseif ($_GET["error"] == "wrongemail"){
        echo "<i class=\"fa fa-warning icon\"></i>";
        echo "<p class='signuperror'>Use a valid email </p>";
    }
    elseif ($_GET["error"] == "wrongusername"){
        echo "<i class=\"fa fa-warning icon\"></i>";
        echo "<p class='signuperror'>Only use a-z and 0-9 for the username </p>";
    }
    elseif ($_GET["error"] == "passwordsdontmatch"){
        echo "<i class=\"fa fa-warning icon\"></i>";
        echo "<p class='signuperror'>Passwords don't match </p>";
    }
    elseif ($_GET["error"] == "userexists"){
        echo "<i class=\"fa fa-warning icon\"></i>";
        echo "<p class='signuperror'>A user with this email already exists </p>";
    }
    elseif ($_GET["error"] == "noerror"){
        echo "<p id='success'>Successful sign up!</p>";
    }
}

?>