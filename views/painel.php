<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE;?>assets/css/painel.css">
        <title><?php echo $this->config['site_title']; ?></title>
    </head>
    <body>
    
    <div class="menu">
    <ul>
       <a href="<?php echo BASE; ?>painel"> <li>Páginas</li></a>
        <a href="<?php echo BASE; ?>painel/menus"> <li>Menu</li></a>
    </ul>
    </div>
    <div class="container">
        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>

        
    </body>
</html>
