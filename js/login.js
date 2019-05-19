const button = document.querySelector('button')
const input = document.querySelector('input')

button.addEventListener('click', function(event){
    event.preventDefault()
    acessar()
})

function acessar(){
    if(input.value == ""){
        alert("Preenchas os campos")
    }else{
        alert("Login efetuado com sucesso")
    }
}