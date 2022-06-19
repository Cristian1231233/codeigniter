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
    /* box-shadow: 3px 2px 10px 2px gray; */
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
}

.lista, .mappa{
    width: 50%;
    height: 38px;
    text-align: center;
    line-height: 38px;
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

.elemento{
    padding: 10px 15px;
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
        <img src="Screenshot (5672).png" alt="">
    </div>
    <div class="webSite mt-3 pl-3">Trova il sito più vicino a te</div>
    <div class="containerSearch p-1">
        <input type="text" placeholder="Cerca un sito">
        <span>Annulla</span>
    </div>
    <div class="selection d-flex">
        <div class="lista active">LISTA</div>
        <div class="mappa borderW">MAPPA</div>
    </div>
    <div class="listaElementi">
        <div class="elemento d-flex justify-content-between">
            <div>Ponte Abbadesse</div>
            <div>FOT01A</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>Comet</div>
            <div>FOT01A</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>Riccione San Martino</div>
            <div>RNT800</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>RN FIERA</div>
            <div>RNT801</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>RN CENTRO</div>
            <div>RNT802</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>NR MIRAMARE</div>
            <div>RNT803</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>Riccione Alba</div>
            <div>RNT800</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>Rimini consigliano</div>
            <div>RNT800</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>Ponte Abbadesse</div>
            <div>FOT01A</div>
        </div>
        <div class="elemento d-flex justify-content-between">
            <div>RN CENTRO</div>
            <div>RNT802</div>
        </div>

    </div>





    <script>

        const listaElement = document.querySelector('.listaElementi');
        const mappa = document.querySelector('.mappa');
        const lista = document.querySelector('.lista');
        lista.addEventListener('click',function(){
            mappa.classList.remove('active');
            mappa.classList.add('borderW');
            lista.classList.remove('borderW');
            lista.classList.add('active');
            listaElement.classList.remove('none');
        });
        
        mappa.addEventListener('click',function(){
            lista.classList.remove('active');
            lista.classList.add('borderW');
            mappa.classList.remove('borderW');
            mappa.classList.add('active');
            listaElement.classList.add('none');
        });

    </script>
</body>
</html>