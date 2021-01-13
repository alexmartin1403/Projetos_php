<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7544210746090390",
        enable_page_level_ads: true
        });
    </script>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Destino Malta" />
    <meta property="og:description" content="Conheça o novo website com notícias e informações sobre Malta em português">
    <meta property="og:type"  content="website" />
    <meta property="og:image"  content="http://i.imgur.com/jwq1kRs.jpg" />
    <meta property="og:url" content="http://www.destinomalta.com.br"/>
    <title>Destino Malta</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <link rel="icon" href="_imagens/bandeira_icon.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="_imagens/bandeira_icon.jpg" type="image/x-icon" />
</head>
<body>
<script language="javascript" src="_javascript/funcoes.js"></script>

<div id="interface">

    <header id="cabecalho">
        
    <hgroup>
    <h1>Destino Malta</h1>
    </hgroup>
    <img id="icone" src="_imagens/mapa_malta_peq.png"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
            <ul type="disc">
                <li><a href="index.php">Notícias de Malta</a></li>
                <li><a href="cidades.html">Cidades de Malta</a></li>
                <li><a href="fale-conosco.html">Fale Conosco</a></li>               
            </ul>
        </nav>

    </header>

<section id="corpo">

<article id="noticia-principal">
        
<header id="cabecalho-artigo">
<hgroup>
    </br>
<h1>Notícias Nacionais de Malta</h1>
</hgroup>


</header>
    <?php
    $hostname = "fdb17.leadhoster.com";
    $bancodedados = "2340361_cadastro";
    $usuario = "2340361_cadastro";
    $senha = "mart1975";
    $con = new mysqli($hostname, $usuario, $senha, $bancodedados);
        mysqli_set_charset($con, 'utf8');
        if ($con->connect_errno) {
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }                
        $resultado = $con->query("SELECT * from noticias order by data desc;");   
        $i = 0;
        setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR','Portuguese_Brazil');        
        while ($noticia = $resultado->fetch_object()) {
            $d[$i]= $noticia->data;            
            $t[$i]= $noticia->texto;            
            $tit[$i] = $noticia->titulo;            
            $l[$i] = date('d-m-y',strtotime($d[$i]));
            echo "<h3 class='direita'>".strftime('%A, %d de %B de %Y, %H : %M', strtotime($d[$i]))."</h3>";       
            echo "<a href='noticia-$l[$i].html'><h2> $tit[$i] </h2>";           
            echo "<p><img src='_imagens/noticia-$l[$i].jpg' class='not01' align='left'/> $t[$i]</a></p>";          
            $i++; 
        }             
        mysqli_close($con);
        ?>    

</article>
</section>
<aside id="lateral">
    
    </br>
    <div align="center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Direita -->
    <ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-7544210746090390"
     data-ad-slot="2899149068"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
    
    <h2>Intercâmbio do zero</h2>
    
    <a href="https://go.hotmart.com/A5871077Y" target="_blank">
    <center><img src='_imagens/Ebook_peq.png'/></center>  
    </a>
    <br/>

    <h2>Curso de Inglês</h2>
    
    <a href="https://go.hotmart.com/N5938913Y" target="_blank">
    <center><img src='_imagens/ingles_hotmart.jpg'/></center>  
    </a>
    
</aside>
<footer id="rodape">
<p>Copyright &copy; 2017</p>
</footer>

</div>   
</body>
</html>