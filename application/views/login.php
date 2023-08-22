<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php //echo validation_errors(); ?>
    <?php echo form_open('auth/login'); ?>

    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>

    <button type="submit">Login</button>

    <?php echo form_close(); ?>
</body>
</html>