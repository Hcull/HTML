<!--
Hayley Cull 
Week 4/Assignment Three
9/10/19
-->
<!-- display_user_info.php -->
<!-- get style sheet -->
<style>
<?php include 'styles.css'; ?>
</style>

<?php

$fname=$_POST['firstname'];

$lname=$_POST['lastname'];

$email=$_POST['email'];

$tel=$_POST['tel'];

$address=$_POST['address'];

$city=$_POST['city'];

$state=$_POST['state'];

$zip=$_POST['zip'];

echo "Name: ".$fname." ".$lname."<br>";

echo "Address: ".$address."<br>";

echo "City,State,Zip: ".$city." ".$state." ".$zip."<br>";

echo "Telephone #: ".$tel."<br>";

echo "E-mail: ".$email."<br>";

echo '<a href="user_input.html">Return to input form.</a>';

?>