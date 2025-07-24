<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CartItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class CartItemPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool 
    { 
        return $user->can('view_any_cart_item'); 
    }
    
    public function view(User $user, CartItem $cartItem): bool 
    { 
        return $user->can('view_cart_item'); 
    }
    
    public function create(User $user): bool 
    { 
        return $user->can('create_cart_item'); 
    }
    
    public function update(User $user, CartItem $cartItem): bool 
    { 
        return $user->can('update_cart_item'); 
    }
    
    public function delete(User $user, CartItem $cartItem): bool 
    { 
        return $user->can('delete_cart_item'); 
    }
    
    public function deleteAny(User $user): bool 
    { 
        return $user->can('delete_any_cart_item'); 
    }
    
    public function restore(User $user, CartItem $cartItem): bool 
    { 
        return $user->can('restore_cart_item'); 
    }
    
    public function restoreAny(User $user): bool 
    { 
        return $user->can('restore_any_cart_item'); 
    }
    
    public function replicate(User $user, CartItem $cartItem): bool 
    { 
        return $user->can('replicate_cart_item'); 
    }
    
    public function reorder(User $user): bool 
    { 
        return $user->can('reorder_cart_item'); 
    }
    
}
