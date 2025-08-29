@extends('admin.drivers.driver.layout.principal')
@section('title', 'Duralux || Editar Motorista')
@section('content-driver')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Editar Motorista</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Motoristas</a></li>
                <li class="breadcrumb-item">Editar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                {{--<div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('drivers.show', $driver) }}" class="btn btn-light">
                        <i class="feather feather-eye me-2"></i>
                        <span>Visualizar</span>
                    </a>
                    <a href="{{ route('drivers.index') }}" class="btn btn-light">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Voltar</span>
                    </a>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <form action="{{ route('drivers.update', $driver) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <!-- Nome Completo -->
                                <div class="col-md-6 mb-3">
                                    <label for="full_name" class="form-label">Nome Completo <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name', $driver->full_name) }}" required>
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Documento de Identificação -->
                                <div class="col-md-6 mb-3">
                                    <label for="document_identification" class="form-label">BI ou PASSPORTE<span class="text-danger">*</span></label>
                                    <input type="text" name="document_identification" id="document_identification" class="form-control @error('document_identification') is-invalid @enderror" value="{{ old('document_identification', $driver->document_identification) }}" required>
                                    @error('document_identification')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $driver->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Telefone -->
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number" class="form-label">Telefone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number', $driver->phone_number) }}" required>
                                    @error('phone_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Gênero -->
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gênero</label>
                                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                        <option value="">Selecione</option>
                                        <option value="male" {{ old('gender', $driver->gender) == 'male' ? 'selected' : '' }}>Masculino</option>
                                        <option value="female" {{ old('gender', $driver->gender) == 'female' ? 'selected' : '' }}>Feminino</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Anos de Experiência -->
                                <div class="col-md-6 mb-3">
                                    <label for="experience_years" class="form-label">Anos de Experiência <span class="text-danger">*</span></label>
                                    <input type="number" name="experience_years" id="experience_years" class="form-control @error('experience_years') is-invalid @enderror" value="{{ old('experience_years', $driver->experience_years) }}" min="0" required>
                                    @error('experience_years')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Endereço -->
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Endereço <span class="text-danger">*</span></label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="1" required>{{ old('address', $driver->address) }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                    <!-- Data de Expiração da Licença -->
                                <div class="col-md-6 mb-3">
                                    <label for="license_expiry_date" class="form-label">Data de Expiração da Licença <span class="text-danger">*</span></label>
                                    <input type="date" name="license_expiry_date" id="license_expiry_date" class="form-control @error('license_expiry_date') is-invalid @enderror" value="{{ old('license_expiry_date', $driver->license_expiry_date) }}" required>
                                    @error('license_expiry_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Imagem de Identificação -->
                                <div class="col-md-6 mb-3">
                                    <label for="id_image" class="form-label">Imagem do BI/PASSPORTE</label>
                                    <input type="file" name="id_image" id="id_image" class="form-control @error('id_image') is-invalid @enderror" accept="image/*,application/pdf">
                                    @if($driver->id_image)
                                        <div class="mt-2">
                                            <strong>Imagem Atual:</strong>
                                            <br>
                                            @if(Str::endsWith($driver->id_image, '.pdf'))
                                                <a href="{{ asset('storage/'.$driver->id_image) }}" target="_blank">📄 Ver Documento</a>
                                            @else
                                                <a href="{{ asset('storage/'.$driver->id_image) }}" target="_blank">
                                                    <img src="{{ asset('storage/'.$driver->id_image) }}" class="img-fluid" alt="Imagem de Identificação" style="width:100px; height:100px; object-fit:cover;">
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                    @error('id_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Imagem da Licença -->
                                <div class="col-md-6 mb-3">
                                    <label for="license_image" class="form-label">Imagem da Carta de Condução</label>
                                    <input type="file" name="license_image" id="license_image" class="form-control @error('license_image') is-invalid @enderror" accept="image/*,application/pdf">
                                    @if($driver->license_image)
                                        <div class="mt-2">
                                            <strong>Imagem Atual:</strong>
                                            <br>
                                            @if(Str::endsWith($driver->license_image, '.pdf'))
                                                <a href="{{ asset('storage/'.$driver->license_image) }}" target="_blank">📄 Ver Licença</a>
                                            @else
                                                <a href="{{ asset('storage/'.$driver->license_image) }}" target="_blank">
                                                    <img src="{{ asset('storage/'.$driver->license_image) }}" class="img-fluid" alt="Imagem da Licença" style="width:100px; height:100px; object-fit:cover;">
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                    @error('license_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                              
                            </div>

                            <!-- Botões -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('drivers.index') }}" class="btn btn-light">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Atualizar Motorista</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection