<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;

class ProductPolicy
{
    /**
     * Menentukan apakah user boleh melihat daftar produk.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh melihat detail produk.
     */
    public function view(User $user, Product $product): bool
    {
        return true;
    }

    /**
     * Menentukan apakah user boleh membuat produk.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'editor'], true);
    }

    /**
     * Menentukan apakah user boleh mengedit produk.
     */
    public function update(User $user, Product $product): bool
    {
        return in_array($user->role, ['admin', 'editor'], true);
    }

    /**
     * Menentukan apakah user boleh menghapus produk.
     */
    public function delete(User $user, Product $product): bool
    {
        return $user->role === 'admin';
    }
}