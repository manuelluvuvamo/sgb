<div class="row">


    <div class="col-md-6">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="primeiro_nome">Nome</label>
                <input type="text" class="form-control @error('primeiro_nome') is-invalid @enderror" id="primeiro_nome" name="primeiro_nome"
                    placeholder="" required value="{{ isset($professor->primeiro_nome) ? $professor->primeiro_nome : old('primeiro_nome') }}" autofocus />
                @error('primeiro_nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control @error('sobrenome') is-invalid @enderror" id="sobrenome" name="sobrenome"
                    placeholder="" required value="{{ isset($professor->sobrenome) ? $professor->sobrenome : old('sobrenome') }}"  />
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
                <label class="form-label" for="telefone">Telefone</label>
                <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone"
                    placeholder=""  value="{{ isset($professor->telefone) ? $professor->telefone : old('telefone') }}"  />
                @error('telefone')
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
                <label class="form-label" for="endereco">Endereço</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco"
                    placeholder=""  value="{{ isset($professor->endereco) ? $professor->endereco : old('endereco') }}"  />
                @error('endereco')
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
                <label class="form-label" for="bi">BI</label>
                <input type="text" class="form-control @error('bi') is-invalid @enderror" id="bi" name="bi" maxlength="14"
                    placeholder=""  value="{{ isset($professor->bi) ? $professor->bi : old('bi') }}"  />
                @error('bi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

</div>
