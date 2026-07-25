<div class="mb-3">
    <label for="titolo" class="form-label">Titolo</label>
    <input type="text" id="titolo" name="titolo" value="{{ old('titolo', $videoGioco->titolo ?? '') }}"
        class="form-control @error('titolo') is-invalid @enderror" required>
    @error('titolo')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="descrizione" class="form-label">Descrizione</label>
    <textarea id="descrizione" name="descrizione" rows="4"
        class="form-control @error('descrizione') is-invalid @enderror">{{ old('descrizione', $videoGioco->descrizione ?? '') }}</textarea>
    @error('descrizione')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="anno_uscita" class="form-label">Anno di uscita</label>
        <input type="number" id="anno_uscita" name="anno_uscita" value="{{ old('anno_uscita', $videoGioco->anno_uscita ?? '') }}"
            class="form-control @error('anno_uscita') is-invalid @enderror">
        @error('anno_uscita')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="voto" class="form-label">Voto (0-10)</label>
        <input type="number" step="0.1" id="voto" name="voto" value="{{ old('voto', $videoGioco->voto ?? '') }}"
            class="form-control @error('voto') is-invalid @enderror">
        @error('voto')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="copertina" class="form-label">Copertina</label>
    <input type="file" id="copertina" name="copertina"
        class="form-control @error('copertina') is-invalid @enderror" accept="image/*">
    @error('copertina')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if (isset($videoGioco) && $videoGioco->copertina)
    <img src="{{ Storage::url($videoGioco->copertina) }}" alt="Copertina attuale"
        class="rounded border mt-2 d-block" style="max-height: 120px;">
    @endif
</div>