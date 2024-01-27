<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CASH Withdrawal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Cash Withdraw</h1>
    </header>
    <div class="container">
        <form action="compute.php" method="POST">
            <div class="mb-3">
                <br><br>
                <label for="Name" class="form-label"><h2>Name:</h2></label>
                <input type="text" id="Name" name="name" required>
                <br><br>
                <label for="Balance" class="form-label"><h2>Balance:</h2></label>
                <input type="text" id="Balance" name="balance" required>
                <br><br>
                <label for="Cashout" class="form-label"><h2>Cashout:</h2></label>
                <input type="text" id="Cashout" name="cashout" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit" name="get_balance" value="Calculate">Get Balance</button>
            </div>
        </form>
    </div>
</body>

</html>
