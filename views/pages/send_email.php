<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHPMailer Upload</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->

</head>
<body class="container">
<?php if (empty($msg)) { ?>
<div class="row">
<div class="jumbotron">
 <div class="container">
<form method="post" enctype="multipart/form-data" action="">
   <div class="form-group row">
  <label for="example-text-input" class="col-10 col-form-label">Title</label>
  <div class="col-12">
    <input class="form-control" type="text" placeholder="Enter Subject of the Message"  name="subject" required="yes">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-10 col-form-label">Description</label>
  <div class="col-12">
  <textarea class="form-control" type="text" style="margin-top: 0px; margin-bottom: 0px; height: 384px;" value="" id="description" name="description"></textarea>
  </div>
</div>

<div class="container">
<div class="row">

<div class="form-group row">
  <label for="example-email-input" class="col-12 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" placeholder="Enter Email" id="email" name="email" required="yes">
  </div>
</div>

<div class="row">
<div class="form-group row">
<label for="example-datetime-local-input" class="col-10 col-form-label">Start Date</label>
    <div style="margin-left: 14px;" class="row"><input class="form-control col-11"  value="<?=gmdate("d") ?>" name="date"></div>
<div class="col-3">
    <select class="form-control" id="month" name="month">
      <option name="month" value="01">January</option>
      <option name="month" value="02">February</option>
      <option name="month" value="03">March</option>
      <option name="month" value="04">April</option>
      <option name="month" value="05">May</option>
      <option name="month" value="06">June</option>
      <option name="month" value="07">Junly</option>
      <option name="month" value="08">August</option>
      <option name="month" value="09">September</option>
      <option name="month" value="10">October</option>
      <option name="month" value="11">November</option>
      <option name="month" value="12">December</option>
    </select></div>
    <div><input class="form-control col col-md-4"  value="<?=gmdate("Y") ?>"  name="year"></div>
  </div>

</div>
</div>
</div>
</div>

<div class="form-group row col-10">
    <label for="example-datetime-local-input"  class="col-10 col-form-label">File Attachment</label>
    <div class="col-10">
     <input type="hidden" name="MAX_FILE_SIZE" value="100000"> 
     <input name="userfile" type="file"> 
    </div>
    </div>
<label for="example-datetime-local-input"  class="col-10 col-form-label">Watchers</label>
<div class="row container" style="font-size: 1em;">
<div class="form-check form-check-inline col-10">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n".'James Doe' ?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Steve Way'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n".'Jeffrey SWay' ?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Cornified Bonny'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Terry Slay'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Peter Teddy'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Jones Teddy'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Henry Bills'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Toddy Teddy'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Kim Perry'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Unicorn Hermon'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Scense Kitty'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Apengiwa Yaloma'?>
  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="watchers" value=""><?= "\n". 'Peter Packer'?>
  </label>
</div>
</div>
<br>
<div class="col-10"><button type="submit" value="Cancel"  name="Cancel" class="btn btn-default">Cancel</button>
    <button type="submit"  name="save" value="Send File" class="btn btn-danger">Save</button></div>
    
</form>
</div>
</div>
</div>


<?php } else {
    echo $msg;
} ?>
</body>
</html>