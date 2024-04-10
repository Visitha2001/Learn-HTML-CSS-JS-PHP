<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "MyCalculator"?></title>
</head>
<body>
    <?php echo "<h1>My Calculator</h1>" ?>
    <?php
        if(isset($_POST["btnAdd"])){
            $num1 = $_POST["txtNum1"];
            $num2 = $_POST["txtNum2"];
            $total = $num1 + $num2;
        } else if(isset($_POST["btnSub"])){
            $num1 = $_POST["txtNum1"];
            $num2 = $_POST["txtNum2"];
            $total = $num1 - $num2;
        } else if(isset($_POST["btnMul"])){
            $num1 = $_POST["txtNum1"];
            $num2 = $_POST["txtNum2"];
            $total = $num1 * $num2;
        } else if(isset($_POST["btnDev"])){
            $num1 = $_POST["txtNum1"];
            $num2 = $_POST["txtNum2"];
            $total = $num1 / $num2;
        }
    ?>

    <form method ="post">
        <table>
            <tr>
                <td>Enter Number 1:</td>
                <td><input type="Number" name="txtNum1" value="<?php echo $num1?>"></td>
            </tr>
            <tr>
                <td>Enter Number 2:</td>
                <td><input type="Number" name="txtNum2" value="<?php echo $num2?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="+" name="btnAdd">
                    <input type="submit" value="-" name="btnSub">
                    <input type="submit" value="*" name="btnMul">
                    <input type="submit" value="/" name="btnDev">
                </td>
            </tr>
            <tr>
                <td>Result:</td>
                <td>
                    <input type="Number" id="txtRes" value="<?php echo $total?>">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>