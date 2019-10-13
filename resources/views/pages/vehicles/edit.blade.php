@extends('layouts.app')

@section('title', 'Vehicle')

@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('partials._alert')

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <div>
                        <div>Edit Contact</div>
                    </div>
                </div>
            </div>

            <form class="form" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="panel-form">
                    <div>
                        <div class="row row-line">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Vehicle Make</span>
                                    </label>

                                    <input type="text" source="input" label="name" name="make" col="4" class="form-input" placeholder="Vehicle Make" value="{{ $vehicle->make }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Vehicle Model</span>
                                    </label>

                                    <input type="text" source="input" label="model" name="model" col="4" class="form-input" placeholder="Vehicle Model" value="{{ $vehicle->model }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Price</span>
                                    </label>

                                    <input type="text" source="input" label="name" name="price" col="4" class="form-input" placeholder="Vehicle Price" value="{{ $vehicle->price }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Driver</span>
                                    </label>

                                    <select name="driver_id" class="form-control select-input">
                                        <option value="" disabled="disabled">Select ..</option>
                                        @foreach($driver as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row row-line">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Plate No.</span>
                                    </label>

                                    <input type="text" name="plate" col="4" class="form-input" placeholder="Vehicle Plate"  value="{{ $vehicle->plate }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Type</span>
                                    </label>

                                    <select name="bussiness_type" class="form-control select-input">
                                        <option value="" disabled="disabled">Select ..</option>
                                        <option value="First Class">Luxury Class</option>
                                        <option value="First Class">Bussiness Class</option>
                                        <option value="First Class">First Class</option>
                                        <option value="First Class">City Class</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Color</span>
                                    </label>

                                    <input type="text" name="color" col="4" class="form-input" placeholder="Vehicle Color"  value="{{ $vehicle->color }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Year</span>
                                    </label>

                                    <input type="text" name="year" col="4" class="form-input" placeholder="Vehicle Year"  value="{{ $vehicle->year }}">
                                </div>
                            </div>
                        </div>

                        <div class="row row-line">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Odometer</span>
                                    </label>

                                    <input type="text" source="input" label="name" name="current_meter" col="4" class="form-input" placeholder="Vehicle Odometer"  value="{{ $vehicle->current_meter }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>VIN</span>
                                    </label>

                                    <input type="text" source="input" label="name" name="vin" col="4" class="form-input" placeholder="Vehicle VIN Number"  value="{{ $vehicle->vin }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <span>Vehicle Photo</span>
                                    </label>

                                    <input type="file" source="input" label="name" name="photo" col="4" class="form-input" >
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel-footer panel-alt">
                    <div class="flex flex-end">
                        <div>
                            <a href="{{ route('contacts.index') }}" class="btn btn-default">
                                <span class="btn-text">Cancel</span>
                            </a>

                            <button type="submit" class="btn btn-primary">
                                <span class="btn-text">Save</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection