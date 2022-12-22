<?php
if(isset($_GET['cart']) and $_GET['cart'] == 'add'){
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
}
