<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    
</head>

<body>
    <main style="display: flex; justify-content: center;"> 
       
        <form action="display_ex2.php" method="post" style="border: 1px solid; width: 30%;">
        <div style="margin: 5px;">   
            <h1>Future Value Calculator</h1>
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment_amount"><br>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="yearly_interest_rate"><br>

                <label>Number of Years:</label>
                <input type="text" name="year"><span></span><br>
            </div>

            <div id="buttons" style="display: flex; justify-content: center;">
                
                <input type="submit" value="Calculate"><br>
            </div>
            </div>
        </form>
    </main>
</body>
</html>