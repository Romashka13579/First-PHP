<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form action="includes/formhandler.inc.php" method="post">
            <label for="firstname">Write your name</label>
            <input class="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="password">Write your password</label>
            <input class="password" type="password" name="password" placeholder="Password...">

            <label for="email">Write your email</label>
            <input class="email" type="email" name="email" placeholder="email">
            <button type = "submit">Submit</button>
        </form>

        <form action="includes/userupdate.inc.php" method="post">
            <label for="firstname">Write your name</label>
            <input class="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="password">Write your password</label>
            <input class="password" type="password" name="password" placeholder="Password...">

            <label for="email">Write your email</label>
            <input class="email" type="email" name="email" placeholder="email">
            <button type = "submit">Update</button>
        </form>

        <form action="includes/userdelete.inc.php" method="post">
            <label for="firstname">Write your name</label>
            <input class="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="password">Write your password</label>
            <input class="password" type="password" name="password" placeholder="Password...">
            <button type = "submit">Delete</button>
        </form>

        <form action="search.php" method="post">
            <label for="search">Search for user:</label>
            <input class="search" type="text" name="usersearch" placeholder="Search...">
            <button type = "submit">Search</button>
        </form>
    </div>
</body>
</html>