<?php
$paginas = ['home'=>  'SONETO DO AMOR TOTAL <br>
<hr>
<br>

Amo-te tanto, meu amor... não cante <br>
O humano coração com mais verdade...<br>
Amo-te como amigo e como amante <br>
Numa sempre diversa realidade.<br>
<br>
Amo-te afim, de um calmo amor prestante<br>
E te amo além, presente na saudade.<br>
Amo-te, enfim, com grande liberdade <br>
Dentro da eternidade e a cada instante.<br>
<br>
Amo-te como um bicho, simplesmente<br>
De um amor sem mistério e sem virtude<br>
Com um desejo maciço e permanente.<br>
<br>
E de te amar assim, muito e amiúde<br>
É que um dia em teu corpo de repente<br>
Hei de morrer de amar mais do que pude. 
<br>
(Vinicius de Moraes)
<br>
<br>
<hr>
<br>
ELA ERROU,EU ERREI,NÓS DOIS ERRAMOS... (POESIA ALEATÓRIA)
<hr>
<br>
Ela errou,eu errei,<br>
Nós dois erramos.<br>
O que havia entre nós<br>
Foi acabando.<br>
Nada restou,é esta a realidade<br>
Hoje existe apenas a amizade.<br>
<br>

Eu falhei,ela falhou,<br>
Nós dois falhamos.<br>
No dia a dia<br>
Fomos nos distanciando.<br>
Uma relação sem contato e sem carinho,<br>
Ela ausente e eu sozinho.<br>
<br>

Ela cansou,eu cansei,<br>
Nós dois cansamos.<br>
A magia,aos poucos,<br>
Foi dissipando.<br>
Nada em comum,nem mesmo cumplicidade.<br>
Viver de aparências é a realidade.<br>
<br>

Eu me isolei,<br>
Ela se afastou.<br>
Me acomodei,<br>
Ela se acomodou.<br>
Nada restou ,entre nós dois,<br>
Solidão a dois,é isso o que ficou.<br>
<br>

Eu errei,ela errou,<br>
Nós dois erramos!!!<br>
Culpado maior,<br>
Não existe,nós falhamos.<br>
Ela errou,tudo bem,eu perdoei,<br>
Condenação maior,<br>
Veio quando eu errei!<br>
<br>
(Autor desconhecido)
','sobre'=>'Essa página é sobre poesias e poemas de pessoas conhecidas e desconhecidas,<br> mas que são encantadores. ', 'contato'=>'<form><input type ="text" placeholder="Seu nome..." /></form>','FAQ'=>'Perguntas Frequentes: <br> Qual o objetivo da página?<br>
Quem é o criador? <br>
Eu posso mandar meu poema ou poesia? <br>
Como mandar um poema para nosso site?','loja'=>'Temos camisas com frases dos poetas<br>
Bonés pra você ficar estiloso <br>
Casacos e muito mais'];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Youtube</title>
    <style type = "text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
        background-color:#F5AC72;
        padding: 8px 10px;
        text-align: center;
    }
a{
    display: inline-block;
    margin:0 10px;
    color: #3E4E50;
    font-size: 18px;
}
section{
    max-width: 960px;
    margin: 20px auto;
    padding: 0 2%;
}
h2{
    background-color:#DF6807;
    color:#3E4E50;
    padding: 8px 10px;
}
p{
    color: black;
    margin-top:10px;
    font-size:17px;
}

        </style>
</head>
<body>  
    <header>
        <?php 
        foreach ($paginas as $key => $value){
echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
        }
        ?>
</header>
<section>
    <h2> <?php
    $pagina = (isset($_GET['page']) ? $_GET['page']:'home');
if(!array_key_exists($pagina, $paginas)){
    $pagina = 'home';
}

    echo ucfirst($pagina);

    ?></h2>
<p><?php echo $paginas[$pagina]; ?></p>
</section>
</body>
</html>