<?php
  /**
   * 
   * A index é o arquivo de entrada
   * Nela nós recebemos reqiusitos GET
   * A opção GET 'pagina' vai nos dizer o controller
   * a ser chamado
   * A opção GET 'metodo' vai dizer o que o contoller
   * deve fazer
   */

    $pagina = $_GET['pagina'] ?? null;

    switch ($pagina) {
        case 'clientes':
            include 'controllers/clientescontroller.php';
            $controller = new ClientesController();
            break;

        case 'admin';
            include 'controllers/AdminController.php';
            $controller = new AdminController();
            break;

        case 'pedidos':
            include 'controllers/pedidosController.php';
            $controller = new pedidosController();
            break;

        case 'relatorio':
            include 'controllers/RelatorioController.php';
            $controller = new RelatorioController();
            break;

        case 'ingresso':
            include 'controllers/IngressoController.php';
            $controller = new IngressoController();
            break;

        default:
            include 'controllers/StaticController.php';
            $controller = new StaticController();
            break;
    }

$controller->main();
