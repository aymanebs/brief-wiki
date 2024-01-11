<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="/brief-wiki/app/routes/../../public/css/dash-style.css" />

    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">wiki</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Wikis</a>

                <a href="dashboard-users" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user me-2"></i>Users</a>

                <a href="dashboard-categories" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-layer-group me-2"></i>Categories</a>

                <a href="dashboard-tags" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tag me-2"></i>Tags</a>

                        <a href="statistics" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-chart-bar me-2"></i>Statistics</a>
                        
                <a href="logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
<!-- 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Wikis</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Users</p>
                            </div>
                            <i
                                class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Categories</p>
                            </div>
                            <i class="fas fa-layer-group fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"></h3>
                                <p class="fs-5">Tags</p>
                            </div>
                            <i class="fas fa-tag fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <!-- table starts -->

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Categories list </h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>


                                <tr>
                                    <th scope="col" width="50">id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($categories as $category) { ?>

                                <tr>
                                    <td scope="row"><?php echo $category['id'] ?></td>
                                    <td><?php echo $category['title'] ?></td>
                                    <td><?php echo $category['submissionDate'] ?></td>
                                    <td>
                                    <a href="#editCategoryModal<?php echo $category['id']; ?>" class="editCategory" data-id="<?php echo $category['id'] ?>" data-status="<?php echo $category['title']; ?>" data-toggle="modal">
                                    <i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
            <a href='deleteCategory?id=<?php echo $category['id']?>'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
            <!-- <a href="Delete?user_id=${row.id}" class="btn btn-danger">Delete</a> -->
        </td>
                                </tr>

                              <?php  }
                              ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!-- table ends -->


    <!-- Bootstrap Modal -->
<?php foreach ($categories as $category) { ?>

<div class="modal fade" id="editCategoryModal<?php echo $category['id']?>" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="editCategoryModalLabel">Edit Category Title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- Form for editing category title -->
            <form action="editTitle" method="POST">
               <input type="hidden" name="id" value="<?php echo ($category['id'])  ?>">
               <div class="form-group">
                  <label for="editCategoryTitle">Title:</label>

                  <input type="text" name="title" id="editCategoryTitle" value="<?php echo $category['title'] ?>">



               </div>
               <button type="submit" class="btn btn-primary mt-2">Save changes</button>
            </form>
         </div>
      </div>
   </div>
</div>
<?php  }
                              ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>

<tr>
                        