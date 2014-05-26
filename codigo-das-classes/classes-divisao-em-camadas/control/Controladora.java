/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package controladora;

import java.util.Date;
import java.util.List;
import negocio.Compromisso;
import negocio.Contato;
import negocio.Empresa;
import negocio.Operadora;
import negocio.Telefone;

/**
 *
 * @author Ruan
 */
public class Controladora {
    
    /* ==========MÉTODOS==========*/

  public void addCompromisso( Compromisso compromisso){
      
  }
  
  public void altCompromisso( Compromisso compromisso){
      
  }
  
  public void excCompromisso( Compromisso compromisso){
      
  }
  
  public List consultCompromisso( String tituloCompromisso){
      List listaCompromissos = null;
      
      return listaCompromissos;
  }
     
  public boolean verificaData(Date data){
      boolean resp = true;
      
      return resp;
  }
  
      /*==========METODOS==========*/
  private void addContato(String nome,String email, String rua,String numero, String bairro, String cidade, 
          String uf, String nomeEmpresa,String ruaEmpresa,String numeroEmpresa, String bairroEmpresa, String cidadeEmpresa,
          String ufEmpresa, List telefone){
      
      
  }
  private void altContato(Contato contato, String nome,String email, String rua,String numero, String bairro, String cidade, 
          String uf, String nomeEmpresa,String ruaEmpresa,String numeroEmpresa, String bairroEmpresa, String cidadeEmpresa,
          String ufEmpresa, List telefone){
      
  }
  
  private void excContato(Contato contato){
      
  }
  
  private List consultContato(String nomeContato){
      List contatos = null;
      
      return contatos;
      
  }
  
    /*==========METODOS==========*/

    public void addEmpresa(String nomeEmpresa,String ruaEmpresa,String numeroEmpresa, String bairroEmpresa, String cidadeEmpresa,
          String ufEmpresa){
        
    }
    public void altEmpresa(Empresa empresa){
        
    }
    
        /*==========METODOS==========*/

    public void addOperadora(String nome){
        
    }
    public void altOperadora(Operadora op){
        
    }
    public void excOperadora(Operadora op){
        
    }
    public List consultOperadora(String nome){
        List listaOperadora = null;
        return listaOperadora;
    }
    
        /*==========METODOS==========*/

    public void addTelefone(Contato contato, String numero){
        
    }
    
    public void altTelefone(Telefone tel){
        
    }
    public void excTelefone(Telefone tel){
        
    } 
    public List consultTelefone(Contato contato){
        List listaTelefones = null;
        return listaTelefones;
    }
    
}
