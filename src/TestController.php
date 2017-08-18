<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 7:20 PM
 */

namespace Ashrafi\ResourceRouteValidator;


use App\Http\Controllers\Controller;
use Ashrafi\ResourceRouteValidator\samples\SampleRequestCrud;
use Ashrafi\ResourceRouteValidator\samples\SampleRequestUpdate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(){
        return view('ResourceRouteValidator::form',['action'=>url('ResourceRouteValidator')]);
    }

    public function store(Request $request){
        dd((new SampleRequestCrud($request,$this))->save(['title'=>$request->title,'sss'=>$request->sss]));
    }

    public function edit($id){
        return view('ResourceRouteValidator::form',['action'=>url('ResourceRouteValidator/'.$id),'method'=>'PUT']);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        dd((new SampleRequestUpdate($request,$this))->setEntity($user)->save(['title'=>$request->title]));
    }

}