<?php
    include 'config.php';

    if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users_data where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users_data where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if($amount > $sql1['balance'])
    {
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if($amount == 0){
         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users_data set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);


                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users_data set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transactions_data(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";

                }

                $newbalance= 0;
                $amount =0;
        }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/transactions2.css" />
    <title>Transfermoney</title>
</head>
<body>
    <?php
    include 'nav.php';
    ?>

    <div class="container">
        <h1 class="text-center">Transactions</h1>
        <br />

        <?php
                include 'config.php';
                $senderid=$_GET['id'];
                $sql = "SELECT * FROM  users_data where id=$senderid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
        ?>

        <form method="post" name="credit">
            <div class="table-responsive">
                <table class="table align-middle table-primary table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col"><i class="fas fa-envelope"></i> Email</th>
                        <th scope="col"><i class="fas fa-rupee-sign"></i> Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['balance'] ?></td>
                    </tr>
                    
                </tbody>
            </table>
            </div>
            <br /><br />

            <select name="to" class="form-select" required>
            <option value="" disabled selected>Select customer to transfer to</option>
            <?php
            include 'config.php';
            $senderid=$_GET['id'];
            $sql = "SELECT * FROM users_data where id!=$senderid";
            $result=mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "Error ".$sql."<br>".mysqli_error($conn);
            }
            while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: ₹ 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
            } 
            ?>
            
        </select>
            <br />
            <label>Amount (₹) :<br /><br /></label>
            <input type="number" class="form-control" name="amount" required>   
            <br /><br />
                <div class="text-center" >
                    <button class="btn mt-3" name="submit" type="submit" id="myBtn" >
                        Transfer Money
                    </button>
                </div>

        </form>
    </div>
    <br /><br />

    <?php
    include 'footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>