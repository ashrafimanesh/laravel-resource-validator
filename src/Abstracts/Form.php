<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 10:29 PM
 */

namespace Ashrafi\ResourceRouteValidator\Abstracts;


abstract class Form
{
    use Validator;

    /**
     * @param $newData
     * @return mixed
     */
    abstract protected function persist($newData);

    /**
     * @param $newData
     * @return bool|mixed
     */
    public function save($newData){
        if(!$this->validate())
        {
            return FALSE;
        }

        return $this->persist($newData);
    }
}