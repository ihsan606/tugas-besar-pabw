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
      'invoices' => Invoice::with('orders.menu','orders.table','customer')->get(),
      'pending' => Invoice::where('status_pembayaran', 'pending')->count(),
      'success' => Invoice::where('status_pembayaran', 'success')->count(),
      'expired' => Invoice::where('status_pembayaran', 'expired')->count(),
      'failed' => Invoice::where('status_pembayaran', 'failed')->count(),
    ];
    $this->view('daftar-pesanan', $data, 'admin');
  }
}