<?php 

require '../vendor/autoload.php';
use App\models\Invoice;
use Illuminate\Support\Carbon;

class Laporan_Pendapatan_Controller extends Controller{
  public function index()
  {
    session_start();
    $_SESSION;
    $data_perbulan = [];
    for($i = 1; $i < 13; $i++){
      array_push($data_perbulan, Invoice::where('status', 'success')->whereMonth('created_at', $i)->sum('grand_total'));
    }
    $data = [
      'title' => 'Laporan Pendapatan',
      'pendapatan_hari_ini' => money_format(Invoice::where('status', 'success')->where('created_at', '>=', Carbon::today())->sum('grand_total')),
      'pendapatan_minggu_ini' => money_format(Invoice::where('status', 'success')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('grand_total')),
      'pendapatan_bulan_ini' => money_format(Invoice::where('status', 'success')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('grand_total')),
      'pendapatan_tahun_ini' => money_format(Invoice::where('status', 'success')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->sum('grand_total')),
    ];
    $this->view('laporan-pendapatan', $data, 'admin');
  }
}