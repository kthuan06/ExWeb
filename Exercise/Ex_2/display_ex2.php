<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    
</head>

<body>
    <?php
        $investment_amount = $_POST["investment_amount"];
        $yearly_interest_rate = $_POST["yearly_interest_rate"];
        $year = $_POST["year"];
        $investment = $investment_amount;
        if(isset($investment_amount)){
            for ($i=1; $i <= $year ; $i++) { 
                $investment = $investment + $investment*$yearly_interest_rate/100;
            }  
        }
         
    ?>

    <main style="display: flex; justify-content: center;"> 
       
        <div  style="border: 1px solid; width: 30%;">
        <div style="margin: 5px;">   
            <h1>Future Value Calculator</h1>
            <div id="data">
                <label>Investment Amount:</label>
                <label for="">   <?php echo $investment_amount ?>   </label><br>

                <label>Yearly Interest Rate:</label>
                <label for="">     <?php echo $yearly_interest_rate ?>     </label><br>

                <label>Number of Years:</label>
                <label for="">    <?php echo $year ?>    </label><br>

                <label>Future Value:</label>
                <label for=""> <?php echo $investment ?>  </label><br>
            </div>

            <div id="buttons" style="display: flex; justify-content: center;">
                
                <input type="submit" value="Calculate"><br>
            </div>
            </div>
        </div>
    </main>
</body>
</html>