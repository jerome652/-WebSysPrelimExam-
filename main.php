    <!DOCTYPE html>
    <html>
    <head>
        <!-- ni link ko yung css style ko dito sa kabilang file ako nag design -->
        <link rel="stylesheet" href="style.css">
        <title>Simple Calculator</title>
    </head>
    <body>
    
        <h1>Simple Calculator</h1>
        <!-- dito namn yung form at mga input type  -->
        <div class="calculator" id="calcu">
            <form method="POST">
                <input type="number" name="num1" placeholder="Quiz score" required  >
                <input type="number" name="num2" placeholder="assignment score" required >
                <input type="number" name="num3" placeholder="Exam score" required >
                <button type="submit">Calculate</button>
            </form>
            
            <?php
                if ($_POST) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    
                //nag lagay ako ng condition na di dapat lalampas sa 100 yung input ng user
                    if($num1  <= 100 ){
                        $result1 = $num1*0.30;
                        //yung mga result  yan yung mga percentage ng bawat score
                    }
                    if ($num2 <= 100) {                                    
                        $result2 = $num2*0.30;
                    }
                    if ($num3 <= 100) {
                        $result3 = $num3*0.40;
                    }
                    //dito yung total 
                    $total = $result1 + $result2 + $result3;
                        
                

                }

                //dito namn yung condition kapag yung score nag true sa isa dyang condition e piprint niya grade letter kung saan ng true
                if($total >= 90 && $total <= 100 ){
                        echo "Letter Grade: A";
                    }
                    elseif($total >= 80 && $total <= 89 ){
                        echo "Letter Grade: B";   

                    }
                    elseif($total >= 70 && $total <= 79 ){
                        echo "Letter Grade: C";   

                    }
                    elseif($total >= 60 && $total <= 69  ){
                        echo "Letter Grade: D";   

                    } 
                    elseif($total < 60){
                        echo"Letter Grade: F";
                    }
                    echo "<p class='Grade'>Final Grade: $total </p>";  
                    

                
                
                
                
            ?>
        </div>
    </body>
    </html>