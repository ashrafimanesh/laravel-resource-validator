<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/18/17
 * Time: 1:51 PM
 */

namespace Ashrafi\ResourceRouteValidator\Abstracts\Make;

use Illuminate\Support\Facades\Validator;

trait Base
{
    protected $inputs,$validator;

    /**
     * @param $inputs
     * @return $this
     */
    public function setInputs($inputs){
        $this->inputs=$inputs;
        return $this;
    }

    /**
     * @return bool
     */
    protected function validate(){
        $this->validator=Validator::make($this->inputs,$this->getRules());
        return $this->validator->fails();
    }
}