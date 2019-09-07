<?php

namespace Classes;

class ClassLayout{


	//Setar as tags head
	public static function setHead($title , $description , $author='Strix'){
        session_start();
		$html="<!doctype html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>\n";
        $html.="  <meta charset='UTF-8'>\n";
        $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        $html.="  <meta name='author' content='$author'>\n";
        $html.="  <meta name='format-detection' content='telephone=no'>\n";
        $html.="  <meta name='description' content='$description'>\n";
        $html.="<script src=\"https://kit.fontawesome.com/fd7646e00c.js\"></script>";
        $html.="  <title>$title</title>\n";
        $html.="<link href='https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap' rel='stylesheet'>";
        $html.="<link href='https://fonts.googleapis.com/css?family=Merriweather&display=swap' rel='stylesheet'>";
        $html.="<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet'>";
        $html.="<link href='https://fonts.googleapis.com/css?family=Merriweather&display=swap' rel='stylesheet'>";
        $html.="<link href='https://fonts.googleapis.com/css?family=Titillium+Web:900' rel='stylesheet'>";
        //FAVICON
        $html.="<link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.css'>\n";
        $html.="</head>\n\n";
        $html.="<body>\n";
        echo $html;

	}

    //Restrito
    public static function setHeadRestrito()
    {
        $session=new ClassSessions();
        $session->verifyInsideSession();
    }

    // Menu não logado
        public static function setBar(){
            $html="<div class='center'>
            <!-- TOP NAV INICIO -->
            <div class='topnav' id='myTopnav'>
            <a href='".DIRPAGE."index'><img class='logo-width' src='img/Logo1.png' alt=''></a>
            <a class='yellow' href='".DIRPAGE."index'>Início</a>
            <a class='blue' href='".DIRPAGE."noticia'>Notícias</a>
            <a class='red' href='".DIRPAGE."sobre'>Sobre</a>
            <button class='tomodal green' id='myBtn'>Login</button>
            <button class='tomodal green' id='myBttn'>Cadastro</button>
            <a href='javascript:void(0);' style='font-size:15px; width: 15px;' class='icon' onclick='myFunction()'>&#9776;</a>
            </div>
            </div>\n";

            echo $html;
        }

    // Menu logado
        public static function setBarlog(){
            $html="<div class='center'>
            <!-- TOP NAV INICIO -->
            <div class='topnav' id='myTopnav'>
            <a href='".DIRPAGE."index'><img class='logo-width' src='img/Logo1.png' alt=''></a>
            <a class='yellow' href='".DIRPAGE."index'>Início</a>
            <a class='blue' href='".DIRPAGE."noticia'>Notícias</a>
            <a class='red' href='".DIRPAGE."Sobre'>Sobre</a>
            <a class='red' href='".DIRPAGE."exclusivo'>Exclusivo</a>
            <a class='red' href='".DIRPAGE."user'>Meu Perfil</a>
            <a class='red' href='".DIRPAGE."controllers/controllerLogout'>Sair</a>
            <a href='javascript:void(0);' style='font-size:15px; width: 15px;' class='icon' onclick='myFunction()'>&#9776;</a>
            </div>
            </div>\n";

            echo $html;
        }

    //Footer Pedro
    public static function Footer(){
        $html="<footer id='footer'>
        <a href='index' id='logorodape'><img id='imgrodape'src='img/Logo2.png'></a>
        <div id='redesrodape'>
        <a href='https://www.facebook.com/StrixVirtual' target='_blank' id='iconsredes'><i id='face' class='fab fa-facebook-f'></i></a>
        <a href='https://br.pinterest.com/strixvirtual/' target='_blank' id='iconsredes'><i id='pinterest' class='fab fa-pinterest'></i></a>
        <a href='https://www.instagram.com/strixvirtual/?hl=pt-br' target='_blank' id='iconsredes'><i id='instagram' class='fab fa-instagram'></i></a>
        <a href='https://twitter.com/Strix91160423' target='_blank' id='iconsredes1'><i id='twitter' class='fab fa-twitter-square'></i></a>
        </div>
        <hr id='hrodape'>
        <a id='coprodape'>© Copyright 2019 Strix</a>
        </footer>\n";
                
        echo $html;
                
    }   

    public static function setModais(){
        $html="<div id=\"myModal\" class=\"modal\">

        <!-- Modal content -->
        <div class=\"modal-content\">
          <span class=\"close\">&times;</span>
          <div class=\"login center auto\">
                  <h1>Login</h1>
                  <form name=\"formLogin\" id=\"formLogin\" action=\"404.php\" method=\"POST\">
      
                      <!---Resultado--->
                      <div class=\"resultadoForm\">
                          
                      </div>
      
                      <input class=\"w80 input\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email:\" required>
                      <input class=\"w80 input\" type=\"password\" name=\"senha\" id=\"senha\" placeholder=\"Senha:\" required>
                      
                      <input class=\"w80 input\" type=\"hidden\" id=\"g-recaptcha-response\" name=\"g-recaptcha-response\" required>
      
                      <input class=\"w20-80 input submit\" type=\"submit\" value=\"Entrar\">
      
                      <div class=\"\"><a class='red' href='".DIRPAGE."esqueciSenha'>Esqueci minha senha</a></div>
                      <div class=\"\"><p>Ainda não tem uma conta? <button class=\"btn-transformado\" onclick=\"getElementById('myModal').style.display='none'; getElementById('myModl').style.display='block'\">Cadastre-se</button>!</p></div>
                  </form>
              </div>
        </div>
      
      </div>
      <!-- MODAL FIM -->
      <div id=\"myModl\" class=\"modl\">
          <!-- Modal content -->
          <div class=\"modl-content\">
              <span class=\"clos\">&times;</span>
              <div class=\"login center auto\">
                  <h1>Cadastro</h1>
      
                  <div class=\"retornoCad\">
                      
                  </div>
      
                  <form name=\"formCadastro\" id=\"formCadastro\" action=\"<?php echo DIRPAGE.'controllers/controllerCadastro'; ?>\" method=\"POST\">
                          <input class=\"w80 input\" type=\"text\" name=\"nome\" id=\"nome\" placeholder=\"Nome:\" required>
                          <input class=\"w80 input\" type=\"text\" name=\"sobrenome\" id=\"sobrenome\" placeholder=\"Sobrenome:\" required>
                          <input class=\"w80 input\" type=\"text\" name=\"nomu\" id=\"nomu\" placeholder=\"Nome de Usuário:\" required>            
                          <select name=\"sexo\" id=\"sexo\" class=\"w86 input\" required>
                              <option value=\"\">Selecione</option>
                              <option value=\"Masculino\">Masculino</option>
                              <option value=\"Feminino\">Feminino</option>
                          </select>            
                          <input class=\"w80 input\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"E-mail:\" required>            
                          <input class=\"w80 input\" type=\"text\" name=\"cpf\" id=\"cpf\" placeholder=\"Cpf:\" required>            
                          <input class=\"w80 input\" type=\"text\" name=\"dataNascimento\" id=\"dataNascimento\" placeholder=\"Data de nascimento:\" required>            
                          <input class=\"w80 input\" type=\"password\" name=\"senha\" id=\"senha\" onkeypress=\"getElementById('balao').style.display='block'\" placeholder=\"Senha:\" required>        
                          <div id=\"balao\" class=\"balao\">
                              <span class=\"clos\" onclick=\"getElementById('balao').style.display='none'\">&times;</span>
                              <p>A senha deve conter no mínimo 8 caracteres, sendo pelo menos uma letra maiúscula, um caractere especial e um número.</p>
                              <br>
                              <p class=\"ssmallp\">(ex: #Strix123)</p>
                          </div>    
                          <input class=\"w80 input\" type=\"password\" name=\"senhaConf\" id=\"senhaConf\" placeholder=\"Confirmar Senha:\" required>            
                                      
                          <input class=\"w20-80 input submit\" type=\"submit\" value=\"Cadastrar\">                                    
                  </form>
                  <div class=\"\"><p>Já possui uma conta? Faça <button class=\"btn-transformado\" onclick=\"getElementById('myModl').style.display='none'; getElementById('myModal').style.display='block'\">Login</button>!</p></div>
                  </div>
          </div>
      </div>";
      echo $html;
    }


	//Setar as tags do footer
	public static function setFooter(){
                //session_start();
                $html="<script src='".DIRPAGE."lib/js/vanilla-masker.min.js'></script>\n";

                $html.="<script src='https://www.google.com/recaptcha/api.js?render=".SITEKEY."'></script>\n";

                $html.="<script src='".DIRPAGE."lib/js/efect.js'></script>\n";

                $html.="<script src='".DIRPAGE."lib/js/zepto.min.js'></script>\n";
        
                $html.="<script src='".DIRPAGE."lib/js/javascript.js'></script>\n";

                $html.="<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>\n";

                $html.="<script>tinymce.init({ selector:'textarea' });</script>\n";

                $html.="</body>\n";
                $html.="</html>\n";
                echo $html;
        }
        
}