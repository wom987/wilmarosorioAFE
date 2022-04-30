<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_name',
        'unit_price',
        'barcode',
        'supplier_id',
        'image'
    ];
    public function supplier()
    {
        //supplier relationship added 
        return $this->belongsTo(Supplier::class);
        //! fails it we use has one
        //* it fails bc it is searching the product id at suppliers table 
        //* the relationship cannot be done properly
        //return $this->hasOne(Supplier::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
