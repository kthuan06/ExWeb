
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    
</head>

<body>
    <main style="display: flex; justify-content: center;"> 
       
        <form action="display_ex1.php" method="post" style="border: 1px solid; width: 30%;">
        <div style="margin: 5px;">   
            <h1>Product Discount Calculator</h1>
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description"><br>

                <label>List Price:</label>
                <input type="text" name="list_price"><br>

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"><span>%</span><br>
            </div>

            <div id="buttons" style="display: flex; justify-content: center;">
                
                <input type="submit" value="Calculate Discount"><br>
            </div>
            </div>
        </form>
    </main>
</body>
</html>