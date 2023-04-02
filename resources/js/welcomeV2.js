const contenedor = document.querySelector('.contenedor');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnLogin = document.querySelector('.btn-login');
const consoleContent = document.querySelector('.console-container');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=>{
    contenedor.classList.add('active');
});

loginLink.addEventListener('click', ()=>{
    contenedor.classList.remove('active');
});

btnLogin.addEventListener('click', ()=>{
    contenedor.classList.add('active-login');
    consoleContent.classList.add('active');


});

iconClose.addEventListener('click', ()=>{
    contenedor.classList.remove('active-login');
    setTimeout(() => {
        consoleContent.classList.remove('active');
      }, 1000);
});




// Sistema-mensajeria
// function([string1, string2],target id,[color1,color2])
consoleText(['SCHOOL TRANSPORT', 'SEGURIDAD Y CONFIANZA'], 'text',['#ffffffcc']);

// consoleText(['Mensajeria.'], 'text2',['#00c8bb']);

function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
            waiting = true;
            target.innerHTML = words[0].substring(0, letterCount)
            window.setTimeout(function() {
                var usedColor = colors.shift();
                colors.push(usedColor);
                var usedWord = words.shift();
                words.push(usedWord);
                x = 1;
                target.setAttribute('style', 'color:' + colors[0])
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
            waiting = true;
            window.setTimeout(function() {
                x = -1;
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (waiting === false) {
            target.innerHTML = words[0].substring(0, letterCount)
            letterCount += x;
        }
    }, 120)
    window.setInterval(function() {
        if (visible === true) {
            con.className = 'console-underscore hidden'
            visible = false;

        } else {
            con.className = 'console-underscore'

            visible = true;
        }
    }, 400)
}
