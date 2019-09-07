//Google captcha
function getCaptcha()
{
    grecaptcha.ready(function() {
        grecaptcha.execute('6LckFZsUAAAAACSjO7XNhZstl0fqCNiRJ9q_aGis', {action: 'homepage'}).then(function(token) {
            const gRecaptchaResponse=document.querySelector("#g-recaptcha-response").value=token;
        });
    });
}

getCaptcha();

//Ajax do formulário de Update

$("#formUpdate").on("submit",function(event){
	event.preventDefault();
	var dados=$(this).serialize();

	$.ajax({
		url: getRoot()+'controllers/controllerUpdate',
		type: 'post',
		dataType: 'json',
		data: dados,
		success: function(response){
			$('.retornoUP').empty();
			if (response.retorno == 'erro') {
				getCaptcha();
				$.each(response.erros,function(key,value){
					$('.retornoUP').append(value+'<br>');
				});
			}else{
				alert('Dados atualizados com sucesso!');
				window.location.href=response.page;
			}
		}
	});
});

//Ajax do formulário de login

$("#formLogin").on("submit",function(event){
	event.preventDefault();
	var dados=$(this).serialize();

	$.ajax({
		url: getRoot()+'controllers/controllerLogin',
		type: 'post',
		dataType: 'json',
		data: dados,
		success: function(response){
			if (response.retorno == 'success') {
				alert('Seja Bem vindo!');
				window.location.href=response.page;
			}else{
				getCaptcha();
				if (response.tentativas == true) {
					$('.loginFormulario').hide();
				}
				$('.resultadoForm').empty();
				$.each(response.erros, function(key,value){
					$('.resultadoForm').append(value+'<br>');
				});
			}
		}
	});
});



//CapsLock
$("#senha").keypress(function(e){
    kc=e.keyCode?e.keyCode:e.which;
    sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65 && kc<=90) && !sk)||(kc>=97 && kc<=122)&&sk){
        $(".resultadoForm").html("Caps Lock Ligado");
    }else{
        $(".resultadoForm").empty();
    }
});

//Máscaras do formulário de cadastro
VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99");
VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999");


//Retorno do root
function getRoot()
{
	var root="http://"+document.location.hostname+"/log/";
	return root;
}

//Ajax do formulário de cadastro

$("#formCadastro").on("submit",function(event){
	event.preventDefault();
	var dados=$(this).serialize();

	$.ajax({
		url: getRoot()+'controllers/controllerCadastro',
		type: 'post',
		dataType: 'json',
		data: dados,
		success: function(response){
			$('.retornoCad').empty();
			if (response.retorno == 'erro') {
				getCaptcha();
				$.each(response.erros,function(key,value){
					$('.retornoCad').append(value+'<br>');
				});
			}else{
				alert('Dados cadastrados com sucesso! Efetue Login:');
				window.location.href=response.page;
			}
		}
	});
});