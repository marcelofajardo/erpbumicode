<?php

namespace App\Policies\Stock;

use App\Models\User;
use App\Models\Stock\ItemPriceList;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPriceListPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_stock::item::price::list');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('view_stock::item::price::list');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_stock::item::price::list');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('update_stock::item::price::list');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('delete_stock::item::price::list');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_stock::item::price::list');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('force_delete_stock::item::price::list');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_stock::item::price::list');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('restore_stock::item::price::list');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_stock::item::price::list');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, ItemPriceList $itemPriceList): bool
    {
        return $user->can('replicate_stock::item::price::list');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_stock::item::price::list');
    }
}
