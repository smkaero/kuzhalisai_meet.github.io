<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "index.css" type = "text/css">
  
</head>

<body>


<h1>Singer Song List</h1>
	<form>
		<label for="msinger">Select Male singer:</label>
		<select id="msinger">
			<option value="Adele">Adele</option>
			<option value="Ed Sheeran">Ed Sheeran</option>
			<option value="Taylor Swift">Taylor Swift</option>
		</select>
		<label for="fsinger">Select Female singer:</label>
		<select id="fsinger">
			<option value="Adele">Adele</option>
			<option value="Ed Sheeran">Ed Sheeran</option>
			<option value="Taylor Swift">Taylor Swift</option>
		</select>
		<label for="song">Enter a Song:</label>
		<input type="text" id="song">
		<button type="button" onclick="addSong()">Add Song</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>Serial No.</th>
				<th>Male Singer</th>
				<th>Female Singer</th>
				<th>Song</th>
				<th></th>
			</tr>
		</thead>
		<tbody id="songList">
		</tbody>
	</table>
	<script src="index.js"></script>

</body>



</html>