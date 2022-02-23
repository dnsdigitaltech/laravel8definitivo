
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="os-padding">
    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
      <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
        <h5>Meu Perfil</h5>
        <hr class="mb-2">
        <div class="mb-1 nav-link">
          <!-- The user image in the menu -->
          <div class="user-header">
              <p>
                  <b>Nome:</b> Eu
              </p>
              <p>
                  <b>Email:</b> mail
              </p>
          </div>
        </div>
        <hr class="mb-2">
          <div class="row">
                <div class="col-6">

                <a href="#" class="btn btn-block btn-primary">
                    <i class="fas fa-user-edit"></i>
                    <span>Editar</span>
                </a>

                </div>
              <!-- /.col -->
              <div class="col-6">
                <button class="btn btn-block btn-secondary" href=""
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                              Sair <i class="fas fa-sign-out-alt"></i></button>
                <form id="logout-form" method="POST">
                    @csrf
                </form>
              </div>
              <!-- /.col -->
          </div>
      </div>
    </div>
  </div>
</aside>
<!-- /.control-sidebar -->
