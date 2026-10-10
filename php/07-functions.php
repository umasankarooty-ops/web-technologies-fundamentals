<?php
function calculateTotal($price, $quantity) {
    return $price * $quantity;
}
echo "Total: " . calculateTotal(100, 3);
