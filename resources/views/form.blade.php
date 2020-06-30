<html>
<head> 
<title>Form Sign Up</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2> Sign Up Form </h2>

<form action="/sapa" method="POST" >
{{ csrf_field() }}
<label>First name:</label>
<br><br>
<input type="text" name="nama_awal">
<br><br>

<label>Last name:</label>
<br><br>
<input type="text" name="nama_akhir">
<br><br>

<label>Gender:</label>
<br><br>
<label><input type="radio" name="jenis_kelamin" value:
="laki_laki" />Male</label><br>

<label><input type="radio" name="jenis_kelamin" value:
="perempuan" />Female</label><br>

<label><input type="radio" name="jenis_kelamin" value:
="lainnya" />Other</label>

<br><br>
<label>Nationality:</label>
<br><br>
<select name="kebangsaan">

<option value="indonesian">Indonesian </option>

<option value="korean">Korea</option>

<option value="japanese">Japan</option>
</select>
<br><br>

<label>Language Spoken:</label>
<br><br>
<label><input type="checkbox" name="bahasa" value="Indonesia"/>Bahasa Indonesia</label><br>

<label><input type="checkbox" name="bahasa" value="English"/>English</label><br>

<label><input type="checkbox" name="bahasa" value="Lainnya"/>Other</label>
<br><br>

<label>Bio:</label><br>
<textarea name="bio" cols="20" rows="5"></textarea>
<br>
<input type="submit" name="submit" value="Sign Up"/>


</form>
</body>

</html>
