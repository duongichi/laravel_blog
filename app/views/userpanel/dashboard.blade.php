<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER LOGIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="maincontent">
        <h1>{{ Confide::user()->username }}</h1>
        <div class="well">
            <b>email:</b> {{ Confide::user()->email }}
        </div>
     </div>
</body>
</html>