package negocio;

import java.util.List;

public class Telefone {
    private int idTelefone;
    
    private String numero;

    private Contato contato;
    
    private Operadora operadora;

    /* ==========CONSTRUTOR==========*/
    public Telefone(String numero, Contato contato, Operadora operadora) {
        this.numero = numero;
        this.contato = contato;
        this.operadora = operadora;
    }

    public Telefone(int idTelefone, String numero, Contato contato, Operadora operadora) {
        this.idTelefone = idTelefone;
        this.numero = numero;
        this.contato = contato;
        this.operadora = operadora;
    }

    
    /* ==========Get And Set==========*/
    public String getNumero() {
        return numero;
    }

    public void setNumero(String numero) {
        this.numero = numero;
    }

    public Contato getContato() {
        return contato;
    }

    public void setContato(Contato contato) {
        this.contato = contato;
    }

    public Operadora getOperadora() {
        return operadora;
    }

    public void setOperadora(Operadora operadora) {
        this.operadora = operadora;
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