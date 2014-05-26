package negocio;

import java.util.List;

public class Operadora {
    private int idOperadora;
    private String nome;
    private String codOperadora;
    
    /* ==========CONSTRUTOR==========*/
    public Operadora(String nome) {
        this.nome = nome;
    }

    public Operadora(int idOperadora, String nome) {
        this.idOperadora = idOperadora;
        this.nome = nome;
    }

    
    /* ==========Get And Set==========*/
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
    
    public int getIdOperadora() {
        return idOperadora;
    }

    public void setIdOperadora(int idOperadora) {
        this.idOperadora = idOperadora;
    }
    
    public String getCodOperadora() {
        return codOperadora;
    }

    public void setCodOperadora(String codOperadora) {
        this.codOperadora = codOperadora;
    }
    
}
