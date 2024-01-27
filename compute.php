<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CASH Withdrawal - Outcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Cash Withdraw</h1>
    </header>
    <div class="container">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['balance']) && isset($_POST['cashout'])) {

            $name = $_POST['name'];
            $balance = $_POST['balance'];
            $cashout = $_POST['cashout'];

            class Cash {
                public string $name;
                public int $balance;
                public int $cashout;
                public function compute($name, $balance, $cashout) {
                    $this->name = $name;
                    $this->balance = $balance;
                    $this->cashout = $cashout;
                }
                public function difference($cash1, $cash2) {
                    return $cash1 - $cash2;
                }
                public function displaybalance(): string {
                    return $this->name;
                }
            }
            $compute = new Cash();
            $compute->compute($name, $balance, $cashout);
            $balance = $compute->difference($balance, $cashout);
            $display = $compute->displaybalance();
            echo "<h2>Name: " . $display . "</h2>";
            echo "<h2>Balance: " . $balance . "</h2>";
        } else {
            echo "<p>Error: Form not submitted or missing required fields.</p>";
        }
        ?>

    </div>
</body>

</html>
