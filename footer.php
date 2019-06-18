<!-- Contact Section -->
<section id="ondeestamos">
  <div class="container-fluid">
    <h1 class="text-light mb-4 text-center">Onde estamos</h1>
  </div>
    <div class="container">

      <div class="row" id="ondeestamos">

        <div class="col-md-4 mb-3 mb-md-0" id="local" data-toggle="modal" data-target="#mapa_Modal">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Endereço</h4>
              <hr class="my-4">
              <div class="small text-black-50">Rua Guiane, 145<br>(clique para abrir o mapa)</div>
            </div>
          </div>
        </div>

        <!--Modal para carregar o mapa do site-->
        <div id="mapa_Modal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Como Chegar</h4>
                <button class="close" data-dismiss="modal" arial-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>  
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.237068381197!2d-46.46690128554305!3d-23.559927667423217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66f13904c45f%3A0xc1d1bf9108f3de7a!2sR.+Guiena%2C+145+-+Vila+Carmosina%2C+S%C3%A3o+Paulo+-+SP%2C+08270-200!5e0!3m2!1spt-BR!2sbr!4v1559649590099!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:10" allowfullscreen></iframe>
                    </div>
                  </div>  
                </div>

              
            </div>
          </div>
        </div>
        <!-- Fim do Mapa-->

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-80">
                <a href="#">contato@prfconsultoria.com.br</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Fone</h4>
              <hr class="my-4">
              <div class="small text-black-80">(11) 9.6495-7219</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i id="social" class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i id="social" class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i id="social" class="fab fa-github"></i>
        </a>
      </div>
	</div>
</section>	

    <!-- Modal para envio de email -->
      <form action="enviar_email.php" method="post">
        <div id="conteudoModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Deixe seus dados que entraremos em contato com você</h4>
                <button class="close" data-dismiss="modal" arial-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="nome"  placeholder="Nome" class="form-control">
                  </div>
                </div>  
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <input type="phone" name="fone" placeholder="Telefone" class="form-control">
                  </div>
                </div>  
              </div>


              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="email"  placeholder="Email"  class="form-control">
                  </div>
                </div>  
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <select class="form-control" name="lstRecebeContato">
                      <option>--Possui CNPJ?--</option>
                      <option value='Sim'>SIM</option>
                      <option value='Nao'>NÃO</option>
                    </select>
                  </div>
                </div>  
              </div>              
              
              <div class="modal-footer">
                <input type="submit" value="Enviar" class="btn btn-primary" >
                <button class="btn btn-info" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </form>            

      <div class="container" sytle: "text-align: 'center'">
	      Copyright &copy; Ehvoluti 2019
	    </div>



  <!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
	

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script> 
		
		<!-- Custom scripts for this template 
  		<script src="js/grayscale.js"></script>
  		-->
  		<script src="js/padrao.js"></script>
	
