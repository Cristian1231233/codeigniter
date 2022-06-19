<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header{
    display: flex;
    justify-content: space-between;
    height: 40px;
}

.orario{
    min-width: 30px;
    align-items: center;
    padding-left: 15px;
}

.icon{
    min-width: 40px;
    align-items: center;
    padding-right: 15px;
}

.icona{
    margin-left: 13px;
}

.logo{
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.webSite{
    height: 43px;
    line-height: 43px;
    color: white;
    background-color: orange;
}

.containerSearch{
    border-bottom: 1px solid rgb(231, 223, 223);
}

.containerSearch input{
    width: 80%;
    height: 35px;
    background-color: rgb(207, 199, 199);
    border-radius: 4px;
    border: none;
    padding-left: 10px;
}

.containerSearch span{
    color: orange;
    cursor: pointer;
}

.selection{
    box-shadow: 0px 10px 20px 0px rgb(192, 179, 179);
}

.dettaglio, .mappa{
    width: 50%;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}

.borderW{
    border-bottom: 4px solid white;
}
.active{
    border-bottom: 4px solid orange;
}

.none{
    display: none;
}

.infoLista{
    padding: 0 10px;
}

.infoLista .nomeInfo .nome, .infoLista .codiceInfo .codice{
    color: gray;
    font-size: 15px;
}

button{
    color: white;
    background-color: rgb(240, 173, 48);
    border: none;
    border-radius: 6px !important;
    padding: 10px 0;
}

.margine{
    margin-top: 120px;
}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
        <div class="orario d-flex"><strong>9:41</strong></div>
        <div class="icon d-flex"><span></span><i class="fas fa-signal icona"></i><i class="fas fa-wifi icona"></i><i class="fas fa-battery-full icona"></i></div>
    </div>
    <div class="logo">
        <img src="views/Screenshot (5672).png" alt="">
    </div>
    <div class="webSite mt-3 pl-3">Trova il sito più vicino a te</div>
    <div class="containerSearch p-1">
        <input type="text" placeholder="Cerca un sito">
        <span>Annulla</span>
    </div>
    <div class="selection d-flex">
        <div class="dettaglio active">DETTAGLIO</div>
        <div class="mappa borderW">MAPPA</div>
    </div>
    <div class="infoLista d-flex justify-content-between mt-4">
        <div class="nomeInfo">
            <div class="nome">Nome:</div>
            <div class="infoN">Ponte Abbadesse</div>
        </div>
        <div class="codiceInfo">
            <div class="codice">Codice DBR TI</div>
            <div class="infoC">FOT01A</div>
        </div>
    </div>
    <div class="infoLista d-flex justify-content-between mt-4">
        <div class="nomeInfo">
            <div class="nome">Nome sito TIM</div>
            <div class="infoN">Cesena Abbadesse</div>
        </div>
        <div class="codiceInfo">
            <div class="codice">Codice INWIT</div>
            <div class="infoC">FOT01A</div>
        </div>
    </div>
    <div class="infoLista d-flex justify-content-between mt-4">
        <div class="nomeInfo">
            <div class="nome">Indirizzo</div>
            <div class="infoN">Via Barbanti 123 Cesena (FC)</div>
        </div>
    </div>
    <div class="infoLista d-flex justify-content-between mt-4">
        <div class="nomeInfo">
            <div class="nome">Codice sito old</div>
            <div class="infoN">FO1A</div>
        </div>
        <div class="codiceInfo">
            <div class="codice">Tipo locale</div>
            <div class="infoC">SHELTER</div>
        </div>
    </div>
    <div class="container d-flex flex-column margine">
        <button class="mb-3">REGISTRA INTERVENTO</button>
        <button class="mb-3">VAI AL SITO</button>
    </div>
</body>
</html>