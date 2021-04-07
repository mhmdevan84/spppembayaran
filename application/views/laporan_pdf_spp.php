<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>ID_SPP</th>
        <th>TAHUN</th>
        <th>NOMINAL</th>
      </tr>

      <?php
      $no= 1;
      foreach ($spp as $mhs): ?>

      <tr>
        <td><?php echo $mhs->id_spp ?></td>
        <td><?php echo $mhs->tahun ?></td>
        <td><?php echo $mhs->nominal ?></td>

      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>
