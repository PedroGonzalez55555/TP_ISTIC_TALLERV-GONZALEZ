
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Gonzalez</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>

            <?php

                   if (isset($_SESSION['usuario']))

                      {

            ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
              <?php
                           }
              ?>
        </ul>
       
        <form 

        action="nexo.php" class="form-inline my-2 my-lg-0">
          <input  name ="usuario" readonly class="form-control mr-sm-2" type="text"  aria-label="Search" value="">
          <button 

          class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="Perfil" >Perfil</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="Salir">Salir</button>
        </form>
      </div>
    </nav>