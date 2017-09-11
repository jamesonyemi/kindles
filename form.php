<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHPMailer Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<form method="post" enctype="multipart/form-data" action="insert.php" class="container">
   <div class="form-group row">
  <label for="example-text-input" class="col-10 col-form-label">Title</label>
  <div class="col-12">
    <input class="form-control" type="text" placeholder="Enter Title for Your Message"  name="subject">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-10 col-form-label">First Name</label>
  <div class="col-12">
    <input class="form-control" type="text" placeholder="Enter First name"  name="firstname">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-10 col-form-label">Last Name</label>
  <div class="col-12">
    <input class="form-control" type="text" placeholder="Enter Last name"  name="lastname">
  </div>
<div class="form-group row">
  <label for="example-search-input" class="col-10 col-form-label">Description</label>
  <div class="col-10">
  <textarea class="form-control" type="text" style="margin-top: 0px; margin-bottom: 0px; height: 384px; width: 1000px;"  name="description"></textarea>
  </div>
</div>

<div class="container">
<div class="row">

<div class="form-group row">
  <label for="example-email-input" class="col-12 col-form-label">Recipient Email</label>
  <div class="col-10">
    <input class="form-control" type="email" placeholder="Enter Email"  name="email" >
  </div>
</div>
</div>
</div>
<button type="submit"  name="save"  class="btn btn-danger">Save</button></div>
</form>