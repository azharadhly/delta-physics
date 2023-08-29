<?php
require_once('../layouts/header.php');

?>
<?php
require_once('../../../config.php');

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,email,subject,message FROM contact ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Messages</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active"><a href="#">message</a></li>
                          <li class="breadcrumb-item active"><a href="#">List</a></li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content container">
          <div class="container-fluid">
              <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th style="width: 10px">#</th>
                                  <th>name</th>
                                  <th>email</th>
                                  <th>subject</th>
                                  <th>message</th>
  
  
                              </tr>
                          </thead>
                          <tbody>';
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] .  "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td> " . $row["message"] . "</td></tr>";
    }
    echo "</tbody>
  </table>
</div>
<!-- /.card-body -->
</div>
</div>
</section>

</div>";
} else {
    echo "0 results";
}

$conn->close();
require_once('../layouts/footer.php'); ?>
