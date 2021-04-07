<div class="container-fluid">
    <div class="text-center mt-5">
        <p class="font-weight-bold h1 text-primary">Light Room</p>
            <h3 class="mt-2">&#128161; {{ $brightness }}%</h3>
        <div class="progress mt-3" style="width: 40%; height: 30px; margin-left: 400px">
            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $brightness }}%; height: 25px" aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="row justify-content-center mt-2">
            <button class="btn btn-danger mr-1" wire:click="empty" {{ ($brightness === 0) ? 'disabled' : '' }}>Empty</button>
            <button class="btn btn-info mr-1" wire:click="decrease" {{ ($brightness === 0) ? 'disabled' : '' }}>-</button>
            <button class="btn btn-warning mr-1" wire:click="increase" {{ ($brightness === 100) ? 'disabled' : '' }}>+</button>
            <button class="btn btn-success" wire:click="full" {{ ($brightness === 100) ? 'disabled' : '' }}>Full</button>
        </div>
    </div>
</div>
