<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='index, follow'>
    <link rel='shortcut icon' href='assets/img/ifto.svg'>
    <link rel='stylesheet' href='assets/css/icons/fonticon.css'>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='assets/css/boot.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <title>Site do Curso</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img src="assets/img/logo.png" alt="logotipo do curso" title="logotipo do curso">
            </a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#escola">A Escola</a></li>
                    <li><a href="#contatos">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- FIM CABEÇALHO -->

    <main>

        <!-- CHAMADA PRINCIPAL -->
        <div class="main_cta">
            <article class="main_cta_content">
                <div class=main_cta_content_spacer>
                    <header>
                        <h1>Aqui você aprende o essencial para trabalhar como webmaster fullstack
                        </h1>
                    </header>
                    <p>
                        Estude o HTML 5 e o CSS 3 na disciplina de webdesign
                    </p>
                    <p>
                        <a href="#" class="btn"> Saiba mais</a>
                    </p>
                </div>
            </article>
        </div>
        <!-- FIM CHAMADA PRINCIPAL -->

        <!-- ARTIGOS -->
        <section class="main_blog">
            <header class="main_blog_header">
                <h1 class="icon-blog">
                    Nossos últimas artigos
                </h1>
                <p>
                    Aqui você encontra os artigos necessários para auxiliar na sua caminhadas nas web
                </p>
            </header>

            <?php for ($i = 0; $i < 12; $i++) : ?>
            <article>
                <a href="#">
                    <img src="assets/img/rede_federal2.jpg" alt="Rede Federal" title="Rede Federal">
                </a>
                <p>
                    <a href="" class="category"> Categoria </a>
                </p>
                <h2>
                    <a href="#" class="title">
                        Omnis autem ducimus consequatur consequuntur quia cumque fugiat eum pariatur. Dolorum eum qui
                        dolores non. Repudiandae tempora dolor occaecati quia.
                    </a>
                </h2>
            </article>
            <?php endfor; ?>
        </section>
        <!-- FIM ARTIGOS  -->

        <!-- NEWS -->
        <article>
            <header>
                <h1>Quer receber todas as novidades em seu e-mail ?</h1>
                <p>
                    Informe seu nome e e-mail no campo ao lado e clique em OK !
                </p>
            </header>

            <form action="news.php" method="post">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <button type="submit">OK !</button>
            </form>
        </article>
        <!-- FIM NEWS -->

        <!-- SOBRE O CURSO -->
        <section>
            <header>
                <img src='assets/img/logo.png' alt='' title=''>
                <h1>Curso de Programação WEB</h1>
                <p>
                    Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar págians que estejam
                    dentro dos padrões
                    web seguindo boas práticas de programação
                </p>
            </header>

            <?php
            $vantagens =
                [
                    "Curso 100% Online",
                    "Suporte Especializado",
                    "As aulas são divídidas em módulos",
                    "Certificado reconhecido em todo o território nacional",
                    "Veja aqui alguns comentários dos nossos alunos"
                ];
            $descricao =
                [
                    "Todas as aulas são gravadas e focadas na prática",
                    "Este curso possui suporte diretamente com um profissional da nossa equipe oficial",
                    "A modularização que você precisa para compreender de maneira mais objetiva",
                    "Ao concluir o curso você receberá um certificado federal com reconhecimento em todos o território nacional",
                    "Veja o que estão falando sobre o curso",
                ];
            ?>

            <?php for ($i = 0; $i < 4; $i++) : ?>

            <article>
                <header>
                    <h2><?= $vantagens[$i] ?></h2>
                </header>
                <p>
                    <?= $descricao[$i] ?>
                </p>
            </article>

            <?php endfor; ?>

            <section>
                <header>
                    <h2>Veja o questão falando sobre o curso</h2>
                </header>

                <article>
                    <header>
                        <h3> Aline F. de Araujo (Ponto Positivo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        O CURSO VISA CAPACITAÇÃO PARA ATUAÇÃO EM UMA ÁREA COM CRESCENTE REQUISIÇÃO PELO MERCADO DE
                        TRABALHO
                    </p>
                </article>
                <article>
                    <header>
                        <h3> Aline F. de Araujo (Ponto Negativo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        FALTA UM MATERIAL DIDÁTICO COM CONCEITOS BÁSICOS DO CURSO E QUE DETALHE CADA COMANDO
                        UTILIZADO,
                        ESPECIFICANDO A FINALIDADE DA UTILIZAÇÃO
                    </p>
                </article>
                <article>
                    <header>
                        <h3> André Martins (Ponto Positivo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        FOCO MAIOR NA PRÁTICA E EXIGÊNCIAS DO MERCADO
                    </p>
                </article>
                <article>
                    <header>
                        <h3> André Martins (Ponto Negativo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        QUEM NÃO TEM NENHUM CONHECIMENTO DE "GIT" ENCONTRARÁ
                        DIFICULDADES NO INÍCIO
                    </p>
                </article>
                <article>
                    <header>
                        <h3> Felipe S. da Silva (Ponto Positivo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        É GRATUITO, E TAMBÉM A DISTÂNCIA
                    </p>
                </article>
                <article>
                    <header>
                        <h3> Felipe S. da Silva (Ponto Negativo)</h3>
                        <p>06/10/2020</p>
                    </header>
                    <p>
                        O PRAZO DO CURSO É MUITO CURTO
                    </p>
                </article>

            </section>
        </section>
        <!-- FIM SOBRE O CURSO -->

        <!-- A ESCOLA -->
        <section>
            <header>
                <h1>Bem vindo ao Campus Araguaína - IFTO</h1>
                <p>Uma escola de educação técnica profissional</p>
            </header>

            <article>
                <header>
                    <p>
                        <a href="#">Facebook</a>
                        <a href="#">Instagram</a>
                        <a href="#">Youtube</a>
                    </p>
                    <h2>
                        Tudo o que você precisa para iniciar sua carreira Webmaster Full Stack
                    </h2>
                </header>

                <p>
                    Desde 2010 o Campus Araguaina - IFTO vem criando os melhores cursos na área de tecnologia em sua
                    região, entregamos ao aluno conhecimento prático e testado, sem enrolação
                </p>
                <p>
                    Que tal estudar, conosco ?
                </p>
            </article>

            <section>
                <header>
                    <h2> Confira nossos cursos</h2>
                </header>
                <?php
                $cursos =
                    [
                        "Operador de Computador",
                        "Técnico em Biotecnologia",
                        "Técnico em Informática",
                        "Técnico em Análises Clínicas",
                        "Técnico em Enfermagem",
                        "Análise e Desenvolvimento de Sistemas",
                        "Gestão de Produção Industrial",
                        "Formação Docente em Educação Ambiente e Desenvolvimento Sustentável",
                    ];
                ?>

                <?php foreach ($cursos as $key => $value) : ?>

                <article>
                    <header>
                        <h3><?= $value ?></h3>
                    </header>
                </article>

                <?php endforeach; ?>
            </section>
            <img src='assets/img/ifto.svg' alt='IFTO' title='IFTO'>
            <article>
                <header>
                    <h2>Nos encontre</h2>
                </header>
                <p>
                    Av. Amazonas, esquina com a Av. Paraguai, Quadra 56, Lote 01, Setor Cimba
                </p>
            </article>
        </section>
        <!-- FIM A ESCOLA  -->

        <!-- TUTOR -->
        <section>
            <header>
                <h1>Conheça Iury Gomes, seu tutor nesse Curso</h1>
                <p>Eu vou te ajudar a criar sua webpage em HTML 5 e css3</p>
            </header>
            <img src='assets/img/foto.jpeg' alt='Iury Gomes' title='Iury Gomes'>
            <article>
                <header>
                    <h2>
                        Formado em Ciência da Computação e Apaixonado por WEB
                    </h2>
                </header>
                <p>
                    Como muitos, comecei na programação por curiosidade! Com o tempo, o amor pela programação foi
                    crescendo a ponto se tornar uma profissão e me especializar na área. Hoje, com a bagagem que tenho,
                    compartilho meu conhecimento com todos os alunos do Campus Araguaína - IFTO
                </p>
            </article>
            <section>
                <header>
                    <h2>
                        Me siga nas redes sociais
                    </h2>
                </header>

                <article>
                    <header>
                        <h3><a href="#">Meu Youtube</a></h3>
                    </header>
                </article>
                <article>
                    <header>
                        <h3><a href="#">Meu Github</a></h3>
                    </header>
                </article>
                <article>
                    <header>
                        <h3><a href="#">Meu Linkedin</a></h3>
                    </header>
                </article>
                <article>
                    <header>
                        <h3><a href="#">Meu Twitter</a></h3>
                    </header>
                </article>
            </section>
        </section>
        <!-- FIM TUTOR -->
    </main>

    <section>
        <header>
            <h1>
                Quer receber nosso conteúdo exclusivo ? Assine nossa lista VIP :)
            </h1>
        </header>

        <article>
            <header>
                <h2><a href="#" class="btn">Entrar para a Lista VIP</a></h2>
            </header>
        </article>
    </section>

    <section>
        <header>
            <h1>Quer Saber mais ?</h1>
        </header>
        <section>
            <header>
                <h2>Nossas Páginas</h2>
            </header>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">A Escola</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </section>

        <section>
            <header>
                <h2>Links Úteis</h2>
            </header>

            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termo de uso</a></li>
            </ul>
        </section>

        <section>
            <header>
                <h2>Sobre o Projeto</h2>
            </header>

            <p>
                Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam
                dentro dos padrões da WEB seguindo as boas práticas !
            </p>
        </section>
    </section>

    <footer>
        <p>
            &copy; Copyright 2020 - <?= date('Y'); ?>, Campus Araguaina - IFTO
        </p>
    </footer>

    <script> </script>
</body>

</html>