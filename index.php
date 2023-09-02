<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="validation.php" method="post">
        <label for="full_name">Full name : </label>
        <input type="text" name = "full_name"><br>

        <label for="phone_number">Contact no :</label>
        <input type="text" name="phone_number"><br>

        <label for="email"> Email</label>
        <input type="email" name ="email"><br>

        <label for="subject">Subject</label>
        <input type="text" name="subject" ><br>

        <label for="message">Message</label>
        <textarea name="message" rows="5"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>