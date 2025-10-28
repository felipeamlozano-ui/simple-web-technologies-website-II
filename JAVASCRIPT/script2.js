const registro = document.getElementById('registro');
const cont = document.getElementById('cont');
const perfil = document.querySelector('.perfil');
const tr = document.getElementById('tr');
registro.addEventListener("click", function() {
    cont.style.display = "none";
    perfil.style.display = "flex";
    tr.style.display = "block";
});
const voltar = document.getElementById('voltar')
voltar.addEventListener("click",function(){
    window.location.href = "../HTML/paginaprincipal.php"
});
const voltarbut = document.getElementById('voltarbut');
voltarbut.addEventListener("click",function(){
    window.location.href = "../HTML/paginaprincipal.php"
});