<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  // metodo index() é obrigatorio em todos os controllers criados
  public function index()
  {

    $data = [
      'titleHTML' => ' com PHP',
      'title' => 'MVC Pattern',
      'description' => 'Padrão de arquitetura MVC em Vanilla PHP'
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'titleHTML' => ' - Sobre Mim',
      'title' => 'Sobre Mim',
      'description' => 'Olá, me chamo Aron e atualmente sou desenvolvedor Full Stack com o foco na linguagem PHP 😃'
    ];
    $this->view('pages/about', $data);
  }
}
