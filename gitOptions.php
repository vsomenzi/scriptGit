<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Commands.php';
$comando;
echo "****** Guia de opções do Git ******\n";
echo "1 - Fazer commit local    2 - Atualizar codigos locais\n";
echo "3 - Fazer commit remoto   4 - Atualizar SIA\n";
echo "5 - Novo branch       6 - Clonar repositório\n";
echo "Opcao:";
$opcao = readline();

switch ($opcao){
    case 1:
        Commands::commitLocal();
        break;
}
