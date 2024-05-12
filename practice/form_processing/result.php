<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Result
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1>
            Result
        </h1>
        <div class="row">
            <div class="col-4">
                <h3>
                    Name
                </h3>
            </div>
            <div class="col-8">
                <h3>
                    <?php echo $_POST['name']; ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h3>
                    Major
                </h3>
            </div>
            <div class="col-8">
                <h3>
                    <?php echo $_POST['major']; ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h3>
                    Age
                </h3>
            </div>
            <div class="col-8">
                <h3>
                    <?php echo $_POST['age']; ?>
                </h3>
            </div>
        </div>
    </div>
</body>

</html>