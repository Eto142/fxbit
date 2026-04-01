@include('admin.header')

<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">

            @if(session('message'))
                <div class="alert alert-success mb-3">{{ session('message') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">WhatsApp Settings</h1>
                <p class="text-muted">Update the WhatsApp contact number displayed to users.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-dark shadow-lg">
                        <div class="card-header bg-dark border-bottom border-secondary">
                            <h4 class="card-title text-light mb-0">
                                <i class="fab fa-whatsapp text-success mr-2"></i> WhatsApp Number
                            </h4>
                        </div>
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('admin.whatsapp.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="text-light font-weight-bold" for="whatsapp_number">
                                        Phone Number (with country code)
                                    </label>
                                    <input
                                        type="text"
                                        id="whatsapp_number"
                                        name="whatsapp_number"
                                        class="form-control bg-dark text-light border-secondary @error('whatsapp_number') is-invalid @enderror"
                                        placeholder="+1234567890"
                                        value="{{ old('whatsapp_number', $setting->whatsapp_number ?? '') }}"
                                        required
                                    >
                                    @error('whatsapp_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Include the country code, e.g. +14155552671</small>
                                </div>

                                <button type="submit" class="btn btn-success">
                                    <i class="fab fa-whatsapp mr-1"></i> Save Number
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                @if($setting && $setting->whatsapp_number)
                <div class="col-md-6">
                    <div class="card bg-dark shadow-lg">
                        <div class="card-header bg-dark border-bottom border-secondary">
                            <h4 class="card-title text-light mb-0">Current Setting</h4>
                        </div>
                        <div class="card-body p-4">
                            <p class="text-muted mb-1">Active WhatsApp Number</p>
                            <h4 class="text-success">
                                <i class="fab fa-whatsapp mr-1"></i>
                                {{ $setting->whatsapp_number }}
                            </h4>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->whatsapp_number) }}"
                               target="_blank"
                               class="btn btn-outline-success btn-sm mt-2">
                                Test Link
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>

@include('admin.footer')
