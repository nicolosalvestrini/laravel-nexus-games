<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" id="nome" name="nome" value="{{ old('nome', $genere->nome ?? '') }}"
        class="form-control @error('nome') is-invalid @enderror" required autofocus>
    @error('nome')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>