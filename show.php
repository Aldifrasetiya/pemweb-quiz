<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <h1>Data produk</h1>
  <table border="1" class="table">
    <thead>
      <a href="create.php" class="btn btn-primary m-2">tambah produk</a>
      <tr>
        <th>#</th>
        <th>Nama produk</th>
        <th>harga</th>
        <th>gambar produk</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require './config/db.php';

      $products = mysqli_query($db_connect, "SELECT * FROM products");
      $no = 1;

      while ($row = mysqli_fetch_assoc($products)) {
        ?>
        <tr>
          <td>
            <?= $no++; ?>
          </td>
          <td>
            <?= $row['name']; ?>
          </td>
          <td>
            <?= $row['price']; ?>
          </td>
          <!-- <td><img src="<?= $row['image']; ?>" width="100"></td> -->
          <td><a class="btn btn-primary" href="<?= $row['image']; ?>" target="_blank">unduh</a></td>
          <td>
            <a class="btn btn-warning" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
            <a class="btn btn-danger" href="backend/delete.php?id=<?= $row['id']; ?>">Hapus</a>

          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>

</html>