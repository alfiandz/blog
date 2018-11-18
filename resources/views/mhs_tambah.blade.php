<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
<form method="POST" action="{{url('mhs-save')}}">
  <div align="center">
  <h1>Tambah Mahasiswa</h1>
  	<p>
  		Nama:
  		<input type="text" name="nama">
  	</p>
  	<p>
  		Nim:
  		<input type="text" name="nim">
  	</p>
  <br>
  		<input type="submit" value="Tambah">
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
</form>
</body>
</html>