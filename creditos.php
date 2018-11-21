<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="menu.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="docente.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body >
    <?php
        require_once("Head.php");
    ?>
        <div class="container" style="padding-left:5%;padding-right:5%">
            <div class="row" >
                <h2> CRÉDITOS </h2>
            </div>
            <div class="row">
                <table class="col-7">
                    <tr> 
                        <td>Créditos Disciplinas Obrigatórias</td>
                        <td> 10 </td>
                    </tr>
                    <tr> 
                        <td>Crédito de Disciplinas Optativas </td>
                        <td> 6 </td>
                    </tr>
                    <tr> 
                        <td>Créditos Tese/Dissertação </td>
                        <td> 6 </td>
                    </tr>
                    <tr> 
                        <td> Créditos de Atividades Técnico-Científicas Complementares  </td>
                        <td> 4 </td>
                    </tr>
                    <tr> 
                        <td> Total de Créditos   </td>
                        <td> 26 </td>
                    </tr>
                    <tr> 
                        <td> Equivalência hora/crédito    </td>
                        <td> 15 </td>
                    </tr>
                </table>
            </div>
        </div>
    
    <?php
        require_once("footer.php");
    ?>
</body>
</html>