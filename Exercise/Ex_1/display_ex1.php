<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $product_description = $_POST["product_description"];
        $list_price = $_POST["list_price"];
        $discount_percent = $_POST["discount_percent"];
        $amount = $list_price * $discount_percent/100;
    ?>

<main style="display: flex; justify-content: center;"> 
       
       <form action="display_ex1.php" method="post" style="border: 1px solid; width: 30%;">
       <div style="margin: 5px;">   
           <h1>This page is under construction</h1>
           Product Description:<label for="">    <?php if(isset($product_description)) echo $product_description ?>    </label><br>
           List Price:<label for="">   <?php if(isset($list_price)) echo $list_price ?>   </label><br>
           Standard Discount:    <?php if(isset($discount_percent)) echo $discount_percent ?>    <label for=""></label><br>
           Discount Amount:<label for="">     <?php if(isset($amount)) echo $amount    ?>    </label><br>
           Discount Price:<label for="">    <?php echo $list_price - $amount ?>   </label><br>
       </form>
   </main>
</body>
</html>