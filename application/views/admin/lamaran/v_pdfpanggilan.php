<!DOCTYPE html>
<html>

<head>
    <title><?php echo $nama_surat; ?></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">

</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }


        .table-data tr td {
            border-bottom: 1px solid #ffffff;
            font-size: 10pt;
            padding: 8px;
            text-align: left;
            height: 8px;
        }

        li {
            font-size: 10pt;
            text-align: left;
        }

        p {
            font-size: 10pt;
            text-align: left;
        }

        .kalimat {
            font-size: 10pt;
            text-align: left;
        }
    </style>
    <?php foreach ($lamaran as $l) : ?>
        <img src="gambar/<?php echo $l->logo_perush ?>" style="position: absolute; width: 70px; height: auto;">
        <table style="width: 100%;">



            <tr>
                <td align="center">
                    <span style="line-height: 1.6; font-weight: bold;">
                        <?php echo strtoupper($l->nama_perush) ?> BEKERJA SAMA DENGAN <?php echo strtoupper($nama_bkk); ?><br>
                        Alamat Perusahaan <?php echo $l->alamatlengkap_perush ?> <br>

                    </span>
                    <span style="line-height: 1.6">

                    </span>

                </td>
            </tr>

        </table>
    <?php endforeach; ?>
    <hr>


    <?php foreach ($lamaran as $l) : ?>
        <div class="text-center font-weight-bold"><u><?php echo $nama_surat ?> </u></div>
        <div class="text-center">Nomor : <?php echo $l->kd_lamaran ?> / 025 / 2021 </div>

        <div class="mt-2 kalimat"> Menanggapi surat lamaran kerja saudara di BKK <?php echo $nama_bkk ?> untuk melamar posisi <?php echo $l->nama_lowongan ?> di perusahaan kami, dengan ini kami mengharapkan kedatangan Saudara pada :</div>


        <br />
        <table class="table-data" id="example3">

            <tbody>


                <tr>
                    <td>1. Tanggal</td>
                    <td>: <?php echo $this->Mglobal->tanggalindo($l->tgl_test) ?></td>
                </tr>
                <tr>
                    <td>2. Waktu</td>
                    <td>: <?php echo $l->jam_test ?></td>
                </tr>
                <tr>
                    <td>3. Tempat</td>
                    <td>: <?php echo $l->lokasi_test ?></td>
                </tr>

                <!-- <tr>
                    <td>5. Pekerjaan </td>
                    <td>: <?php echo $s->pekerjaan ?></td>
                </tr>
                <tr>
                    <td>6. Alamat Pemohon </td>
                    <td>: <?php echo $nama_bkk; ?>, RT <?php echo $s->nama_RT ?> RW <?php echo $s->nama_RW ?> Kecamatan Banyumas Kabupaten Banyumas</td>
                </tr>
                <tr>
                    <td>6. Surat Bukti Diri </td>
                    <td>: KTP No. <?php echo $s->NIK ?></td>
                </tr>
                <tr>
                    <td>7. Maksud Keramaian </td>
                    <td>: <?php echo $s->maksud_keramaian ?></td>
                </tr>
                <tr>
                    <td>8. Tanggal Penyelenggaraan </td>
                    <td>: <?php echo date('d F Y', strtotime($s->tanggal_keramaian)) ?> </td>
                </tr>
                <tr>
                    <td>9. Waktu Penyelenggaraan </td>
                    <td>: <?php echo $s->waktu_keramaian ?> </td>
                </tr>
                <tr>
                    <td>10. Jenis Hiburan </td>
                    <td>: <?php echo $s->hiburan_keramaian ?> </td>
                </tr>
                <tr>
                    <td>11. Jumlah Undangan </td>
                    <td>: <?php echo $s->jumlah_undangan ?> orang </td>
                </tr> -->

            </tbody>
        </table>
        <div class="mb-1 kalimat">Pada kesempatan ini pula, kami mengharapkan Saudara menyiapkan dan melengkapi :</div>
        <ol>
            <li>Ijazah.</li>
            <li>Transkrip nilai asli.</li>
            <li>Berpakaian formal.</li>
        </ol>
        <div class="mb-1 kalimat">Demikian surat panggilan ini dibuat. Atas Kehadiran Saudara, kami ucapakn terima kasih.</div>

        <table class="table-data" id="example3">
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td class="text-center"><?php echo $nama_bkk; ?>, </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-center">Manajer Personalia <?php echo $l->nama_perush; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-center"><?php echo $l->namapj_hrd; ?></td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
    <br />


</body>

</html>