<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    public function saleProducts()
    {
        return $this->hasMany(SaleProduct::class);
    }

    public function saleReturnedProducts()
    {
        //return $this->hasManyThrough(SaleProductReturn::class, SaleProduct::class);
        return $this->hasManyThrough(
            SaleProductReturn::class,
            SaleProduct::class,
            'sale_id', // Foreign key on the environments table...
            'sales_products_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

}
