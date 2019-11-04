<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoodFit</title>

    <link href="css/reset.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/componentes/logo.png">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <section class="container container-home">
        <div class="home-header">
            <div class="home-logo">
                <img src="images/componentes/logo-goodfit.png" alt="Logo - A Good Fit" class="home-logo-img">
            </div>
        </div>

        <div class="home">
            <div class="home-container">
                <div class="home-desc">
                    <h1 class="home-desc-title">EMPREGO PARA <span class="home-desc-title-span">TODOS</span></h1>
                    <h3 class="home-desc-text">O match perfeito, o que mais combinar com você.</h3>
                </div>
            </div>
            
            <div class="home-container">
                <div class="home-content">
                    <form action="php/insert.php" method="post" class="home-content-form">
                        <div class="home-content-form-item">
                            <input class="home-content-form-item-input" id="email" type="email" name="email" placeholder="Deixe seu email para contato" autofocus>
                        </div>

                        <div class="home-content-form-button">
                            <button type="submit" class="home-content-form-button-btn">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>