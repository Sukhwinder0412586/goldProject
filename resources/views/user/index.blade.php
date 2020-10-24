<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
   <div class="container mt -5 col-6 mx-auto pt-5">
   <form method="post" action="/payment">
   {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Amount</label>
    <input type="number" name="amount" class="form-control" placeholder="Enter amount">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>

