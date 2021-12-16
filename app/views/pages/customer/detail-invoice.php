
 <div class="card border-0 rounded shadow">
            <div class="card-body">
              <h5><i class="fa fa-shopping-cart"></i> DETAIL ORDER</h5>
              <hr>
              <table class="table table-bordered">
                <client-only>
                  <tr>
                    <td style="width: 25%">
                      NO. INVOICE 
                    </td>
                    <td style="width: 1%">:</td>
                    <td>
                    <?= $data['invoices']->invoice; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      NAMA
                    </td>
                    <td>:</td>
                    <td>
                    <?= $data['invoices']->customer->name; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      GRAND TOTAL
                    </td>
                    <td>:</td>
                    <td>
                      <?= money_format($data['invoices']->grand_total); ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      STATUS
                    </td>
                    <td>:</td>
                    <td>
                      <button @click="payment(invoice.snap_token)" v-if="invoice.status == 'pending'"
                        class="btn btn-info">BAYAR SEKARANG</button>
                      <button v-else-if="invoice.status == 'success'"
                        class="btn btn-success"><i class="fa fa-check-circle"></i> {{ invoice.status }}</button>
                      <button v-else-if="invoice.status == 'expired'"
                        class="btn btn-warning-2"><i class="fa fa-exclamation-triangle"></i> {{ invoice.status }}</button>
                      <button v-else-if="invoice.status == 'failed'"
                        class="btn btn-danger"><i class="fa fa-times-circle"></i> {{ invoice.status }}</button>
                    </td>
                  </tr>
                </client-only>
              </table>

            </div>
          </div>
<p><?= $data['invoices']; ?></p>
<h1><?= $data['invoices']->snap_token; ?></h1>

<button class="btn btn-warning"id="pay-button" onclick="openSnap()">Pay!</button>
<script type="text/javascript">
    function getURL() {
        url = window.location.href;
        const url_arr = url.split("/");
        snap_token = url_arr[8];
        return snap_token;
    }

    function openSnap(){
        $snap_token = getURL();
        window.snap.pay($snap_token);
    }
    </script>
   
</script>
