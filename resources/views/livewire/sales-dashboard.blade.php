<div class="container-fluid">
    <div class="text-center mt-5">
        <p class="font-weight-bold h1 text-primary">Sales Dashboard</p>
    </div>
    <div class="row border border-dark rounded text-center" wire:poll.1s>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rounded-left">
            <h3 class="text-secondary">New Orders</h3>
            <strong class="h1 font-weight-bold">{{ $new_orders }}</strong>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rounded-left">
            <h3 class="text-secondary">Amounts</h3>
            <strong class="h1 font-weight-bold">{{  $amount }} XAF</strong>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rounded-left">
            <h3 class="text-secondary">Satisfactions</h3>
            <strong class="h1 font-weight-bold">{{ $satisfactions }}%</strong>
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-primary btn-lg mt-5" wire:click="$refresh">🔄 Refresh</button>
    </div>
</div>