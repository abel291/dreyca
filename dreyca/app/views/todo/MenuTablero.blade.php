<nav class="navbar sombra_grande navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#collase">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-list "> </span>
            </button>           
            <a href="/" target="blanc">{{ HTML::image('imagenes/logo.png','Brand') }}</a>
        </div>      
        <div class="collapse navbar-collapse" id="collase">
            <!--<ul class="nav navbar-nav ">
                <li ><a href="/tablero" class="rojo_h"><span class="glyphicon glyphicon-repeat  "></span></a></li>
                
            </ul>-->
            <ul class="nav navbar-nav navbar-right">       
                <li class="dropdown">
                  <a href="#"  class="dropdown-toggle azul_h" data-toggle="dropdown"><span class="glyphicon glyphicon-user "></span><b> Admin Dreyca</b> <span class="caret"></span> </a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu" >                    
                    <li><a href="/Salir"><span class="glyphicon glyphicon-log-out"> </span><b> Salir</b></a></li>                                     
                  </ul>
                </li>
            </ul>                   
        </div>
    </div>
</nav>