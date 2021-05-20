<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'qtd', 'cat_id', 'status', 'image'];

    public static function listON(){
    	return DB::table('products')
            ->where('status', '=', 1)
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as cat_name')
            ->orderBy('created_at')
            ->paginate(7);
    }
    public static function listOFF(){
    	return DB::table('products')
            ->where('status', '=', 0)
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as cat_name')
            ->orderBy('created_at')
            ->paginate(7);
    }

    /*
    public static function listCategories(){
        return DB::table('categories')
            ->select('categories.*', 'categories.name as cat_name')
            ->get();
    }
    */

    public static function listCategories(){
    	return Category::all();
    }
}
