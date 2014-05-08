<?php

class TypeMenuPlatRecommandationTableSeeder extends Seeder {

    public function run()
    {

        //Suppression du contenu des tables
        DB::table('types')->delete();
        DB::table('menus')->delete();
        DB::table('plats')->delete();
        DB::table('plats_menus')->delete();
        DB::table('recommandations')->delete();

        //Contenu des catégories de plat (table types)
        $entree = Type::create(array(
            'name' => 'Entrée',
        ));

        $plat = Type::create(array(
            'name' => 'Plat',
        ));

        $dessert = Type::create(array(
            'name' => 'Dessert',
        ));

        //Contenu de la table plats
        $items = array();

        for ($i = 0; $i < 10; $i++){
            $item = Plat::create(array(
                'name' => Str::random(rand(4, 14), 'alpha'),
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
                'image' => 'http://lorempixel.com/1024/768/food/',
                'prix' => rand(8, 30),
                'type_id' => $entree->id
            ));
            $items[]=$item;
        }

        for ($i = 0; $i < 10; $i++){
            $item = Plat::create(array(
                'name' =>  Str::random(rand(4, 14), 'alpha'),
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
                'image' => 'http://lorempixel.com/1024/768/food/',
                'prix' => rand(8, 30),
                'type_id' => $plat->id
            ));
            $items[]=$item;
        }
//        $this->command->info($items[rand(0,10)]->id);

        for ($i = 0; $i < 10; $i++){
            $item = Plat::create(array(
                'name' => Str::random(rand(4, 14), 'alpha'),
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
                'image' => 'http://lorempixel.com/1024/768/food/',
                'prix' => rand(8, 30),
                'type_id' => $dessert->id
            ));
            $items[]=$item;
        }



        //Contenu de la table recommandations
        for ($i = 0; $i < 3 ; $i++){
            $recommandation = Recommandation::create(array(
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
                'plat_id' => $items[rand(0,29)]->id
            ));
        }

        //Contenu de la table menus
        $menu1 = Menu::create(array(
            'name' =>  'Menu Standard',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
            'prix' => rand(20, 40),
        ));

        $menu2 = Menu::create(array(
            'name' =>  'Menu du Midi',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
            'prix' => rand(20, 40),
        ));

        $menu3 = Menu::create(array(
            'name' =>  'Menu Gourmand',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.',
            'prix' => rand(20, 40),
        ));

        //Liaison des menus et des plats (manyToMany)
        for ($i = 0; $i < 12 ; $i++){
            $items[rand(0,29)]->menus()->attach($menu1->id);
        }

        for ($i = 0; $i < 12 ; $i++){
            $items[rand(0,29)]->menus()->attach($menu2->id);
        }

        for ($i = 0; $i < 12 ; $i++){
            $items[rand(0,29)]->menus()->attach($menu3->id);
        }

    }
}