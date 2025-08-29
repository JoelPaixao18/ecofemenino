@extends('admin.reserves.reserveCreate.layout.principal')
@section('title', 'Duralux || Criar Reserva')
@section('content-reserveCreate')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Reserva</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('reserves.index') }}">Reservas</a></li>
                <li class="breadcrumb-item">Criar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Voltar</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <button type="submit" form="reserveForm" class="btn btn-primary successAlertMessage">
                        <i class="feather-save me-2"></i>
                        <span>Salvar Reserva</span>
                    </button>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->
    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-xl-16">
                <div class="card invoice-container">
                    <div class="card-header">
                        <h5>Cadastro de Reserva</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <form id="reserveForm" action="{{ route('reserves.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    <!-- Client -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Cliente <span class="text-danger">*</span></label>
                                        <select name="client_id" class="form-control @error('client_id') is-invalid @enderror" required>
                                            <option value="" disabled selected>Selecione um cliente</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('client_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Car -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Carro <span class="text-danger">*</span></label>
                                        <select name="car_id" class="form-control @error('car_id') is-invalid @enderror" required>
                                            <option value="" disabled selected>Selecione um carro</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>{{ $car->name ?? 'Carro ' . $car->id }}</option>
                                            @endforeach
                                        </select>
                                        @error('car_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Start Date -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Início <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                                               value="{{ old('start_date', now()->format('Y-m-d')) }}" min="{{ now()->format('Y-m-d') }}" required>
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- End Date -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Data de Término <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                                               value="{{ old('end_date') }}" min="{{ now()->format('Y-m-d') }}" required>
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Total Amount -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Valor Total <span class="text-danger">*</span></label>
                                        <input type="number" name="total_amount" class="form-control @error('total_amount') is-invalid @enderror"
                                               value="{{ old('total_amount') }}" step="0.01" min="0" placeholder="Ex: 150.00" required>
                                        @error('total_amount')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Status -->
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                                            <option value="in_progress" {{ old('status', 'in_progress') == 'in_progress' ? 'selected' : '' }}>Em Progresso</option>
                                            <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Concluído</option>
                                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Resources -->
                                    <div class="col-lg-12 mb-4">
                                        <label class="form-label">Recursos adicionais</label>
                                        <div class="d-flex flex-column">

                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="resources[]" value="baby_seat"
                                                    id="babySeat" {{ (is_array(old('resources')) && in_array('baby_seat', old('resources'))) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="babySeat">Cadeira de Bebê</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="resources[]" value="protected_theft"
                                                    id="protectedTheft" {{ (is_array(old('resources')) && in_array('protected_theft', old('resources'))) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="protectedTheft">Proteção contra Roubo</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="resources[]" value="protected_accidents"
                                                    id="protectedAccidents" {{ (is_array(old('resources')) && in_array('protected_accidents', old('resources'))) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="protectedAccidents">Proteção contra Acidentes</label>
                                            </div>

                                        </div>
                                        @error('resources')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Driver Option -->
                                    <div class="form-check mb-2">
                                        <input type="checkbox" id="withDriver" class="form-check-input">
                                        <label for="withDriver">Incluir Motorista</label>
                                    </div>

                                    <div id="driverSelect" style="display:none;">
                                        <label class="form-label">Motorista</label>
                                        <select name="driver_id" class="form-control">
                                            <option value="">Selecione um motorista</option>
                                            
                                            @foreach($drivers as $driver)
                                                <option value="{{ $driver->id }}">{{ $driver->full_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <script>
                                        document.getElementById('withDriver').addEventListener('change', function() {
                                            document.getElementById('driverSelect').style.display = this.checked ? 'block' : 'none';
                                        });
                                    </script>


                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Salvar Reserva</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection