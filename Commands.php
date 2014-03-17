<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commands
 *
 * @author vitor
 */
class Commands {

    /**
     * Faz um commit no branch em execução local.
     * 
     * Executa: sudo git commit
     */
    public static function commitLocal(){
        shell_exec('sudo git commit');
    }
}
