<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    </head>
    <body>

        <div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="dashboard">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
      <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
        Produtos
      </button>
      <div class="menu">
        <a class="menu-item" href="produtos">Listar</a>
        <a class="menu-item" href="produtos/create">Criar</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="movimentacao">Movimentações</a>
    </li>
    <li class="nav-item">   
      <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
        Fornecedores
      </button>
      <div class="menu">
        <a class="menu-item" href="fornecedores/create">Criar</a>
        <a class="menu-item" href="#">Careers</a>
        <a class="menu-item" href="#">Press</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Analytics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Help</a>
    </li>
  </ul>
</div>
        {{ $slot }}
         <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>


    </body>
</html>
