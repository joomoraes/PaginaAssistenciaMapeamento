imagem1 = new Image();
imagem1.src = “assistencia_estudantil\images\green.png”;
imagem1on = new Image();
imagem1on.src = “assistencia_estudantil\images\red.png”;

function Ativo1(imagem)
{
if (document.images) document[imagem].src = eval(imagem + “on.src”);
}

function Desativo1(imagem)
{
if (document.images) document[imagem].src = eval(imagem + “.src”);
}

