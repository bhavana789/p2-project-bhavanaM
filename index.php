<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SGPA calculator.caluculate your sgpa result by this ">
    <meta name="keywords" content="SGPA_CALCULTOR, sgpa_calculator, calculator, calculate, diploma sgpa calculator, ploytechnic calculator">
    <meta name="author" content="John Doe">
    <title>SGPA Calculator</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        $subject4 = $_POST['subject4'];
        $subject5 = $_POST['subject5'];
        $subject6 = $_POST['subject6'];
        $lab1 = $_POST['lab1'];
        $lab2  = $_POST['lab2'];

        if(empty($subject1) || empty($subject2) || empty($subject3) || empty($subject4) || empty($subject5) || empty($subject6) || empty($lab1) || empty($lab2)){
            $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
        }else{
            // $subject1  = ($subject1/100)*5;
            // $subject2  = ($subject2/100)*5;
            // $subject3  = ($subject3/100)*5;
            // $subject4  = ($subject4/100)*10;
            // $subject5  = ($subject5/100)*15;
            // $subject6  = ($subject6/100)*20;
            // $lab1 = ($lab1/100)*25;
            // $lab2 = ($lab2/100)*15;
            $result = (($subject1 + $subject2 + $subject3 + $subject4 + $subject5 + $subject6 + $lab1 + $lab2)*100/800)/9.5;
        }
    }
?>
    <div class="container">
        <div class="card">
            <h2 class="text-center text-success p-4">SGPA Calculator</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="" class="w-50 m-auto" method="post">
                <?php if(isset($msg)){
                    echo $msg;
                } ?>
               
                    <table class="table border">
                        <tr>
                            <td><label for="">subject1</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject1"></td>
                        </tr>
                        <tr>
                            <td><label for="">subject2</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject2"></td>
                        </tr>
                        <tr>
                            <td><label for="">subject3</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject3"></td>
                        </tr>
                        <tr>
                            <td><label for="">subject4</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject4"></td>
                        </tr>
                        <tr>
                            <td><label for="">subject5</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject5"></td>
                        </tr>
                        <tr>
                            <td><label for="">subject6</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="subject6"></td>
                        </tr>
                        <tr>
                            <td><label for="">lab1</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="lab1"></td>
                        </tr>
                        <tr>
                            <td><label for="">lab2</label></td>
                            <td><input class="form-control" type="text" placeholder="Enter marks out of 100" name="lab2"></td>
                        </tr>
                    </table>
                    <input class="btn btn-success" type="submit" name="submit" value="Calculate">
                    <input class="btn btn-danger float-right" type="submit" name="submit" value="Reset">
                    <?php 
                        if(isset($result)){?>
                            <p class="text-center text-success lead">Your Result is : <strong ><?php echo number_format((float)$result,2,'.',''); ?></strong></p>
                    <?php }?>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>


