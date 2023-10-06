
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <center>
    <h1>REGISTRATION FORM</h1>
</center>
<form action="" method="post" id="form" clas="form-group"> 
    <div class="container">
    <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID:</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" name="username"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone number:</label>
    <input type="phone number" class="form-control" name="phone_num"  aria-describedby="emailHelp">
  </div>  
  <input type="submit" class="btn btn-success" id="submit" name="submit">
  <br><br>
</form>
</div>
<div class="container">
<!-- <input type="submit" class="btn btn-primary" name="submit" id="btn" value="check" >
<br><br> -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PH_NO</th>
    </tr>
  </thead>
  <tbody id="tab">

  </tbody>
</table>
</div>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
    let table=$('#tab');
    // $('#btn').click(function(){
      function loadData(){
        $.ajax({
            url:'fetch.php',
            type:'POST',
            success:function(data){
                console.log(data)
                    table.html(data)
                }
                // loadData();
        })
    }
})
loadData();
$('#submit').click(function(){
  $ajax({
    url:'insert.php',
    type:'POST',
    data:$('#form input').serialize(),
    success:function(data){
      console.log(data);
      loadData();
    }
  })
})

</script>
</body>
</html>