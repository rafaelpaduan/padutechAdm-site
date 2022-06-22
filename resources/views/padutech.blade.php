<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Major Homer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <img id="userPhoto" src="https://i.imgur.com/ogrNhWB.jpg" alt="User Photo">

    <a href="https://www.instagram.com/thesimpsons" id="userName">@thesimpsons</a>
    <div id="links">
        <a class="link" href="https://pt.wikipedia.org/wiki/Homer_Simpson" target="_blank" style="border-radius: 25px;">Wikipedia</a>
        <a class="link" href="https://foxplay.com/br/forme" target="_blank" style="border-radius: 25px;">IMDB</a>
        <a class="link" href="https://www.rottentomatoes.com/tv/the_simpsons" target="_blank" style="border-radius: 25px;">Rotten Tomatoes</a>
    </div>

    <!-- Javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="index.js"></script>
</body>

</html>

<style>

@import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
:root {
    --bgColor: rgb(0, 0, 0);
    --accentColor: #E6E6E6;
    --font: 'Karla', sans-serif;
}

body {
    background-color: var(--bgColor);
    background-image: url("./assets/deepSea.png");
    background-size: 120%;
}

#userPhoto {
    width: 110px;
    height: 110px;
    display: block;
    margin: 35px auto 20px;
    border-radius: 50%;
}

#userName {
    color: rgb(255, 255, 255);
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.25;
    display: block;
    font-family: var(--font);
    width: 100%;
    text-align: center;
    text-decoration: none;
}

#links {
    max-width: 675px;
    width: auto;
    display: block;
    margin: 27px auto;
}

.link {
    display: block;
    background-color: var(--accentColor);
    color: var(--bgColor);
    font-family: var(--font);
    text-align: center;
    margin-bottom: 20px;
    padding: 17px;
    text-decoration: none;
    font-size: 1rem;
    transition: all .25s cubic-bezier(.08, .59, .29, .99);
    border: solid var(--accentColor) 2px;
}

.link:hover {
    background-color: var(--bgColor);
    color: var(--accentColor);
}

</style>