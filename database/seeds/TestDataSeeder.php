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
        $pass = factory(Pass::class)->create();
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
    }
}
