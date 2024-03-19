<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    <title>Document</title>
</head>
<body>
    <div class = "main">
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Write your name</label>
            <input class="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Write your name</label>
            <input class="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favouritefruit">Write your name</label>
            <select class="favouritefruit" name="favouritefruit">
                <option value="apples">Apples</option>
                <option value="bananas">Bananas</option>
                <option value="oranges">Oranges</option>
                <option value="grapes">Grapes</option>
            </select>
            <button type = "submit">Submit</button>
        </form>
    </div>
</body>
</html>