<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Nama Lengkap</th>
      </tr>

      <?php
      $no= 1;
      foreach ($petugas as $mhs): ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $mhs->username ?></td>
        <td><?php echo $mhs->nama_petugas ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
