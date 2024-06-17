<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="icon" type="image/x-icon" href="/fiveicon/Captura de tela 2024-06-14 182924.png">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div id="container">
            <div id="menu">
                <h1 id="logo">SYI</h1>
                <div id="links">
                    <a href="/html/inicio.html">Login</a>
                </div>
                <div id="ff">
                    <button <?php header('location:../html/cadastrese.html');?> id="solicitar_uso" onclick="cadastrese()">
                        <h4>Cadastre-se</h4>
                    </button>
                </div>
            </div>
            <div id="conteudo">
                <h1 id="titulo">Sobre SYI</h1>
                <div id="conteudo_texto">
                    <label id="texto">
                        SYI é um banco inovador que oferece uma ampla gama de serviços financeiros para atender às suas necessidades. 
                        Com o SYI, você pode realizar transações, comprar criptomoedas, ações, títulos de renda fixa e Tesouro Direto.
                        Nosso objetivo é proporcionar uma experiência segura e conveniente, integrando tecnologia avançada e parcerias estratégicas para facilitar a 
                        gestão de suas finanças em um único lugar. O layout simplificado do SYI deixa a tela mais limpa e bonita, 
                        evitando o excesso de informações e garantindo uma navegação intuitiva e agradável.
                    </label>
                </div>
            </div>
            <div id="contato">
                <a href="https://api.whatsapp.com/send?phone=27988839618"><img src="/img/whatsapp.png" alt=""></a>
            </div>
            <div id="o">
                <a id="o" href="/html/politica.html">Politica de privacidade</a>
            </div>
            <script src="/javaScript/redirecionamento.js"></script>
        </div>
    </body>
</html>