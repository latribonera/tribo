<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="Gaules, G3X, cs, csgo, counter strike, counter strike: global ofensive, counter strike:go, gau, mibr, cs 1.6, pro player"/>
    <title>La Tribonera - Fale Conosco</title>
    <meta name="description" content="Nosso site tem como objetivo contar um pouco sobre a história de um dos maiores streamers e jogadores de Counter-Strike: Global Offensive (CSGO) do mundo,  que um dia já esteve a beira do suicídio e atualmente é uma das pessoas mais queridas no cenário dos e-sports, Gaules.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	<style>

	
	.footer{
  background: #191919;
  color:white;
  
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}
	</style>
		<script>
		function ligarDesliga(){

    var imagem = document.getElementById('lamp').src;
    var imagem_ligado = 'https://www.w3schools.com/js/pic_bulbon.gif';
    var imagem_desligado = 'https://www.w3schools.com/js/pic_bulboff.gif';

    if(imagem == imagem_ligado){
        document.getElementById('lamp').src = imagem_desligado;
    }else{
        document.getElementById('lamp').src = imagem_ligado;
    }
	var element = document.body;
   element.classList.toggle("body2");
}
document.getElementById("lamp").addEventListener("click", ligarDesliga);
	
	</script>
</head>
	
	
<body style="background-color: #1F1F1F;">
<!-- INÍCIO DO MENU -->
	 
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#052146;">
		<a class="navbar-brand" href="index.php"><b>La Tribonera</b></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
			<img src="https://i.imgur.com/FLRNNnv.png" style="width: 64px; text-align: left;">
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto" style="text-align: center;">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="historia.php">História</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="gauleria.php">Gauleria</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="clipes.php">Clipes</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="fale.php"><b>Fale Conosco </b><span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sobre.php">Sobre Nós</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"><img id="lamp" src="https://www.w3schools.com/js/pic_bulboff.gif" width="15px; " onclick="ligarDesliga()"></a>
			</li>
			</ul>
		</div>
	
	</nav>
	<section>
	<style>
body {
  background: url('https://imgur.com/cdlRagD.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
.body2{
  background: url('https://imgur.com/qpeFLis.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover; 
}
.navbar{
	background: #101084;
}
</style><br>

	<form method="POST" action="ctrl.php">		
	<h1 class="text-center" style="font-family: arial; color: white; padding-bottom: 20px; padding-top: 30px; font-size: 70px;"><b>Fale Conosco!</b></h1>
	
	
	<div class="container">
	<hr style="background: white;">
    <div class="row">
    <!-- nada -->
        <div class="col-md-3">
        </div>
		
        <!-- conteudo -->
        <div class="col-md-6 jumbotron" style="margin-top:20px; box-shadow: 7px 6px #01132A; background-color: #174862;">
            <label class="em" style="color: white"><b>Email:</b></label>
            <input class="email" type="email" name="email" placeholder="Informe seu email" required><br>

            <label class="em" style="color: white"><b>Nome:</b></label>
            <input class="nome" type="text" name="nome" placeholder="Insira seu nome"><br>

            <label class="ctt" for="msg" style="color: white"><b>Digite sua dúvida/contato</b></label><br>
            <textarea id="msg" class="text" type="text" name="coment" placeholder="Insira sua mensagem aqui..." required></textarea>
			<p style="color: white;"><b><label><input type="checkbox" style="padding-left:5%;" required>  Li e concordo com os <a href="termos.php">termos</a> apresentados</label></b></p>
            <div class="button">
            <button type="submit" class="sub">Enviar</button>
            </div>
		
            <!-- nada -->
        <div class="col-md-3">
        </div>

        </div>
    </div>
</div>
</form>

<style>
.ctt{
padding-top:5px;}

.em{
color:black;
padding-top:5px;
}


.email{
border-radius: 6px;
width: 100%;
outline: 0;
}

.nome{
border-radius: 6px;
width: 100%;
outline:0;
}

.text{
border-radius: 6px;
height:240px;
width:100%;
outline: 0;
}

.sub{
border-radius: 20px;
margin-left: 41%;
outline: 0;
}

</style>
</section>
<!-- Footer -->
<footer class="page-footer font-small blue pt-3 text-white" style="background-color:#01132A;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Informações</h5>
        <p> <div class="col-lg-12 col-xs-12 location">
      
      <p>Jornalista Roberto Marinho - Av. Jornalista Roberto Marinho, 80 - Cidade Monções, São Paulo - SP</p>
      <p class="mb-0"><i class="fa fa-phone"></i><b>Victor</b> - (11) 94594-5955<br> <b>Raphael</b> - (11) 99631-7980<br>  <b>Kayke</b> - (11) 96609-5835<br> <b>Kaio</b> - (11) 98742-0120</p><br>
      <p><i class="fa fa-envelope-o"></i> <b>E-mail:</b> latribonerasite@gmail.com</p>
    </div></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

      </div>
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Redes Sociais</h5><br>

       <ul class="list-unstyled">
            <li>
            <a class="twitch" href="https://www.twitch.tv/gaules" target="_blank"><img  src="https://i.imgur.com/hqzoKBG.png" style="width:25px" > Twitch</a>
          </li><br>
          <li>
            <a class="twitter" href="https://twitter.com/Gaules" target="_blank"><img  src="https://i.imgur.com/8cP8ZbM.png" style="width:25px" > Twitter</a>
          </li><br>
          <li>
            <a class="insta" href="https://www.instagram.com/gaules/" target="_blank"><img  src="https://i.imgur.com/QDmv7Jh.png" style="width:25px"> Instagram</a>
          </li><br>
		  <li>
			<a class="face" href="https://www.facebook.com/gaules/" target="_blank"><img src="https://i.imgur.com/AY9XKQR.png" style="width:25px"> Facebook</a>
		  </li>
        </ul>
		<style>
		*
		a{
			color: white;
			text-decoration: none;
		}
		a:visited{
			text-decoration: none;
			color: white;
		}
		a.face:hover{
		text-decoration:none;
		color: #405DE6;
		transition: color 0.5s;
		}
		a.insta:hover{
		text-decoration:none;
		color: #C13584;
		transition: color 0.5s;
		}
		a.twitter:hover{
		text-decoration:none;
		color: cyan;
		transition: color 0.5s;
		}
		a.twitch:hover{
		text-decoration:none;
		color: purple;
		transition: color 0.5s;
		}
		
		a:active{
		text-decoration:none;
		color: white;
		}
		
		</style>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.twitch.tv/gaules"> Gaules</a>
  </div>
  <!-- Copyright -->

</footer>

	</section>
	
</body>
</html>































