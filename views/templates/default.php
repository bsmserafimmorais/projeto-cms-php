<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE;?>assets/css/default.css">
        <title><?php echo $this->config['site_title']; ?></title>
    </head>
    <body>
    <div class="topo"></div>
    <div class="menu">
        <?php $this->loadMenu(); ?>
    </div>
    <div class="container">
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>
    <div class="rodape"></div>

        
    </body>
</html>
