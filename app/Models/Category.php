<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','status'];

    private static $category;
    private static $image;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $url;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory ='category-image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function newCategory($request)
    {
        return self::saveBasicInfo(new Category(),$request,self::getImageUrl($request));
        
    }

    
    public static function saveBasicInfo($category,$request,$imageUrl)
    {
        $category->name = $request->name;
        $category->description =$request->description;
        $category->image =$imageUrl;
        $category->save();
    }

    public static function updateCategory($request,$id)
    {
        self::$category = Category::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$category->image))
            {
                unlink(self::$category->image);
            }

            self::$imageUrl = self::getImageUrl($request);
        }

        else
        {
            self::$imageUrl = self::$category->image;
        }

        self::saveBasicInfo(self::$category,$request,self::$imageUrl);
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }


}
