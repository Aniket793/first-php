<?php
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3">
            <form action="manage-cart.php" method="POST">
                <div class="card" style="width: 18rem;">
                    <img src="2022-Porsche-Cayenne-Turbo-GT-005-1440w.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Porsche Cayenne</h5>
                        <p class="card-text">Price: 2Cr</p>
                        <button type="submit" class="btn-btn-info" name="Add_to_cart">Add-to-cart</button>
                        <input type="hidden" name="Item_name" value="Cayenne">
                        <input type="hidden" name="Price" value="200">
                    </div>
                </div>
            </form>
            </div>

            <div class="col-lg-3">
            <form action="manage-cart.php" method="POST">
                <div class="card" style="width: 18rem;">
                    <img src="2023-Lamborghini-Urus-Performante-005-2160.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lamborghini Urus</h5>
                        <p class="card-text">Price:4Cr</p>
                        <button type="submit" class="btn-btn-info" name="Add_to_cart">Add-to-cart</button>
                        <input type="hidden" name="Item_name" value="Urus">
                        <input type="hidden" name="Price" value="400">
                    </div>
                </div>
            </form>
            </div>

            <div class="col-lg-3">
                <form action="manage-cart.php" method="POST">
                <div class="card" style="width: 18rem;">
                    <img src="2023-BMW-M4-CSL-003-2160.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW M4 CSL</h5>
                        <p class="card-text">3Cr</p>
                        <button type="submit" class="btn-btn-info" name="Add_to_cart">Add-to-cart</button>
                        <input type="hidden" name="Item_name" value="M4 CSL">
                        <input type="hidden" name="Price" value="300">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>