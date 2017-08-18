<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 10:20 PM
 */

namespace Ashrafi\ResourceRouteValidator\Abstracts\Controller;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

trait Base
{
    protected $request,$controller;

    public function __construct(Request $request=null,Controller $controller=null){
        $this->setRequest($request)
            ->setController($controller);
    }

    protected function setRequest(Request $request)
    {
        $this->request=$request;
        return $this;
    }

    protected function setController(Controller $controller)
    {
        $this->controller=$controller;
        return $this;
    }

    protected function validate(){
        $this->controller->validate($this->request,$this->getRules());
        return true;
    }

}