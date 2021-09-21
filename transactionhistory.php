<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    
    <link rel="stylesheet" type="text/css" href="css/transactions1.css" />
    <title>Transactions</title>
</head>
<body>
    <?php
    include 'nav.php';
    ?>
    
    <div class="container main-container">
        <h1 class="text-center">Transfers</h1>
        <br />
        <div class="table-responsive">
            <table class="table align-middle table-primary table-striped">
                <thead>
                    <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Receiver</th>
                        <th scope="col">Amount transferred</th>
                        <th scope="col">Date&Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';
                    $sql = "select * from transactions_data";
                    $query = mysqli_query($conn, $sql);
                    while($rows = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $rows['sno']; ?>
                        </td>
                        <td>
                            <?php echo $rows['sender']; ?>
                        </td>
                        <td>
                            <?php echo $rows['receiver']; ?>
                        </td>
                        <td>
                            <?php echo '₹ '.$rows['balance']; ?>
                        </td>
                        <td>
                            <?php echo $rows['datetime']; ?>
                        </td>

                        <?php
                    }
                        ?>

                </tbody>
            </table>
        </div>

    </div>

    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>