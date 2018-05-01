<?php

use App\Destination;
use App\Discount;
use App\Image;
use App\Pass;
use App\PromoCode;
use App\Vendor;
use App\VendorType;
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
            'name' => 'GO Yellowstone Summer 2018',
            'slug' => 'go-yellowstone-summer-2018',
        ]);
		$images = $pass->images()->save(factory(Image::class)->create());
		$destinations = $pass->destinations()->save(factory(Destination::class)->create());
        VendorType::create([
            'name' => 'Discount Provider'
        ]);
        VendorType::create([
            'name' => 'Sales Partner'
        ]);
		$discounts = factory(Discount::class,25)->create([
            'pass_id' => $pass->id,
            // 'vendor_id' => factory(Vendor::class)->create()->id,
        ])->each(function($d){
            $vendor = factory(Vendor::class)->create();
            $vendor->types()->attach(VendorType::where('name','Discount Provider')->first()->id);
            $d->vendor_id = $vendor->id;
            $d->save();
			$d->images()->saveMany(factory(Image::class,5)->create());

		});
        // Make some Active Promo Codes
        factory(PromoCode::class,25)->create();

        $pass = factory(Pass::class)->create([
            'name' => 'GO Glacier Summer 2018',
            'slug' => 'go-glacier-summer-2018',
        ]);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
        $pass = factory(Pass::class)->create([
            'name' => 'GO Grand Canyon Summer 2018',
            'slug' => 'go-grand-canyon-summer-2018',
        ]);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
        $pass = factory(Pass::class)->create([
            'name' => 'GO Great Smoky Mountains Summer 2018',
            'slug' => 'go-great-smoky-mountains-summer-2018',
        ]);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
        $pass = factory(Pass::class)->create([
            'name' => 'GO Yosemite Summer 2018',
            'slug' => 'go-yosemite-summer-2018',
        ]);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
        $pass = factory(Pass::class)->create([
            'name' => 'GO Zion Summer 2018',
            'slug' => 'go-zion-summer-2018',
        ]);
        $destinations = $pass->destinations()->save(factory(Destination::class)->create());
    }
}
