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

    public static function listProducts(){
    	return DB::table('products')              
            ->join('categories', 'products.cat_id', '=', 'categories.id')            
            ->select('products.*', 'categories.name as cat_name')
            ->orderBy('status')
            ->get();
    }    
}
