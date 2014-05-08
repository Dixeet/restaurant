<?php

class Plat extends Eloquent {

    protected $guarded = array ('id');

    public function type(){
        return $this->belongsTo('Type');
    }

    public function recommandation() {
        return $this->hasOne('Recommandation');
    }

    public function menus(){
        return $this->belongsToMany('Menu', 'plats_menus', 'plat_id', 'menu_id');
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}