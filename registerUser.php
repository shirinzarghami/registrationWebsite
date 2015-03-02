

<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="css/register.css" rel="stylesheet">

    <script type="text/JavaScript" src="javascript/jquery-1.11.1.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/registerUser.js"></script>
    <link rel="stylesheet" href="css/register.css">
  </head>
  <body>

    <div class="container">
      <div class="col-md-3 col-lg-4"></div>
      <div class="col-md-7 col-lg-4">
        <form>
          <div class="form-group">
            <label  for="groupName">group Name</label>
            <?php
            include 'createList.php';
            creatListgroup();
            ?>
            <br>

            <label  for="userName">user Name</label>
            <input type="text" id="userName" placeholder="userName" required> <br>

            <label  for="email">email</label>
         <input type="email" id="email" name="email" required><br>
          </div>
          <div class= "col-md-offset-2 col-lg-offset-3">
             <button type="submit" class="btn btn-primary" id="submitUser" value="submit">Submit</button>
             <button  type="reset" value="reset" class="btn btn-primary" id="reset-btn">Reset</button>
          </div>
          <div class="alert alert-success" id="success_alert" role="alert">
            <strong>Confirmation!</strong> You successfully add a group!.
          </div>
          <div class="alert alert-danger" id="warning_alert" role="alert">
           <strong>Sorry!</strong> Please try again!
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
