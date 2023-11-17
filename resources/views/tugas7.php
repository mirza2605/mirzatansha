<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 7</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h1>Tugas 7</h1>
<div class="container">
<form action="mahasiswa/simpan" method="post">
  <div class="form-group">
    <div class="row text-center">
      <div class="col-sm-6">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="col-sm-6">
        <label>NPM</label>
        <input type="number" class="form-control " name="npm">
      </div>
    </div>
      <div class="row text-center">
        <div class="col-sm-6">
          <label>Kelas</label>
          <select class="form-select" name="kelas">
          <option value="1">A</option>  
          <option value="2">B</option>
          <option value="3">C</option>
          <option value="4">D</option>
          </select> 
        </div>
        <div class="col-sm-6">
          <Label>Tanggal Lahir</Label>
          <input type="date" name="TL">
        </div> 
      </div>
  </div>


</form>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>