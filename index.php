<!DOCTYPE HTML>
<html>
<head>
<title>Tabuada PHP</title>
<meta charset="utf-8" />

<link href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-+UEyBtcMUzEVPU/VzsSuQxSAdP59Rg8OU5jCsE89v4bKCKi/0NqVy479qQMAmZ4x" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/print.css" rel="stylesheet" media="print">

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span class="fa fa-calculator"></span> Tabuada PHP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#" onclick="window.print(); return false;"><i class="fa fa-print"></i> Imprimir</a></li>
                    <li><a href="https://github.com/efrj/Tabuada-PHP"><i class="fa fa-github"></i> GitHub</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-success">Tabuada de Adição</h2>
            </div>
        </div>
        <div class="row">
            <?php for ($x = 1; $x <= 10; $x++): ?>
                <div class="col-md-2 box-table">
                    <h4 class="text-success">Número <?=$x?></h4>
                    <?php for ($y = 1; $y <= 10; $y++): ?>
                        <span class="text-success"><?=$x?></span> + <b><?=$y?></b> = <?=($y+$x)?><br>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <hr>
        </div>

        <div class="row top-box">
            <div class="col-md-12">
                <h2 class="text-primary">Tabuada de Subtração</h2>
            </div>
        </div>
        <div class="row">
            <?php for ($x = 1; $x <= 10; $x++): ?>
                <div class="col-md-2 box-table">
                    <h4 class="text-primary">Número <?=$x?></h4>
                    <?php $line = 0 ?>
                    <?php for ($y = 1; $y <= 20; $y++): ?>
                        <?php $result = ($y - $x) ?>
                        <?php if ($result >= 0): ?>
                            <?php $line++ ?>
                            <?php if ($line <= 10): ?>
                                <b><?=$y?></b> - <span class="text-primary"><?=$x?></span> = <?=$result?><br>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <hr>
        </div>

        <div class="row top-box">
            <div class="col-md-12">
                <h2 class="text-warning">Tabuada de Multiplicação</h2>
            </div>
        </div>
        <div class="row">
            <?php for ($x = 1; $x <= 10; $x++): ?>
                <div class="col-md-2 box-table">
                    <h4 class="text-warning">Número <?=$x?></h4>
                    <?php for ($y = 1; $y <= 10; $y++): ?>
                        <span class="text-warning"><?=$x?></span> x <b><?=$y?></b> = <?=($y * $x)?><br>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <hr>
        </div>

        <div class="row top-box">
            <div class="col-md-12">
                <h2 class="text-danger">Tabuada de Divisão</h2>
            </div>
        </div>
        <div class="row">
            <?php for ($x = 1; $x <= 10; $x++): ?>
                <div class="col-md-2 box-table">
                    <h4 class="text-danger">Número <?=$x?></h4>
                    <?php for ($y = 1; $y <= 10; $y++): ?>
                        <b><?=($y * $x)?></b> : <span class="text-danger"><?=$x?></span> = <?=$y?><br>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <hr>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>