

			<script src="calculadora/js/jquery-3.1.1.js"></script>
			<script src="calculadora/js/main.js"></script>

			<style>
				body {
					background-color: #CFD8DC;
				}

				.btn-sm {
					font-size: 14px;
					font-weight: bold;
					transition: all 0.7s ease;
				}
        #resultado {
            text-align: right;
            border: 2px solid #0084d1;
        }
        .btn-sm, .btn-group-sm > .btn {
            padding: 0.375rem 1rem;
            font-size: 0.75rem;
            border-radius: 0.5rem;
            width: 50px !important;
            background-image: linear-gradient(195deg, #0084d1 0%, #032d58 100%);
            color: white;
        }
			</style>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Calculadora Escuela Tecnica</h5>
          <p>Escuela Tecnica</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
      <div class="container">
			<div class="row">
            <div class="col-lg-12 col-12">
              <div class="input-group input-group-outline my-3">
                 <input id="resultado" type="text" class="form-control">
               </div>
           </div>
           </div>
				<br>
        <div class="row">
              <div class="col-lg-3 col-3">
                <button class="btn-sm btn-default" onclick="borrarTodo()">E</button>
              </div>
              <div class="col-lg-3 col-3">
                <button class="btn-sm btn-default" onclick="borrarTodo()">C</button>
              </div>
              <div class="col-lg-3 col-3">
                <button class="btn-sm btn-default" onclick="borrarItem()"><</button>
              </div>
              <div class="col-lg-3 col-3">
                <button class="btn-sm btn-default" onclick="agregarItem('/')">/</button>
              </div>
        </div>
        <br>
				<div class="row">
          <div class="col-lg-3 col-3">
            <button class="btn-sm btn-default" onclick="agregarItem('7')">7</button>
          </div>
          <div class="col-lg-3 col-3">
            <button class="btn-sm btn-default" onclick="agregarItem('8')">8</button>
          </div>
          <div class="col-lg-3 col-3">
            <button class="btn-sm btn-default" onclick="agregarItem('9')">9</button>
          </div>
          <div class="col-lg-3 col-3">	
            <button class="btn-sm btn-default" onclick="agregarItem('*')">x</button>
          </div>
        </div>
        <br>
				<div class="row">
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('4')">4</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('5')">5</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('6')">6</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('-')">-</button>
          </div>
				</div>
        <br>
				<div class="row">
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('1')">1</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('2')">2</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('3')">3</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('+')">+</button>
          </div>
				</div>
        <br>
				<div class="row">
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" id="raizCuadrada">R</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('0')">0</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" onclick="agregarItem('.')">.</button>
          </div>
          <div class="col-lg-3 col-3">
					  <button class="btn-sm btn-default" id="igual">=</button>
          </div>
				</div>
			</section>
			</div>
		</div>
    </div>  
      </div>
    </div>
  </div>