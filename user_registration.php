<!DOCTYPE html>
<html>
<head>
  <title>Plasma Bank</title>
</head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;

    }
    </style>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Plasma Bank</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Login
          </a>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="customer_login.php">Customer</a>
            <a class="dropdown-item" href="donor_login.php">Donor</a>
            <a class="dropdown-item" href="admin_login.php">Admin</a>


           
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Register</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container" style="margin-bottom:200px;">
     
    <form action="action_page.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>

      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" class="form-control" placeholder="Enter contact" id="contact" name="contact">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" placeholder="Enter address" id="address" name="address">
      </div>

      <div class="form-group">
        <label for="nid">NID:</label>
        <input type="text" class="form-control" placeholder="Enter nid" id="nid" name="nid">
      </div>

       <div class="form-group">
        <label>User Type:</label>
            <select class="form-control" name="user_type">
            <option >--Select Group--</option>
            <option value="DONOR">Donor</option>
            <option value="CUSTOMER">Customer</option>
          </select>
      </div>

      <div class="form-group">
        <label>Blood Group:</label>
            <select class="form-control" name="blood_group">
            <option >--Select Group--</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
      </div>

        
         


      <button type="submit" class="btn btn-primary" name="btn-user_registration">Submit</button>
    </form>
  </div>
 





  <div class="footer">
    <p>Plasma Bank Copywrigth 2021</p>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>