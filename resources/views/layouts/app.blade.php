<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="./" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>PAINEL</p>
            </a>
        </li>
        <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-sitemap"></i>
                <p>
                Produtos
                <i class="fa-solid fa-house-chimney-medical"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('produtos') }}" class="nav-link ">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-money-check-alt"></i>
                        <p>&nbsp;Todos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produtos.inserir') }}" class="nav-link ">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fas fa-money-check-alt"></i>
                        <p>&nbsp;Inserir</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>






</nav>





