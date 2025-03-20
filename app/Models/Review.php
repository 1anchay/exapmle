<?php
namespace Database\Seeders;

use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $products = Product::all();

        foreach ($users as $user) {
            foreach ($products->random(3) as $product) {
                Review::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'review' => fake()->sentence(10),
                    'rating' => rand(1, 5),
                ]);
            }
        }
    }
}
