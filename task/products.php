<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    $products = [
        ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
        ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
        ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
        ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
        ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $products[] = [
            "barang" => $_POST["name"],
            "Harga" => $_POST["price"],
            "Deskripsi" => $_POST["description"],
            "Stok" => $_POST["stock"]
        ];
    }


    ?>

    <div class="container mt-5 ">
        <h1 class="mb-5">
            Products
        </h1>
        <table class="table border">
            <thead class="border">
                <tr class="">
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product['barang']; ?></td>
                        <td>Rp.<?php echo $product['Harga']; ?></td>
                        <td><?php echo $product['Deskripsi']; ?></td>
                        <td><?php echo $product['Stok']; ?>pcs</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</body>

</html>