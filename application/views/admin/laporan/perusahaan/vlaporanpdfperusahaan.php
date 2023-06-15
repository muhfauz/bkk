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
  <h2>Laporan Data Perusahaan</h2>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Perusahaan</th>
        <th>Nama Perusahaan</th>
        <th>Deskripsi Perusahaan</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>Telepon</th>


      </tr>

    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($perusahaan as $a) :  ?>
        <tr>
          <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
          <td><?php echo $a->kd_perush ?></td>
          <td><?php echo $a->nama_perush ?></td>
          <td><?php echo $a->desk_perush ?></td>
          <td><?php if ($a->acc_admin == 'belum') { ?>
              <span class="badge badge-primary">Belum</span>

            <?php } elseif ($a->acc_admin == 'acc') { ?>

              <span class="badge badge-success">ACC</span>
            <?php } else { ?>
              <span class="badge badge-danger">Banned</span>
            <?php } ?>

          </td>
          <td><?php echo $a->alamatlengkap_perush ?></td>
          <td><?php echo $a->notel_perush ?></td>

        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <hr>

</body>

</html>