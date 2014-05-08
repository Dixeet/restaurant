<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 08/05/14
 * Time: 15:58
 */

class Recommandation extends Eloquent {

    protected $guarded = array ('id');

    public function plat() {
        return $this->belongsTo('Plat');
    }

} 