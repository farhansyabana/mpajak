<section class="content-header">
  <h1>
    Home
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i></a></li>
  </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <img src="<?=base_url()?>uploads/bb.jpg" style="margin-left:auto;margin-right:auto;border-radius:6%;height:400px;width:100%">
            <p style="text-align:center;font-size:24px;margin-top: 16px;"><b>BADAN PENDAPATAN DAERAH TABALONG</b></p>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Wajib Pajak</span>
                <span class="info-box-number"><?=$this->fungsi->count_wp()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-maroon"><i class="fa fa-bed"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Hotel</span>
                <span class="info-box-number"><?=$this->fungsi->count_hotel()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-cutlery"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Restoran</span>
                <span class="info-box-number"><?=$this->fungsi->count_restoran()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-music"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Hiburan</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
         <!-- /.isi Dari Bawah sini V-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-address-card" aria-hidden="true"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Raklame</span> <!-- /.ganti - -->
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span><!-- /.hiburan ganti-->
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Penerangan Jalan</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Parkir</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-grey"><img  src="/amp/assets/icon-sarang-walet.svg" style="padding: 25px;" alt=""></span>

            <div class="info-box-content">
                <span class="info-box-text">Sarang burung Walet</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="fa fa-area-chart" aria-hidden="true"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Air Tanah</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-home"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Bumi dan Bangunan</span>
                <span class="info-box-number"><?=$this->fungsi->count_hiburan()?></span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
</section>