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
      'invoices' => Invoice::with('orders.menu','orders.table','customer')->where('status_pesanan', 'dikonfirmasi')->get(),
      'dikonfirmasi' => Invoice::where('status_pesanan', 'dikonfirmasi')->count(),
      'ditolak' => Invoice::where('status_pesanan', 'ditolak')->count(),
      'diantar' => Invoice::where('status_pesanan', 'diantar')->count(),
      'diterima' => Invoice::where('status_pesanan', 'diterima')->count(),
    ];
    $this->view('daftar-pesanan', $data, 'admin');
  }

  public function antar_pesanan($id){
    $invoice = Invoice::where('id', $id)->update([
      'status_pesanan' => 'diantar'
    ]);

    if($invoice){
      header('Location: ' . BASEURL . '/admin/daftar_pesanan');
    }
  }

  public function tolak_pesanan($id){
    $invoice = Invoice::where('id', $id)->update([
      'status_pesanan' => 'ditolak'
    ]);

    if($invoice){
      header('Location: ' . BASEURL . '/admin/daftar_pesanan');
    }
  }
}