<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } else {
        // Print the data
        $output = "You entered:<br>
                   Name: $name <br>
                   Email: $email <br>
                   Password: $password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<?php if (!empty($error)) : ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<?php if (!empty($output)) : ?>
    <p style="color:green;"><?php echo $output; ?></p>
<?php endif; ?>

<form method="POST" action="">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">Register</button>
</form>

</body>
</html>

