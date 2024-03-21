<?php
    require 'functions.php';
    get_header();
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning" >My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center" >                
                    <tbody>
                        <?php
                        
                        $productTotal=0;
                        $total = 0;
                        $i=0;
                        
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key=>$value){
                                $productTotal = $value['productPrice'] * $value['productQuantity'];
                                $total += $value['productPrice'] * $value['productQuantity'];
                                $i=$key+1;
                                echo"
                                <form action = 'Insertcart.php' method = 'POST'>
                                <tr>
                                <td>$i</td>
                                <td> <input type ='hidden' name = 'PName' value = '$value[productName]'>$value[productName]</td>
                                <td> <input type ='hidden' name = 'PPrice' value = '$value[productPrice]'>$value[productPrice]</td>
                                <td> <input type ='text' name = 'PQuantity' value = '$value[productQuantity]'></td>
                                <td>$productTotal</td>
                                <td> <button name = 'update' class = 'btn btn-warning'>Update</button></td>
                                <td> <button name = 'remove' class = 'btn btn-danger'>Dlete</button></td>
                                <td> <input type = 'hidden' name = 'item' value = '$value[productName]'> </td>
                                </tr>
                                </form>
                                ";

                            }
                        }
?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
            <h3>TOTAL</h3>
                <?php
                    $product_price = ( array_key_exists( 'price', $_GET ) && ! empty( $_GET['price'] ) ) ? $_GET['price'] : 0;
                ?>
                <h1 class="bg-info text-white" > RS: <?php echo $product_price; ?>/-</h1>                
            </div>
           
        </div>
        <form action="https://uat.esewa.com.np/epay/main" method="POST">
            <input value="100" name="tAmt" type="hidden"> 
            <input value="100" name="amt" type="hidden">
            <input value="0" name="txAmt" type="hidden">
            <input value="0" name="psc" type="hidden">
            <input value="0" name="pdc" type="hidden">
            <input value="EPAYTEST" name="scd" type="hidden">
            <input value="<?php echo rand(0, 1000000); ?>" name="pid" type="hidden">
            <input value="http://localhost/ecommerce/index.php?success=1" type="hidden" name="su">
            <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
            <input value="Pay With Esewa" type="submit">
        </form>
        

    </div>
<?php
    // get_footer();
?>