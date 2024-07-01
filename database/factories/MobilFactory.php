<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Mobil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    protected $model = Mobil::class;

    // Array gambar
    protected static $images = [
        'assets/img/1.png',
        'assets/img/2.png',
        'assets/img/3.png',
        'assets/img/4.png',
        'assets/img/5.png',
        'assets/img/6.png',
        'assets/img/7.png',
        'assets/img/8.png',
        'assets/img/9.png',
    ];

    // Index untuk melacak gambar berikutnya
    protected static $imageIndex = 0;

    public function definition()
    {
        // Ambil gambar berikutnya
        $image = self::$images[self::$imageIndex];

        // Update index untuk gambar berikutnya
        self::$imageIndex = (self::$imageIndex + 1) % count(self::$images);

        return [
            'user_id' => User::factory(),
            'plat_nomor' => $this->faker->unique()->bothify('B####???'),
            'merk' => $this->faker->randomElement(['BMW X5', 'Ferrari 488', 'Lamborghini Huracan']),
            'jenis' => $this->faker->randomElement(['BMW', 'Ferrari', 'Lamborghini']),
            'harga' => $this->faker->numberBetween(700000, 1500000),
            'foto' => $image,
        ];
    }
}
