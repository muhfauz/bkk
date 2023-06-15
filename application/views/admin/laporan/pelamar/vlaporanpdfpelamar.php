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
  <h2>Laporan Data Pelamar</h2>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Pelamar</th>
        <th>Nama </th>
        <th>Tempat, Tanggal Lahir</th>
        <th>No KTP</th>
        <th>Alamat</th>
        <th>Telepon</th>


      </tr>

    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($pelamar as $a) :  ?>
        <tr>
          <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
          <td><?php echo $a->kd_pelamar ?></td>
          <td><?php echo $a->nama_pelamar ?></td>
          <td><?php echo $a->tempatlahir_pelamar . ', ' . $a->tanggallahir_pelamar ?>

          </td>
          <td><?php echo $a->noktp_pelamar ?></td>
          <td><?php echo $a->alamatlengkap_pelamar ?></td>
          <td><?php echo $a->nohp_pelamar ?></td>

        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <hr>

</body>

</html>