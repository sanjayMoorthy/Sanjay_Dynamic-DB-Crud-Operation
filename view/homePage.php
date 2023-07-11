<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Home page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav>
            <h2>Dynamic DB Crud Operation</h2>
        </nav>
        <div class="actionsButtons">
            <div class="addDb_button">
                <form action="/addDbpage" method="post">
                    <button type="submit" class="style" >Add DB</button>
                </form>
            </div>
            <div class="addTable_button">
                <form action="/addTabblepage" method="post">
                    <button type="submit" class="style"> Add Table</button>
                </form>
            </div>
            <div class="addRow_button">
                <form action="/addRowpage" method="post">
                    <button type="submit" class="style"> Add Rows</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>