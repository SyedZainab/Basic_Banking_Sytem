<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/transactions1.css" />

    <title>Transfermoney</title>
</head>
<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users_data";
    $result = mysqli_query($conn, $sql);  
    ?>

    <?php
    include 'nav.php';
    ?>

    <div class="container main-container">
        <h1 class="text-center">Transactions</h1>
        <br />
        <div class="table-responsive">
            <table class="table align-middle table-primary table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col"><i class="fas fa-envelope"></i> Email</th>
                        <th scope="col"><i class="fas fa-rupee-sign"></i> Balance</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $rows['id']; ?>
                        </td>
                        <td>
                            <?php echo $rows['name']; ?>
                        </td>
                        <td>
                            <?php echo $rows['email']; ?>
                        </td>
                        <td>
                            <?php echo $rows['balance']; ?>
                        </td>
                        <td>
                            <a href="selecteduser.php?id= <?php echo $rows['id'] ;?>">
                                Send to 
                            </a>
                        </td>

                        <?php
                    }
                        ?>

                </tbody>
            </table>
        </div>

    </div><br />
                
    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>