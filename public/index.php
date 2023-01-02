<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Send an email</title>
</head>
<body>

    <h1>Send an email</h1>

    <p><?php echo $_GET['time'] ?? ''; ?></p>

    <form action="send.php" method="post">
        <label for="recipient">To:</label>
        <input name="recipient" id="recipient" placeholder="email address" autofocus />
        <button type="submit">Send</button>
    </form>

</body>
</html>
