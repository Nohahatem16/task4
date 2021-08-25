<!DOCTYPE html>
<html lang="en">
<head>
    
<title>upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form method="POST" action="index_page.php" enctype="multipart/form-data" class="w-50 border p-3 m-auto">
  <div class="form-group">
        <label for="">upload file</label>
        <input type="file" name="image" value=""  class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">image name</label>
        <input type="text" name="imgname" value="" class="form-control">
        </div>
        <button class="btn btn-danger" type="submit" name="upload">upload</button>
  </form>