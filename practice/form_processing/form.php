<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </style>
</head>

<body>

    <div class="container full-height border mt-5">
        <h1>
            Form
        </h1>
        <form action="result.php" method="POST">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                        </div>
                        <input id="name" name="name" placeholder="example : Jhon Doe" type="text" class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="major" class="col-4 col-form-label">Major</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-drivers-license"></i>
                            </div>
                        </div>
                        <input id="major" name="major" placeholder="example : Informatic Engineering" type="text" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-4 col-form-label">Age</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bookmark"></i>
                            </div>
                        </div>
                        <input id="age" name="age" placeholder="example : 20" type="text" class="form-control" required="required">
                    </div>
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