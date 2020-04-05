<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-size: 14px;
        }
        .container{
            width: 500px;
            margin: auto;
        }
        .form fieldset{
            width: 500px;
            height: 400px;
        }
        label{
            padding: 20px;
        }
        input{
            margin: 20px;
        }
        h3{
            margin-left: 180px;
        }
        select{
            margin-left: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form">
        <form action="" method="post">
            <fieldset>
                <h3>Simple Calculator</h3>
                <legend><h1>Calculator</h1></legend>
                <label>First operand:</label>
                <input type="text" name="numberone" style="margin-left: 38px"><br>
                <label>Operator:</label>
                <select name="operation" style="margin-left: 130px">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select><br>
                <label>Second Operand:</label>
                <input type="text" name="numbertwo"><br>
                <input type="submit" value="Calculator" style="margin-left: 200px">
                <div style="margin-left:150px;width:200px;height: 80px;border: 2px solid black;text-align: center;margin-bottom: 100px;"><p style="margin-top: 5px">
                        <?php
                        if ($_SERVER['REQUEST_METHOD']=="POST"){
                        include "calculator.php";
                        define("Cộng","+");
                        define("Trừ","-");
                        define("Nhân","*");
                        define("Chia","/");
                        $numberone=$_POST['numberone'];
                        $numbertwo=$_POST['numbertwo'];
                        $operation=$_POST['operation'];
                        $calculator=new Caculator();

                        switch ($operation){
                            case Cộng:
                                try {
                                    echo $calculator->cong($numberone,$numbertwo);
                                }catch (Exception $e){
                                    echo $e->getMessage();
                                }
                                break;
                            case Trừ:
                                try {
                                    echo $calculator->tru($numberone,$numbertwo);
                                }catch (Exception $e){
                                    echo $e->getMessage();
                                }
                                break;
                            case Nhân:
                                    echo $calculator->nhan($numberone,$numbertwo);
                                break;
                            case Chia:
                                try {
                                    echo $calculator->chia($numberone,$numbertwo);
                                }catch (Exception $e){
                                    echo $e->getMessage();
                                }
                                break;
                            default:
                                echo "Chưa nhập gì!";
                        }
                    }
                        ?></p></div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
