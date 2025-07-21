<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. إنشاء تصنيفات (categories) أولاً
        \App\Models\Category::factory(5)->create();

        // 2. إنشاء منتجات (products) بعد التصنيفات
        \App\Models\Product::factory(20)->create();

        // 3. إنشاء مستخدمين
        \App\Models\User::factory(10)->create();

        // 4. إنشاء كوبونات
        \App\Models\Coupon::factory(5)->create();

        // 5. إنشاء سلات
        \App\Models\Cart::factory(10)->create();

        // 6. إنشاء عناوين
        \App\Models\Address::factory(10)->create();

        // 7. إنشاء طلبات مع عناصرها
        \App\Models\Order::factory(10)
            ->has(\App\Models\OrderItem::factory()->count(3), 'orderItems')
            ->create();

        // 8. Seed permissions, roles, and assign them to users
        $this->call(PermissionRoleSeeder::class);
    }
}
