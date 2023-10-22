<div class="row">
    {{--   @isset($livro->cape)
        <div class="col-sm-12 m-2">

            <div class="card card-outline-info h-100">
                <div class="card-img-top">
                    <img src="{{ asset($livro->cape) }}" class="grayscale img-fluid mx-auto d-block" width="200">
                </div>
            </div>

        </div>
    @endisset --}}

    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="titulo">Titulo</label>
                <input type="text" class="form-control default @error('titulo') is-invalid @enderror" id="titulo"
                    name="titulo" placeholder="" required
                    value="{{ isset($livro->titulo) ? $livro->titulo : old('titulo') }}" />
                @error('titulo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="id_categoria" class="form-label">Categoria</label>
            <select class=" form-select @error('id_categoria') is-invalid @enderror"
                id="id_categoria" name="id_categoria" value="old('id_categoria')" required>

                <option value="{{ isset($livro) ? $livro->id_categoria : '0' }}" {{ isset($func) ? '' : 'selected' }}>
                    {{ isset($livro) ? $livro->categoria : 'Seleccionar Categoria' }}
                </option>

                @isset($categorias)
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $categoria->nome }}
                        </option>
                    @endforeach
                @endisset



            </select>
            @error('id_categoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="id_editora" class="form-label">Editora</label>
            <select class=" form-select @error('id_editora') is-invalid @enderror"
                id="id_editora" name="id_editora" value="old('id_editora')" required>

                <option value="{{ isset($livro) ? $livro->id_editora : '0' }}" {{ isset($func) ? '' : 'selected' }}>
                    {{ isset($livro) ? $livro->editora : 'Seleccionar editora' }}
                </option>

                @isset($editoras)
                    @foreach ($editoras as $editora)
                        <option value="{{ $editora->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $editora->nome }}
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
            <label for="id_autor" class="form-label">Autores(Selecione todos os autores deste livro)</label>
            <select class="js-example-basic-multiple multiple form-select @error('id_autor') is-invalid @enderror"
                id="id_autor" name="id_autor[]" value="old('id_autor')" required multiple>


                @if (isset($livro->livro_autors))
                    @foreach ($livro->livro_autors as $autor)
                        <option value="{{ $autor->id_autor }}" selected>{{ $autor->nome }}
                        </option>
                    @endforeach
                @endif


                @isset($autores)
                    @foreach ($autores as $autor)
                        <option value="{{ $autor->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $autor->nome }}
                        </option>
                    @endforeach
                @endisset



            </select>
            @error('id_autor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="volume">Volume</label>
                <input type="text" 
                    class="form-control default @error('volume') is-invalid @enderror" id="volume" name="volume"
                    placeholder="" value="{{ isset($livro->volume) ? $livro->volume : old('volume') }}" />
                @error('volume')
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
                <label class="form-label" for="ano_lancamento">Ano de Lançamento</label>
                <input type="number" min="0" step="1"
                    class="form-control default @error('ano_lancamento') is-invalid @enderror" id="ano_lancamento"
                    name="ano_lancamento" placeholder=""
                    value="{{ isset($livro->ano_lancamento) ? $livro->ano_lancamento : old('ano_lancamento') }}" />
                @error('ano_lancamento')
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
                <label class="form-label" for="quantidade">Quantidade de exemplares</label>
                <input type="number" min="0" step="1"
                    class="form-control default @error('quantidade') is-invalid @enderror" id="quantidade"
                    name="quantidade" placeholder="" required
                    value="{{ isset($livro->quantidade) ? $livro->quantidade : old('quantidade') }}" />
                @error('quantidade')
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
