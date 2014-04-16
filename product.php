<?php
$title = "Product Name";
$description = "Product description";
include('header.php');
?>
<h2>Dating Tips from the Ice King by Simon Petrikov</h2>

<aside id="product-sidebar">
    <img src="images/ice-king.png" alt="Ice King" id="product-image" />

    <form action="cart.html" method="GET" id="purchase-form">
        <fieldset>
            <legend>Add to Cart</legend>
            <span class="price">$75.00</span><br />
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity" />
            <input type="submit" value="Add" name="add_to_cart" />
        </fieldset>
    </form>
</aside>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra 
ut augue eget egestas. Nunc sapien turpis, rhoncus vitae euismod vitae, 
volutpat non ipsum. Nulla in semper lorem. Curabitur lacinia egestas suscipit. 
Aliquam cursus, felis posuere molestie pretium, orci massa vestibulum tortor, 
ut feugiat augue leo vel nisl. Sed sed elit eleifend lacus lacinia commodo a ut 
metus. Sed pulvinar urna metus, sit amet porttitor tellus sollicitudin id. 
Curabitur ac accumsan metus, quis pharetra ante. Class aptent taciti sociosqu 
ad litora torquent per conubia nostra, per inceptos himenaeos. Cras at nibh 
in nisi ultrices viverra sit amet et sapien. Donec aliquet viverra eros et 
tincidunt. Sed sodales enim non orci dictum pretium sit amet sed quam.</p>

<p>Integer quis odio felis. Aliquam metus sapien, commodo vel accumsan at,
malesuada id massa. Pellentesque tincidunt ut eros id pharetra. Sed mi est,
gravida et mauris a, scelerisque condimentum metus. Pellentesque iaculis,
tellus quis elementum consectetur, neque nulla molestie nisi, eu tincidunt
justo eros id justo. Vestibulum tempor tempus felis, et faucibus erat feugiat
sit amet. Fusce tincidunt sapien id rutrum sollicitudin. Fusce odio erat,
fermentum vitae rhoncus sed, sollicitudin sed nibh. Nunc euismod augue eget
dolor commodo, at dictum elit mollis. Ut quis mollis elit, vitae dapibus eros.
Aliquam erat volutpat. Proin sagittis ante in mi aliquet malesuada. In ut
faucibus eros, vitae volutpat nibh. Donec vitae ante euismod, pretium tortor
sed, suscipit dui. Nulla et vestibulum erat.</p>

<p>Etiam elementum venenatis urna sed condimentum. Sed luctus urna in nibh viverra
varius. Sed non feugiat purus. Proin euismod erat lectus, sit amet pellentesque
purus convallis sed. Integer et urna eros. Pellentesque vel adipiscing arcu.
Nullam rhoncus, ante sit amet varius blandit, augue turpis pharetra diam,
malesuada consectetur lectus turpis quis enim.</p>

<p>Proin aliquam lacinia congue. Vestibulum malesuada sit amet sem et dapibus.
Etiam consectetur sollicitudin dolor sed vulputate. Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Nullam eget justo pellentesque nisi lobortis
posuere. In dignissim erat et tellus egestas egestas. Vivamus vulputate rhoncus
ligula, id iaculis felis adipiscing ut. Curabitur felis mi, ultrices sit amet
massa quis, faucibus tempor velit. Sed fermentum, lacus ultricies ultricies
eleifend, augue felis posuere libero, in vulputate tellus turpis eu nisi.
Aliquam faucibus fermentum sapien at scelerisque. Pellentesque sed mollis
risus. Fusce scelerisque interdum faucibus. Donec non magna a nisl rutrum
consequat ut eget odio. Praesent quis vestibulum ligula, vel viverra ante.
Vestibulum egestas tortor id velit pulvinar vehicula.</p>

<p>Proin ornare bibendum ante, eget sollicitudin tortor mollis quis. Cras 
interdum erat in est viverra, eu vulputate tellus eleifend. Vestibulum id 
tempus quam. Proin sagittis, sapien quis dictum eleifend, turpis ante 
bibendum sem, ut facilisis ipsum dolor ut odio. Maecenas fermentum lorem nisl, 
sed consectetur diam elementum sed. Cras ut libero a elit luctus aliquam ac 
rutrum nulla. Aenean egestas egestas dignissim.</p>
<?php
include('footer.php');
?>
