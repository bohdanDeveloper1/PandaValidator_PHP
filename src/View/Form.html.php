<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form  method="POST"  enctype="multipart/form-data">
    <ul>
        <li>
    <input type="text" name="panda" placeholder="write something">
        </li>
        <li>
    <input type="password" name="grade" placeholder="write grade">
        </li>
        <li>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="file" name="image" >
        </li>
    </ul>
    <button type="submit"> Send data</button>
</form>

</body>
</html>