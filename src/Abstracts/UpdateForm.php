<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 10:06 PM
 */

namespace Ashrafi\ResourceRouteValidator\Abstracts;


abstract class UpdateForm extends Form
{
    protected $entity;


    public function setEntity($entity)
    {
        $this->entity=$entity;
        return $this;
    }

    protected function persist($newData){

        return $this->entity->save($newData);
    }

}