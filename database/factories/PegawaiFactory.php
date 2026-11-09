<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('id_ID');
        $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);
        $nama = $gender === 'Laki-laki' ? $faker->name('male') : $faker->name('female');

        return [
            'nama_pegawai' => $nama,
            'jenis_kelamin' => $gender,
            'pendidikan_terakhir' => $faker->randomElement(['SMA/SMK', 'D3', 'D4', 'S1', 'S2', 'S3']),
            'tanggal_lahir' => $faker->dateTimeBetween('-60 years', '-21 years')->format('Y-m-d'),
        ];
    }
}

