<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Menu extends Eloquent {

    use SluggableTrait

    protected $guarded = array ('id');

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    public function plats(){
        return $this->belongsToMany('Plat', 'plats_menus', 'menu_id', 'plat_id');
    }
}