<?php 
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 border rounded bg-light my-5">
                <h4 class="text-center">My Cart</h4>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                        <th class="text-center" scope="col">sr. no.</th>
                        <th class="text-center" scope="col">Item_name</th>
                        <th class="text-center" scope="col">Price</th>
                        <th class="text-center" scope="col">Quantity</th>
                        <th class="text-center" scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $sr = $key +1;
                                    echo"
                                        <tr class='text-center'>
                                            <td>$sr</td>
                                            <td>$value[Item_name]</td>
                                            <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='manage-cart.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onChange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manage-cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody> 
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3>Gran Total :</h3>
                    <h5 class='text-right' id='gtotal'></h5>
                    <form>
                        <button class='btn btn-primary btn-block'>Purchase</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');
        var gt=0;

        function subTotal(){
            for(i=0;i<iprice.length;i++){
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value)
                gt=gt + (iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }


        subTotal();
    </script>
</body>
</html>