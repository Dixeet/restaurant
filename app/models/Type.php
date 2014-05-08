<?php

class Type extends Eloquent {

    protected $guarded = array ('id');

    public function plats() {
        return $this->hasMany('Plat');
    }
}