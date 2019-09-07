<?php

namespace Models;

class ClassUpdate extends ClassCrud
{
	//Realizara o update no banco de dados
	public function updateUser($arrVar)
	{
		$this->updateDB(
			"cadastro",
			"nome=?,sobrenome=?,nome_usu=?,email=?,cpf=?,sexo=?,data_nasci=?,dataCriacao=?,permissoes=?,status=?,senha=?,conf_senha=?",
            "id=?",
			array(
				$arrVar['nome'],
				$arrVar['sobrenome'],
				$arrVar['nome_usuario'],
				$arrVar['email'],
				$arrVar['cpf'],
				$arrVar['sexo'],
				$arrVar['dataNascimento'],
				$arrVar['dataCreate'],
				'users',
				'confirmation',
				$arrVar['hashSenha'],
				$arrVar['hash_Conf_Senha'],
				$arrVar['id']
			)
		);
	}
}