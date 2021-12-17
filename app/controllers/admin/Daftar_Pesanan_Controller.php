<?php 

require '../vendor/autoload.php';
use App\models\Invoice;
use App\models\Order;
use Illuminate\Support\Carbon;

class Daftar_Pesanan_Controller extends Controller{
  public function index()
  { 
    $data = [
      'title' => 'Daftar Pesanan',
      'invoices' => Invoice::with('customer')->get(),
      'pending' => Invoice::where('status', 'pending')->count(),
      'orders' => Invoice::with('orders.menu', 'orders.table', 'customer')->get(),
      'success' => Invoice::where('status', 'success')->count(),
      'expired' => Invoice::where('status', 'expired')->count(),
      'failed' => Invoice::where('status', 'failed')->count(),
    ];
    $this->view('daftar-pesanan', $data, 'admin');
  }
}