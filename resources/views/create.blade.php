<!DOCTYPE html>
<html>
@include('headers')

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-inner--text"><strong>Erro</strong> {{$error}}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endforeach
      </ul>
      @endif
      @include('navbar')
    </nav>
  </header>
  <main
    style="background-image: url(https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920);">
    <section class="section section-shaped section-lg">
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Cadastre o usuário</small>
                </div>
                <form action="/user/save" method="POST" role="form">
                  @csrf
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                      </div>
                      <input name="name" class="form-control" placeholder="Nome" type="text" value="{{ old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                      </div>
                      <input name="email" class="form-control" placeholder="Email" type="email"
                        value="{{ old('email') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                      </div>
                      <input name="birthday" class="form-control" placeholder="10/10/2010" type="date"
                        value="{{ old('birthday') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-id-card"></i></span>
                      </div>
                      <input name="cpfcnpj" class="form-control" placeholder="CPF/CNPJ" type="text"
                        value="{{ old('cpfcnpj') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input name="phone" class="form-control" placeholder="Telefone" type="text"
                        value="{{ old('phone') }}">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Cadastrar </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
@include('scripts')

</html>