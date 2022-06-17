<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Registre-se</a>
            </li>
            <li class="nav-item">
              <div class="modal-footer btn_fechar">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">X</button>
              </div>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

              <!--Body-->
            <form class="form-contact contact_form" action="{{route('login')}}" method="post">
                @csrf
                <div class="modal-body mb-1">
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="username" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="username">Usuário</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="senha" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="senha">Senha</label>
                    </div>
                    <div class="text-center mt-2">
                        <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                </div>
            </form>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>Não possui uma conta? <a href="#" class="blue-text">Registre-se</a></p>
                  <p>  <a href="#" class="blue-text">Esqueceu a senha?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fechar</button>
              </div>

            </div>
            <!--/.Panel 7-->

            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">

              <!--Body-->
              <div class="modal-body">
                <form class="form-contact contact_form" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="username" name="usuario" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="username">Usuário</label>
                    </div>

                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="email" name="email" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="email">E-mail</label>
                    </div>

                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="senha" name="senha" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="senha">Senha</label>
                    </div>

                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="senha_confirma" name="senha_confirma" class="form-control form-control-sm validate">
                        <label data-error="wrong" data-success="right" for="senha_confirma">Digite a senha novamente</label>
                    </div>

                    <div class="text-center form-sm mt-2">
                     <button class="btn btn-info">Registre-se <i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                </form>
            </div>
              <!--Footer-->

            </div>
            <!--/.Panel 8-->
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->

  <div class="text-center">
    <a href="" class="my-3" data-toggle="modal" data-target="#modalLRForm">Login | Registre-se</a>
  </div>
