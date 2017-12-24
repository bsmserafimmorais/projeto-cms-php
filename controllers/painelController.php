<?php
class painelController extends controller {

    public function __construct(){
    	parent::__construct();


    }

    public function index() {
        $u = new Usuarios();
        $u->verificarLogin();
        $dados = array();

        $p = new Paginas();
        $dados['paginas'] = $p->getPaginas();
        
        
        $this->loadTemplateInPainel('painel/home', $dados);
    }
    public function menus() {
        $u = new Usuarios();
        $u->verificarLogin();
        $dados = array();

        $m = new Menu();
        $dados['menus'] = $m->getMenu();
        
        
        $this->loadTemplateInPainel('painel/menus', $dados);
    }
    public function menu_del($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $m = new Menu();
        $m->delete($id);


    
        header("Location: ".BASE."painel/menus");
    }
    public function menu_edit($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();

        $m = new Menu();
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->update($nome, $url, $id);
            header("Location: ".BASE."painel/menus");
            exit;
        }
        $dados['menu'] = $m->getMenu($id);

        $this->loadTemplateInPainel('painel/menu_edit', $dados);
    }

    public function menu_add() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();

        $m = new Menu();
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $url = addslashes($_POST['url']);

            $m->insert($nome, $url);
            header("Location: ".BASE."painel/menus");
            exit;
        }

        $this->loadTemplateInPainel('painel/menu_add', $dados);

    }
    public function pagina_del($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $p = new Paginas();
        $p->delete($id);

    
        header("Location: ".BASE."painel");
    }
     public function pagina_edit($id) {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $p = new Paginas();

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);
            $url = addslashes($_POST['url']);
            $corpo = addslashes($_POST['corpo']);

            $p->update($titulo, $url, $corpo, $id);
            header("Location: ".BASE."painel/menus");
            exit;
        }
        $dados['pagina'] = $p->getPaginaById($id);

        $this->loadTemplateInPainel('painel/pagina_edit', $dados);
    }
     public function pagina_add() {
        $u = new Usuarios();
        $u->verificarLogin();

        $dados = array();
        $p = new Paginas();

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
            $titulo = addslashes($_POST['titulo']);
            $url = addslashes($_POST['url']);
            $corpo = addslashes($_POST['corpo']);


         $p->insert($titulo, $url, $corpo);


        if(isset($_POST['add_menu']) && !empty($_POST['add_menu'])){
            $m = new Menu();
            $m->insert($titulo, $url);
            
        }
            header("Location: ".BASE."painel");
            exit;
        }

        $this->loadTemplateInPainel('painel/pagina_add', $dados);
    }

    public function login(){

        $dados = array(
            'erro'=>'');

        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = ($_POST['senha']);


            $u = new Usuarios();
            $dados['erro'] = $u->logar($email, $senha);
        }
        
        $this->loadView("painel/login", $dados);

    }

}