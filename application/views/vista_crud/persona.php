<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
    <style>
      body { padding-top: 60px; }
    </style>
<!--    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
    <?php
    foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
  </head>
  <body>
    
      <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">FastTime</a>
          <ul class="nav">
            <li class="active"><a href="http://localhost/MesaAyuda">Inicio</a></li>
          </ul>
        </div>
      </div>
     </div>



      <div class="container">
        
          <div style="text-align:center;">

        <h1>TIPO DE DOCUMENTO</h1>
         <img src="http://images.gofreedownload.com/clients-32531.jpg" alt="">
         </div>
        <div>
        <?php echo $output; ?>
        </div>

                <footer>
               <p>&copy; Hermes Rodriguez</p>
                
            </footer>


          </div>

      </div> <!- /container ->

  </body>
</html>

