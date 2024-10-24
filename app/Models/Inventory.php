<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'quantity_in', 'quantity_out', 'date_updated'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
