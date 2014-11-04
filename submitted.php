<?php

$db_host = "test.mysql.com";
$db_username = "testuser";
$db_pass = "testpass"; 
$db_name = "testdb";
$db_table = "test_table";


@mysql_connect("$db_host", "$db_username", "$db_pass") or die("You cannot connect to MYSQL");
@mysql_select_db("testdb") or die("No Database");


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}

/* Check all form inputs using check_input function */
$email = check_input($_POST['inputEmail'], "E-mail Address");
$fname = check_input($_POST['inputFname'], "First Name");
$lname = check_input($_POST['inputLname'], "Last Name");

/* Let's prepare the message for the e-mail */

$subject = "Someone has sent you a message";

$message = "

Someone has sent you a message:


Email: $email
First Name: $fname
Last Name: $lname

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: http://address-of-confirmation-page.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>