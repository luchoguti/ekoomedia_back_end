<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMenu extends Model
{
    use HasFactory;
    protected $table = 'items_menu';
    protected $fillable = [
      'description_item_menu'
    ];
    protected $primaryKey ="id_items_menu";
}
