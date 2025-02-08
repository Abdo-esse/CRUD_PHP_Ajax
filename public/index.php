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
 <!-- Add New User Modal -->
<div class="modal fade" id="addNewUserModal" tabindex="-1" aria-labelledby="addNewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm" class="p-2" novalidate>
                    <div class="row mb-3 gx-3">
                       <div class="col">
                          <input type="text" name="firstName" id="firstName" class="form-control form-control-lg" placeholder="Enter First Name" required>
                          <div class="invalid-feedback">First name is required!</div>
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" id="lastName" class="form-control form-control-lg" placeholder="Enter Last Name" required>
                            <div class="invalid-feedback">Last name is required!</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter email" required >
                        <div class="invalid-feedback">email is required!</div>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" id="phone" class="form-control form-control-lg" placeholder="Enter phone" required >
                        <div class="invalid-feedback">phone is required!</div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Add User" class="btn btn-primary btn-block btn-lg" id="addUserBtn" >

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
     <!--Add new usr modal end  -->
   <div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-centre">
            <div>
            <h4 class="text-primary">All users in the database!</h4>
            </div>
            <div>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addNewUserModal">
        Add New User
    </button>
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


   <script src="./main.js"></script>
</body>
</html>