<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbdepreciation";
    $port = 3306;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname, $port);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }
?>

<?php include "header.php" ?>

<div class="container">
  <div class="row">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">
      <a>
          <button type="button" class="btn btn-primary">Add</button>
      </a>
      </th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Admin</td>
      <td>****</td>
      <td>NA</td>
      <td>
        <a href="#">
          <button type="button" class="btn btn-primary">Edit</button>
        </a>
        <a href="#">
          <button type="button" class="btn btn-danger">Del</button>
        </a>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>SuperAdmin</td>
      <td>****</td>
      <td>NA</td>
      <td>
      <a href="#">
          <button type="button" class="btn btn-primary">Edit</button>
        </a>
        <a href="#">
          <button type="button" class="btn btn-danger">Del</button>
        </a>
      </td>
    </tr>

  </tbody>
</table>
  </div>
</div>

<?php include "footer.php" ?>
