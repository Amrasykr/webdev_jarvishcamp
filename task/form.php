<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container mx-auto mt-5">
        <h1 class="mb-4">
            Form Add Product
        </h1>
        <form action="products.php" method="POST">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Product name</label>
                <div class="col-8">
                    <input id="name" name="name" placeholder="example : Mechanical Keyboard" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-4 col-form-label">Price</label>
                <div class="col-8">
                    <input id="price" name="price" placeholder="example : 180000" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <textarea id="description" name="description" cols="40" rows="4" class="form-control" required="required"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-4 col-form-label">Stock</label>
                <div class="col-8">
                    <input id="stock" name="stock" placeholder="example : 20" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>