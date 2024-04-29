<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col"><h1>Laravel 11 Livewire 3.4 CRUD</h1></div>
                <div class="col"><a href="/cars" wire:navigate class="btn btn-primary btn-sm float-end">Car Link</a></div>
            </div>
        </div>
        <div class="card-body">

            @if ($is_flash_showing == true)
                <span class="alert alert-success p-2">Perubahan telah sukses.</span>
            @endif

            <form wire:submit='update()'>
                <div class="mb-3">
                    <label for="name" class="form-label">Car Name</label>
                    <input type="text" class="form-control" wire:model='car_name' id="car_name" placeholder="Masukkan Nama Mobil" value="{{ $car_name }}">
                    Character Left : <span x-text="10 - $wire.car_name.length"></span>
                        @error('car_name')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Car Brand</label>
                    <input type="text" class="form-control" wire:model='brand' id="brand" placeholder="Masukkan Nama Brand" value="{{ $brand }}">
                        @error('brand')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="capacity" class="form-label">Engine Capacity</label>
                    <input type="number" class="form-control" wire:model='capacity' id="capacity" placeholder="Masukkan Capacity" value="{{ $capacity }}">
                        @error('capacity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Capacity</label>
                    <select name="fuel_type" wire:model='fuel_type' id="fuel_type" class="form-select">
                        <option value="{{ $fuel_type }}">{{ $fuel_type }}</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Electricity">Electricity</option>
                    </select>
                        @error('fuel_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>   
        </div>
    </div>
</div>