<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow" />    <title>Padutech Soluções</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>
        <div id="app" class="container">
            <div class="content">
                <img id="userPhoto" src="{{ asset('img/padutech_monitor.png') }}" alt="User Photo">
                <h1><a href="#" id="userName" rel="noopener"><b>Padutech Soluções</b></a></h1>
                <small>Instalação e manutenção de Redes e Computadores</small>
                <div id="links">
                    <a class="link" href="https://api.whatsapp.com/send?phone=5543999745305" rel="noopener"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                    <a class="link" href="https://www.facebook.com/padutech/"  rel="noopener"><i class="bi bi-facebook"></i> Facebook</a>
                    <a class="link" href="https://www.instagram.com/padubuntu/" rel="noopener"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
                <footer>
                    We like it minimal.
                </footer>
            </div>
        </div>


    </body>

</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap');

:root {
    --font: 'Roboto Mono', monospace;
    --background: white;
    --color: #232333;
}

body{
    background-color: var(--background);
    color: var(--color);
    font-family: var(--font);
    margin: 0;
    padding: 0;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    display: flex;
    min-height: 100vh;
    min-width: 100vw;
    flex-direction: column;

}

h1 {
    margin-top: 10px;
    margin-bottom: 0px;
}

small {
    margin-bottom: 10px;
    color: #A6A6A6;
}

.container {
    flex: 1 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.content{
    display: flex;
    flex-direction: column;
    flex: 1 auto;
    align-items: center;
    justify-content: center;
    margin: 0;
}

footer{
    text-align: center;
    font-size: 0.75rem;
    font-weight: 400;
    padding-bottom: 20px;
}

#userPhoto{
    /* width: 96px; */
    height: 96px;
    display: block;
    /* margin: 35px auto 20px; */
    /* border-radius: 50%; */
    /* border: solid var(--color) 2px; */
}

#userName{
    width: 100%;
    font-size: 1.5rem;
    font-weight: 400;
    text-align: center;
    text-decoration: none;
    line-height: 1.25;
    display: block;
    /* color: var(--color); */
    color: #025373;
}

#links{
    max-width: 90%;
    width: auto;
    display: block;
    margin: 27px auto;
}

.link{
    display: block;
    margin-bottom: 20px;
    padding: 17px;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 5px;
    border: dashed var(--color) 2px;
    text-align: center;
    text-decoration: none;  
    color: var(--color);  
    word-wrap: break-word;

}

@media (prefers-color-scheme: dark) {

    :root {        
        --background: #202124;
        --color: white;
    }
  }
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83046392-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-83046392-1');
</script>