<!DOCTYPE html>
<html lang="<?= bloginfo("language") ?>">

<head>
    <meta charset="<?= bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('title') ?></title>

    <!-- Primary Meta Tags -->
    <title>RLC Confecções e Uniformes Profissionais</title>
    <meta name="title" content="RLC Confecções e Uniformes Profissionais">
    <meta name="description" content="Somos uma empresa especializada na fabricação de uniformes profissionais para todos os setores da economia">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= home_url() ?>">
    <meta property="og:title" content="RLC Confecções e Uniformes Profissionais">
    <meta property="og:description" content="Somos uma empresa especializada na fabricação de uniformes profissionais para todos os setores da economia">
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/rlc-confecoes-e-uniformes-cover-website.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= home_url() ?>">
    <meta property="twitter:title" content="RLC Confecções e Uniformes Profissionais">
    <meta property="twitter:description" content="Somos uma empresa especializada na fabricação de uniformes profissionais para todos os setores da economia">
    <meta property="twitter:image" content="<?= get_template_directory_uri() ?>/assets/rlc-confecoes-e-uniformes-cover-website.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/site.webmanifest">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/vendor/fontawesome512pro/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/custom.css">

    <?= wp_head() ?>
</head>

<body <?= body_class() ?> style="position:relative;">
    <?= wp_body_open() ?>

    <div id="page">
        <header>
            <div class="container">

                <nav class="menu">
                    <div class="menu-logo">
                        <img src="<?= get_template_directory_uri() ?>/assets/logo-rlc.svg" style="width:100px; height:auto;">
                    </div>
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="menu-links">
                        <li><a class="active" href="#apresentacao">Início</a></li>
                        <li><a href="#quemsomos">Quem somos</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li class="menu-links__group">
                            <a href="https://instagram.com/rlc_confeccoes" target="_blank"><i class="fab fa-lg fa-instagram"></i></a>
                            <a href="https://facebook.com/rlc_confeccoes" target="_blank"><i class="fab fa-lg fa-facebook-square"></i></a>
                            <a href="https://wa.me/5527998461218" target="_blank"><i class="fab fa-lg fa-whatsapp" target="_blank"></i></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- <section id="apresentacao">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="mb-4">Uniformes personalizados com qualidade superior</h2>
                        <p class="mb-4">Valorize ainda mais a imagem de sua marca, empresa ou evento utilizando os uniformes de excelência da RLC Confecções.</p>
                        <a href="#produtos" class="botao botao-primario"><i class="fas fa-star me-2"></i>Conheça nossos uniformes</a>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="apresentacao" class="d-flex align-items-stretch py-0">
            <!-- <div class="container"> -->

            <!-- Vanilla slider -->
            <div class="slider">

                <!-- navegação lateral -->
                <nav class="slider-nav slider-prev" onclick="playPrev()"><img src="<?= get_template_directory_uri() ?>/assets/angle-left-solid.svg" aria-controls="previous"></nav>
                <nav class="slider-nav slider-next" onclick="playNext()"><img src="<?= get_template_directory_uri() ?>/assets/angle-right-solid.svg" aria-controls="next"></nav>

                <!-- navegação pontos -->
                <nav class="slider-dots">
                    <!-- <div class="slider-dots__item active"></div> -->
                </nav>

                <!-- slider wraper -->
                <div class="slider-wraper">

                    <!-- slider item -->
                    <div class="slider-item slide_a">
                        <div class="slider-item__body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                                    <h2 class="mb-3">Uniformes personalizados de alta qualidade.</h2>
                                    <p class="mb-4">Valorize ainda mais a imagem de sua marca, empresa ou evento utilizando os uniformes de excelência da RLC Confecções.</p>
                                    <a href="#produtos" class="botao botao-primario"><i class="fas fa-star me-2"></i>Conheça nossos uniformes</a>
                                </div>
                                <div class="col-12 col-lg-6 align-self-end text-center">
                                    <img src="<?= get_template_directory_uri() ?>/assets/apresentacao-rlc-actor.webp" style="max-width:30vw; width:100%; height: auto;" class="lazzy from-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim slider item -->

                    <!-- slider item -->
                    <div class="slider-item slide_b">
                        <div class="slider-item__body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                                    <h2 class="mb-3">Modelos para todos os estilos.</h2>
                                    <p class="mb-4">A RLC oferece soluções em uniformes personalizados confortáveis, com cortes modernos, ótimo acabamento e excelente custo-benefício.</p>
                                    <a href="#produtos" class="botao botao-primario"><i class="fas fa-plus me-2"></i>Saiba um pouco mais</a>
                                </div>
                                <div class="col-12 col-lg-6 align-self-end text-center">
                                    <img src="<?= get_template_directory_uri() ?>/assets/apresentacao-rlc-actor-b.webp" style="max-width:30vw; width:100%; height: auto;" class="lazzy from-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim slider item -->

                    <!-- slider item -->
                    <div class="slider-item slide_c">
                        <div class="slider-item__body">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                                    <h2 class="mb-3">Uniformes sob medida, não importa o setor de atuação.</h2>
                                    <p class="mb-4">Independente do setor de atuação da empresa, a RLC possui diversos modelos e materiais para atender até aos gostos mais exigentes.</p>
                                    <a href="#quem-somos" class="botao botao-primario"><i class="fas fa-plus me-2"></i>Conheça mais da RLC</a>
                                </div>
                                <div class="col-12 col-lg-6 align-self-end text-center">
                                    <img src="<?= get_template_directory_uri() ?>/assets/apresentacao-rlc-actor-c.webp" style="max-width:30vw; width:100%; height: auto;" class="lazzy from-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fim slider item -->

                </div>
            </div>
            <!-- Fim de Vanilla Slider -->

            <!-- </div> -->
        </section>

        <section id="quemsomos" class="d-flex align-items-stretch">
            <div class="container d-flex flex-column justify-content-center">
                <div class="row mb-5">
                    <div class="col-12 col-lg-6">
                        <h2>Somos a RLC</h2>
                        <p>A RLC é um empresa genuinamente Capixaba e consolidada no ramo de uniformes profissionais com vários anos de experiência e linha de produtos diversificada.</p>
                        <p>Nossa empresa está apta a atender os mais exigentes clientes, trabalhando com matérias-primas de qualidade, cortes modernos e confortáveis e atendimento personalizado, buscando sempre entender e suprir as necessidades de forma individual.</p>
                        <p>Além disso, a RLC está sempre em constante negociação com seus fornecedores com o objetivo de diminuir custos de produção e oferecer o melhor custo-benefício aos seus clientes na hora de produzir seus uniformes.</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="somos-frame lazzy from-right">
                            <div style="grid-area: imagemA">
                                <img src="<?= get_template_directory_uri() ?>/assets/rlc-mosaico-B.jpg" style="width:100%; max-height: 200px; height: auto; object-fit:cover;">
                            </div>
                            <div style="grid-area: imagemB">
                                <img src="<?= get_template_directory_uri() ?>/assets/rlc-mosaico-A.jpg" style="width:100%; max-height: 200px; height: auto; object-fit:cover;">
                            </div>
                            <div style="grid-area: imagemC">
                                <img src="<?= get_template_directory_uri() ?>/assets/rlc-mosaico-C.jpg" style="width:100%; max-height: 200px; height: auto; object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 col-lg-6">

                        <div class="card-profile lazzy from-left delay">
                            <img class="card-profile__img" src="<?= get_template_directory_uri() ?>/assets/Cirlei-Knindel-n.jpg">
                            <div class="card-profile__body">
                                <h4>Cirlei Knindel</h4>
                                <p><i class="fas fa-chevron-right me-1" style="color: #b13b3d;"></i>Sócia Proprietária</p>
                                <p>Sócia Mentora e Administrativa da RLC Confecções e Uniformes, possui expertise consolidada em vários segmentos de negócios no Mercado Capixaba</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-6">

                        <div class="card-profile lazzy from-right delay">
                            <img class="card-profile__img" src="<?= get_template_directory_uri() ?>/assets/Lilian-Pissigate-n.jpg">
                            <div class="card-profile__body">
                                <h4>Lilian Pissigate</h4>
                                <p><i class="fas fa-chevron-right me-1" style="color: #b13b3d;"></i>Sócia Proprietária</p>
                                <p>Sócia com expertise em Gestão de Relacionamentos com Ênfase em Resultados, especialista em escalonabilidade de produção e projetos.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="produtos">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 col-lg-7 mx-auto text-center">
                        <h2>Nossas linhas de produtos</h2>
                        <h5>Tudo o que você encontra aqui é resultado de muito amor.</h5>
                        <p>A RLC atendende a diversos segmentos do mercado, suprindo suas demandas em uniformes de forma personalizada e com o compromisso de estar sempre buscando a satisfação de nossos clientes.</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="card-categorias corporativa">
                            <div class="row">
                                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                                    <h3 class="mb-3">Linha Corporativa</h3>
                                    <p>Nossa linha corporativa possui diversas opções em peças confortáveis para uso diário, com materiais de fácil lavagem e que mantêm aspecto de novo por muito mais tempo, reduzindo os custos de manutenção de uniformes. Além disso, são todos pensados para entregar um visual sofisticado, valorizando ambientes corporativos e o atendimento ao público em geral.</p>
                                </div>
                                <div class="col-12 col-lg-5 text-center lazzy from-right">
                                    <img src="<?= get_template_directory_uri() ?>/assets/linha-corporativa-ator.webp">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card-categorias cozinha">
                            <div class="row">
                                <div class="col-12 col-lg-5 text-center order-2 order-lg-1 lazzy from-left">
                                    <img src="<?= get_template_directory_uri() ?>/assets/linha-cozinha-ator.webp">
                                </div>
                                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center order-1 order-lg-2">
                                    <h3 class="mb-3">Linha Cozinha</h3>
                                    <p>Dólmans, aventais, toque blanc, calças, camisas. São muitas as variações e personalizações nas peças que atendem a linha cozinha, capazes de suprir todas as necessidades em uniformes de cozinha, copa e serviços, para restaurantes, hotéis, pousadas, bistrôs, pizzarias e lanchonetes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card-categorias saude">
                            <div class="row">
                                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                                    <h3 class="mb-3">Linha Saúde</h3>
                                    <p>Com soluções pensadas na praticidade e durabilidade, os uniformes da linha saúde da RLC ainda possuem opções de materiais que inibem a contaminação e propagação de microorganismos, sendo a opção ideal para profissionais de hospitais, clínicas, consultórios e ambulatórios. </p>
                                </div>
                                <div class="col-12 col-lg-5 text-center lazzy from-right">
                                    <img src="<?= get_template_directory_uri() ?>/assets/linha-saude-ator.webp">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card-categorias operacional">
                            <div class="row">
                                <div class="col-12 col-lg-5 text-center order-2 order-lg-1 lazzy from-left">
                                    <img src="<?= get_template_directory_uri() ?>/assets/linha-operacional-ator.webp">
                                </div>
                                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center order-1 order-lg-2">
                                    <h3 class="mb-3">Linha Operacional</h3>
                                    <p>A linha operacional é dedicada a soluções em uniformes voltados para atividades mais pesadas e que necessitem de materiais mais resistentes e que forneçam maior proteção aos profissionais, sejam eles da área de manutenção, limpeza ou industrial.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card-categorias comercio">
                            <div class="row">
                                <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                                    <h3 class="mb-3">Linha Comercial</h3>
                                    <p>São várias opções voltadas em atender as mais diversificados nichos de negócios. Você encontra opções em aventais, toucas, bandanas, calças, camisas, blusas, saias, bermudas e tudo mais o que for necessário para compor o look personalizado dos uniformes da sua empresa.</p>
                                </div>
                                <div class="col-12 col-lg-5 text-center lazzy from-right">
                                    <img src="<?= get_template_directory_uri() ?>/assets/linha-comercial-ator.webp">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="contato" class="py-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>Como falar conosco</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-lg-6 lazzy from-top">
                        <form action="<?= admin_url() ?>" method="post" class="p-3 border rounded shadow-sm bg-light">
                            <div class="row">
                                <div class="col text-center">
                                    <h4><i class="fas fa-envelope-open-text me-2"></i>Deixe a sua mensagem</h4>
                                    <p>Você pode utilizar este formulário para tirar dúvidas, enviar sugestões ou solicitar orçamentos.</p>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-lg-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col form-group">
                                    <label for="setor">Departamento</label>
                                    <select name="setor" id="setor" class="form-select form-select-sm">
                                        <option value="">Informe o departamento</option>
                                        <option value="SAC">SAC</option>
                                        <option value="Ouvidoria">Ouvidoria</option>
                                        <option value="Comercial" selected>Comercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col form-group">
                                    <label for="mensagem">Mensagem</label>
                                    <textarea name="mensagem" id="mensagem" class="form-control form-control-sm" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group text-center">
                                    <button type="submit" class="botao botao-primario"><i class="fas fa-check me-2"></i>Enviar agora</button>
                                    <button type="reset" class="botao botao-secundario"><i class="fas fa-times me-2"></i>Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 col-lg-6">
                        <h4 class="text-light mb-3">Nosso endereço:</h4>
                        <p class="text-light mb-5">Av. José Moreira Martins Rato, 1155, Bairro de Fátima<br />
                            Serra/ES, Brasil • 29160-790</p>
                        <h4 class="text-light mb-3">Nossos contatos:</h4>
                        <ul class="lista-contato">
                            <li><a href="mailto:comercial@rlcconfec.com.br" target="_blank"><i class="fas fa-envelope me-2"></i>comercial@rlcconfec.com.br</a></li>
                            <li><a href="https://wa.me/5527998461218" target="_blank"><i class="fab fa-lg fa-whatsapp me-2"></i>+55 <strong>(27) 99846-1218</strong></a></li>
                            <li><a href="https://wa.me/5527998241814" target="_blank"><i class="fab fa-lg fa-whatsapp me-2"></i>+55 <strong>(27) 99824-1814</strong></a></li>
                            <li>
                                <a href="https://instagram.com/rlc_confeccoes" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://facebook.com/rlc_confeccoes" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <section id="mapa" class="py-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.562692309634!2d-40.26498915140946!3d-20.25452326246806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb819266de1efff%3A0xb73be8cc6189d880!2sRLC%20Confec%C3%A7%C3%B5es%2C%20Uniformes%20e%20EPIs!5e0!3m2!1spt-BR!2sbr!4v1622669514216!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <footer>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                        RLC Confecções e Uniformes &copy; <?= date("Y") ?>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-end">
                        <img src="<?= get_template_directory_uri() ?>/assets/logo-rlc.svg" style="width:100px; height:auto;">
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="<?= get_template_directory_uri() ?>/js/custom.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/menu.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/slider.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/scrollspy.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/lazzyload.js"></script>
    <script src="<?= get_template_directory_uri() ?>/js/masks.js"></script>
    <?= wp_footer() ?>
</body>

</html>