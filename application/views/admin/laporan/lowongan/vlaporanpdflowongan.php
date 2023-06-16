<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      font-family: Arial, Helvetica, sans-serif;
    }

    tr:nth-child(even) {
      background-color: whitesmoke;
    }

    th {
      background-color: #000000;
      color: white;
    }

    p {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      font-size: 20px;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php foreach ($bkk as $p) : ?>


    <p> <strong> <?php echo $p->nama_bkk ?> </strong><br>
      <i> <?php echo $p->alamat_bkk ?> </i><br>
    </p>
  <?php endforeach; ?>
  <hr>
  <h2>Laporan Data Lowongan</h2>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Lowongan</th>
        <th>Judul Lowongan </th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Pendidikan</th>
        <th>Perusahaan</th>
        <th>Penempatan</th>
        <th>Tanggal Buka</th>
        <th>Tanggal Tutup</th>


      </tr>

    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($lowongan as $a) :  ?>
        <tr>
          <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
          <td><?php echo $a->kd_lowongan ?></td>
          <td><?php echo $a->nama_lowongan ?></td>
          <td><?php echo $a->desk_lowongan ?></td>
          <td><?php if ($a->acc_adminlowongan == 'belum') { ?>
              <span class="badge badge-primary">Belum</span>

            <?php } elseif ($a->acc_adminlowongan == 'acc') { ?>

              <span class="badge badge-success">ACC</span>
            <?php } else { ?>
              <span class="badge badge-danger">Banned</span>
            <?php } ?>

          </td>

          <td><?php echo $a->nama_pendidikan ?></td>
          <td class="float-right">
            <?php echo $a->nama_perush ?>
          </td>
          <td class="float-right">
            <?php echo $a->lokasi_penempatan ?>
          </td>
          <td class="float-right">
            <?php echo $this->Mglobal->tanggalindo($a->tgl_mulai) ?>
          </td>
          <td class="float-right">
            <?php echo $this->Mglobal->tanggalindo($a->tgl_selesai) ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <hr>

</body>

</html>