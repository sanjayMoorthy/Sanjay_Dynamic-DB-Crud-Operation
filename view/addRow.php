<!DOCTYPE html>
<html lang="en">
<head>
    <title>create row</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <nav>
            <h2>Dynamic DB Crud Operation</h2>
        </nav>
        <form action="/addRowpage" method="POST">
            <div class="databaselist">
                <select name="databese" id="">
                    <?php foreach($allDatabase as $database=>$databases): ?>
                        <option value="<?php echo $databases ->Database ?>"><?php echo $databases ->Database ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit">Get table names</button>
        </form>
        <?php print_r($val); ?>
<!--        --><?php //foreach ($val as $value): ?>
<!--        <h2>--><?php //echo $value->data ?><!--</h2>-->
<!--        --><?php //endforeach;?>
            <!-- <button type="submit">sub</button> -->
        
    </div>
</body>
</html>