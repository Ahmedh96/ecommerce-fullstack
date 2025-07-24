<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Coupon;
use Illuminate\Auth\Access\HandlesAuthorization;

class CouponPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool 
    { 
        return $user->can('view_any_coupon'); 
    }

    public function view(User $user, Coupon $coupon): bool 
    { 
        return $user->can('view_coupon'); 
    }

    public function create(User $user): bool 
    { 
        return $user->can('create_coupon'); 
    }

    public function update(User $user, Coupon $coupon): bool 
    { 
        return $user->can('update_coupon'); 
    }

    public function delete(User $user, Coupon $coupon): bool 
    { 
        return $user->can('delete_coupon'); 
    }

    public function deleteAny(User $user): bool 
    { 
        return $user->can('delete_any_coupon'); 
    }

    public function restore(User $user, Coupon $coupon): bool 
    { 
        return $user->can('restore_coupon'); 
    }

    public function restoreAny(User $user): bool 
    { 
        return $user->can('restore_any_coupon');
    }
    
    public function replicate(User $user, Coupon $coupon): bool 
    { 
        return $user->can('replicate_coupon'); 
    }

    public function reorder(User $user): bool 
    { 
        return $user->can('reorder_coupon'); 
    }

}
