<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Feedback</title>

    <link rel="stylesheet" href="css/assets/demo.css">
    <link rel="stylesheet" href="css/assets/form-labels-on-top.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">

    <style>
        .botao{
            display: inline-block;
            max-width: 180px;
            box-sizing: border-box;
            vertical-align: top;
            text-align: center;
            margin-top: 100px;

            color:  #ffffff;
            width: 56px;
            height: 40px;
            font-size: 18px;
            line-height: 40px;
            background-color: rgba(0, 154, 79, 0.9);
            box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
            border-radius: 2px;
            margin: 8px auto;
            text-decoration: none;
        }
    </style>

</head>


<div class="main-content">

    <!-- You only need this form and the form-labels-on-top.css -->

    <div class="form-labels-on-top">

        <div class="form-title-row">
            <h1>Feedback</h1>
        </div>

        <div class="form-row">
            <h3>Qual a nota que você avalia o evento?</h3>
            <a href="#" class="botao">1</a>
            <a href="#" class="botao">2</a>
            <a href="#" class="botao">3</a>
            <a href="#" class="botao">4</a>
            <a href="#" class="botao">5</a>


            <a href="{{route('rede-social.index')}}"><input style="color:#ffffff;font-size: 18px;" type="submit" class="btn btn-primary btn-block" value="Enviar"></a>

        </div>

    </div>

</div>

</body>

<script>
    $('#btn1').on('click', function () {
        $('#btn1').each(function () {
            $(this).addClass('active');
            $('#btn2').removeClass('active');
            $('#btn3').removeClass('active');
            $('#btn4').removeClass('active');
            $('#btn5').removeClass('active');


        })
    });
    $('#btn2').on('click', function () {
        $('#btn2').each(function () {
            $(this).addClass('active');
            $('#btn1').removeClass('active');
            $('#btn3').removeClass('active');
            $('#btn4').removeClass('active');
            $('#btn5').removeClass('active');
        })
    });
    $('#btn3').on('click', function () {
        $('#btn3').each(function () {
            $(this).addClass('active');
            $('#btn1').removeClass('active');
            $('#btn2').removeClass('active');
            $('#btn4').removeClass('active');
            $('#btn5').removeClass('active');
        })
    });
    $('#btn4').on('click', function () {
        $('#btn4').each(function () {
            $(this).addClass('active');
            $('#btn1').removeClass('active');
            $('#btn2').removeClass('active');
            $('#btn3').removeClass('active');
            $('#btn5').removeClass('active');
        })
    });
    $('#btn5').on('click', function () {
        $('#btn5').each(function () {
            $(this).addClass('active');
            $('#btn1').removeClass('active');
            $('#btn2').removeClass('active');
            $('#btn3').removeClass('active');
            $('#btn4').removeClass('active');
        })
    });
</script>

</html>



