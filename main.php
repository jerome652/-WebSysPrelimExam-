<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, select, button { margin: 5px; padding: 5px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    
    <div class="calculator">
        <form method="POST">
            <input type="number" name="num1" placeholder="Quiz score" required>
            <input type="number" name="num2" placeholder="assignment score" required>
            <input type="number" name="num3" placeholder="Exam score" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $result = 0;
                $error = "";
                
                if($num1 != 0 ){
                    $result = $num1*0.3;
                 }
               

                 if ($num2 != 0) {
                    $result = $num2*0.3;
                }
                 if ($num3 != 0) {
                    $result = $num3*0.4;
                } 
                $Average = $result/3;
             }
                
               echo "<p class='result'>result: $Average = $result</p>";
            
        ?>
    </div>
</body>
</html>