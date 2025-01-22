<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Details for Send Email</h1>
    <form action="send-mail" method="post">
        @csrf
        <input type="text" name="to" id="to" placeholder="Enter Email Address"><br /><br />
        <input type="text" name="subject" id="subject" placeholder="Enter Email Subject"><br /><br />
        <textarea name="msg" id="msg" cols="20" rows="5" placeholder="Enter Message"></textarea><br /><br />
        <button>Send Email</button>

    </form>
</body>
</html>