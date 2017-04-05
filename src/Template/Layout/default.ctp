<?php
/**
 * MaterializeCSS Theme for Croogo CMS
 *
 * @author Maicon Pinto <maiconsilva.pinto@gmail.com>
 * @link http://www.maiconpinto.com.br
 */

use Cake\Core\Configure;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo Configure::read('Site.title'); ?> - <?php echo $this->fetch('title'); ?></title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php
    echo $this->Html->css(array(
        'MaterializeCSS.materialize',
        'MaterializeCSS.style'
    ));

    echo $this->Blocks->get('css');
    ?>
</head>
<body>


    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php echo $this->Url->build('/'); ?>" class="brand-logo">
                <?php echo Configure::read('Site.title'); ?>
            </a>

            <?php echo $this->Menus->menu('main', array('dropdown' => true, 'element' => 'MaterializeCSS.Menus/main', 'selected' => 'active')); ?>

        </div>
    </nav>

    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m12">
                    <?php echo $this->Layout->sessionFlash(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <?php echo $this->Regions->blocks('footer'); ?>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <?php echo __('Powered by'); ?> <a class="brown-text text-lighten-3" href="http://maiconpinto.com.br">Maicon Pinto</a>
                <?php echo __('Based on'); ?> <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <?php
    echo $this->Html->script(array(
        'MaterializeCSS.materialize',
        'MaterializeCSS.init'
    ));

    echo $this->Blocks->get('script');

    echo $this->Blocks->get('scriptBottom');
    ?>
</body>
</html>
