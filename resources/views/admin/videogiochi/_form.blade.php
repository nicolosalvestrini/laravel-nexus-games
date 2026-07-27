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

<div class="mb-3">
    <label class="form-label d-block">Generi</label>
    @foreach ($generi as $genere)
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="generi[]" id="genere_{{ $genere->id }}"
            value="{{ $genere->id }}"
            @checked(in_array($genere->id, old('generi', isset($videoGioco) ? $videoGioco->generi->pluck('id')->toArray() : []))) >
        <label class="form-check-label" for="genere_{{ $genere->id }}">{{ $genere->nome }}</label>
    </div>
    @endforeach
</div>

<div class="mb-3">
    <label class="form-label d-block">Piattaforme</label>
    @foreach ($piattaforme as $piattaforma)
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" name="piattaforme[]" id="piattaforma_{{ $piattaforma->id }}"
            value="{{ $piattaforma->id }}"
            @checked(in_array($piattaforma->id, old('piattaforme', isset($videoGioco) ? $videoGioco->piattaforme->pluck('id')->toArray() : []))) >
        <label class="form-check-label" for="piattaforma_{{ $piattaforma->id }}">{{ $piattaforma->nome }}</label>
    </div>
    @endforeach
</div>