<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top <?=($page=='home' ? '' : 'navbar-shrink')?>">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <a href="index.php">
                <img src="images/logo.png" alt="Lava Jato Card Game" title="Lava Jato Card Game"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?=($page=='regras' ? 'active' : '')?>">
                    <a class="page-scroll" href="regras.php">Regras</a>
                </li>
                <li class="<?=($page=='faq' ? 'active' : '')?>">
                    <a class="page-scroll" href="faq.php">FAQ</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
