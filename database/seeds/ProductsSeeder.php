<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample category
        $rotitawar = Category::create(['title' => 'Roti Tawar']);
        $rotisobek = Category::create(['title' => 'Roti Sobek']);

        // sample product
        $tawar = Category::where('title', 'Roti Tawar')->first();
        $tawar1 = Product::create([
            'name' => 'Roti Tawar Funwari',
            'model' => 'Funwari',
            'photo' => 'tawarfunwari.jpg',
            'price' => 12500,
            'desc' => 'Test deskripsi'

        ]);
        $tawar2 = Product::create([
            'name' => 'Roti Tawar Gandum',
            'model' => 'Gandum',
            'photo' => 'tawargandum.jpg',
            'price' => 15500,
            'desc' => 'Test deskripsi'
        ]);
        $tawar3 = Product::create([
            'name' => 'Roti Tawar Reguler',
            'model' => 'Reguler',
            'photo' => 'tawarreguler.jpg',
            'price' => 12000,
            'desc' => 'Test deskripsi'
        ]);
        $tawar->products()->saveMany([$tawar1, $tawar2, $tawar3]);

        $sobek = Category::where('title', 'Roti Sobek')->first();
        $sobek1 = Product::create([
            'name' => 'Roti Sobek Coklat',
            'model' => 'Sobek',
            'photo' => 'sobekcoklat.jpg',
            'price' => 14000,
            'desc' => 'Test deskripsi'
        ]);
        $sobek2 = Product::create([
            'name' => 'Roti Sobek Keju',
            'model' => 'Sobek',
            'photo' => 'sobekkeju.jpg',
            'price' => 14000,
            'desc' => 'Test deskripsi'
        ]);
        $sobek3 = Product::create([
            'name' => 'Roti Sobek Susu',
            'model' => 'Sobek',
            'photo' => 'sobeksusu.jpg',
            'price' => 14000,
            'desc' => 'Test deskripsi'
        ]);
        $sobek->products()->saveMany([$sobek1, $sobek2, $sobek3]);

        // Copy image sample to public folder
        $from = database_path('seeds' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
        $to = public_path('img' . DIRECTORY_SEPARATOR);
        File::copy($from . 'cover.jpg', $to . 'cover.jpg');
        File::copy($from . 'ico.png', $to . 'ico.png');
        File::copy($from . 'login.gif', $to . 'login.gif');
        File::copy($from . 'tawarfunwari.jpg', $to . 'tawarfunwari.jpg');
        File::copy($from . 'tawargandum.jpg', $to . 'tawargandum.jpg');
        File::copy($from . 'tawarreguler.jpg', $to . 'tawarreguler.jpg');
        File::copy($from . 'sobekcoklat.jpg', $to . 'sobekcoklat.jpg');
        File::copy($from . 'sobekkeju.jpg', $to . 'sobekkeju.jpg');
        File::copy($from . 'sobeksusu.jpg', $to . 'sobeksusu.jpg');
        File::copy($from . 'homefunwari.jpg', $to . 'homefunwari.jpg');
        File::copy($from . 'homefunwarisandwich.jpg', $to . 'homefunwarisandwich.jpg');
        File::copy($from . 'homeroticake.jpg', $to . 'homeroticake.jpg');
        File::copy($from . 'homerotiisi.jpg', $to . 'homerotiisi.jpg');
        File::copy($from . 'homerotimanis.jpg', $to . 'homerotimanis.jpg');
        File::copy($from . 'homerotisobek.jpg', $to . 'homerotisobek.jpg');
        File::copy($from . 'homerotistick.jpg', $to . 'homerotistick.jpg');
        File::copy($from . 'homerotitawar.jpg', $to . 'homerotitawar.jpg');
        File::copy($from . 'homesandiwchisi.jpg', $to . 'homesandiwchisi.jpg');
    }
}
