<?php

use App\Models\Admin\Product;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();
        DB::table('products')->truncate();
        $faker = \Faker\Factory::create();

        foreach (range(0, 20) as $index) {
            $title             = $faker->unique()->word;
            $short_description = $faker->paragraphs($nb = 2, $asText = true);
            $ean13             = $faker->ean13;
            $description       = $faker->paragraphs($nb = 3, $asText = true);

            $primary_image = $faker->imageUrl($width = 720, $height = 960);
            $second_image  = $faker->imageUrl($width = 720, $height = 960);
            $third_image   = $faker->imageUrl($width = 720, $height = 960);
            $fourth_image  = $faker->imageUrl($width = 720, $height = 960);
            $fifth_image   = $faker->imageUrl($width = 720, $height = 960);
            $banner_image  = $faker->imageUrl($width = 1600, $height = 1000);
            $admin_image   = $faker->imageUrl($width = 1000, $height = 600);
            $thumb_image   = $faker->imageUrl($width = 300, $height = 180);

            $created_at = Carbon::createFromTimeStamp($faker->dateTimeBetween('-6 month', '-1 month')->getTimestamp());
            $startDate  = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 month', '+1 month')->getTimestamp());
            $starts_at  = $startDate->toDateTimeString();
            $ends_at    = $startDate->addHours($faker->numberBetween(1, 8));
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $pin      = mt_rand(10000, 99999) . mt_rand(10000, 99999) . $characters[rand(0, strlen($characters) - 1)];
            $anything = str_shuffle($pin);

            $chars  = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $coupon = "";
            for ($i = 0; $i < 6; $i++) {
                $coupon .= $chars[mt_rand(0, strlen($chars) - 1)];
            }

            Product::create([
                'name'       => $title,
                //'slug'                      => $title,
                //'primary_image_label'       => 'Primary Image',
                //'admin_image_label'         => 'Admin View',
                //'primary_image'             => $faker->image($dir = '/var/www/vhosts/gracecompany/stage.grace/public/faker/', $width = 400, $height = 400, 'people', true, 'fake'),
                //'admin_image'               => $faker->image($dir = '/var/www/vhosts/gracecompany/stage.grace/public/faker/admin', $width = 1100, $height = 600, 'people', true, 'fake'),
                'imageurl'   => $primary_image,
                'is_active'                => $faker->boolean($chanceOfGettingTrue = 50),
                // 'primary_image'             => $primary_image,
                // 'second_image'              => $second_image,
                // 'third_image'               => $third_image,
                // 'fourth_image'              => $fourth_image,
                // 'fifth_image'               => $fifth_image,
                // 'banner_image'              => $banner_image,
                // 'admin_image'               => $admin_image,
                // 'thumb_image'               => $thumb_image,
                // 'office_status'             => $faker->randomElement(['Active', 'Draft', 'inCollaberation', 'withDesign']),
                // 'status'                    => $faker->randomElement(['Online', 'Offline', 'Removed', 'Archived']),
                // 'short_description'         => $short_description,
                // 'description'               => $description,
                // 'product_short_description' => $short_description,
                // 'list_item_1'               => $faker->catchPhrase,
                // 'list_item_2'               => $faker->catchPhrase,
                // 'list_item_3'               => $faker->catchPhrase,
                // 'list_item_4'               => $faker->catchPhrase,
                // 'list_item_5'               => $faker->catchPhrase,
                // 'product_description'       => $description,
                // 'product_notes'             => $faker->paragraphs($nb = 2, $asText = true),
                // 'meta_title'                => $title,
                // 'meta_keywords'             => $title,
                // 'meta_description'          => $short_description,
                'sku'        => $anything,
                'file_id' => $coupon,
                'price'      => $faker->numberBetween(1, 999),
                'mpn'                =>$ean13,
                //'sale_price'                => $faker->numberBetween(1, 999),
                // 'availability'              => $faker->randomElement(['OnBackOrder', 'InStock', 'SoldOut', 'PreOrder']),
                // 'tax'                       => $faker->numberBetween(1, 9),
                // 'shipping'                  => $faker->numberBetween(1, 9),
                // 'quantity'                  => $faker->numberBetween(1, 999),
                // 'sale_price_start_date'     => $starts_at,
                // 'sale_price_end_date'       => $ends_at,
                // 'sale_price_coupon_code'    => $coupon,
                // 'meta_keywords'             => join(',', $faker->words(5)),
                'created_at' => $created_at,
                'updated_at' => $faker->dateTime($max = 'now'),
                // 'category'                  => $faker->randomElement(['Hand Quilting', 'Machine Quilting', 'Quilting Accessory', 'Qnique']),
                // 'product_category'          => $faker->randomElement(['TrueCut', 'Hand Quilting', 'Machine Quilting', 'Quilting Accessory', 'Qnique']),
                // 'user_id'                   => 1,
                // 'order_id'                  => null,
                // 'cart_id'                   => null,
            ]);
        }

    }
}
