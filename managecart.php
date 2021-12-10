<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
            if(isset($_SESSION['cart']))
            {
            {$myitems=array_column($_SESSION['cart'], 'item_name');
            if(in_array($_POST['item_name', $myitems]))
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1)
         
            }
            else{
                $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'], 'price'=>$_POST['price'], 'quantity'=>1)
                print_r($_SESSION['cart']);
            }
        }
    }
}

?>