
     <script>
            function aviso() {
                alert("Em breve");
            }
            function inglish() {
                alert("Coming Soon");
            }
            function spanish() {
                alert("En manutención");
            }
                
            
        </script>
    <div class="container" style="margin-top:20px">
        
            <img class="logo1" src="IMG/logoMestradocor.png" style="width: 30%;float:left">
        
        <figure style="text-align: right;margin-bottom: 40px;">
            <img class="logo2" src="IMG/logo.png" style="width: 32%;">
        </figure>
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide col-md-8 offset-md-2 col-sm-12" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="IMG/banner0.png" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="IMG/banner1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="IMG/banner2.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <figure class="col-md-2 idiomas" >
            <img src="IMG/brasil.png" style="width: 20%;position: absolute;bottom: 0%;right: 60%;">
            <img onclick="inglish()" src="IMG/inglish.png" style="width: 20%;position: absolute;bottom: 0%;right: 35%" title="Em breve">
            <img onclick="spanish()" src="IMG/spanish.png" style="width: 20%;position: absolute; bottom: 0%;right: 10%" title="Em breve">  
        </figure>
    </div>

    <nav class="navbar navbar-expand-xl navbar-light bg-light menu" style='padding: 10px 5px;'>
        <button class="navbar-toggler espacamento" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse espacamento" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apresentação
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background: #518e55">
                            <a class="dropdown-item" href="areaDeConcentracao.php">Área de concentração</a>
                            <a class="dropdown-item " href="pesquisa.php">Linhas de Pesquisa</a>
                            <a class="dropdown-item" href="creditos.php">Créditos</a>
                            <a class="dropdown-item" href="objetivos.php">Objetivos</a>
                            <a class="dropdown-item" href="perfilDoEgresso.php">Perfil do egresso</a>
                            <a class="dropdown-item" href="publicoAlvo.php">Público alvo</a> 
                        </div>
                    </div>
                    
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Conselho do programa
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="    background: #518e55">
                            <a class="dropdown-item" href="membrosconselho.php">Membros do conselho</a>
                            <a class="dropdown-item" href="#" onclick="aviso()">Calendário de reuniões</a>
                        </div>
                    </div>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="normasEdiretrizes.php" >Normas/diretrizes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gradeCurricular.php">Grade curricular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="docente.php">Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="aviso()">Discentes</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link " href="#" onclick="aviso()">Processo seletivo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="faleConosco.php">Fale conosco</a>
                </li>
            </ul>
            
        </div>
    </nav>
    <div class="row" style="margin-bottom:50px;margin-top: 10px">
        <div id="carouselExampleControls2" class="carousel slide col-12 " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="IMG/telainicial.png" alt="First slide">
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="Third slide">
                </div> -->
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span> -->
            </a>
        </div>
    </div>
    </div>
