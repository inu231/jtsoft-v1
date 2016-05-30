<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    <h1> Olá, JT Soft! </h1>

    <p> Você acaba de receber um e-mail. Confira os dados de quem o enviou </p>

    <table class="table">
        <tr>
             <th> Nome </th>
             <td> {{$data['name']}} </td>
        </tr>
        <tr>
             <th> Email </th>
             <td> {{$data['email']}} </td>
        </tr>
        <tr>
             <th> Mensagem </th>
             <td> {{$data['message']}} </td>
        </tr>
    </table>


</body>
</html>
