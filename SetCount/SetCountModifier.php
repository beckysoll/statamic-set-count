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
        return ($param = array_get($params, 0)) ? (count(array_filter($value, function($sets) use ($param) {return $sets['type'] == $param;}))) : (count($value));
    }
}