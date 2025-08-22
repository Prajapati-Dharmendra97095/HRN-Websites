<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HRN Tech Solution</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Lato', sans-serif;
      /* background: #f4f4f4; */
      background: transparent;
      background-color: rgba(255, 255, 255, 0.5);
    }
    .checkout-container {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }
    h3 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
    }
    label {
      font-weight: 600;
      margin-top: 10px;
    }
    .btn {
      width: 100%;
      background: #007bff;
      color: #fff;
      font-size: 18px;
      margin-top: 20px;
    }
    .btn:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
    
  <div class="checkout-container">
    <h3>Registration Form</h3>

    <form action="submit" method="post">
      
      <!-- Full Name -->
      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
      <input type="text" id="fname" name="name" class="form-control" placeholder="Enter Name" required>
      
      <!-- Email -->
      <label for="email"><i class="fa fa-envelope"></i> Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email id" required>

      <!-- Mobile -->
      <label for="mobile"><i class="fa fa-mobile"></i> Mobile</label>
      <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" required>
        
      <!-- City -->
      <label for="city"><i class="fa fa-city"></i> City</label>
      <input type="text" id="city" name="city" class="form-control" placeholder="City" required>

      <!-- Submit -->
      <input type="submit" value="Submit Now" class="btn">
    </form>
  </div>

  <!-- Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

  <script>
     
  </script>
</body>
</html>





<!-- Button to Open Popup -->
<button id="openPopup">Open Popup</button>

<!-- Popup -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span id="closePopup" class="close">&times;</span>
    <h2>Welcome to HRN Tech Solution</h2>
    <p>This is a popup example using HTML, CSS, and JavaScript.</p>
  </div>
</div>
