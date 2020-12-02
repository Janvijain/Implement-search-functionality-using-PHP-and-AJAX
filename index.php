<html>
<head>
	<title>Search Implement</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">

<style>
body {font-family:Arial, Sans-Serif;}
form{width: 300px; margin: 0 auto;}
input[type='text']{width: 200px; border-radius: 2px;border: 1px solid #CCC; padding: 10px; color: #333; font-size: 14px; margin-top: 10px;}
input[type='submit'],input[type='reset']{padding: 10px 25px 8px; color: #fff;background-color: #0067ab;}
.main{
border :1px solid black;
width: 600px;
padding: 50px;
margin: 20px;
margin-left: 480px;
}

.searchDropdown{
  background-color: #fff;
  max-height: 100px;
  min-height: 0px;
}

</style>
</head>
<body>
<nav class=" navbar navbar-expand-lg navbar navbar-light fixed-top" style="background-color: #00b1ff96;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <i class="fas fa-search" aria-hidden="true"></i>
          <input type="text" class="form-control mr-sm-2 search" class="ab" name="search" placeholder="search here..">
        <div class="mr-sm-2 offset-0 searchDropdown" style="overflow:auto;">
        </div>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>  
    </div>
  </nav><br><br><br>

  <div class="main offset-md-6" >
  <center>
   <form action="backend.php" method="POST" autocomplete="off">
     <div class="form-group row" style="display:flex;">
      <label for="title" class="col-sm-2 col-form-label"><b>Name</b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
      </div>
     </div><br>

     <div class="form-group row" style="display:flex;">
      <label for="author" class="col-sm-2 col-form-label"><b>Address </b></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Address" name="address">
      </div>
     </div><br>
     
     <div class="form-group row">
      <div class="col-md-6">
        <input name="submit" type="submit" class="btn btn-primary signupbutton offset-md-7" id="sign" placeholder="Signup">
      </div>
     </div><br>
   </form>
   </center>
  </div>

<script type="text/javascript" src="index.js"></script>
</body>
</html>