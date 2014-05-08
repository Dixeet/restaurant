<?php
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Plat extends Eloquent {

    use SluggableTrait

    protected $guarded = array ('id');

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    public function type(){
        return $this->belongsTo('Type');
    }

    public function recommandation() {
        return $this->hasOne('Recommandation');
    }

    public function menus(){
        return $this->belongsToMany('Menu', 'plats_menus', 'plat_id', 'menu_id');
    }
}