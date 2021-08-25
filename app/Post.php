<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=['title','body','user_id','category_id'];


    public function user()
    {
     return $this->hasOne(User::class,'id','user_id');

}
public function category()
{
    return $this->hasOne(Category::class,'id','category_id');
}

    public function images()
    {
        return $this->morphMany(image::class,'imageable');

}
public function getData()
{
    return static::orderBy('created_at','desc')->get();
}

    public function storeData($input)
    {
//        $this->images()->save($input->file);
        return static::create($input);
    }

    public function findData($id)
    {
        return static::find($id);
    }

    public function updateData($id, $input)
    {
        return static::find($id)->update($input);
    }

    public function deleteData($id)
    {
        return static::find($id)->delete();
    }
}
