<?php

namespace App\Services;

use App\Models\Blog;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class BlogService
{
    protected $defaultPage = 4;
    protected $orderBy = 'DESC';

    public function getAllBlogs()
    {
        $blogs = Blog::with('category','sub_category','banner','image');

        return   $blogs->orderBy('id',$this->orderBy)->paginate($this->defaultPage);

    }

    public function getBlogsByFilter($request)
    {
        $blogs = Blog::with('category','sub_category','banner','image');

        return  $blogs
        ->where( function($q)use($request){
            if($request->seach_term !='' && $request->seach_term ){
                $q->where('name_of_establishment', 'like', '%'.$request->seach_term.'%')
                ->orWhere('key_person', 'like', '%'.$request->seach_term.'%')
                ->orWhere('mobile', 'like', '%'.$request->seach_term.'%')
                ->orWhere('email', 'like', '%'.$request->seach_term.'%');
            }else if($request->filter_item !='' && $request->filter_item && $request->type !=null ){
                $filter = $request->filter_item;
                if(getType( $filter) != 'array'){
                    if($request->type == 'city'){
                        $q->where('city_id', $filter);
                    }else if($request->type == 'status'){
                        $q->where('status', $filter);
                    }
                }else{
                    $q->whereDate('created_at','>=',$filter['startDate'])->whereDate('created_at','<=',$filter['endDate']);
                }
            }

        })
        ->orderBy('id',$this->orderBy)
        ->paginate($this->defaultPage);
    }

}
