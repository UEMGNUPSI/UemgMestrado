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
    <link rel="stylesheet" type="text/css" media="screen" href="membrosconselho.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body >
    <?php
        require_once("Head.php");
           
    ?>
<div class="container" style="padding-left:5%;padding-right:5%;">
            
    <h1 class="mb-5">Membros do Conselho</h1>
    <div class="table-responsive">
            <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Membros</th>
                    <th scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td> Dr. GUSTAVO HENRIQUE GRAVATIM COSTA</td>
                    <td>Coordernador</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td> Dra. Vanesca Korasaki</td>
                    <td>Vice Coordenadora</td>
                </tr>    
            </tbody>
            </table>
</div>
<!--Segunda Tabela-->  
<div class="table-responsive">
            <table class="table" >
            <thead class="table-secondary">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Membros Titulares</th>                    
                    <th scope="col">Linhas de Pesquisa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" ></th>
                    <td > Dra. OSANIA EMERENCIANO FERREIRA</td>
                    <td >Diagnóstico e Ecologia Ambiental</td>
                
                </tr>
                
                <tr>
                    <th scope="row" ></th>
                    <td > Dra. RODRIGO NEY MILLAN</td>
                    <td >Diagnóstico e Ecologia Ambiental</td>      
                </tr>
                
                <tr>
                    <th scope="row"></th>
                    <td > Dra. STEFANIA LIMA OLIVEIRA METZKER </td>
                    <td >Tecnologia, Ambiente e Sociedade</td>      
                </tr>
               
                <tr>
                    <th scope="row" ></th>
                    <td >Dr. ALEXANDRE TÚLIO AMARAL NASCIMENTO</td>
                    <td >Tecnologia, Ambiente e Sociedade</td>      
                </tr>
            </tbody>
            </table>
</div>
<!--Terceira Tabela--> 
<div class="table-responsive">          
            <table class="table" >
            <thead class="table-secondary">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Suplentes</th>                    
                    <th scope="col">Linhas de Pesquisa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" ></th>
                <td > Dr. Thiago Torres Costa Pereira</td>
                <td >Diagnóstico e Ecologia Ambiental</td>
               
            </tr>

            <tr>
                <th scope="row"></th>
                <td> Dr. Thiago GechelKloss</td>
                <td>Diagnóstico e Ecologia Ambiental</td>      
            </tr>

             <tr>
                <th scope="row" ></th>
                <td > Dr. Alan Rodrigues Teixeira Machado</td>
                <td >Tecnologia, Ambiente e Sociedade</td>      
            </tr>

            <tr>
                <th scope="row" ></th>
                <td > Dr. Maurício Bonatto Machado de Castilhos</td>
                <td>Tecnologia, Ambiente e Sociedade</td>      
            </tr>

            </tbody>
            </table>
            </div>
        </div>




<?php
        require_once("footer.php");
    ?>
</body>
</html>