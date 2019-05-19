const button = document.querySelector('button')
const input = document.querySelector('input')

button.addEventListener('click', function(event){
    event.preventDefault()
    campos()
    })

function campos(){
    if(input.value == ""){
        alert("Os campos devem ser preenchidos")
    }else{
        alert("Cadastro realiazado com sucesso")
    }
}