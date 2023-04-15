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
      background-color: #7FFFD4
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
  <?php foreach ($perush as $p) : ?>


    <p> <strong> <?php echo $p->nama_perush ?> </strong><br>
      <i> <?php echo $p->alamat_perush ?> </i><br>
    </p>
  <?php endforeach; ?>
  <hr>
  <h2>Laporan Data kategori</h2>

  <table>
    <tr>
      <th>Nomor</th>
      <th>Nama kategori</th>
      <th>Username</th>
    </tr>
    <?php $no = 0;
    foreach ($kategori as $a) : $no++; ?>


      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $a->kd_kategori ?></td>
        <td><?php echo $a->nama_kategori ?></td>
      </tr>
    <?php endforeach; ?>

  </table>
  <hr>
</body>

</html>