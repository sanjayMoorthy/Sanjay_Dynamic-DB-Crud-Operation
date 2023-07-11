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
                <select name="databases" class="dbSelction" required>
                    <option value="" >Select database</option>
                    <?php foreach($allDatabase as $database=>$databases): ?>
                        <option><?php echo $databases ->Database ?></option>
                    <?php endforeach; ?>
                </select>
                
                <div class="tablenamecontent">
                    <span>Table Name</span>
                    <input type="text" class="tableInput" name="tableName" required>
                </div>
                <div class="rowcontainer">
                    <div class="inputRows">
                        <input type="text" name="columnName[]" required>
                        <select name="datatypes[]" required>
                            <option value="">select data types</option>
                            <option value="int">Integer</option>
                            <option value="varchar(255)">varchar</option>
                            <option value="timestamp">Timestamp</option>
                        </select>
                    </div>
                    <button class="addBtn" type="button">Add more column</button>
                </div>
                <button type="submit" class="submitBtn">create</button>
            </form>
        </div>
    </div>
<script type="text/javascript" src="../script.js"></script>
</body>
</html>