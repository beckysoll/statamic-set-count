<?php

namespace Statamic\Addons\SetCount;

use Statamic\Extend\Modifier;

class SetCountModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param array  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return integer
     */
    public function index($value, $params, $context)
    {

        $arrayFlat = array_dot($value);
        $arrayTypes = array_intersect_key($arrayFlat,array_flip(preg_grep('/\.type$/',array_keys($arrayFlat))));

        return ($param1 = array_get($params, 0)) ? (count(array_filter($arrayTypes, function($sets) use ($param1) {return $sets == $param1;}))) : (count($value));

    }

}
