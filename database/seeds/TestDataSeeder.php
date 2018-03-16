<?php

use App\Destination;
use App\Discount;
use App\Image;
use App\Pass;
use App\Vendor;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pass = factory(Pass::class)->create([
            'name' => 'Yellowstone',
            'slug' => 'yellowstone',
        ]);
		$images = $pass->images()->save(factory(Image::class)->create());
		$destinations = $pass->destinations()->save(factory(Destination::class)->create());
		$discounts = factory(Discount::class,25)->create([
            'pass_id' => $pass->id,
            // 'vendor_id' => factory(Vendor::class)->create()->id,
        ])->each(function($d){
            $d->vendor_id = factory(Vendor::class)->create()->id;
            $d->save();
			$d->images()->saveMany(factory(Image::class,5)->create());
		});

        factory(Pass::class)->create([
            'name' => 'Zion',
            'slug' => 'zion',
        ]);

        factory(Pass::class)->create([
            'name' => 'Glacier',
            'slug' => 'glacier',
        ]);
        factory(Pass::class)->create([
            'name' => 'Grand Canyon',
            'slug' => 'grand-canyon',
        ]);

        factory(Pass::class)->create([
            'name' => 'Yosemite',
            'slug' => 'yosemite',
        ]);
        factory(Pass::class)->create([
            'name' => 'Great Smoky Mountains',
            'slug' => 'great-smoky-mountains',
        ]);

    }
}
