<?php 

require '../vendor/autoload.php';

use App\models\Customer;
use App\models\Invoice;

class Daftar_Pesanan_Controller extends Controller{
  public function index()
  { 
    session_start();
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

  public function show(){
    $search = $_POST['search'];
     if($search){
      $customers_id = [];
      foreach(Customer::where('name', 'like', '%'.$search."%")->get() as $customer){
        array_push($customers_id, $customer->id); 
      }

      $data = [
      'title' => 'Daftar Pesanan',
      'invoices' => Invoice::with('orders.menu','orders.table','customer')->where('status_pesanan', 'dikonfirmasi')->whereIn('customer_id', $customers_id)->get(),
      'dikonfirmasi' => Invoice::where('status_pesanan', 'dikonfirmasi')->count(),
      'ditolak' => Invoice::where('status_pesanan', 'ditolak')->count(),
      'diantar' => Invoice::where('status_pesanan', 'diantar')->count(),
      'diterima' => Invoice::where('status_pesanan', 'diterima')->count(),
    ];
    $this->view('daftar-pesanan', $data, 'admin');
    }else{
      header('Location: ' . BASEURL . '/admin/daftar_pesanan');
    }
  }

  public function antar_pesanan($id){
    $invoice = Invoice::where('id', $id)->update([
      'status_pesanan' => 'diantar'
    ]);

    if($invoice){
      session_start();
      $_SESSION['alert'] = [
        'message' => "status pesanan berhasil diubah menjadi Diantar",
        'type' => 'success',
      ];
      header('Location: ' . BASEURL . '/admin/daftar_pesanan');
    }
  }

  public function tolak_pesanan($id){
    $invoice = Invoice::where('id', $id)->update([
      'status_pesanan' => 'ditolak'
    ]);

    if($invoice){
      session_start();
      $_SESSION['alert'] = [
        'message' => "status pesanan berhasil diubah menjadi Ditolak",
        'type' => 'success',
      ];
      header('Location: ' . BASEURL . '/admin/daftar_pesanan');
    }
  }
}