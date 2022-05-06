function alterarCaixaComentario(){

    if(document.getElementById("comentario").disabled){
        document.getElementById("comentario").disabled = false;
    }else{
        document.getElementById("comentario").disabled = true;
    }
}

    const btn = document.querySelector(".btn_delete");

    btn.addEventListener("click", function(event) {
        event.preventDefault();
    });







