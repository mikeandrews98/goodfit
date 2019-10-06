package br.com.projeto.beans;


public class Usuario {
	private int codUsuario;
	private String login;
	private String senha;
	private String email;
	private NivelUsuario nivel;
	private Endereco endereco;
	
	public Usuario(int codUsuario, String login, String senha, String email, NivelUsuario nivel, Endereco endereco) {
		super();
		this.codUsuario = codUsuario;
		this.login = login;
		this.senha = senha;
		this.email = email;
		this.nivel = nivel;
		this.endereco = endereco;
	}

	public Usuario() {
		super();
	}
	
	public String getTudo() {
		return  codUsuario+"\n"+login+"\n"+senha+"\n"+email+"\n"+nivel.getTudo()+"\n"+endereco.getTudo();
	}
	
	public void setTudo(int codUsuario, String login, String senha, String email, NivelUsuario nivel, Endereco endereco) {
		this.codUsuario = codUsuario;
		this.login = login;
		this.senha = senha;
		this.email = email;
		this.nivel = nivel;
		this.endereco = endereco;
	}

	public int getCodUsuario() {
		return codUsuario;
	}
	
	public void setCodUsuario(int codUsuario) {
		this.codUsuario = codUsuario;
	}
	
	public String getLogin() {
		return login;
	}
	
	public void setLogin(String login) {
		this.login = login;
	}
	
	public String getSenha() {
		return senha;
	}
	
	public void setSenha(String senha) {
		this.senha = senha;
	}
	
	public String getEmail(){
		return email;
	}
	
	public void setEmail(String email){
		this.email = email;
	}
	
	public NivelUsuario getNivel() {
		return nivel;
	}
	
	public void setNivel(NivelUsuario nivel) {
		this.nivel = nivel;
	}
	
	public Endereco getEndereco() {
		return endereco;
	}
	
	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}
}