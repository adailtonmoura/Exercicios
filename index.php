<?php include_once('header.php'); ?>

    <div class="principal">
    <?php
  

  $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

  switch($pagina){

      case 'home':
          include_once 'view/home.php';
          break;

      case 'fahrenheit':
          include_once 'view/fahrenheit.php';
          break;

      case 'maior':
          include_once 'view/maior.php';
          break;
      
      case 'mediaponderada':
          include_once 'view/mediaponderada.php';
          break;

      case 'desempenho':
          include_once 'view/desempenho.php';
          break;

        case 'refresh':
            include_once 'view/refresh.php';
            break;

        case 'radio':
            include_once 'view/radiobutton.php';
            break;

        case 'imc':
            include_once 'view/imc.php';
            break;
            
            case 'apart':
                include_once 'view/apartamento.php';
                break;

            case 'inss':
                include_once 'view/aposent.php';
                break;

            case 'verificarsala':
                include_once 'view/verificarsala.php';
                break;

            case 'caracter':
                include_once 'view/caracterEntities.php';
                break;

            case 'textopredefinido':
                include_once 'view/textopredefinido.php';
                break;

            case 'estilodetexto':
                include_once 'view/estilotexto.php';
                break;

            case 'predefinidoprática':
                include_once 'view/praticapredefinido.php';
                break;

            case 'formatarFonte':
                include_once 'view/formatarFonte.php';
                break;

            case 'formatarTexto':
                include_once 'view/formatarTexto.php';
                break;

            case 'estiloFTexto':
                include_once 'view/EstiloeFormataçãodeTexto.php';
                break;

            case 'select':
                include_once 'view/select.php';
                break;

            case 'lanchonete':
                include_once 'view/lanchonete.php';
                break;

            case 'checkbox':
                include_once 'view/checkbox.php';
                break;
        
          default: 
          include_once 'view/home.php';
  }

    ?>
    </div>

<?php include_once('footer.php');?>