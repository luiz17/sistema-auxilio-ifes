package negocio;

import java.util.Date;
import java.util.List;

public class Compromisso {
    
  private int idCompromisso;
  
  private String titulo;

  private String data;

  private String horaInicio;

  private String horaFim;

  private Contato contato;

  /* ==========CONSTRUTOR==========*/
    public Compromisso(String titulo, String data, String horaInicio, String horaFim, Contato contato) {
        this.titulo = titulo;
        this.data = data;
        this.horaInicio = horaInicio;
        this.horaFim = horaFim;
        this.contato = contato;
    }

    public Compromisso(int idCompromisso, String titulo, String data, String horaInicio, String horaFim, Contato contato) {
        this.idCompromisso = idCompromisso;
        this.titulo = titulo;
        this.data = data;
        this.horaInicio = horaInicio;
        this.horaFim = horaFim;
        this.contato = contato;
    }

    /* ==========Get And Set==========*/
    public int getIdCompromisso() {
        return idCompromisso;
    }

    public void setIdCompromisso(int idCompromisso) {
        this.idCompromisso = idCompromisso;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    public String getHoraInicio() {
        return horaInicio;
    }

    public void setHoraInicio(String horaInicio) {
        this.horaInicio = horaInicio;
    }

    public String getHoraFim() {
        return horaFim;
    }

    public void setHoraFim(String horaFim) {
        this.horaFim = horaFim;
    }

    public Contato getContato() {
        return contato;
    }

    public void setContato(Contato contato) {
        this.contato = contato;
    }

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
  
}
