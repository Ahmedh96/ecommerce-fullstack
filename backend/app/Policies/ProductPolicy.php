<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool 
    { 
        return $user->can('view_any_product'); 
    }

    public function view(User $user, Product $product): bool 
    { 
        return $user->can('view_product'); 
    }

    public function create(User $user): bool  
    { 
        return $user->can('create_product'); 
    }

    public function update(User $user, Product $product): bool 
    { 
        return $user->can('update_product'); 
    }

    public function delete(User $user, Product $product): bool 
    { 
        return $user->can('delete_product'); 
    }

    public function deleteAny(User $user): bool 
    { 
        return $user->can('delete_any_product'); 
    }

    public function restore(User $user, Product $product): bool 
    { 
        return $user->can('restore_product'); 
    }

    public function restoreAny(User $user): bool 
    { 
        return $user->can('restore_any_product'); 
    }

    public function replicate(User $user, Product $product): bool 
    { 
        return $user->can('replicate_product'); 
    }

    public function reorder(User $user): bool 
    { 
        return $user->can('reorder_product'); 
    }

    public function forceDelete(User $user, Product $product): bool 
    { 
        return $user->can('force_delete_product'); 
    }

    public function forceDeleteAny(User $user): bool 
    { 
        return $user->can('force_delete_any_product'); 
    }

}
