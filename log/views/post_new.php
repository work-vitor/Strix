<?php \Classes\ClassLayout::setHead('Upload','Essa é a Upload.','João Strix'); ?>
<?php
    if (isset($_SESSION['login'])) {
        \Classes\ClassLayout::setBarlog();
    }else{
        \Classes\ClassLayout::setBar();
    }


?>
<?php

//Conexão
include_once 'db_connect.php';

if(isset($_POST['pika'])){

    $erros = array();

    $titulo = mysqli_escape_string($connect, $_POST['titulo']);

    $subtitulo = mysqli_escape_string($connect, $_POST['subtitulo']);

    $hashtag = mysqli_escape_string($connect, $_POST['hashtag']);

    $destaque = mysqli_escape_string($connect, $_POST['destaque']);

    $conteudo = mysqli_escape_string($connect, $_POST['post']);

    $id_adm = mysqli_escape_string($connect, $_GET['id']);

    $dataCreate=date("Y-m-d H:i:s");

    if(empty($titulo) or empty($subtitulo) or empty($conteudo)){
        $erros[] = "Por favor prencha todos os campos!";
    }
    else{

        $formatosP = array("png", "jpeg", "jpg", "gif");

        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosP)){
            
            //Preparando o arquivo e o diretorio
            $pasta = "img/Postagem/";
            
            $temp = $_FILES['foto']['tmp_name'];
            
            $novoN = uniqid().".$extensao";

            if(move_uploaded_file($temp, $pasta.$novoN)){

                $sql = "INSERT INTO postagem (id_adm, titulo, subtitulo, hashtag, data, postagem, imagem, destaque) VALUES ('$id_adm', '$titulo', '$subtitulo', '$hashtag', '$dataCreate', '$conteudo', '$novoN', '$destaque')";

                if(mysqli_query($connect, $sql)){
                    echo "<script>
                    alert('Cadastrado com sucesso!');
                    window.location.href='".DIRPAGE."post_new?id=$id_adm';
                    </script>";
                }else{
                    $erros[] = "Erro ao fazer Upload, Tente Novamente!";
                }
            }

        }
        else{
            $erros[] = "Erro, não foi possivel fazer o upload! formato inválido";
        }
    }
}

    
?>


<div class="login center auto">
    <form action="" method="post" enctype="multipart/form-data" >
        <div class="POST">
            
            <h1>Cadastrar Nova Postagem</h1><br>

            <div>
                <?php
                    if (!empty($erros)):
                        foreach($erros as $erro):
                            echo $erro;
                        endforeach;
                    endif;
                ?>  
            </div>

            <h3 style="margin-bottom: 15px;">Titulo:</h3>
            <input type="text" placeholder="Título" name="titulo" class="w80 input" ><br>

            <h3 style="margin-bottom: 15px;">Subtitulo:</h3>
            <input type="text" placeholder="Subtítulo" name="subtitulo" class="w80 input" ><br>
            
            <h3 style="margin-bottom: 15px;">Tag:</h3>
            <input type="text" placeholder="Insira a tag" name="hashtag" class="w80 input" ><br>

            <h3 style="margin-bottom: 15px;">Imagem:</h3>
            <input type="file" name="foto" class="w80 input" required><br>
            
            <h3 style="margin-bottom: 15px;">Destaque:</h3>
            <select style="width: 83%" name="destaque" id="destaque" class="input">
                <option value="">Selecione</option>
                <option value="destaque">Destaque</option>
                <option value="indicar">Indicado</option>
                <option value="slider">Slider</option>
                <option value="exclusivo">Exclusivo</option>
            </select>

            <!-- <h3>Conteudo:</h3>
            <input type="text" placeholder="O conteúdo vai aqui..." name="post" class="w80 input"> -->


            <h3 style="margin-bottom: 15px;">Conteudo:</h3>
            <div id="post-editor" class="post-editor js-post-editor js-wz-element" data-wz-state="8,16,32,64,128,256">

<div class="ps-relative"> 
    <div class="wmd-container mb8">
        <div id="wmd-button-bar" class="wmd-button-bar btr-sm"><ul id="wmd-button-row" class="wmd-button-row"><li class="wmd-button" id="wmd-bold-button" title="Negrito <strong> Ctrl+B"><span style="background-position: 0px 0px;"></span></li><li class="wmd-button" id="wmd-italic-button" title="Grifo <em> Ctrl+I"><span style="background-position: -20px 0px;"></span></li><li class="wmd-spacer wmd-spacer1" id="wmd-spacer1"></li><li class="wmd-button" id="wmd-link-button" title="Hiperlink <a> Ctrl+L" style="margin-top: 0px;"><span style="background-position: -40px 0px;"></span></li><li class="wmd-button" id="wmd-quote-button" title="Citação <blockquote> Ctrl+Q"><span style="background-position: -60px 0px;"></span></li><li class="wmd-button" id="wmd-code-button" title="Amostra de código <pre><code> Ctrl+K"><span style="background-position: -80px 0px;"></span></li><li class="wmd-button" id="wmd-image-button" title="Imagem <img> Ctrl+G"><span style="background-position: -100px 0px;"></span></li><li class="wmd-button wmd-snippet-button" id="wmd-snippet-button" title="Trecho JavaScript/HTML/CSS Ctrl-M"><span style="background-image: url(&quot;/content/Shared/balsamiq/wmd-mockup-button.png&quot;);"></span></li><li class="wmd-spacer wmd-spacer2" id="wmd-spacer2"></li><li class="wmd-button" id="wmd-olist-button" title="Lista numerada <ol> Ctrl+O"><span style="background-position: -120px 0px;"></span></li><li class="wmd-button" id="wmd-ulist-button" title="Lista com marcadores <ul> Ctrl+U"><span style="background-position: -140px 0px;"></span></li><li class="wmd-button" id="wmd-heading-button" title="Cabeçalho <h1>/<h2> Ctrl+H"><span style="background-position: -160px 0px;"></span></li><li class="wmd-button" id="wmd-hr-button" title="Linha horizontal <hr> Ctrl+R"><span style="background-position: -180px 0px;"></span></li><li class="wmd-spacer wmd-spacer3" id="wmd-spacer3"></li><li class="wmd-button" id="wmd-undo-button" title="Desfazer - Ctrl+Z"><span style="background-position: -200px -20px;"></span></li><li class="wmd-button" id="wmd-redo-button" title="Refazer - Ctrl+Y"><span style="background-position: -220px -20px;"></span></li><li class="wmd-spacer wmd-spacer-max"></li><li class="wmd-button wmd-help-button active-help" id="wmd-help-button" title="Ajuda na edição do Markdown" style="right: 0px;"><span style="background-position: -240px 0px;"></span></li></ul></div><div id="mdhelp" class="mdhelp" style="">
<ul id="mdhelp-tabs" class="mdhelp-tabs">
    <li data-tab="mdhelp-links" data-buttons="link" class="">Links</li>
    <li data-tab="mdhelp-images" data-buttons="image">Imagens</li>
    <li data-tab="mdhelp-styles" data-buttons="bold,italic,heading">Estilização/Cabeçalhos</li>
    <li data-tab="mdhelp-lists" data-buttons="olist,ulist">Listas</li>

      
</div></div>

<div class="mdhelp-tab" id="mdhelp-html" style=""><div class="mdhelp-tab--content">
    <p>
        Se precisar fazer algo com o qual o markdown não pode lidar, use HTML. Observe que <a href="https://meta.stackexchange.com/questions/1777/what-html-tags-are-allowed" target="_blank">oferecemos suporte apenas a um subconjunto de HTML muito estrito!</a>
    </p>
    <pre>Humor em texto tachado é &lt;strike&gt;divertido&lt;/strike&gt;.
</pre>
    <p>
        O Markdown é inteligente o suficiente para não deturpar o HTML de nível de intervalo:
    </p>
  

<div class="cbt"></div>
</div>
                    <div class="js-stacks-validation">
            <div class="ps-relative">
                <textarea id="wmd-input" class="wmd-input js-wz-element s-input bar0 processed" name="post" cols="92" rows="15" tabindex="101" data-wz-state="256" data-min-length=""></textarea>
            <div class="grippie bbr-sm" style="margin-right: 0px;"></div></div>
            <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
        </div>
    </div>
</div>

<aside class="grid ai-start jc-space-between js-answer-help s-notice s-notice__warning pb0 pr4 pt4 mb8 d-none" role="status" aria-hidden="true">
<div class="grid--cell pt8">
    <p>Obrigado por contribuir com o Stack Overflow em Português!</p><ul><li>Certifique-se de <em>responder à pergunta</em>. Entre em detalhes sobre a sua solução e compartilhe o que você descobriu.</li></ul><p>Mas <em>evite</em> …</p><ul><li>Pedir esclarecimentos ou detalhes sobre outras respostas.</li><li>Fazer afirmações baseadas apenas na sua opinião; aponte referências ou experiências anteriores.</li></ul><p>Para aprender mais, veja nossas <a href="http://br.stackoverflow.com/questions/how-to-answer">dicas sobre como escrever boas respostas</a>.</p>
</div>
<button class="grid--cell js-answer-help-close-btn s-btn s-btn__muted fc-dark">
    <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41z"></path></svg>
</button>
</aside>


<div id="draft-saved" class="draft-saved community-option fl" style="height:24px; display:none;">rascunho salvo</div>
<div id="draft-discarded" class="draft-discarded community-option fl" style="height:24px; display:none;">rascunho descartado</div>



<div id="wmd-preview" class="wmd-preview"></div>
<div></div>
<div class="edit-block">
    <input id="fkey" name="fkey" type="hidden" value="d2ad83cc2148ec0a92f8d4930ecf904909450e99e24b9b9699375918cb9516b9">
    <input id="author" name="author" type="text">
</div>



</div>







            

            <button type="submit" name="pika" class="w20-80 input submit">Cadastrar</button>
        
        </div>

    </form>

</div>


<script>
            StackExchange.ifUsing("editor", function () {
                StackExchange.using("externalEditor", function () {
                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.init();
                    });
                });
            }, "code-snippets");
        </script>

<script>
    StackExchange.ready(function() {
        var channelOptions = {
            tags: "".split(" "),
            id: "526"
        };
        initTagRenderer("".split(" "), "".split(" "), channelOptions);
       
        StackExchange.using("externalEditor", function() {
                // Have to fire editor after snippets, if snippets enabled
                if (StackExchange.settings.snippets.snippetsEnabled) {
                    StackExchange.using("snippets", function() {
                        createEditor();
                    });
                }
                else {
                    createEditor();
                }
            });

            function createEditor() {
                StackExchange.prepareEditor({
                    heartbeatType: 'answer',
                    autoActivateHeartbeat: false,
                    convertImagesToLinks: false,
                noModals: true,
                showLowRepImageUploadWarning: true,
                reputationToPostImages: null,
                bindNavPrevention: true,
                postfix: "",
                imageUploader: {
                    brandingHtml: "Desenvolvido por \u003ca class=\"icon-imgur-white\" href=\"https://imgur.com/\"\u003e\u003c/a\u003e",
                    contentPolicyHtml: "User contributions licensed under \u003ca href=\"https://creativecommons.org/licenses/by-sa/3.0/\"\u003ecc by-sa 3.0 with attribution required\u003c/a\u003e \u003ca href=\"https://stackoverflow.com/legal/content-policy\"\u003e(content policy)\u003c/a\u003e",
                    allowUrls: true
                },
                    onDemand: true,
                    discardSelector: ".discard-answer"
                    ,immediatelyShowMarkdownHelp:true
                    });
                

        }
    });
</script>






<?php \Classes\ClassLayout::Footer(); ?>
<?php \Classes\ClassLayout::setFooter(); ?>