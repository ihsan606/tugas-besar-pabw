<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
  protected $guarded = ['id'];

  public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}