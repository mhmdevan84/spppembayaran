<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>ID_KELAS</th>
        <th>ALAMAT</th>
        <th>NO_TELP</th>
        <th>ID_SPP</th>
      </tr>

      <?php
      $no= 1;
      foreach ($siswa as $mhs): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->nisn ?></td>
        <td><?php echo $mhs->nis ?></td>
        <td><?php echo $mhs->nama ?></td>
        <td><?php echo $mhs->id_kelas ?></td>
        <td><?php echo $mhs->alamat ?></td>
        <td><?php echo $mhs->no_telp ?></td>
        <td><?php echo $mhs->id_spp ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
