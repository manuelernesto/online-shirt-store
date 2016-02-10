<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/6/16
 * Time: 4:56 PM
 */

$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php');


$products = array();
$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",
    "price" => 20
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",
    "price" => 18);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",
    "price" => 25
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",
    "price" => 20
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",
    "price" => 20
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",
    "price" => 35,
);

?>


    <div class="section shirts page">
        <div class="wrapper">
            <h1>Mike&rsquo;s Full Catalog of Shirts</h1>

            <ul class="products">
                <?php foreach ($products as $product) {
                    echo "<li>";
                    echo "<a href=\"#\">";
                    echo '<img src="' . $product["img"] . '"  alt="' . $product["name"] . '" > ';
                    echo "<p> View Details</p>";
                    echo "</a href=\"#\">";
                    echo "</li>";
                } ?>
            </ul>
        </div>

    </div>


<?php include('inc/footer.php');