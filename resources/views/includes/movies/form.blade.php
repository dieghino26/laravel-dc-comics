@csrf
<div class="row p-4">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Film</label>
            <input type="text"
                class="form-control 
                    @error('title') is-invalid 
                    @elseif(old('title')) is-valid 
                    @enderror"
                id="title" placeholder="Titolo Film" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="thumb" class="form-label">Imaggine Film</label>
            <input type="url" class="form-control" id="thumb" placeholder="Immagine Film" name="thumb"
                value="{{ old('thumb') }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo Film</label>
            <input type="text"
                class="form-control
                    @error('price') is-invalid 
                    @elseif(old('price')) is-valid 
                    @enderror"
                id="price" placeholder="Prezzo Film" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="series" class="form-label">Serie Film</label>
            <input type="text"
                class="form-control
                    @error('series') is-invalid 
                    @elseif(old('series')) is-valid 
                    @enderror"
                id="series" placeholder="Serie Film" name="series" value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data Film</label>
            <input type="date" class="form-control" id="sale_date" placeholder="Data Film" name="sale_date"
                value="{{ old('sale_date') }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="type" class="form-label">Tipo Film</label>
            <input type="text"
                class="form-control
                    @error('type') is-invalid 
                    @elseif(old('type')) is-valid 
                    @enderror"
                id="type" placeholder="Tipo Film" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti Film</label>
            <input type="text"
                class="form-control
                    @error('artists') is-invalid 
                    @elseif(old('artists')) is-valid 
                    @enderror"
                id="artists" placeholder="Artisti Film" name="artists" value=" {{ old('artists') }}">
            @error('artists')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori Film</label>
            <input type="text"
                class="form-control
                    @error('writers') is-invalid 
                    @elseif(old('writers')) is-valid 
                    @enderror"
                id="writers" placeholder="Scrittori Film" name="writers" value="{{ old('writers') }}">
            @error('writers')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione Film</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
        </div>
    </div>
