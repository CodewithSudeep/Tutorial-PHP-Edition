<?php 

 if (isset($_POST)) {
    var_dump($_POST);
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="main">
        <div class="screen">
            <form method="POST" action="calculator.php" id="form">
            <div class="display">
                <input type="text" id="display" name="ops" readonly>
            </div>
            <div class="buttons">
                <div class="row">
                    <button class="btn number">1</button>
                    <button class="btn number">2</button>
                    <button class="btn number">3</button>
                    <button class="btn operator">+</button>
                </div>
                <div class="row">
                    <button class="btn number">4</button>
                    <button class="btn number">5</button>
                    <button class="btn number">6</button>
                    <button class="btn operator">-</button>
                </div>
                <div class="row">
                    <button class="btn number">7</button>
                    <button class="btn number">8</button>
                    <button class="btn number">9</button>
                    <button class="btn operator">*</button>
                </div>
                <div class="row">
                    <button class="btn number">0</button>
                    <button class="btn operator">/</button>
                    <button class="btn operator">^</button>
                    <button class="btn operator">MOD</button>
                </div>
                <div class="row">
                    <button class="equalto-btn" type="submit" value="=" name="calculate">=</button>
                    <button class="clear-btn">clear</button>
                </div>
            <div>
</form>
        </div>
    </div>

  <script src="script.js"></script>
</body>
</html>