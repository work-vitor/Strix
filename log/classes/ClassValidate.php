<?php
    namespace Classes;

    use Models\ClassCadastro;
    use Models\ClassLogin;
    use ZxcvbnPhp\Zxcvbn;
    use Classes\ClassPassword;
    use Models\ClassUpdate;

    class ClassValidate{

        private $erro=[];
        private $cadastro;
        private $password;
        private $login;
        private $tentativas;
        private $session;
        private $update;

        public function __construct()
        {
            $this->cadastro=new ClassCadastro();
            $this->password=new ClassPassword();
            $this->login=new ClassLogin();
            $this->session=new ClassSessions();
            $this->update=new ClassUpdate();
        }

        //Retorno de atributo erro
        public function getErro()
        {
            return $this->erro;
        }

        //Atribuir uma mensagem ao fim do array erro
        public function setErro($erro)
        {
            array_push($this->erro,$erro);
        }

        //Validar se os campos desejados foram preenchidos
        public function validateFields($par)
        {
            $i=0;
            foreach ($par as $key => $value){
                if(empty($value)){
                    $i++;
                }
            }
            if($i==0){
                return true;
            }else{
                $this->setErro("Preencha todos os dados!");
                return false;
            }
        }

        //Validação se o dado é um email
        public function validateEmail($par)
        {
            if(filter_var($par, FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                $this->setErro("Email inválido!");
                return false;
            }
        }

        //Validar se o email existe no banco de daos (action null para cadastro)
        public function validateIssetEmail($email,$action=null)
        {
            $b=$this->cadastro->getIssetEmail($email);
            if($action==null){
                if($b > 0){
                    $this->setErro("Email já cadastrado!");
                    return false;
                }else{
                    return true;
                }
            }else{
                if($b > 0){
                    return true;
                }else{
                    $this->setErro("Email não cadastrado!");
                    return false;
                }
            }
        }

        //Validação se o dado é uma data
        public function validateData($par)
        {
            $data=\DateTime::createFromFormat("d/m/Y",$par);
            if(($data) && ($data->format("d/m/Y") === $par)){
                return true;
            }else{
                $this->setErro("Data inválida!");
                return false;
            }
        }

        //Validação  se a data é igual a data do banco de dados
        public function validateDataNascimento($dataNascimento,$email) 
        {
            $dataDb=$this->login->getDataUser($email);
            if($dataNascimento == $dataDb){
                return true;
            }else{
                $this->setErro("Data de nascimento não confere com o usuário!");
                return false;
            }
        }

        //Validação se é um cpf real
        public function validateCpf($par)
        {
            $cpf = preg_replace('/[^0-9]/', '', (string) $par);
            if (strlen($cpf) != 11){
                $this->setErro("Cpf Inválido!");
                return false;
            }
            for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
                $soma += $cpf{$i} * $j;
                $resto = $soma % 11;
            if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
            {
                $this->setErro("Cpf Inválido!");
                return false;
            }
            for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
                $soma += $cpf{$i} * $j;
                $resto = $soma % 11;
                return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
        }

        //Verificar se a senha é igual a confirmação de senha
        public function validateConfSenha($senha,$senhaConf)
        {
            if($senha === $senhaConf){
                return true;
            }else{
                $this->setErro("Senha diferente de confirmação de senha!");
            }
        }

        //Verificar a força da senha
        public function validateStrongSenha($senha,$par=null)
        {
            $zxcvbn=new Zxcvbn();
            $strength = $zxcvbn->passwordStrength($senha);

            if($par==null){
                if($strength['score'] >= 2){
                    return true;
                }else{
                    $this->setErro("Utilize uma senha mais forte!");
                }
            }else{
                /*login*/
            }
        }

        //Verificação da senha digitada com o hash no banco de dados
        public function validateSenha($email,$senha)
        {
            if ($this->password->verifyHash($email,$senha)) {
                return true;
            }else{
               $this->setErro("Usuário ou Senha Inválidos!"); 
            }
        }

        //Verificar se o captcha está correto
        public function validateCaptcha($captcha,$score=0.1)
        {
            $return=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRETKEY."&response={$captcha}");
            $response=json_decode($return);
            if($response->success == true && $response->score >= $score){
            return true;
            }else{
                $this->setErro("Captcha Inválido! Atualize a página e tente novamente.");
            }
        }

        //Validação final do cadastro
        public function validateFinalCad($arrVar)
        {   
            if (count($this->getErro())>0) {
                $arrResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                $arrResponse=[
                    "retorno"=>"success",
                    "page"=>'index',
                    "tentativas"=>$this->tentativas
                ];
                $this->cadastro->insertCad($arrVar);
            }
            return json_encode($arrResponse);
        }

        //Validação final update
        public function validateFinalUpdate($arrVar)
        {
           if (count($this->getErro())>0) {
                $arrResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro()
                ];
            }else{
                $arrResponse=[
                    "retorno"=>"success",
                    "page"=>'user',
                    "tentativas"=>$this->tentativas
                ];
                $this->update->updateUser($arrVar);
            }
            return json_encode($arrResponse);
        }

        //Validação das tentativas
        public function validateAttemptLogin()
        {
            if($this->login->countAttempt() >= 5){
                $this->setErro("Você realizou mais de 5 tentativas!");
                $this->tentativas=true;
                return false;
            }else{
                $this->tentativas=false;
                return true;
            }
        }

        //Método de validação de confirmação de email
        public function validateUserActive($email)
        {
            $user=$this->login->getDataUser($email);
            if($user["data"]["status"] == "confirmation"){
                if(strtotime($user["data"]["dataCriacao"])<= strtotime(date("Y-m-d H:i:s"))-432000){
                    $this->setErro("Ative seu cadastro pelo link do email");
                    return false;
                }else{
                    return true;
                }
            }else{
                return true;
            }
        }

        //Validação final do login
        public function validateFinalLogin($email)
        {
            if(count($this->getErro()) >1){
                $this->login->insertAttempt();
                $arrResponse=[
                    "retorno"=>"erro",
                    "erros"=>$this->getErro(),
                    "tentativas"=>$this->tentativas
                ];
            }else{
                $this->login->deleteAttempt();
                $this->session->setSessions($email);

                $arrResponse=[
                    "retorno"=>"success",
                    "page"=>'index',
                    "tentativas"=>$this->tentativas
                ];
            }
            return json_encode($arrResponse);
        }
    }
