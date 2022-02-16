const getHora = () =>{
    const fecha = new Date();
    console.log(fecha);
    
    const tiempo = {
        hora : fecha.getHours(),
        minuto : fecha.getMinutes(),
        segundo : fecha.getSeconds()
    };

    const ahora = `${tiempo.hora} : ${tiempo.minuto} : ${tiempo.segundo}`;
    console.log(ahora);

    
    document.querySelector("#reloj").innerHTML = ahora;

    
}

setInterval(function(){
    getHora();
},1000)
