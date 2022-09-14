<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National School</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/button-top.js" defer></script>
    <script src="assets/js/pop-up-escola.js" defer></script>
    <!-- <script src="assets/js/pop-up.js" defer></script> -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
</head>
<body>
       
    <section class="landing-page">

        <nav class="menu">
            <div class="position_menu">
                <div class="logo_menu">
                    <img src="https://i.postimg.cc/28Pt4Q9p/image-removebg-preview.png" alt="logo">
                    <a id="nome">SCHOOL</a>
                </div>  
                <div class="btn_menu">
                    <li>
                        <a id="btn-cadastrar">Cadastrar</a>
                    </li>
                    <li>
                        <a>Pesquisar</a>
                    </li>
                    <li>
                        <a id="btn-excluir">Excluir</a>
                    </li>
                    <li>
                        <a>Alterar</a>
                        <ul>
                            <li><a href="">Aluno</a></li>
                            <li><a href="">Disciplinas</a></li>
                            <li><a href="">Curso</a></li>
                        </ul>
                    </li> 
                    <li>
                        <a id="listar_dropdown">Listar</a>
                        <ul>
                            <li><a class="listar-alunos">Alunos</a></li>
                            <li><a class="listar-disciplinas">Disciplinas</a></li>
                            <li><a class="listar-cursos">Cursos</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>

        <div class="field-landing-page">
            <h1>INSTITUIÇÃO EDUCACIONAL</h1>
            <h1>SCHOOL</h1>
            <a id="btn-matriculas-abertas">Matrículas Abertas</a>
            <img id="img-aluna" src="https://i.postimg.cc/wMzFF0XG/image-removebg-preview-1.png" alt="Aluna">
            <img id="img-vetor-footer" src="https://i.postimg.cc/brzxdjGN/Camada-6.png" alt="footer vetor">
        </div>

    </section>

    <section class="field-forms">
        <div class="position-field-forms">

            <div class="field-dropdown-options">
                <li>
                    <a class="btn-options">Opções</a>
                    <ul class="dropdown-options">
                        <li id="dropdown-options-aluno">Aluno</li>
                        <li id="dropdown-options-disciplinas">Disciplinas</li>
                        <li id="dropdown-options-cursos">Cursos</li>
                    </ul>
                </li>
            </div>

            <div class="cadastro">                
                <form method="POST">
                    <h1>Cadastro Aluno</h1>
                    <div>
                        <label for="input-matricula">Matricula</label>
                        <input name="input_matricula" id="input-matricula" class="input-text" type="text" maxlength='5' pattern="\d*" title="Digite a Matrícula com 5 dígitos"placeholder="Digite o número da sua matrícula" required>
                    </div>
                    <div>
                        <label for="input-nome">Nome</label>
                        <input name="input_nome" id="input-nome" class="input-text" type="text" placeholder="Digite o seu nome" required>
                    </div>
                    <div>
                        <label for="input-endereco">Endereço</label>
                        <input name="input_endereco" id="input-endereco" class="input-text" type="text" placeholder="Digite o seu endereço" required>
                    </div>
                    <div>
                        <label for="input-cidade">Cidade</label>
                        <input  name="input_cidade" id="input-cidade" class="input-text" type="text" placeholder="Digite o seu cidade" required>
                    </div>
                    <div>
                        <label for="input-codigo-curso">Codigo Curso</label>
                        <input name="input_codigo_curso" id="input-codigo-curso" class="input-text" type="text" pattern="\d*" maxlength="2" title="Apenas números com 2 dígitos" placeholder="Digite o código do curso" required>
                    </div>
                    <input name="btn_submit_1" class="btn-submit" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_1)) {
                            include_once 'assets/php/escola.php';
                            $aluno = new aluno(); 
                            $aluno->setMatricula($input_matricula);
                            $aluno->setNome($input_nome);
                            $aluno->setEndereco($input_endereco);
                            $aluno->setCidade($input_cidade);
                            $aluno->setCodCurso($input_codigo_curso);
                            $aluno->salvar();
                        }
                    ?>
                </form>

                <form method="POST">
                    <h1>Cadastro Disciplinas</h1>
                    <div>
                        <label for="input-nome-disciplina">Nome</label>
                        <input name="input_nome_disciplina" id="input-nome-disciplina" class="input-text" type="text" placeholder="Digite o nome da disciplina" required>
                    </div>
                    <div>
                        <label for="input-codigo-disciplina">Código</label>
                        <input name="input_codigo_disciplina" id="input-codigo-disciplina" class="input-text" type="text" placeholder="Digite o código da disciplina" pattern="\d*" required>
                    </div>
                    <input name="btn_submit_2" class="btn-submit" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_2)) {
                            include_once 'assets/php/escola.php';
                            $disciplinas = new disciplinas(); 
                            $disciplinas->setId($input_codigo_disciplina);
                            $disciplinas->setNome($input_nome_disciplina);
                            $disciplinas->salvar();
                        }
                    ?>
                </form>

                <form method="POST">
                    <h1>Cadastro Cursos</h1>
                    <div>
                        <label for="input-nome-curso">Nome</label>
                        <input name="input_nome_curso" id="input-nome-curso" class="input-text" type="text" placeholder="Digite o nome do curso" required>
                    </div>
                    <div>
                        <label for="input-codigo-curso">Código</label>
                        <input name="input_codigo_curso" id="input-codigo-curso" class="input-text" type="text" placeholder="Digite o codigo do curso" pattern="\d*" required>
                    </div>
                    <div>
                        <label for="input-codigo-disciplina-1">Código Disciplina 1</label>
                        <input name="input_codigo_disciplina_1" id="input-codigo-disciplina-1" class="input-text" type="text" placeholder="Digite o codigo da disciplinas 1" pattern="\d*" maxlength="2" title="Apenas números com 2 dígitos" required>
                    </div>
                    <div>
                        <label for="input-codigo-disciplina-2">Código Disciplina 2</label>
                        <input name="input_codigo_disciplina_2" id="input-codigo-disciplina-2" class="input-text" type="text" placeholder="Digite o codigo da disciplinas 2" pattern="\d*" maxlength="2" title="Apenas números com 2 dígitos" required>
                    </div>
                    <div>
                        <label for="input-codigo-disciplina-3">Código Disciplina 3</label>
                        <input name="input_codigo_disciplina_3" id="input-codigo-disciplina-3" class="input-text" type="text" placeholder="Digite o codigo da disciplinas 3" pattern="\d*" maxlength="2" title="Apenas números com 2 dígitos" required>
                    </div>
                    <input name="btn_submit_3" class="btn-submit" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_3)) {
                            include_once 'assets/php/escola.php';
                            $curso = new curso(); 
                            $curso->setCodCurso($input_codigo_curso);
                            $curso->setNome($input_nome_curso);
                            $curso->setCodDisc1($input_codigo_disciplina_1);
                            $curso->setCodDisc2($input_codigo_disciplina_2);
                            $curso->setCodDisc3($input_codigo_disciplina_3);
                            $curso->salvar();
                        }
                    ?>
                </form>
            </div>

            <hr id="linha-vertical">

            <p id="txt-forms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. <br><br> Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. <br><br> Vivamus a tellus.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. <br><br> Donec laoreet nonummy augue. br Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
                    
            <div class="excluir">
                <form method="POST">
                    <h1>Excluir Alunos</h1>
                    <div>
                        <label for="input-matricula-excluir">Id Aluno</label>
                        <input name="input_matricula_excluir" id="input-matricula-excluir" class="input-text" type="number" placeholder="Digite o Id do aluno" required>
                    </div>
                    <input name="btn_submit_excluir" class="btn-submit-excluir" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_excluir)) {
                            include_once 'assets/php/escola.php';
                            $aluno = new aluno(); 
                            $aluno->setMatricula($input_matricula_excluir);
                            $aluno->excluir();
                        }
                    ?>
                </form>
            </div>

            <div class="excluir">
                <form method="POST">
                    <h1>Excluir Disciplinas</h1>
                    <div>
                        <label for="input-id-excluir">Id Disciplina</label>
                        <input name="input_id_excluir" id="input-id-excluir" class="input-text" type="number" placeholder="Digite o Id da Disciplina" required>
                    </div>
                    <input name="btn_submit_excluir2" class="btn-submit-excluir" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_excluir2)) {
                            include_once 'assets/php/escola.php';
                            $disciplinas = new disciplinas(); 
                            $disciplinas->setId($input_id_excluir);
                            $disciplinas->excluir();
                        }
                    ?>
                </form>
            </div>

            <div class="excluir">
                <form method="POST">
                    <h1>Excluir Cursos</h1>
                    <div>
                        <label for="input-codigo-curso-excluir">Id Curso</label>
                        <input name="input_codigo_curso_excluir" id="input-codigo-curso-excluir" class="input-text" type="number" placeholder="Digite o Id do Cursos" required>
                    </div>
                    <input name="btn_submit_excluir" class="btn-submit-excluir" type="submit">
                    <?php 
                        extract($_POST, EXTR_OVERWRITE);
                        
                        if(isset($btn_submit_excluir)) {
                            include_once 'assets/php/escola.php';
                            $curso = new curso(); 
                            $curso->setCodCurso($input_codigo_curso_excluir);
                            $curso->excluir();
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>
    
    <section class="field-lists">

        <div class="listar">
            <div>
                <div>
                    <p class='tabela'>Alunos</p>
                    <p class="btn-ocultar">Ocultar</p>
                </div>
                <table>
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Código Curso</th>
                    </tr>
                    <?php

                        include_once 'assets/php/escola.php';

                        $lita = new aluno();
                        $listar_bd=$lita->listar();
                        
                        foreach($listar_bd as $listar) {

                        echo "<tr>
                                <td>$listar[0]</td>
                                <td>$listar[1]</td>
                                <td>$listar[2]</td>
                                <td>$listar[3]</td>
                                <td>$listar[4]</td>
                            </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="listar">
            <div>
                <div>
                    <p class='tabela'>Disciplinas</p>
                    <p class="btn-ocultar">Ocultar</p>
                </div>
                <table> 
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                    </tr>
                    <?php

                        include_once 'assets/php/escola.php';

                        $lista = new disciplinas();
                        $listar_bd=$lista->listar();

                        foreach($listar_bd as $listar) {

                        echo "<tr>
                                <td>$listar[0]</td>
                                <td>$listar[1]</td>
                            </tr>";
                        }

                    ?>
                </table>
            </div>
        </div>

        <div class="listar">
            <div>
                <div>
                    <p class='tabela'>Cursos</p>
                    <p class="btn-ocultar">Ocultar</p>
                </div>
                <table> 
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Código Disciplina 1</th>
                        <th>Código Disciplina 2</th> 
                        <th>Código Disciplina 3</th>
                    </tr>
                    <?php

                        include_once 'assets/php/escola.php';

                        $lista = new curso();
                        $listar_bd=$lista->listar();

                        foreach($listar_bd as $listar) {

                        echo "<tr>
                                <td>$listar[0]</td>
                                <td>$listar[1]</td>
                                <td>$listar[2]</td>
                                <td>$listar[3]</td>
                                <td>$listar[4]</td>
                            </tr>";
                        }

                    ?>
                </table>
            </div>
        </div>

    </section>

    <section class="field-sobre">
        <div class="position-field-sobre">
            <h1>Sobre</h1>
            <div>
                <img src="https://i.postimg.cc/597sHWyg/calendario.png" alt="Vetor">
                <p>21 March 2016</p>
                <img src="https://i.postimg.cc/BQwnbgdk/local.png" alt="Vetor">
                <p>São Paulo</p>
                <img src="https://i.postimg.cc/sxLCjnvJ/loja.png" alt="Vetor">
                <p>School</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.</p>
            <a id="btn-cadastrar">Register</a>
            <img id='gif-planeta' src="https://i.postimg.cc/0jZGCfkv/Contra-Internet-Bottom.gif" alt="Planeta">
        </div>
    </section>

    <footer>
        <div>
            <div class="footer_position">
                <div>
                    <div class="btn_txt">
                        <a href="index.php">Home</a>
                        <a id="btn_footer_contact" href="https://davhyandrade.com.br/">Contact</a>
                        <a id="btn_footer_about">About</a>
                        <a id="btn_footer_Home_screen">Home screen</a>
                        <a href="">Reload</a>
                    </div>
                    <p>My Portfólio © 2022</p>
                    <div class="btn_rodape">
                        <div>
                            <a href="https://www.deviantart.com/davhyzk"><input type="image" src="https://i.postimg.cc/x1Fr86cL/vetor-deviantart.png" alt="Deviant Art"></a>
                            <a href="https://github.com/Davhyandrade"><input type="image" src="https://i.postimg.cc/TwgBkGQc/vetor-github.png" alt="GitHub"></a>
                            <a href="https://www.instagram.com/_davhy/"><input type="image" src="https://i.postimg.cc/SKww7jLs/vetor-instagram.png" alt="Instagram"></a>
                            <a href="https://api.whatsapp.com/send?phone=5511934643395"><input type="image" src="https://i.postimg.cc/C50XXtQp/vetor-whatsapp.png" alt="WhatsApp"></a>
                            <a href="https://www.behance.net/davhyandrade"><input type="image" src="https://i.postimg.cc/Dy63kvhj/vetor-behance.png" alt="Behance"></a>
                            <a href="https://www.linkedin.com/in/davhy-andrade-dev"><input type="image" src="https://i.postimg.cc/1X8BYb6G/image-removebg-preview-68.png" alt="Linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--Rodapé-->

</body>
</html>