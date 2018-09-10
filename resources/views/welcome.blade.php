<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QR Code</title>

    <link rel="stylesheet" href="css/assets/demo.css">
    <link rel="stylesheet" href="css/assets/form-basic.css">

    <style>
        .center{
            display: flex;
            margin-left: 25%;
            margin-right: 25%;
            width: 50%;
        }
    </style>

</head>


<div class="main-content">

    <!-- You only need this form and the form-basic.css -->

    <form class="form-basic" method="post" action="#">

        <div class="form-title-row">
            <h1>Visite nossa pesquisa</h1>
        </div>

        <div class="form-row">
            <div class="center">
                {!! QrCode::size(300)->generate($url); !!}
            </div>
        </div>

    </form>

</div>

</body>

</html>
