<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
</head>
<body>
<form method="POST" action="{{asset('mhs-update/'.Crypt::encrypt($mahasiswa->id))}}">
  <div align="center">
  <h1>Edit Datane Mahasiswa</h1>
  	<p>
  		Nama:
  		<input type="text" name="nama" value="{{$mahasiswa->nama}}">
  	</p>
  	<p>
  		Nim:
  		<input type="text" name="nim" value="{{$mahasiswa->nim}}">
  	</p>
  <br>
  		<button href="" <i style="padding-bottom: 10px " class="btn btn-succes">
  			Edit
  		</i>
  		</button>
  </div>

  <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
</form>
</body>
</html>