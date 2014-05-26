package negocio;

import java.util.List;

public class Contato {
  private int idContato;
    
  private String nome;

  private String email;

  private Endereco endereco;
 
  private Empresa empresa;
  
  private List telefone;

  /* ==========CONSTRUTOR==========*/
    public Contato(String nome, String email, Endereco endereco, Empresa empresa) {
        this.nome = nome;
        this.email = email;
        this.endereco = endereco;
        this.empresa = empresa;
    }

    public Contato(int idContato, String nome, String email, Endereco endereco, Empresa empresa, List telefone) {
        this.idContato = idContato;
        this.nome = nome;
        this.email = email;
        this.endereco = endereco;
        this.empresa = empresa;
        this.telefone = telefone;
    }
    
    

    /* ==========Get And Set==========*/
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public Endereco getEndereco() {
        return endereco;
    }

    public void setEndereco(Endereco endereco) {
        this.endereco = endereco;
    }

    public Empresa getEmpresa() {
        return empresa;
    }

    public void setEmpresa(Empresa empresa) {
        this.empresa = empresa;
    }

    public List getTelefone() {
        return telefone;
    }

    public void setTelefone(List telefone) {
        this.telefone = telefone;
    }
    

}
