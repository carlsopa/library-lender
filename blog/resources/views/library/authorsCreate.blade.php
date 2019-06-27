<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/authors">
		{{csrf_field()}}
		<input name="firstName" type="text" placeholder="first name"><br>
		<input name="lastName" type="text" placeholder="last name"><br>
		<button type="submit">submit author</button>
	</form>
</body>
</html>