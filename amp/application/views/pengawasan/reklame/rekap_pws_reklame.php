<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Hasil Pengawasan Reklame</title>
</head>
<body>
    <div style="width: 100%; margin-left:-5px ; margin-right:-5px">
        <table width="100%">
            <tbody>
                <tr>
                    <td width="20%"></td>
                    <td style="text-align:center">
                        <img src="uploads/tabalong.png" alt="logo" width="90px" height="90px">
                    </td>
                    <td width="50%" style="text-align:center">
                        <p style="text-align:center; font-size:16px; line-height: 0.5em">PEMERINTAH KABUPATEN TABALONG</p>
                        <p style="text-align:center; font-size:22px; line-height: 1em"><b>BADAN PENDAPATAN DAERAH</b></p>
                        <p style="text-align:center; font-size:14px; line-height: 1em">Tanjung, Kec Tanjung , Kabupaten Tabalong, Kalimantan Selatan 71513</p>
                    </td>
                    <td width="20%"></td>
                </tr>
            <tbody>
        </table>
        <hr style="margin-top: -3px;">
        <p style="font-size:16px; line-height:70%"><b>REKAP PENGAWASAN PAJAK REKLAME
        <?php if ($hal=='izin') { ?>
        RESMI
        <?php } else if ($hal=='tdk_izin') { ?>
        TIDAK RESMI / TIDAK ADA IZIN
        <?php } else if ($hal=='tdk_bayar') { ?>
        TIDAK BAYAR
        <?php } ?>
        </b></p>
        <table border="1" cellspacing="0" cellpadding="2" width="100%" style="font-size: 12px">
            <tr style="background-color:#FCFDAF">
                <th>#</th>
                <th>No Pengawasan</th>
                <th>Tanggal</th>
                <th>NPWPD</th>
                <th>Nama WP</th>
                <th>Izin</th>
                <?php if($hal!='tdk_izin') {  ?>
                <th>Masa</th>
                <th>Tanggal Bayar</th>
                <?php } ?>
                <th>Jenis Reklame</th>
                <th>Ukuran</th>
                <th>Teks / Gambar</th>
                <th>Lokasi</th>
                <th>Status Tempat</th>
                <th>Status Pemasangan</th>
            </tr>
            <?php $no=1; 
            if($hal=='izin') {
            foreach($row->result() as $key => $data) { ?>
                <tr style="text-align:center">
                    <td><?= $no++?></td>
                    <td><?= $data->no_pws?></td>
                    <td><?= indo_date($data->tgl_pws)?></td>
                    <td><?= $data->npwpd?></td>
                    <td><?= ucwords($data->nama_wp)?></td>
                    <td><?= ucwords($data->izin)?></td>
                    <td><?= ucwords($data->masa)?></td>
                    <td><?= indo_date($data->tgl_bayar)?></td>
                    <td><?= ucwords($data->jenis)?></td>
                    <td><?= ucwords($data->ukuran)?></td>
                    <td><?= ucwords($data->teks)?></td>
                    <td><?= ucwords($data->lokasi)?></td>
                    <td><?= ucwords($data->status_tempat)?></td>
                    <td><?= ucwords($data->status_pasang)?></td>
                </tr>
            <?php } 
            } else if($hal=='tdk_izin') { 
            foreach($row->result() as $key => $data) { ?>
                <tr style="text-align:center">
                    <td><?= $no++?></td>
                    <td><?= $data->no_pws?></td>
                    <td><?= indo_date($data->tgl_pws)?></td>
                    <td><?= $data->npwpd?></td>
                    <td><?= ucwords($data->nama_wp)?></td>
                    <td><?= ucwords($data->izin)?></td>
                    <td><?= ucwords($data->jenis)?></td>
                    <td><?= ucwords($data->ukuran)?></td>
                    <td><?= ucwords($data->teks)?></td>
                    <td><?= ucwords($data->lokasi)?></td>
                    <td><?= ucwords($data->status_tempat)?></td>
                    <td><?= ucwords($data->status_pasang)?></td>
                </tr>
            <?php }
            } else if($hal=='tdk_bayar') { 
            foreach($row->result() as $key => $data) { ?>
                <tr style="text-align:center">
                    <td><?= $no++?></td>
                    <td><?= $data->no_pws?></td>
                    <td><?= indo_date($data->tgl_pws)?></td>
                    <td><?= $data->npwpd?></td>
                    <td><?= ucwords($data->nama_wp)?></td>
                    <td><?= ucwords($data->izin)?></td>
                    <td> - </td>
                    <td> BELUM BAYAR </td>
                    <td><?= ucwords($data->jenis)?></td>
                    <td><?= ucwords($data->ukuran)?></td>
                    <td><?= ucwords($data->teks)?></td>
                    <td><?= ucwords($data->lokasi)?></td>
                    <td><?= ucwords($data->status_tempat)?></td>
                    <td><?= ucwords($data->status_pasang)?></td>
                </tr>
            <?php }
            } ?>
        </table>
        <p style="text-align:right; font-size:12px"><i>Dicetak tanggal : <?=date('d-m-Y')?></i></p>
    </div>
    <div>
        <table width="100%" style="text-align:center">
            <tr>
                <td width="68%">
                </td>
                <td style="padding:30px">
                    <p>Tim Pemeriksa Pajak</p>
                    <p>Ketua</p>
                    <br><br><br>
                    <p><u>H. SUBHAN NOR YAUMIL ,SE, M.Si</u>
                    <b>NIP. 19710421 199803 1 009</b></p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>