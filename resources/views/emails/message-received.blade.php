<!DOCTYPE html>
<html>
<head>
	<title>Contenido de mail</title>
</head>
<body>

<p>Recibiste un mensaje de {{$msg['name']}} - {{$msg['email']}}</p>
<strong>Asunto:</strong>{{$msg['subject']}}
<strong>Contenido: </strong>{{$msg['content']}}
</body>
</html>