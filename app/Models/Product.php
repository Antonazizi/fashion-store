<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function all($columns = ['*'])
    {
        return collect([
            [
                'id' => 1,
                'name' => 'Floral Print Dress',
                'description' => 'Round neck dress with a v-neck and long sleeves. Elasticated waist. Lined. Belt detail. Front button fastening.',
                'sale' => 20,
                'price' => 59.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/1.jpg',
                'thumbnails' => ['products/1A.jpg', 'products/1B.jpg'],
                'quantity' => 10,
                'created_at' => '2024-11-23 19:18:05'
            ],
            [
                'id' => 2,
                'name' => 'Linen Blend Maxi Dress',
                'description' => 'Dress made of a linen blend. V-neckline with knotted straps at the neck. Fitted waist with drawstring at the back. Back slit at the hem. Invisible side zip fastening.',
                'sale' => null,
                'price' => 39.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/3.jpg',
                'thumbnails' => ['products/3A.jpg', 'products/3B.jpg', 'products/3C.jpg'],
                'quantity' => 6,
                'created_at' => '2024-11-23 19:18:05'
            ],
            [
                'id' => 3,
                'name' => 'Satin Effect Mid Dress',
                'description' => 'Make a statement in this sleek satin effect midi dress. The fitted bodice accentuates your curves while the flowing skirt adds an element of grace. Perfect for evening outings, pair it with strappy heels and bold accessories for a glamorous look.',
                'sale' => 10,
                'price' => 19.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/4.jpg',
                'thumbnails' => ['products/4A.jpg', 'products/4B.jpg', 'products/4C.jpg', 'products/4D.jpg'],
                'quantity' => 3,
                'created_at' => '2024-11-23 19:18:05'
            ],
            [
                'id' => 4,
                'name' => 'Ribbed Knit Dress',
                'description' => 'This comfortable ribbed knit dress is a versatile addition to your wardrobe. The long sleeves and fitted silhouette make it perfect for cooler days, while the stretchy fabric ensures a flattering fit. Style it with ankle boots and a leather jacket for an edgy vibe, or dress it down with sneakers for a casual day out. This dress is ideal for layering and can easily transition from day to night.',
                'sale' => 30,
                'price' => 69.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/5.jpg',
                'thumbnails' => ['products/5A.jpg', 'products/5B.jpg', 'products/5C.jpg', 'products/5D.jpg'],
                'quantity' => 1,
                'created_at' => '2024-11-23 19:18:05'
            ],
            [
                'id' => 5,
                'name' => 'Asymmetric Hem Dress',
                'description' => 'Asymmetric midi dress with one long sleeve and one shoulder bare. Asymmetric hem.',
                'sale' => null,
                'price' => 19.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/6.jpg',
                'thumbnails' => ['products/6A.jpg', 'products/6B.jpg'],
                'quantity' => 2,
                'created_at' => '2024-11-23 19:18:06'
            ],
            [
                'id' => 6,
                'name' => 'Denim Dress',
                'description' => 'Sleeveless, round neck dress. Fitted waist. Back vent hem. Metal zip fastening on the back.',
                'sale' => null,
                'price' => 44.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/7.jpg',
                'thumbnails' => ['products/7A.jpg', 'products/7B.jpg'],
                'quantity' => 3,
                'created_at' => '2024-11-23 19:18:09'
            ],
            [
                'id' => 7,
                'name' => 'Zw Collection Darts Dress',
                'description' => 'Dress made of denim fabric. Featuring a round neck, short puff sleeves with darts, a fitted waist and button-up front.',
                'sale' => 25,
                'price' => 24.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/8.jpg',
                'thumbnails' => ['products/8A.jpg', 'products/8B.jpg', 'products/8C.jpg', 'products/8D.jpg'],
                'quantity' => 7,
                'created_at' => '2024-11-23 19:18:08'
            ],
            [
                'id' => 8,
                'name' => 'Ruffled Animal Print Dress',
                'description' => 'Short dress with a crossover V-neck and long sleeves. Ruffle details. Contrast lining. Wrap-style fastening with inner tie and side tie.',
                'sale' => null,
                'price' => 39.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/9.jpg',
                'thumbnails' => ['products/9A.jpg', 'products/9B.jpg'],
                'quantity' => 5,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 9,
                'name' => 'Zw Collection Darts Dress',
                'description' => 'Dress made of denim fabric. Featuring a round neck, short puff sleeves with darts, a fitted waist and button-up front.',
                'sale' => 25,
                'price' => 24.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/10.jpg',
                'thumbnails' => ['products/10A.jpg', 'products/10B.jpg'],
                'quantity' => 7,
                'created_at' => '2024-11-23 19:18:08'
            ],
            [
                'id' => 10,
                'name' => 'Ruffled Animal Print Dress',
                'description' => 'Short dress with a crossover V-neck and long sleeves. Ruffle details. Contrast lining. Wrap-style fastening with inner tie and side tie.',
                'sale' => null,
                'price' => 39.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/11.jpg',
                'thumbnails' => ['products/11A.jpg', 'products/11B.jpg'],
                'quantity' => 2,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 11,
                'name' => 'Draped Tulle Dress',
                'description' => 'Sleeveless midi dress with a round neck. Features draped fabric, a contrasting lining and concealed zip fastening at the back.',
                'sale' => 20,
                'price' => 89.90,
                'star_reviews' => 0.00,
                'main_photo' => 'products/12.jpg',
                'thumbnails' => ['products/12A.jpg', 'products/12B.jpg'],
                'quantity' => 4,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 12,
                'name' => 'Draped Camisole Dress',
                'description' => 'Midi dress with a straight neckline and thin adjustable straps. Draped fabric. Open back. Matching lining. Invisible back zip fastening.',
                'sale' => null,
                'price' => 19.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/13.jpg',
                'thumbnails' => ['products/13A.jpg', 'products/13B.jpg'],
                'quantity' => 2,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 13,
                'name' => 'Limited Edition 100% Silk Printed Dress',
                'description' => 'Midi dress crafted from 100% spun silk. Adjustable flowing halter neck with ties. Wrap detail in the same fabric, like a sash, adjustable with ties. Open back. Concealed zip fastening.',
                'sale' => null,
                'price' => 39.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/14.jpg',
                'thumbnails' => ['products/14A.jpg', 'products/14B.jpg'],
                'quantity' => 8,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 14,
                'name' => 'Satin Floral Midi Dress',
                'description' => 'Dress with a cowl neckline at the front and back. Thin straps. Tulle floral detail on the front. Fitted waist.',
                'sale' => null,
                'price' => 24.98,
                'star_reviews' => 0.00,
                'main_photo' => 'products/15.jpg',
                'thumbnails' => ['products/15A.jpg', 'products/15B.jpg'],
                'quantity' => 5,
                'created_at' => '2024-11-23 19:18:07'
            ],
            [
                'id' => 15,
                'name' => 'Stretch Knit Midi Dress',
                'description' => 'Fitted off-the-shoulder midi dress made of knit fabric. Halter neck.',
                'sale' => null,
                'price' => 29.99,
                'star_reviews' => 0.00,
                'main_photo' => 'products/16.jpg',
                'thumbnails' => ['products/16A.jpg', 'products/16B.jpg'],
                'quantity' => 3,
                'created_at' => '2024-11-23 19:18:07'
            ],
        ]);
    }
}