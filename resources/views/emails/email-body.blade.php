<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Aviso de firma avanzada</title>
</head>
<body>
<p>Hola! Su firma electrónica avanzada venció o está por vencer.</p>
<p>Estos son los datos de su firma:</p>
<ul>
    <li>Nombre completo: {{ $email->name }}</li>
    <li>Número de certificado: {{ $email->certificate_number }}</li>
    <li>Fecha de vencimiento: {{ $email->expiring_date }}</li>
</ul>

</body>
</html>
