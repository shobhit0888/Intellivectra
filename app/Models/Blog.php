<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','small_desc','description','meta_title','meta_desc','category_id','sub_category_id', 'is_active','created_by'];
	protected $dates = ['created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function sub_category(){
        return $this->belongsTo(Category::class,'sub_category_id');
    }

    //here is many to one polymorph
    public function banner()
    {
        return $this->morphOne(AssetFile::class, 'pictureable','model_type', 'model_id')->where('document_type','banner')->latestOfMany();
    }

    public function image()
    {
        return $this->morphOne(AssetFile::class, 'pictureable','model_type', 'model_id')->where('document_type','images')->latestOfMany();
    }
}
