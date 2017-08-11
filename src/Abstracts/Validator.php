<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 10:02 PM
 */

namespace Ashrafi\CrudActions\Abstracts;


trait Validator
{
    /**
     * @return array
     */
    abstract protected function getRules();

    /**
     * @exception
     * @return bool
     * @throws \Exception
     */
    abstract protected function validate();
}