
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      <div class="x_title">
        <h2>Tambah Tagihan Baru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        


         

       <form class="form-horizontal form-label-left" novalidate>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Pembeli</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="name" required="required" type="text">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Tanggal Transaksi</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <table id="prod" class="table table-bordered">
          <thead>
            <tr>
              <th style="text-align: center">Obat yang dibeli</th>
              <th style="text-align: center">Stok</th>
              <th style="text-align: center">Unit obat</th>
              <th style="text-align: center">Harga satuan</th>
              <th style="text-align: center">Banyak</th>
              
              <th style="text-align: center">Totals</th>
              <th style="text-align: center">Aksi</th>
              
            </tr>
          </thead>
          
        <tfoot>
          <tr>
          <td style="text-align:right; vertical-align: middle" colspan="5"><b>Grand Total</b></td>
          <td>
            <input id="grandtotal" name="grandtotal" type="text" class="form-control grandtotal" readonly>
          </td>
        </tr>
        </tfoot>
        </table>
          

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_invoice') ?>"><button type="button" class="btn btn-dark">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
              <button id='addRow' class="btn btn-info" type="button"><span class="fa fa-plus"></span> Tambah Produk</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    

      

  </div>
</div>

 





