<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_php_ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-centre">
            <div>
            <h4 class="text-primary">All users in the database!</h4>
            </div>
            <div>
                <button class="btn btn-primary">Add New user</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-resposive">
                <table class="table table-striped table-borderd text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First naem</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th>A</th>
                            <th>First naem</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>
                                <a href="#" class="btn btn-success btn-sm rounded-pill py-0">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm rounded-pill py-0">delet</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
</body>
</html>