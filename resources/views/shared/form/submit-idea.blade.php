<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('idea.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" id="idea" rows="3" name="content"></textarea>
            @error('content')
                <span class="fs-6 text-danger mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>

</div>
