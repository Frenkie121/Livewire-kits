<div class="container-fluid">
    <div class="text-center mt-5">
        <p class="font-weight-bold h1 text-primary mt-2">Buy your Books</p>
        <p class="h4 text-dark mt-4 mb-3">Choose the number of book you want andd see the total it's make</p>
        <input type="range" class="form-control-range mb-2" min="1" max="10" wire:model="book" value="{{ $book }}" style="width: 50%; height: 20px; margin-left: 300px">
        <p class="text-info mt-4 h5">You have took <strong class="h5">{{ $book }}</strong> book{{ $book > 1 ? 's' : '' }}</p>
        <p class="h5 text-dark mt-3">It's make <strong class="h5 text-success">{{ $amount }}</strong> XAF.</p>
    </div>
</div>
