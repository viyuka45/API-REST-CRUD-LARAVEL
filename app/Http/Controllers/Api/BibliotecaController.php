<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Livro;
use App\Models\Autor;
//Classe do controller 
class BibliotecaController extends Controller
{
    //Funcao de status para teste 
    public function status(){
        return['status' => 'ok'];
    }
    //Funcao para Cadastrar Livro
    public function add_livro(Request $request){
        try {
            $livro = new Livro();

            $livro->autor = $request->autor;
            $livro->titulo = $request->titulo;
            $livro->genero = $request->genero;
            $livro->editora = $request->editora;
            $livro->anolancamento = $request->anolancamento;

            $livro->save();

            // Dar um retorno para o usuario
            return ['retorno'=>'Salvo com sucesso!'];
        
        //Caso Haja erro imprimi-lo
        } catch(\Exception $erro){
            return['retorno'=>'erro', 'details'=>$erro];

        }
    }
    //Funcao para Cadastrar Autor
    public function add_autor(Request $request){
        try {
            $autor = new Autor();

            $cod->cod = $request->cod;
            $autor->nome = $request->nome;
            $autor->anoNasc = $request->anoNasc;
            $autor->sexo = $request->sexo;
            $autor->nacionalidade = $request->nacionalidade;
    
            $autor->save();

            // Dar um retorno para o usuario
            return ['retorno'=>'Salvo com sucesso!'];
        
        //Caso Haja erro imprimi-lo
        } catch(\Exception $erro){
            return['retorno'=>'erro', 'details'=>$erro];
    
        }
    
    }
    //Funcao para Listar Livros
    public function list_livro(){

        $livro = Livro::all('id','nome');

        return $livro;
    }

    //Funcao para Listar Autores
    public function list_autor(){

        $autor = Autor::all('id','nome');

        return $autor;
    }

    //Funcao para Selecionar Livro especifico
    public function select_livro($id){

        $livro = Livro::find($id);

        return $livro;
    }

    //Funcao para Selecionar Autor especifico
    public function select_autor($id){

        $autor = Autor::find($id);

        return $autor;
    }

    //Funcao para Editar Livro 
    public function update_livro(Request $request, $id){
        try{
            $livro = Livro::find($id);
            
            $livro->autor = $request->autor;
            $livro->titulo = $request->titulo;
            $livro->genero = $request->genero;
            $livro->editora = $request->editora;
            $livro->anolancamento = $request->anolancamento;

            $livro->save();

            // Dar um retorno para o usuario
            return ['retorno'=>'Editado com sucesso!', 'data'=>$request->all()];

        //Caso Haja erro imprimi-lo
        } catch(\Excepton $erro){
            return['retorno'=>'erro', 'details'=>$erro];
    
        }
    
    }

    //Funcao para Editar Autor
    public function update_autor(Request $request, $id){
        try{
            $autor = Autor::find($id);
            
            $cod->cod = $request->cod;
            $autor->nome = $request->nome;
            $autor->anoNasc = $request->anoNasc;
            $autor->sexo = $request->sexo;
            $autor->nacionalidade = $request->nacionalidade;
    
            $autor->save();

            // Dar um retorno para o usuario            
            return ['retorno'=>'Editado com sucesso!', 'data'=>$request->all()];
        
        //Caso Haja erro imprimi-lo
        } catch(\Excepton $erro){
            return['retorno'=>'erro', 'details'=>$erro];
    
        }
    
    }
    //Funcao para Deletar livro
    public function delete_livro($id){

        try{
           $livro = Livro::find($id);
           
           $livro->delete();

           // Dar um retorno para o usuario
           return ['retorno'=>'Livro deletado com sucesso!'];

        //Caso Haja erro imprimi-lo
        } catch(\Excepton $erro){
            return['retorno'=>'erro', 'details'=>$erro];
    
        }
    }
    
    //Funcao para Deletar Autor
    public function delete_autor($id){

        try{
           $autor = Autor::find($id);
           
           $autor->delete();

            // Dar um retorno para o usuario
           return ['retorno'=>'Autor deletado com sucesso!'];

        //Caso Haja erro imprimi-lo
        } catch(\Excepton $erro){
            return['retorno'=>'erro', 'details'=>$erro];
    
        } 
    }
}