<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="btnStyle.css" rel="btnStyle">
    <link href="UserAccount.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Application
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="system.php">System</a></li>
            <li><a class="dropdown-item" href="UserAccount.php">UserAccount</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\plusicon.png" height="25" width="25"></button>
        </a>
        </th>
      <th scope="col">Name</th>
      <th scope="col">Tel</th>
      <th scope="col">ProductName</th>
      <th scope="col">Price</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>012645865</td>
      <td>Asus Strix</td>
      <td>1299$</td>
      <td></td>
      <td>
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\edit.ico" height="25" width="25"></button>
        </a>
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\delete.png" height="25" width="25"></button>
        </a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Carl</td>
      <td>018645685</td>
      <td>Logitech Superlight</td>
      <td>129$</td>
      <td></td>
      <td>
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\edit.ico" height="25" width="25"></button>
        </a>
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\delete.png" height="25" width="25"></button>
        </a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jackson</td>
      <td>097649445</td>
      <td>Viper Pro</td>
      <td>100$</td>
      <td></td>
      <td>
        <a href="#">
          <button type="button" class="btnStyle"><img src="\WBD\img\edit.ico" height="25" width="25"></button>
        </a>
        <a href="#" on>
          <button type="button" class="btnStyle" ><img src="\WBD\img\delete.png" height="25" width="25"></button>
        </a>
      </td>
    </tr>

  </tbody>
</table>
  </div>
</div>
<style>
  .btnStyle{
    padding: 0;
    border: none;
    background: none;
    width: 30px;
    height: 30px;
    
  }
  .btnStyle > button:hover.btnStyle{
    background: red;
  }
</style>

</body>
</html>