<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/11/17
 * Time: 7:20 PM
 */

namespace Ashrafi\CrudActions;


use App\Http\Controllers\Controller;
use Ashrafi\CrudActions\samples\SampleRequestCrud;
use Ashrafi\CrudActions\samples\SampleRequestUpdate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(){
        return view('CrudActions::form',['action'=>url('CrudActions')]);
    }

    public function store(Request $request){
        dd((new SampleRequestCrud($request,$this))->save(['title'=>$request->title,'sss'=>$request->sss]));
    }

    public function edit($id){
        return view('CrudActions::form',['action'=>url('CrudActions/'.$id),'method'=>'PUT']);
    }

    public function update(Request $request,$id){
        $user=User::find($id);
        dd((new SampleRequestUpdate($request,$this))->setEntity($user)->save(['title'=>$request->title]));
    }

}