<section class="content-header">
  <h1>
    Wajib Pajak
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Tipe_wp</li>
    <?php if ($this->uri->segment(2) == 'add') { ?>
        <li class="active">Add</li>
    <?php } else if ($this->uri->segment(2) == 'edit') { ?>
        <li class="active">Edit</li>
    <?php } ?>
  </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><b><?=ucfirst($page)?> Data</b></h3>
            <div class="pull-right">
                <a href="<?= site_url('tipe_wp')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php // echo validation_errors(); ?>
                <form action="<?=site_url('tipe_wp/proses')?>" method="post">
                    <div class="form-group">
                        <label for="jenis_tipe">Jenis</label>
                        <input type="hidden" name="tipe_id" value="<?=$row->tipe_id?>">
                        <input type="text" name="jenis_tipe" id="jenis_tipe" maxlength="50" value="<?=$row->jenis_tipe?>" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="ket_tipe">Tipe Wajib Pajak</label>
                        <select name="ket_tipe" class="form-control" id="ket_tipe" required>
                            <?php if ($this->uri->segment(2) == 'add') { ?>
                                <option value="">- Pilih -</option>
                                <option value="hotel"> HOTEL </option>
                                <option value="restoran"> RESTORAN </option>
                                <option value="hiburan"> HIBURAN </option>
                                <option value="raklame"> REKLAME </option>
                                <option value="penerangan jalan"> PENERANGAN JALAN </option>
                                <option value="parkir"> PARKIR </option>
                                <option value="sarang burung walet  "> SARANG BURUNG WALET </option>
                                <option value="air tanah"> AIR TANAH </option>

                            <?php } else if ($this->uri->segment(2) == 'edit') { ?>
                                <option value="hotel" <?=$row->ket_tipe == "hotel" ? "selected" : null?>> HOTEL </option>
                                <option value="restoran" <?=$row->ket_tipe == "restoran" ? "selected" : null?>> RESTORAN </option>
                                <option value="hiburan" <?=$row->ket_tipe == "hiburan" ? "selected" : null?>> HIBURAN </option>
                                <option value="raklame" <?=$row->ket_tipe == "raklame" ? "selected" : null?>> RAKLAME </option>
                                <option value="penerangan jalan" <?=$row->ket_tipe == "peneranagan jalan" ? "selected" : null?>> PENERANGAN JALAN </option>
                                <option value="parkir" <?=$row->ket_tipe == "parkir" ? "selected" : null?>> PARKIR </option>
                                <option value="sarang burung walet" <?=$row->ket_tipe == "sarang burung walet" ? "selected" : null?>> SARANG BURUNG WALET </option>
                                <option value="air tanah" <?=$row->ket_tipe == "air tanah" ? "selected" : null?>> AIR TANAH </option>
                                <option value="bumi dan bangunan" <?=$row->ket_tipe == "bumi dan bangunan" ? "selected" : null?>> BUMI DAN BANGUNAN </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pajak">Besaran Pajak (%)</label>
                        <input type="number" name="pajak" id="pajak" value="<?=$row->pajak?>" class="form-control" required maxlength="3">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Submit
                        </button>
                        <button type="reset" class="btn bg-red btn-flat">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>