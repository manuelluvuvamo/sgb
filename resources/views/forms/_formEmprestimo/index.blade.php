<div class="row">


    <div class="col-md-4">
        <div class="form-group">
            <label for="id_professor" class="form-label">Professor</label>
            <select class="js-example-basic-single form-select @error('id_professor') is-invalid @enderror"
                id="id_professor" name="id_professor" value="old('id_professor')" required>

                <option value="{{ isset($emprestimo) ? $emprestimo->id_professor : '0' }}" {{ isset($func) ? '' : 'selected' }}>
                    {{ isset($emprestimo) ? $emprestimo->primeiro_nome." ".$emprestimo->sobrenome : 'Seleccionar professor' }}
                </option>

                @isset($professors)
                    @foreach ($professors as $professor)
                        <option value="{{ $professor->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $professor->primeiro_nome." ".$professor->sobrenome }}
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
            <label for="id_livro" class="form-label">Livros(Selecione todos os livros emprestados)</label>
            <select class="js-example-basic-multiple multiple form-select @error('id_livro') is-invalid @enderror"
                id="id_livro" name="id_livro[]" value="old('id_livro')" required multiple>


                @if (isset($emprestimo->livro_emprestimos))
                    @foreach ($emprestimo->livro_emprestimos as $livro)
                        <option value="{{ $livro->id_livro }}" selected>{{ $livro->titulo }}
                        </option>
                    @endforeach
                @endif


                @isset($livros)
                    @foreach ($livros as $livro)
                        <option value="{{ $livro->id }}" {{ isset($func) ? 'selected' : '' }}>{{ $livro->titulo }}
                        </option>
                    @endforeach
                @endisset



            </select>
            @error('id_livro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="mb-3">
                <label class="form-label" for="data_levantamento">Data de Levantamento</label>
                <input type="date" required 
                    class="form-control default @error('data_levantamento') is-invalid @enderror" id="data_levantamento"
                    name="data_levantamento" placeholder=""
                    value="{{ isset($emprestimo->data_levantamento) ? date("Y-m-d",strtotime($emprestimo->data_levantamento)) : date("Y-m-d") }}" />
                @error('data_levantamento')
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
                <label class="form-label" for="data_entrega">Data de Entrega</label>
                <input type="date" required 
                    class="form-control default @error('data_entrega') is-invalid @enderror" id="data_entrega"
                    name="data_entrega" placeholder=""
                    value="{{ isset($emprestimo->data_entrega) ? date("Y-m-d",strtotime($emprestimo->data_entrega)) : old("data_entrega") }}"  />
                @error('data_entrega')
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
