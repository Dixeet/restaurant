<?php

class Menu extends Eloquent {

    protected $guarded = array ('id');

    public function plats(){
        return $this->belongsToMany('Plat', 'plats_menus', 'menu_id', 'plat_id');
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}