<!DOCTYPE html>
<html>
@include('headers')

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
            @include('navbar')
        </nav>
    </header>
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <div class="shape shape-style-1 shape-primary alpha-4"
                style="background-image: url(https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1080&w=1920)">
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--300">
                    <div class="px-4">
                        <div class="text-center mt-5">
                            <h3>Usuários cadastrados</h3>
                            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Foobar</div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">CPF/CNPJ</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Telefone</th>
                                            <th scope="col">Data de nascimento</th>
                                            <th scope="col">Ações</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->cpfcnpj }}</td>
                                            <td>{{ $user->email }}</tds>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->birthday }}</td>
                                            <td>
                                                <div style="display: flex;flex-direction: row;">
                                                    <button onclick="window.location.href='user/edit/{{$user->id}}'" class="btn btn-icon btn-2 btn-primary btn-sm" type="button">
                                                        <span class="btn-inner--icon"><i
                                                                class="fas fa-user-edit"></i></span>
                                                        </button>
                                                    <form method="post" action="/user/{{$user->id}}">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-icon btn-2 btn-primary btn-sm"
                                                            type="submit">
                                                            <span class="btn-inner--icon"><i
                                                                    class="far fa-trash-alt"></i></span>
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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