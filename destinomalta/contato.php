 
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
        $n = isset($_POST["tNome"])?$_POST["tNome"]:1;
        $e = isset($_POST["tMail"])?$_POST["tMail"]:1;
        $s = isset($_POST["tSexo"])?$_POST["tSexo"]:1;
        $t = isset($_POST["tMsg"])?$_POST["tMsg"]:1;        
        $con->query("insert into contato (Nome,email,sexo,comentario) values ( '$n','$e','$s','$t');");
        mysqli_close($con);     
    ?> 
        
        
        
 