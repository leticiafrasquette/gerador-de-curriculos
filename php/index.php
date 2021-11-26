<?php
class Curriculo {
   
    public static function gerador() {
        
        $informacoes = array(
            'nome' => $_POST['nome'],
            'nacionalidade' => $_POST['nacionalidade'],
            'endereco' => $_POST['endereco'],
            'email' => $_POST['email'],
            'idade' => $_POST['idade'],
            'telefone' => $_POST['telefone'],
            'objetivo' => $_POST['objetivo'],
            'formacoes' => isset($_POST['formacao-curso']) ?
            array(
        'curso' => $_POST['formacao-curso'],
        'instituicao' => $_POST['formacao-instituicao'],
        'conclusao' => $_POST['formacao-conclusao']
            ) : null, 
            'experiencias' => isset($_POST['experiencia-empresa']) ?
            array(
        'empresa' => $_POST['experiencia-empresa'],
        'funcao' => $_POST['experiencia-funcao'],
        'inicio' => $_POST['experiencia-inicio'],
        'fim' => $_POST['experiencia-fim'],
            ) : null 
        );
        
        return $informacoes;
        }
        
        

}