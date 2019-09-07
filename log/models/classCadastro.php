<?php

namespace Models;

class ClassCadastro extends ClassCrud
{
	//Realizara a inserção no banco de dados
	public function insertCad($arrVar)
	{
		$this->insertDB(
			"cadastro",
			"?,?,?,?,?,?,?,?,?,?,?,?,?,?",
			array(
				0,
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
				$arrVar['foto'],
			)
		);

		// $this->insertDB(
		// 	"confirmation",
		// 	"?,?,?",
		// 	array(
		// 		0,
		// 		$arrVar['email'],
		// 		$arrVar['token'],
		// 	)
		// );
	}

	//Verificar diretamente no banco se o email já existe
	public function getIssetEmail($email)
	{
		$b=$this->selectDB(
			"*",
			"cadastro",
			"where email=?",
			array(
				$email
			)
		);
		return $r=$b->rowCount();
	}	
}