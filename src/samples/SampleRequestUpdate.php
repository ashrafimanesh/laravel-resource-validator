<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 9:37 PM
 */

namespace Ashrafi\CrudActions\samples;


use Ashrafi\CrudActions\Abstracts\Controller\ControllerUpdateForm;

class SampleRequestUpdate extends ControllerUpdateForm
{

    protected function getRules()
    {
        //return rules
        return ['title'=>'required'];
    }
}