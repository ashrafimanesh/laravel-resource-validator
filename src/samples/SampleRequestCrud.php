<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 5:10 PM
 */

namespace Ashrafi\ResourceRouteValidator\samples;


use Ashrafi\ResourceRouteValidator\Abstracts\Controller\ControllerPostForm;

class SampleRequestCrud extends ControllerPostForm
{

    protected function getRules()
    {
        //return rules
        return ['title'=>'required'];
    }

    /**
     * @param $newData
     * @return mixed
     */
    protected function persist($newData)
    {
        return 'Success store';
    }
}