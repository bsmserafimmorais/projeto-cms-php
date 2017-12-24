<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->confg['site_title']; ?></title>
    </head>
    <body>


        <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </body>
</html>
