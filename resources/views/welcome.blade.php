@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page-wrapper">
        <div class="container-xl">
        </div>
        <div class="page-body">
            <div class="container-xl d-flex flex-column justify-content-center">
                <div class="">
                    <div class="">
                        <img id="userPhoto" src="{{ asset('img/padutech_monitor.png') }}" alt="User Photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap');

:root {
    --font: 'Roboto Mono', monospace;
    --background: white;
    --color: #232333;
}

body{
    background-color: #fff;
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
    border: dashed #000 2px;
    text-align: center;
    text-decoration: none;  
    color: #000;  
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

</style>