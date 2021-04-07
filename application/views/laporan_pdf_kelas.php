<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>ID_KELAS</th>
        <th>NAMA_KELAS</th>
        <th>KOMPETENSI_KEAHLIAN</th>
      </tr>

      <?php
      $no= 1;
      foreach ($kelas as $mhs): ?>

      <tr>
        <td><?php echo $mhs->id_kelas ?></td>
        <td><?php echo $mhs->nama_kelas ?></td>
        <td><?php echo $mhs->kompetensi_keahlian ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
