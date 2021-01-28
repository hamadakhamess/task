<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class CatgoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //// name of Category According to App lang
        if (app()->getLocale()=='ar'){
            $name=$this->name_ar;
        }else{
                    $name=$this->name_en;
        }


        if ($this->parent_id==null){
            ///////  check if main Category has Child ///
            $childCount=DB::table('categories')->where('parent_id',$this->id)->count();
            if ($childCount==0){
                $child=0;
            }else{
                $child=1;
            }
            //////////// main Category response /////////
            return [
                'name'               =>           $name,
                'img'                =>           asset('uploads/categoryImages/'.$this->img),
                'has_child'          =>           $child
            ];


        }else{
            //////////// Sub Category response /////////
            return [
                'name'               =>            $name,
                'parent_id'          =>            $this->parent_id
             ];
        }

    }
}
