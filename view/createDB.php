<!DOCTYPE html>
<html lang="en">
<head>
    <title>create Database page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav>
            <h2>Dynamic DB Crud Operation</h2>
        </nav>
        <div class="dbsection">
            <a href="http:/">Home page</a>
            <form action="/createDatabase" method="POST">
                <div class="inputcontainer">
                    <span class="nametag">Enter database Name</span>
                    <input type="text" name="createDb" class="dbInput">
                </div>
                <button type="submit" class="submitBtn" >Submit</button>
            </form>
        </div>
    </div>
</body>
</html>