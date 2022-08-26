<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $id;
    public $address;
    public $phone;
    public $order_points;

    public function __construct($id){
        $this->id = $id;
    }
}
