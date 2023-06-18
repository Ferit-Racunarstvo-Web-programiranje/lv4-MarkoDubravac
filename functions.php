<?php
function getCartItems(){
    if(isset($_SESSION['cart'])){
        $count = 0;
        foreach($_SESSION['cart'] as $cartItem){
            $count += $cartItem['quantity'];
        }
        return $count;

    }else{
        return 0;
    }
}

function getTotalCartCost(){
    if(isset($_SESSION['cart'])){
        $cost = 0;
        foreach($_SESSION['cart'] as $cartItem){

            $cost += $cartItem['quantity']*$cartItem['price'];
        }
        return $cost;

    }else{
        return 0;
    }
}

function addToCart($item, $amount){
    $isInCart = false;
    $i = 0;
    foreach($_SESSION['cart'] as $cartItem){
        if($cartItem['id'] == $item['id']){
            $isInCart = true;
            $_SESSION['cart'][$i]['quantity'] += $amount;
            return $amount.' more '.$item['name'].' added to cart!';
        }
        $i++;
    }
    if(!$isInCart){
        $itemArray =
            array(
                'id'=>$item['id'],
                'name'=>$item['name'],
                'price'=>$item['price'],
                'image'=>$item['image'],
                'quantity'=>$amount
            );

        $_SESSION['cart'][] = $itemArray;
        return $item['name'].' has been added to your cart! ['.$amount.']';
    }

    return 'Error';
}

function updateCart($item, $amount){
    $i = 0;
    foreach($_SESSION['cart'] as $cartItem){
        if($cartItem['id'] == $item['id']){
            if($amount<=0){
                array_splice($_SESSION['cart'], $i, 1);
                return 'You have removed '.$item['name'].'(s) from your cart';
            }else{
                $_SESSION['cart'][$i]['quantity'] = $amount;
                return 'You have updated the amount of '.$item['name'].'s in your cart';
            }
            
        }
        $i++;
    }

    return 'Something went wrong';
}
?>