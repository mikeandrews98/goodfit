package br.com.projeto.test;

import javax.swing.JOptionPane;

import br.com.projeto.beans.Usuario;
import br.com.projeto.dao.EnderecoDAO;
import br.com.projeto.dao.NivelUsuarioDAO;
import br.com.projeto.dao.UsuarioDAO;

public class CadastroUsuarioDAO {

	public static void main(String[] args) {
		UsuarioDAO dao = null;
		Usuario usu = null;
		try {
			dao = new UsuarioDAO();
			usu = new Usuario();
			
			usu.setEmail(JOptionPane.showInputDialog("Digite seu email"));
			usu.setEndereco(new EnderecoDAO().getEndereco(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do seu Endereco"))));
			usu.setLogin(JOptionPane.showInputDialog("Digite o seu login"));
			usu.setNivel(new NivelUsuarioDAO().getNivelUsuario(Integer.parseInt(JOptionPane.showInputDialog("Digite o codigo do nivel de usuario"))));
			usu.setSenha(JOptionPane.showInputDialog("Digite uma senha"));
			
			dao.addUsuario(usu);
		}catch(Exception e) {
			e.printStackTrace();
		}finally {
			try {
				
			}catch(Exception e) {
				
			}
		}
	}

}