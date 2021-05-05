<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MushroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('types')->insert(
                [ 'name'=>'Spores','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

            DB::table('types')->insert(
                ['name'=>'Freshis','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

            DB::table('types')->insert(
                ['name'=>'Grow-kits','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')]);

            DB::table('mushroom')->insert(
                [
                    'title'=>'Ghost Chanterelle',
                    'price'=> 95.30,
                    'types_id'=>1,
                    'rate'=> 4,
                    'img'=>'https://www.vmcdn.ca/f/files/via/import/2013/11/white-chanterelle.jpg;w=960',
                    'description'=>'This is a mushroom that merits the attention it gets; firm and meaty with excellent aromatic qualities make it stand alone as one of the best fall mushrooms in the Pacific Northwest. When the coastal yellow chanterelles are slimed up after a long rainy period, these white gems stand in the forest just waiting to be scooped up. It seems to me, given the preponderance of neatly sliced stalks littering the forests on the North Shore, that most folks are familiar with the Golden Chanterelle (Cantharellus formosus) but somehow less familiar with the White, Cantharellus Subalbidus variety. This is mostly due to the preference for subalbidus to grow in old growth forests, forming a micorrhizal relationship with conifers, predominantly Douglas Fir.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            DB::table('mushroom')->insert(
            [
                'title'=>'Yellow Chanterelle',
                'price'=> 500,
                'types_id'=>1,
                'rate'=> 3,
                'img'=>'https://i2.wp.com/foragerchef.com/wp-content/uploads/2012/12/Golden-Chanterelle-Mushrooms_-5.jpg?w=999&ssl=1',
                'description'=>' golden chanterelles are some of the most widely available and prized. They’re enjoyed the world over for plenty of reasons: a great, meaty texture, a paradigm shifting flavor if you’re used to eating cultivated mushrooms, and an aroma as sweet as the ripest apricot you’ve ever smelled. To boot, they can be picked en masse if you have a nice patch, and then again and again during the season as long as the rain keeps up.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        DB::table('mushroom')->insert(
            [
                'title'=>'Hedgehog',
                'price'=> 500 ,
                'types_id'=>1,
                'rate'=> 4,
                'img'=>'https://s3.amazonaws.com/cdn.fieldforest.net/images/thumb/shiitake-table-top-farm-1.jpg',
                'description'=>'The hedgehog, or sweet tooth, is perhaps the most foolproof to identify of all wild mushrooms. Its yellow to orange cap and fruity odor are reminiscent of its summer-fruiting relative the golden chanterelle, but its tooth-covered underside distinguishes it from potential look-alikes.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        DB::table('mushroom')->insert(
            [
                'title'=>'Sweet tooth',
                'price'=> 150,
                'types_id'=>2,
                'rate'=> 4,
                'img'=>'https://s3.amazonaws.com/cdn.fieldforest.net/images/uploads/category_65_9200.jpg',
                'description'=>'',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        DB::table('mushroom')->insert(
            [
                'title'=>'',
                'price'=> 50,
                'types_id'=>1,
                'rate'=> 4,
                'img'=>'https://s3.amazonaws.com/cdn.fieldforest.net/images/thumb/lions-mane-table-top-farm-1.jpg',
                'description'=>'Hydnum repandum, commonly known as the sweet tooth, wood hedgehog or hedgehog mushroom, is a basidiomycete fungus of the family Hydnaceae. First described by Carl Linnaeus in 1753, it is the type species of the genus Hydnum.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        DB::table('mushroom')->insert(
            [
                'title'=>'King Bolete',
                'price'=> 120,
                'types_id'=>3,
                'rate'=> 2,
                'img'=>'https://s3.amazonaws.com/cdn.fieldforest.net/images/uploads/category_65_9200.jpg',
                'description'=>'Boletus edulis is a basidiomycete fungus, and the type species of the genus Boletus. Widely distributed in the Northern Hemisphere across Europe, Asia, and North America, it does not occur naturally in the Southern Hemisphere, although it has been introduced to southern Africa, Australia, New Zealand, and Brazil.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

    }
}
