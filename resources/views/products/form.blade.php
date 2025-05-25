<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control @error('name') is-invalid @enderror">
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" class="form-control @error('price') is-invalid @enderror">
    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
