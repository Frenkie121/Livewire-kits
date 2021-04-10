<div class="container">
    <div class="text-center mt-5">
        <p class="font-weight-bold h1 text-primary">Students</p>
    </div>

    <div class="row col-md-10 mt-5 mb-2">
        <div class="col-md-6 mb-2" style="margin-left: 95px; margin-right: 125px">
            <input wire:model="search" placeholder="Eg: Chuck Bart, chuck@hotmail.com" type="search" class="form-control">
        </div>
        <div>
            Display
            <select wire:model="per_page" class="custom-select w-auto">
                @for ($i = 5; $i < 50; $i+=5)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <label for="per_page"> per page</label>
        </div>
    </div>

    <div class="table-responsive col-md-10 mx-auto">
        <table class="table">
            <thead class="thead-dark">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Adult</th>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->isAdult }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="col-md-10 mx-auto mt-3 text-primary">
        @if ($show_count)
            <div class="text-secondary mb-3 text-center">{{ $students->count() . ' ' . Str::plural('result', $students->count()) }} find.</div>
        @endif
        {{ $students->links() }}
    </div>

</div>

