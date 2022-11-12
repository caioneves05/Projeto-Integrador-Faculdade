const form  = document.getElementById('form');
const campos = document.querySelectorAll('input');
const spam = document.querySelectorAll('span');
const emailRegex = /\S+@\S+\.\S+/;
const phoneRegex = /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/;
form.addEventListener('submit', function(event){
    event.preventDefault();
    validateName();
    emailValidate();
    validatePassword();
    validateCpf();
    validatePhone();
})


//Criando uma função para exibir uma mensagem de erro.
function setError(index){
    campos[index].style.border = ('3.5px solid #e63636');
    spam[index].style.display = ('block');
}

//criando uma função para remover a mensagem de erro
function removeError(index){
    campos[index].style.border = ('');
    spam[index].style.display = ('none');
}



function validateName(){
    if (campos[0].value.length < 3){
        setError(0);
    }else{
        removeError(0);
    }
}

function emailValidate(){
    if (!emailRegex.test(campos[1].value)){
        setError(1);
    }else{
        removeError(1)
    }
}
function validatePassword(){
    if(campos[2].value.length < 8){
        setError(2);
    }else{
        removeError(2);
    }
}
function validateCpf(){
    if(campos[3].value.length < 11){
        setError(3);
    }else{
        removeError(3);
    }
}
function validatePhone(){
    if (!phoneRegex.test(campos[4].value)){
        setError(4);
    }else
        removeError(4);
}