/*
    Função para juntar nome e sobrenome
*/

function juntarNome(){
    const nome = document.getElementById('nome').value;
    const sobreNome = document.getElementById('sobrenome').value;

    let nomeCompleto = nome + ' ' + sobreNome;

    document.getElementById('nomeCompleto').innerText = nomeCompleto;
}