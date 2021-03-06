<!-- detil modal Barang -->
<?php foreach($detilPesan as $data) { ?>
<div class="modal fade" tabindex="-1" id="detilPesanModal<?php echo $data->idpesan ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel"><span class="glyphicon glyphicon-envelope"></span> Pesan</h3>
      </div>
      <div class="modal-body">

          <form method="POST" action="" enctype="multipart/form-data">
          <table class="table table-striped" border="0">
            <tbody>
              <tr>
                <td width="150px">Nama Pengirim</td>
                <td>:</td>
                <td style="text-transform:capitalize;"><?php echo $data->nama ?></td>
              </tr>
              <tr>
                <td>Jenis Pesan</td>
                <td>:</td>
                <td style="text-transform:capitalize;"><?php echo $data->jenispesan ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>:</td>
                <?php if($data->status == "Submitted") {?>
                <td style="text-transform:capitalize;"><span class="label label-primary"><?php echo $data->status;?></span>
                <?php } if($data->status == "On Process") { ?>
                <td style="text-transform:capitalize;"><span class="label label-danger"><?php echo $data->status;?></span>
                <?php } if($data->status == "Solved") { ?>
                <td style="text-transform:capitalize;"><span class="label label-success"><?php echo $data->status;?></span>
                <?php } ?>
              </td>
              </tr>
              </tbody>
            </table>

              <hr>
            <h4><center>History Chat<center></h4>
              <hr>
                  <div class="container-fluid" style="margin-top: 20px">
                    <table class="table table-striped" border="0">
                    <tbody>
                      <tr style="text-transform:capitalize;">
                        <td><?php echo $data->isi ?></td>
                    </tr>
                    <?php $isi = $this->M_Inbox->getPesanCustomer($data->idpesan); ?>
                    <?php foreach($isi as $data2) { ?>
                    <tr style="text-transform:capitalize;">
                      <td><?php echo $data2->pesancustomer ?></td>
                    </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  </div>
          </form>   
         </div>
      </div>
    </div>
  </div>
  <!-- /.Detil modal Barang -->
  <?php } ?>