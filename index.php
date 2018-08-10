<?php

//alteração simples de arquivo
//arquivo editado via página do github
echo "Hello world!";


//nova alteração função mensagem
function HelloMessage($mensagem)
{
    return echo "{$mensagem}";
}

echo "O programa diz: ";
HelloMessage("<b>Olá meu mundo</b>");

//outro comentário para teste de conflito
echo "olá curso";
echo "Hello world! 2";

echo "olá vagner";
