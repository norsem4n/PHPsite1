<?php
/**
 * Description of CartClass
 * Shopping Cart for C&C Sports
 * @author fresquez, ckarnas
 */

class CartClass {
    
    private array $cartItems;

   // Constructor
    public function __construct()
    {
        $this->cartItems = array();
    }

   // add an item to the $cartItems array
    public function addCartItem(int $aProductid) : void
    {
        // if the item is not already in the array, add the item to the array
        if (!array_key_exists($aProductid, $this->cartItems))
        {
            $this->cartItems[$aProductid] = 1;
        }

        // else, increase the quantity for the item by one
        else
        {
            $this->cartItems[$aProductid] ++;
        }
    }

    // return the $cartItems array
    public function getCartItems() : array
    {
        return $this->cartItems;
    }

    // return the quantity for a specific item
    public function getQtyByProductID(int $aProductid) : int
    {
        return $this->cartItems[$aProductid];
    }

    // update the quantity for a specific item
    public function updateCartItem(int $aProductid, int $aOrderQty) : void
    {
        if ($aOrderQty === 0)
        {
            $this->deleteCartItem($aProductid);
        }
        else
        {
            $this->cartItems[$aProductid] = $aOrderQty;
        }
    }

    // delete a specific item from the array
    public function deleteCartItem(int $aProductid) : void
    {
        unset($this->cartItems[$aProductid]);
    } 
    
}

