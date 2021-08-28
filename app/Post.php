<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=['id','title','body','user_id','category_id'];


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
        return $this->morphOne(image::class,'imageable');

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
        $post=static::find($id);
        $imagePath="images/{$post->images->name}";
     if (File::exists($imagePath)){
         unlink(public_path($imagePath));
     }

        $post->images()->delete();
        return $post->delete();
    }
}
