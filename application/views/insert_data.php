<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="box my-5">
            <h3 class="text-center">CI3 Encryption and Decryption-Insert Data</h3>
            <?php
            if (validation_errors() != '') {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>'.validation_errors().'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
            ?>
            <form action="<?php echo base_url("encDecrypt/insert_validation"); ?>" method="post">
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
            <br />
            <br />
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
            <br />
            <br />
            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age">
            <br />
            <br />
            <select name="gender" class="form-control" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br />
            <br />
            <input type="submit" value="insert" value="insert">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>