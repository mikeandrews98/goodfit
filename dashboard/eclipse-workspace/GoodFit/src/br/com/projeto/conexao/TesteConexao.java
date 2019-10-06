package br.com.projeto.conexao;

import java.sql.Connection;

public class TesteConexao {

	public static void main(String[] args) {
		Connection minhaConexao = null;
		try {
			minhaConexao = Conexao.getConnection();
			 System.out.println("Sua conexão funcionou");
		}catch(Exception e){
			e.printStackTrace();
		}finally {
			try {
				minhaConexao.close();	
			}catch(Exception e) {
				e.printStackTrace();	
			}
		}
	}

}