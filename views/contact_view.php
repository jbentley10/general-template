<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>{{ productName }}</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    </head>
   <body style="background:#fff;">
      <div> <!-- <img src="img/logo.png">  --></div>
      <h1 style="height:40px;line-height:40px;background:#333;color:white;margin:0;padding:0 10px;font-size:26px;">Customer Support</h1>
      <div style="border:4px solid #333;padding:10px;background:#f9f9f9;"> <strong>Customer Support</strong><br/>  <strong>Address</strong><br/>{{ corpName }}<br>    Corp Address: {{ corpAddress }}<br><br>    Return Address: {{ returnAddress }} <br>    Phone: {{ corpPhone }}<br/>    Support Email: <a href="mailto:{{ corpEmail }}" style="color:#000;">{{ corpEmail }}</a> <br> Support Hours: {{ corpHours }}</div>
   </body>
</html>
