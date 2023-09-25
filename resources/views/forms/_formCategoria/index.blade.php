<div class="row">
   

   <div class="col-md-12">
    <div class="form-group">
        <div class="mb-3">
            <label class="form-label" for="nome">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="" required value="{{ isset($categoria->nome) ? $categoria->nome : old('nome') }}" autofocus/>
            @error('nome')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
   </div>


    
      
</div>