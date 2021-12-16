<?php 

require '../vendor/autoload.php';
use App\models\Order;

class Laporan_Pendapatan_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Laporan Pendapatan',
      'pendapatan_hari_ini' => Order::where('satus', 'diantar')->where('created_at', '>=', Carbon::now())
    ];
    $this->view('laporan-pendapatan', $data, 'admin');
  }
}