<x-layout>

    <div class="m-5">
    <div class="card-header">
    </div>
    <div class="card-body">
    </div>

    <form action="{{route('article.store')}}" method="POST" class="m-5" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="exampleInputTitle1" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputSubtitle1" class="form-label">Sottotitolo</label>
            <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror">
            @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputCategory1" class="form-label">Categoria</label>
            <Select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputImg1" class="form-label">Immagine</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputBody1" class="form-label">Corpo del testo : </label>
            <textarea name="body" id='body' cols="30" rows="7" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Carica articolo</button>

    </form>


</x-layout>