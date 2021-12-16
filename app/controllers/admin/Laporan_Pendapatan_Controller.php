<?php 

require '../vendor/autoload.php';
use App\models\Order;
use Illuminate\Support\Carbon;

class Laporan_Pendapatan_Controller extends Controller{
  public function index()
  {
    $data = [
      'title' => 'Laporan Pendapatan',
      'pendapatan_hari_ini' => Order::where('satus', 'diantar')->where('created_at', '>=', Carbon)
    ];
    $this->view('laporan-pendapatan', $data, 'admin');
  }
}