<?php 

require_once 'db/conn.php';

$notice = ['ifEmpty' => '', 'ifSuccess' => ''];

if (isset($_POST['submit'])) {

    if (empty($_POST['tdata'])) {

        $notice['ifEmpty'] = 'Fill all the form field/s to continue.';

    } else {

        $tdata = $_POST['tdata'];

        $isSuccess = $crud->insert($tdata);

        if ($isSuccess) {

            $notice['ifSuccess'] = 'The data you entered has been submitted to the database successfully.';

        } else {

            $notice['ifSuccess'] = 'There was an error while submitting your data to the database.';

        }

    }

}

$results = $crud->display();

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

    <?php if (!empty($notice['ifEmpty'])) { ?>
        <?php echo $notice['ifEmpty']; ?>
    <?php } else { ?>
        <?php echo $notice['ifSuccess']; ?>
    <?php } ?>

    <div>
    
        <form action="index.php" method="POST">
        
            <section>
                
                <?php foreach ($results as $result) { ?>    
                    <input class="data" type="text" name="d_tdata" value="<?php echo $result['tdata']; ?>" readonly>
                <?php } ?>

            </section>

        </form>
    
    </div>

</body>
</html>