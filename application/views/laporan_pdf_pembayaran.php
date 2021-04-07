<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

    <table width="100%" border="1px">
      <tr>
        <th>No</th>
        <th>Id Pembayaran</th>
        <th>Id Petugas</th>
        <th>Nama Siswa</th>
        <th>NISN</th>
        <th>Tanggal</th>
         <th>Bulan</th> 
        <th>Tahun</th> 
        <th>Id SPP</th>
        <th>Nominal</th>
        <th>Opsi</td>
      </tr>

      <?php
      $no= 1;
      foreach ($pembayaran as $mhs): ?>

      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $value->id_pembayaran; ?></td>
        <td><?php echo $value->id_petugas; ?></td>
        <td><?php echo $value->nama_siswa; ?></td>
        <td><?php echo $value->nisn; ?></td>
        <td><?php echo $value->tgl_bayar; ?></td>
        <td><?php echo $value->bulan_dibayar; ?></td>
        <td><?php echo $value->tahun_dibayar; ?></td>
        <td><?php echo $value->id_spp; ?></td>
        <td><?php echo $value->nominal; ?></td>
      </tr>

    <?php endforeach; ?>
  </table>

  </body>
  </html>