<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prochem/Login</title>
</head>
<body>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="assets/css/icons.css">

<!-- Custom Style   -->
<link rel="stylesheet" href="css/k_login.css">
</head>
<body>
<!-- ----------------------------  Navigation ---------------------------------------------- -->



<nav class="nav">
    
    <div class="nav-menu flex-row">


    
    

        <div class="nav-brand">
           <img class="prohemlogo" src="assets/3.png">
        </div>
        
        

        <div>


            <ul class="nav-items">

                <li class="nav-link">
                  <i class="far  fa fa-home  icon-modify"></i>
                    <a  href="index.php">Home</a>
                </li>
                
  
            </ul>

           
        </div>
       
        <div class="social text-gray">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/_k_a_z_i_r_a_?r=nametag"><i class="fab fa-instagram"></i></a>
            
        </div>
    </div>
</nav>

<!-- ------------x---------------  Navigation --------------------------x------------------- -->

<!----------------------------- Main Site Section ------------------------------>

  <main>
   <!-- Falata endereitar as posicoes dos botoes e check se os dados estao na base de dados para fazer o login...ja esta a salvar e mostrar usuarios-->
   <div class="pnlprincipal">
      
    
          <div class="second-column">
              <h2 class="title title-second">Staff Login</h2>            
              <p class="description description-second">Usa os Seus Dados Para Iniciar a tua Sessão.</p>

              <form class="form"> <!-- alargura das textbox-->
               

                  <label class="label-input" for="">
                    <i class="far fa-user icon-modify"></i>
                    <input type="text" placeholder="Nome do Usuario">
                </label>

                  <label class="label-input" for="">
                      <i class="fas fa-lock icon-modify"></i>
                      <input type="password" placeholder="Palavra-Passe">
                  </label>
                  
               </form>
              <a class="password" href="#">Esqueceu a Tua Palavra-Passe?</a>
                  <button type="reset" class="btn_login" onclick="window.open('staffhome.html','_self')">Entrar</button> 
          </div>
    
</div>
 <main id="main">
<!-- ---------------------- Site Content -------------------------->

</body>
<footer class="footer">
       
        <div class="rights flex-row">
            <h4 class="text-gray">
            <a>Copyright ©2022 All rights reserved |</a><a class="kazira" href="https://www.instagram.com/_k_a_z_i_r_a_?r=nametag"> Kazira©</a>
              
            </h4>
		</div>
</footer>


</html>