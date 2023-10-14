<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome do Leitor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome"
                    placeholder="" required value="{{ isset($leitura->nome) ? $leitura->nome : old('nome') }}" autofocus />
                @error('nome')
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
                <label class="form-label" for="bi">BI do Leitor</label>
                <input type="text" class="form-control @error('bi') is-invalid @enderror" id="bi" name="bi" maxlength="14"
                    placeholder=""  value="{{ isset($leitura->bi) ? $leitura->bi : old('bi') }}"  />
                @error('bi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="id_livro" class="form-label">Livro</label>
            <select class="js-example-basic-single form-select @error('id_livro') is-invalid @enderror"
                id="id_livro" name="id_livro" value="old('id_livro')" required>

                <option value="{{ isset($leitura) ? $leitura->id_livro : '0' }}" {{ isset($func) ? '' : 'selected' }}>
                    {{ isset($leitura) ? $leitura->titulo : 'Seleccionar livro' }}
                </option>

                @isset($livros)
                    @foreach ($livros as $livro)
                        <option value="{{ $livro->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $livro->titulo." - Volume: ".$livro->volume. " - Editora: ".$livro->editora }}
                        </option>
                    @endforeach
                @endisset



            </select>
            @error('id_editora')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>



    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="data">Data</label>
                <input type="date" required 
                    class="form-control default @error('data') is-invalid @enderror" id="data"
                    name="data" placeholder=""
                    value="{{ isset($leitura->data) ? date("Y-m-d",strtotime($leitura->data)) : date("Y-m-d") }}" />
                @error('data')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>





</div>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            placeholder: "Seleccione os autores",
            maximumSelectionLength: 20

        });
    });
</script>
