<!DOCTYPE html>
<html lang="en">
<head>
    <title>create Table</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav>
            <h2>Dynamic DB Crud Operation</h2>
        </nav>
        <div class="heding">
            <a href="http:/">Home page</a>
            <h2 class="heading">Add Table</h2>
        </div>
        <div class="content">
            <form action="/creatTable" method="POST">
                <select name="databases" id="" class="dbSelction">
                    <option value="">Select the Database name</option>
                    <!-- <?php foreach ($allDatabase as $database):?>
                    <option value="<?php echo $database ?>"><?php echo $database ?></option>
                    <?php endforeach; ?> -->
                </select>
                <div class="tablenamecontent">
                    <span>Table Name</span>
                    <input type="text" class="tableInput" name="tableName">
                </div>
                <div class="inputRows">
                    <input type="text">
                    <select name="" id="">
                        <option value="">select data types</option>
                        <option value="int">Integer</option>
                        <option value="varchar(255)">varchar</option>
                        <option value="timestamp">Timestamp</option>
                    </select>
                    <button>Add more column</button>
                </div>
                <button type="submit">create</button>
            </form>
        </div>
    </div>
</body>
</html>