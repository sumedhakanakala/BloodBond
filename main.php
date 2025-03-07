<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Bar</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    nav {
        background-color: #920707;
        display: flex;
        justify-content: center;
    }
    ul {
        list-style-type:none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    li {
        margin: 0 11px;
    }
    a {
        color: white;
        text-decoration: none;
        padding: 10px;
    }
    a:hover {
        background-color: #5c0505;
    }
</style>
</head>
<body>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Donate Blood</a></li>
        <li><a href="#">Request Blood</a></li>
        <li><a href="admin.php">Admin</a></li> <!-- Link to admin.php -->
        <li><a href="logout.php">Logout</a></li> <!-- Example logout link -->
    </ul>
</nav>

<img draggable="false" src="bloodslide.jpeg" alt="Donate Blood" height="600px" width="1303px"/>

</body>
</html>
