<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatgoryResource;
use App\Models\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use GeneralTrait;
    public function index(){
           $catgoires=Category::all()->where('parent_id','=',null);
           $resource=CatgoryResource::collection($catgoires);
           return $this->returnData('data',$resource);
    }

    public function getChild(Request $request){
        $catgory=Category::find($request->cat_id);
        $childs=$catgory->childs;
        $resource=CatgoryResource::collection($childs);
        return $this->returnData('data',$resource);
    }
}
