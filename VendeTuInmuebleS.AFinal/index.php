<?php
include "header.php";

?>


<main  style="background-color:#B0F8F6">


  <!-- Codigo para convertir la pagina en conteiner-->


  <div class="container">

    <!-- Codigo de Búsqueda-->
    <br>
    <br>
    <H2 align="center"> Busca tu Inmueble</H2>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputState" class="form-label">Tipo de Propiedad</label>
        <select id="inputState" class="form-select">
          <option selected>Casa</option>
          <option>Apartamento</option>
          <option>Recidencial</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Provincia</label>
        <select id="inputState" class="form-select">
          <option selected>San Jose</option>
          <option>Alajuela</option>
          <option>Cartago</option>
          <option>Heredia</option>
          <option>Puentarenas</option>
          <option>Guanacaste</option>
          <option>Limon</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Numero de cuartos</label>
        <input type="number" class="form-control" id="inputZip">
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Precios desde</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Precios Hasta</label>
        <input type="text" class="form-control" id="inputZip">
      </div>


      <center>
        <div class="col-2">
          <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </center>

      <br>
      <br>
      <br>
      <br>
      <!-- Codigo de Aun te intereza -->

      <h2 align="center">¿Aun te intereza?</h2>
      <div class="row row-cols-4 row-cols-md-3 ">
        <div class="col">
          <div class="card">
            <img src="img/Casa2/Casa2.jpeg" class="card-img-top" alt="Casa 1" width="300" height="300">
            <div class="card-body">
              <h5 class="card-title">Casa en San José</h5>
              <h6>Precio: 500,000 dólares</h6>
              <h6>Tipo de contrato: Fijo</h6>
              <h6>Tipo de Vivienda: Casa</h6>

              <center><a class="btn btn-outline-primary" aria-current="page" href="Propiedad2.php">Volver a ver</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/Casa10/Casa10.jpg" class="card-img-top" alt="Casa2" width="300" height="300">
            <div class="card-body">
              <h5 class="card-title">Casa en Cartago</h5>
              <h6>Precio: 200,000 dólares</h6>
              <h6>Tipo de contrato:Fijo</h6>
              <h6>Tipo de vivienda: Residencial</h6>
              <center><a class="btn btn-outline-primary" aria-current="page" href="Propiedad10.php">Volver a ver</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/Casa15/Casa15.jpg" class="card-img-top" alt="Casa3" width="300" height="300">
            <div class="card-body">
              <h5 class="card-title">Casa en Heredia</h5>
              <h6>Precio: 150,000 dólares</h6>
              <h6>Tipo de contrato: Alquiler</h6>
              <h6>Tipo de vivienda: Apartamento</h6>
              <center><a class="btn btn-outline-primary" aria-current="page" href="Propiedad15.php">Volver a ver</a>
              </center>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <!-- Fin del primer conteiner -->
  </div>

  <!-- Codigo de Porque Elegirnos -->
  <br>
  <br>
  <center>
    <div class="card mb-2" style="background-color:#f7cbb2">
      <div class="row g-4">

        <center><br>
          <br> <img src="img/Elegirnos.png" class="img-fluid rounded-start" alt="Porque elegirnos" width="150"
            height="150">
        </center>
      </div>
      <center>
        <div class="col-sm-5 mb-5" ;>
          <h1> Porque Elegirnos</h1>
          <FONT COLOR="brown" SIZE=5>Vende Tu Inmueble S.A. ofrece un exclusivo servicio inmobiliario personalizado con
            un amplio catálogo de propiedades a la venta y el alquiler, incluyendo inmuebles
            excepcionales en la montaña, en la ciudad y en varias partes de Costa Rica </FONT>
        </div </center>

        <div class="col-sm-6 mb-5" ;>
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card" width="300" height="300">
                <br>
                <img src="img/casa.png" class="card-img-top" alt="Casa">
                <div class="card-body">
                  <h5 class="card-title">Vende tu casa con nosotros</h5>
                  <p class="card-text">Te ayudamos a encontrar compradores para
                    tus propiedades
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="350" height="300">
                <BR>
                <img src="img/dinero.png" class="card-img-top" alt="Dinero">
                <div class="card-body">
                  <h5 class="card-title">Te ayudamos con tu Reubicación</h5>
                  <p class="card-text">Gestionamos todos los trámites que necesites
                    para tu llegada a casa
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="300" height="300">
                <br>
                <img src="img/lupa.png" class="card-img-top" alt="lupa">
                <div class="card-body">
                  <h5 class="card-title">Transancción de viviendas</h5>
                  <p class="card-text">Estudiamos y te damos un informe sobre el valor real
                    de tu vivienda
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="300" height="300">
                <br>
                <img src="img/Corazon.png" class="card-img-top" alt="CORAZON">
                <div class="card-body">
                  <h5 class="card-title">Compra casa con nosotros</h5>
                  <p class="card-text">Buscamos las propiedades ideales para su familia</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
    </div>

  </center>


  <br>
  <br>
  <!-- Codigo del segundo conteiner -->
  <div class="container">

    <!--Codigo de Nuestras Propiedades -->

    <h2 align="center">Nuestras Propiedades</h2>
    <br>
    <BR>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="img/Mas casas/1.jpg" class="card-img-top" alt="2-10" width="100" height="500">
          <div class="card-body">
            <h5 class="card-title">San José</h5>
            <h6>Precio: </h6>
            <h6>Tipo de contrato: Fijo</h6>
            <h6>Tipo de vivienda: Apartamento</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Mas casas/2.jpg" class="card-img-top" alt="8-10" width="100" height="500">
          <div class="card-body">
            <h5 class="card-title">Cartago</h5>
            <h6>Precio: 800,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Casa</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Mas casas/3.jpg" class="card-img-top" alt="7-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Alajuela</h5>
            <h6>Precio: 850,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Residencial</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Mas casas/9.jpg" class="card-img-top" alt="9-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Heredia</h5>
            <h6>Precio: 700,000 dólares</h6>
            <h6>Tipo de contrato: Alquiler</h6>
            <h6>Tipo de vivienda: Apartamento</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Mas casas/5.jpg" class="card-img-top" alt="3-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Alajuela</h5>
            <h6>Precio: 500,000 dólares</h6>
            <h6>Tipo de contrato:Alquiler</h6>
            <h6>Tipo de vivienda: Casa</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Casa6/Casa6.jpg" class="card-img-top" alt="5-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">San José</h5>
            <h6>Precio: 1.800,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Residencial</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Casa20/Casa20.jpg" class="card-img-top" alt="6-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Limon</h5>
            <h6>Precio: 400,000 dólares</h6>
            <h6>Tipo de contrato: Alquiler</h6>
            <h6>Tipo de vivienda: Casa</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Casa4/Casa4.jpg" class="card-img-top" alt="4-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Guanacaste</h5>
            <h6>Precio: 200,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Apartamento</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Casa18/Casa18.jpg" class="card-img-top" alt="0-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Cartago</h5>
            <h6>Precio: 550,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Casa</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Casa11/Casa11.jpg" class="card-img-top" alt="10-10" width="300" height="500">
          <div class="card-body">
            <h5 class="card-title">Guanacaste</h5>
            <h6>Precio: 350,000 dólares</h6>
            <h6>Tipo de contrato:Fijo</h6>
            <h6>Tipo de vivienda: Residencial</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin del 2 conteiner -->
  </div>
  <br>
  <br>
  <br>
  <br>

  <!-- Codigo de Testimonios -->

  <br>
  <br>
  <center>
    <div class="card mb-2" style="background-color:#f7cbb2">
      <br>
      <br>
      <center>
        <div class="col-sm-5 mb-5" ;>
          <h1>Testimonios de nuestros clientes</h1>
          <FONT COLOR="brown" SIZE=5>Estos son comentarios que nos han colocado los usuarios</FONT>
        </div </center>

        <div class="col-sm-6 mb-5" ;>
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card" width="300" height="300">
                <br>

                <div class="card-body">
                  <h5 class="card-title">Matheo Chavez Muños</h5>
                  <p class="card-text">He tenido una experiencia muy buena con la compra de una casa. Desde la
                    primera vez sientes que son un equipo de profesionales, saben colocar un precio acorde al mercado y
                    en todo momento son realistas con los clientes aparte de que su servicio es muy rápido
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="350" height="300">
                <BR>

                <div class="card-body">
                  <h5 class="card-title">Fabio Lombardo Anderson</h5>
                  <p class="card-text">My experience with the real estate agency has been very positive thanks
                    to the care and professionalism with which they carry out their work. That they have people who
                    speak English, Italian and French make the experience easier for foreigners
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="300" height="300">
                <br>

                <div class="card-body">
                  <h5 class="card-title">Valentina Díaz Fernández</h5>
                  <p class="card-text">Desde que me presente en la Inmobiliaria me sentí como en casa El trato
                    es extraordinario, me hicieron la compra tan fácil. Gracias por vuestra profesionalidad a lo
                    largo del proceso de la compra de mi casa. Realmente la recomiendo
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" width="300" height="300">
                <br>

                <div class="card-body">
                  <h5 class="card-title">Silvia Rossi Parisi</h5>
                  <p class="card-text">Nos remerciements et félicitations à toute l'équipe. Ils ont réussi à faire en
                    sorte que
                    l'achat de notre maison ressemble à quelque chose de simple, de la première visite à la
                    signature de l'acte, ils n'ont pas cessé de nous serrer la main. Merci pour tout</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
    </div>

  </center>

  <br>
  <br>

</main>

<?php include "footer.php" ?>