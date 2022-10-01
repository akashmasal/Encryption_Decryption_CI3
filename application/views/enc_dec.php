<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center">CI3 Encryption and Decryption - Fetch Data</h3>
        <div class="container text-center">
            <a href="<?php echo base_url("encDecrypt/insert"); ?>"><button class="btn text-center btn-success">Back</button></a>
        </div>
        <div class="table-responsive">
            <?php
            if ($this->session->flashdata("success")) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>' . $this->session->flashdata('success') . '</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>

                <?php {
                    foreach ($users_data->result() as $row) {
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $row->id;?></th>
                                <td><?php echo $this->encrypt->decode($row->first_name);?></td>
                                <td><?php echo $this->encrypt->decode($row->last_name);?></td>
                                <td><?php echo $this->encrypt->decode($row->age);?></td>
                                <td><?php echo $this->encrypt->decode($row->gender);?></td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>