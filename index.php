<?php 

require_once 'db/conn.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test | Update</title>
</head>
<body>
    
    <form action="index.php" method="POST" id="form1">
    
        <section>
            <label for="">Test Data</label><br>
            <input type="text" name="tdata">
        </section>

        <section>
            <br>
            <button form="form1" name="submit">SUBMIT</button>
        </section>

    </form>

</body>
</html>