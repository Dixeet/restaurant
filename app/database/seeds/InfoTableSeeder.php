<?php

class InfoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('infos')->delete();

        $jumbotron1 = Info::create(array(
            'name' => 'jumbotron',
            'data' => '/public/images/01.jpg'
        ));

        $jumbotron2 = Info::create(array(
            'name' => 'jumbotron',
            'data' => '/public/images/02.jpg'
        ));
    }

}