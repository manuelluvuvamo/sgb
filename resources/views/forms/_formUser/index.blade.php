<div class="row">
    @isset($user->profile_photo_path)
        <div class="col-sm-12 m-2">

            <div class="card card-outline-info h-100">
                <div class="card-img-top">
                    <img src="{{ asset($user->profile_photo_path) }}" class="grayscale img-fluid mx-auto d-block"
                        width="200">
                </div>
            </div>

        </div>
    @endisset
</div>

<div class="card border shadow-none mb-5">
    <div class="card-header d-flex align-items-center">
        <div class="flex-shrink-0 me-3">
            <div class="avatar">
                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                    01
                </div>
            </div>
        </div>
        <div class="flex-grow-1">
            <h5 class="card-title">Informações Pessoais</h5>
        </div>
    </div>
    <div class="card-body">
        <div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nome de usuário</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" placeholder="" required
                                value="{{ isset($user->name) ? $user->name : old('name') }}" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="primeiro_nome">Nome</label>
                            <input type="text" class="form-control @error('primeiro_nome') is-invalid @enderror"
                                id="primeiro_nome" name="primeiro_nome" placeholder="" required
                                value="{{ isset($user->primeiro_nome) ? $user->primeiro_nome : old('primeiro_nome') }}" />
                            @error('primeiro_nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control @error('sobrenome') is-invalid @enderror"
                                id="sobrenome" name="sobrenome" placeholder="" required
                                value="{{ isset($user->sobrenome) ? $user->sobrenome : old('sobrenome') }}" />
                            @error('sobrenome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="email@example.com" required
                                value="{{ isset($user->email) ? $user->email : old('email') }}" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="telefone">Telefone</label>
                            <div class="input-group input-group-merge">
                                {{-- <span class="input-group-text">ANG (+244)</span> --}}
                                <input type="tel" class="form-control @error('telefone') is-invalid @enderror"
                                    id="telefone"maxlength="9" name="telefone" placeholder="999 999 999"
                                    value="{{ isset($user->telefone) ? $user->telefone : old('telefone') }}" />
                            </div>


                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

             
                @if (Auth::user()->perfil == 'Administrador')
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="perfil">{{ __('Nível') }}</label>
                            <select class="form-control @error('perfil') is-invalid @enderror" name="perfil"
                                id="perfil" required autocomplete="perfil" onchange="alterarNivel()">



                                <option {{ isset($user->perfil) && $user->perfil == 'Bibliotecário' ? 'selected' : '' }}
                                    value="Bibliotecário">
                                    Bibliotecário</option>
                                </option>

                                <option {{ isset($user->perfil) && $user->perfil == 'Administrador' ? 'selected' : '' }}
                                    value="Administrador">
                                    Administrador</option>
                                </option>

                                {{-- <option {{ isset($user->perfil) && $user->perfil == 'Membro' ? 'selected' : '' }}
                                    value="Membro">
                                    Membro</option>
                                </option> --}}

                             
                           



                            </select>

                            @error('perfil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @else
                    <div class="col-md-4" hidden>
                        <div class="form-group">
                            <label for="perfil">{{ __('Nível') }}</label>
                            <select class="form-control @error('perfil') is-invalid @enderror" name="perfil"
                                id="perfil" required autocomplete="perfil" onchange="alterarNivel()">


                                <option {{ isset($user->perfil) && $user->perfil == 'Bibliotecário' ? 'selected' : '' }}
                                    value="Bibliotecário">
                                    Bibliotecário</option>
                                </option>

                               {{--  @if (Auth::user()->perfil == 'Administrador')
                                <option {{ isset($user->perfil) && $user->perfil == 'Membro' ? 'selected' : '' }}
                                    value="Membro">Membro</option>
                                </option>
                                @endif --}}

                                @if (Auth::user()->perfil == 'Administrador')
                                <option {{ isset($user->perfil) && $user->perfil == 'Administrador' ? 'selected' : '' }}
                                    value="Administrador">Administrador</option>
                                </option>

                                @endif

                              


                            </select>

                            @error('perfil')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endif


                <br><br><br><br>
                <div class="col-md-4">
                    <label for="upload">Foto de Perfil</label><br>
                    <input type="file" id="upload" class="account-file-input form-control" accept="image/*"
                        name="profile_photo_path" />
                </div>
            </div>







        </div>
    </div>
</div>
<!-- end card -->


<div class="card border shadow-none mb-5">
    <div class="card-header d-flex align-items-center">
        <div class="flex-shrink-0 me-3">
            <div class="avatar">
                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                    02
                </div>
            </div>
        </div>
        <div class="flex-grow-1">
            <h5 class="card-title">Segurança</h5>
        </div>
    </div>
    <div class="card-body">

        @if (isset($edit))
            <div>
                <div class="form-check mb-3" data-bs-toggle="collapse" data-bs-target="#collapseChangePassword"
                    aria-expanded="false" aria-controls="collapseChangePassword">
                    <input type="checkbox" class="form-check-input" id="gen-info-change-password"
                        name="checkbox"onchange="updatePassword()">
                    <label class="form-check-label" for="gen-info-change-password">Alterar a
                        Senha?</label>
                </div>

                <div class="" id="collapseChangePassword">
                    <div class="card border card-body">
                        <div class="row">
                            @if (Auth::user()->perfil == 'Administrador')
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">{{ __('Senha') }}</label>
                                        <input value="" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" placeholder="Senha do utiizador"
                                            value="{{ isset($user) ? '' : 'required' }}" required disabled
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation">{{ __('Confirme a Senha') }}</label>
                                        <input value="" id="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" placeholder="Confirme a senha do utilizador"
                                            value="" required disabled>

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-4">
                                    <div class="mb-lg-0">
                                        <div class="form-group">
                                            <label for="currentPassword">{{ __('Senha Actual') }}</label>
                                            <input value="" id="currentPassword" type="password"
                                                class="form-control @error('currentPassword') is-invalid @enderror"
                                                name="currentPassword" placeholder="Senha actual do utilizador"
                                                value="" disabled>

                                            @error('currentPassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="password">{{ __('Nova Senha') }}</label>
                                        <input value="" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" placeholder="Senha do utiizador"
                                            autocomplete="new-password" disabled>


                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="password_confirmation">{{ __('Confirme a Senha') }}</label>
                                        <input value="" id="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" placeholder="Confirme a senha do utilizador"
                                            value="" disabled>


                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            @else
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">{{ __('Senha') }}</label>
                            <input value="" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Senha do utiizador" value="{{ isset($user) ? '' : 'required' }}"
                                required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">{{ __('Confirme a Senha') }}</label>
                            <input value="" id="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" placeholder="Confirme a senha do utilizador"
                                value="" required>

                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                </div>
        @endif
    </div>
</div>
<!-- end card -->
<script>
    function alterarNivel() {
        var perfil = document.getElementById("perfil").value;


    }
</script>
