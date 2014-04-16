<?php
$title = "Total";
$description = "Total price of things purchased on the best site ever";
include('header.php');
?>
<h2>Total</h2>
<form method="GET" action="thankyou.php">

<table class="zebra-stripes">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Line Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Product 1</td>
            <td>$15.00</td>
            <td>1</td>
            <td>$15.00</td>
            <td><a href="remove.php">remove</a></td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>$15.00</td>
            <td>1</td>
            <td>$15.00</td>
            <td><a href="remove.php">remove</a></td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>$15.00</td>
            <td>1</td>
            <td>$15.00</td>
            <td><a href="remove.php">remove</a></td>
        </tr>
        <tr>
            <td>Product 4</td>
            <td>$15.00</td>
            <td>1</td>
            <td>$15.00</td>
            <td><a href="remove.php">remove</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Shipping</td>
            <td>$19.95</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>$235.95</td>
            <td></td>
        </tr>
    </tbody>
</table>

<input type="submit" value="Complete Order" name="complete_order" class="button-primary" />

</form>
<?php
include('footer.php');
?>