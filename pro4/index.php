<?php
require_once 'Arithmatic.php';
?>
<html>
    <head>
        <title>session 14</title>
        <style type="text/css">
            input, label, select, textarea{
                display:block;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            if(isset($_POST['calculate'])){
                // COLLECT DATA
                $firstNumber = $_POST['firstNumber'];
                $operator = $_POST['operator'];
                $secondNumber = $_POST['secondNumber'];
                if($firstNumber == null){
                    echo "please insert the value of first number";
                }elseif(!is_numeric($firstNumber)){
                    echo "the value of first number must be digits";
                }elseif($secondNumber == null){
                    echo "please insert the value of second number";
                }elseif(!is_numeric($secondNumber)){
                    echo "the value of second number must be digits";
                }else{
                    switch($operator){
                        case '+':
                            $arithmatic = new Arithmatic($firstNumber, $secondNumber);
                            echo $arithmatic->addition();
                            break;
                        case '-':
                            $arithmatic = new Arithmatic($firstNumber, $secondNumber);
                            echo $arithmatic->subtraction();
                            break;
                        case '*':
                            $arithmatic = new Arithmatic($firstNumber, $secondNumber);
                            echo $arithmatic->multiplcation();
                            break;
                        case '/':
                            $arithmatic = new Arithmatic($firstNumber, $secondNumber);
                            echo $arithmatic->division();
                            break;
                        default:
                            echo "invalid action";
                    }
                }
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>first number</label> 
            <input type="text" name="firstNumber" />
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <label>second number</label> 
            <input type="text" name="secondNumber" />
            <input type="submit" name="calculate" value="calculate"/>
        </form>
    </body>
</html>