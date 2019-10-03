package br.com.projeto.bo;

import br.com.projeto.beans.Candidato;
import br.com.projeto.dao.CandidatoDAO;

public class CandidatoBO {
	
	public String novoCandidato(Candidato novoCandidato) throws  Exception{
		//validando codigo		
		if(novoCandidato.getCodCandidato() <= 0) {
			return "Codigo inválido";
		}
		
		//validando nome
		if((novoCandidato.getNome().length() > 150) || (novoCandidato.getNome().length() < 3)) {
			return "Nome inválido";
		}else {
			novoCandidato.getNome().toUpperCase();
		}
		
		//validando cpf
		if(novoCandidato.getCpf().length() != 14) {
			return "CPF inválido";
		}
		
		CandidatoDAO candidatoDAO = new CandidatoDAO();
		Candidato candidato = candidatoDAO.getCandidato(novoCandidato.getCodCandidato());
				
		if (candidato.getCodCandidato() == 0){
			return candidatoDAO.addCandidato(novoCandidato) + "Candidato Cadastrado"; 
		}else {
			return "Candidato já existe";
		}
	}		
}
