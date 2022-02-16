const canvas = document.querySelector('#canvas');
canvas.width = document.body.clientWidth;
canvas.height = document.body.clientHeight;
console.log(canvas.height);


const w = document.body.clientWidth;
const h = document.body.clientHeight;
//console.log(h);

const postion = Array(300).join(0).split('');
console.log(postion);
const ctx = canvas.getContext("2d");

const initMatrix = () =>{
    ctx.fillStyle = "rgba(0, 10, 0, 0.5)";
    //ctx.fillStyle = "#00fff0";
    ctx.fillRect(0,0, w ,h);

    ctx.fillStyle = '#4caf50';
    ctx.font = '15pt';

    postion.map((y, index) => {
        const text = String.fromCharCode(1e3 + Math.random() * 30);
        const x = (index * 15) + 15;

        canvas.getContext('2d').fillText(text, x, y);

        y > 100 + Math.random() * 1e5 
        ? (postion[index] = 0)
        : (postion[index] = y + 15);
    });
}

setInterval(initMatrix, 150);


//Ingresa Password
const palabraClave = (e) =>{
    if (e.which == 13 || e.keyCode == 13) { // 13 es ENTER
        //code to execute here
        alert('aaa');
        return false;
    }
    //return true;
}

const password = document.getElementById('password');

password.addEventListener('keyup', palabraClave);

