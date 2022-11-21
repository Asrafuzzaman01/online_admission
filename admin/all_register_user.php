<?php
include("includes/header.php");

?>





<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="show-entries">
                            <span>Show</span>
                            <select>
                                <option>5</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                            </select>
                            <span>entries</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-center text-info">ALL Registered User Data</h3>
                    </div>

                </div>
            </div>





            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select user_registration.* from user_registration";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $row['user_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['users_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['users_email']; ?>
                        </td>
                        <td>
                            <?php echo $row['users_phone']; ?>
                        </td>
                        <td>
                            <?php echo $row['users_password']; ?>
                        </td>


                        <td>
                            <a href=".php?id=<?php echo $row['user_id']; ?>" class=" view" title=" View"
                                data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                            <a href="edite.php?id=<?php echo $row['user_id']; ?>" class="edit" title="Edite"
                                data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                            <a href="delete.php?id=<?php echo $row['user_id']; ?>" class="delete" title="Delete"
                                data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>

                </tbody>
                <?php
                        }
                    }

                    ?>
            </table>

            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<?php
include("includes/footer.php");
?>