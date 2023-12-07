<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="sustentabilidade, economia de água">
    <meta name="author" content="Elisa Grusca">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sustant.css">
    

    <link rel="icon" type="image/png" href="assets/images/999049.png" />
    <title>EcoÁgua</title>
</head>

<body>

    <header>
        <div class="hero">
            <div class="headerContent">
                <nav class="header_nav"> <!-- Menu -->
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#dicas">Dicas</a></li>
                        <li><a href="#conscientizacao">Conscientização</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>

            <div id="fotohome" class="fotohome">
                <img class="fotohome" src="assets/images/agua.jpg" alt="Imagem de água">
            </div>
            <div id="home" class="titulo"> <!-- Título -->
                <h1>Economize Água e Salve o Planeta</h1>
                <h2>Dicas e informações para um uso sustentável da água</h2>
            </div>
        </div>
    </header>

    <main>
        <div class="wrapperContainerlight"> <!-- Introdução ao conteúdo -->
            <section id="dicas" class="conteudo ">
                <div class="SubtituloContainer">
                    <h2 class="Subtitulo"><span class="upper">Dicas para Economizar Água</span></h2>
                </div>
                <div class="conteudoContainer">
                    <div class="conteudo">
                        <div class="conteudoArticle">
                            <h3>Conservar água é essencial para o meio ambiente e para as gerações futuras. Aqui estão algumas dicas para economizar água em sua casa:</h3>
                            <ul>
                                <li>Feche a torneira enquanto escova os dentes.</li>
                                <li>Conserte vazamentos imediatamente.</li>
                                <li>Instale dispositivos economizadores de água em suas torneiras e chuveiros.</li>
                                <li>Use a máquina de lavar roupa apenas com cargas completas.</li>
                                <li>Reaproveite a água da chuva para regar plantas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="wrapperContainerdark"> <!-- Conscientização -->
            <section id="conscientizacao" class="conteudo">
                <div class="SubtituloContainer">
                    <h2 class="Subtitulo"><span class="upper">Conscientização sobre o Uso Responsável da Água</span></h2>
                </div>
                <div class="conteudoContainer">
                    <div class="conteudo">
                        <div class="conteudoArticle">
                            <p>É importante que todos estejamos cientes da necessidade de conservar água e fazer escolhas responsáveis. A escassez de água é um problema global e pode afetar a todos nós. Com pequenas ações, podemos fazer a diferença.</p>
                            <p>Ao economizar água, não apenas economizamos recursos naturais preciosos, mas também reduzimos nossas contas de água. Além disso, ajudamos a preservar ecossistemas aquáticos e reduzir a poluição da água.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="wrapperContainerlight"> <!-- Sobre -->
            <section id="sobre" class="container">
                <div class="sobrecontainer">
                    <div class="textoSobreContainer">
                        <div class="paragrafoSobre">
                            <div class="SubtituloContainer_sobre">
                                <h2 class="Subtitulo_branco">Sobre o Site</h2>
                            </div>
                            <p id="este">Este site foi criado para conscientizar as pessoas sobre a importância de economizar água e oferecer dicas práticas para um uso sustentável. Juntos, podemos fazer a diferença!</p>
                        </div>
                    </div>

                    <div class="imagen-linkSobreContainer">
                        <img class="imagemSobre" src="assets/images/aaa.webp" alt="Economia de Água">
                    </div>
                </div>
            </section>
        </div>

        <div class="wrapperContainerred"> <!-- Contato -->
            <section id="contato" class="contato container">
                <div class="contatoContainer">
                    <div class="formulario">
                        <h2 class="Subtitulo_branco">Informe aqui</h2>
                        <p>Opine aqui, fale</p>
                        <form action="" method="post">
                            <fieldset>
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="nome" required placeholder="Nome completo">

                                <label for="e-mail">E-mail</label>
                                <input type="text" id="e-mail" name="e-mail" required placeholder="E-mail">

                                <label for="mensagem">Mensagem</label>
                                <textarea name="mensagem" id="mensagem" cols="30" rows="10" required placeholder="Mensagem"></textarea>

                                <button type="submit" class="btnContato">Enviar</button>
                            </fieldset>
                        </form>
                    </div>

                    <div class="mapa">
                        <h2 class="Subtitulo_branco">Mapa do Site</h2>
                        <p>Todas as páginas</p>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#dicas">Dicas</a></li>
                            <li><a href="#conscientizacao">Conscientização</a></li>
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                    </div>

                    <div class="creditos">
                        <h2 class="Subtitulo_branco">Créditos</h2>
                        <p>Recursos e Fontes de Informação</p>
                        <ul>
                            <li><a href="https://www.todamateria.com.br/agua/" target="_blank">todamateria.com</a></li>
                            <li><a href="https://www.infomoney.com.br/minhas-financas/13-maneiras-de-economizar-agua-e-reduzir-o-seu-consumo-e-sua-conta/" target="_blank">infomoney.com</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <div class="wrapperContainerblack"> <!-- Footer -->
        <footer class="footer">Elielly & Gabrisa | 2023</footer>
    </div>

</body>

</html>
