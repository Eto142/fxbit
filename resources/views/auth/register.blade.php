<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="bingbot" content="noindex, nofollow">
    <meta name="scam-advisor" content="noindex, nofollow">
    <meta name="scam-adviser" content="noindex, nofollow">
    <meta name="scamadviser" content="noindex, nofollow">
    <meta name="google" content="noindex, nofollow">
    <title>Online Banking - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0056b3;
            --primary-hover: #004494;
            --secondary-color: #003366;
            --accent-color: #00a8e8;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --error-color: #dc3545;
            --border-radius: 8px;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: var(--dark-color);
            line-height: 1.6;
        }
        .bank-header {
            background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 10;
        }
        .bank-logo { font-size: 1.5rem; font-weight: bold; display: flex; align-items: center; }
        .bank-logo img { height: 40px; width: auto; }
        .login-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            transition: var(--transition);
            display: flex;
            align-items: center;
        }
        .login-link:hover { background-color: rgba(255,255,255,0.15); }
        .login-link i { margin-right: 8px; }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-grow: 1;
            padding: 2rem;
            background: url('https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        .main-container::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0,51,102,0.85);
        }
        .register-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 560px;
            padding: 2.5rem;
            border-top: 5px solid var(--primary-color);
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.5s ease;
            margin: 1rem 0;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .register-container h2 {
            color: var(--secondary-color);
            margin-bottom: 1.8rem;
            font-size: 1.8rem;
            text-align: center;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        .register-container h2::after {
            content: '';
            position: absolute;
            bottom: 0; left: 50%;
            transform: translateX(-50%);
            width: 80px; height: 3px;
            background-color: var(--accent-color);
        }
        .form-group { margin-bottom: 1.25rem; position: relative; }
        .form-group label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 0.95rem;
            transition: var(--transition);
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0,168,232,0.2);
            background-color: white;
        }
        .form-group select {
            appearance: none;
            background: url("data:image/svg+xml;utf8,<svg fill='%23333' height='20' viewBox='0 0 24 24' width='20' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>") no-repeat right 12px center/16px;
            background-color: #f9f9f9;
            padding-right: 36px;
        }
        .password-container { position: relative; }
        .toggle-password {
            position: absolute;
            right: 12px; top: 50%;
            transform: translateY(-50%);
            cursor: pointer; color: #777;
            transition: var(--transition);
        }
        .toggle-password:hover { color: var(--primary-color); }
        .password-strength {
            height: 5px; background-color: #eee;
            margin-top: 0.4rem; border-radius: 2px;
            overflow: hidden; position: relative;
        }
        .password-strength::before {
            content: ''; position: absolute; left: 0; top: 0;
            height: 100%; width: 0%;
            background-color: var(--error-color);
            transition: width 0.3s, background-color 0.3s;
        }
        .password-strength[data-strength="weak"]::before   { width: 25%; background-color: var(--error-color); }
        .password-strength[data-strength="medium"]::before { width: 50%; background-color: var(--warning-color); }
        .password-strength[data-strength="good"]::before   { width: 75%; background-color: #17a2b8; }
        .password-strength[data-strength="strong"]::before { width: 100%; background-color: var(--success-color); }
        .password-strength-text { font-size: 0.75rem; margin-top: 0.25rem; text-align: right; font-weight: 500; }
        .password-strength-text.weak   { color: var(--error-color); }
        .password-strength-text.medium { color: var(--warning-color); }
        .password-strength-text.good   { color: #17a2b8; }
        .password-strength-text.strong { color: var(--success-color); }
        .error-message { color: var(--error-color); font-size: 0.82rem; margin-top: 0.35rem; font-weight: 500; }
        .form-row { display: flex; gap: 1.25rem; }
        .form-col { flex: 1; }
        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            color: white; border: none;
            padding: 0.9rem 1.5rem;
            font-size: 1rem; font-weight: 600;
            border-radius: var(--border-radius);
            cursor: pointer; width: 100%;
            transition: var(--transition);
            margin-top: 0.5rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, var(--primary-hover), var(--accent-color));
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,86,179,0.3);
        }
        .btn-primary:active { transform: translateY(0); }
        .login-prompt { text-align: center; margin-top: 1.25rem; color: #666; font-size: 0.95rem; }
        .login-prompt a { color: var(--primary-color); text-decoration: none; font-weight: 600; }
        .login-prompt a:hover { text-decoration: underline; }
        .security-tips {
            margin-top: 1.5rem;
            padding: 1.25rem;
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            font-size: 0.85rem;
            border-left: 4px solid var(--accent-color);
        }
        .security-tips h3 { margin-top: 0; color: var(--secondary-color); font-size: 1rem; font-weight: 700; margin-bottom: 0.75rem; display: flex; align-items: center; }
        .security-tips h3 i { margin-right: 8px; color: var(--accent-color); }
        .security-tips ul { padding-left: 1.5rem; margin-bottom: 0; }
        .security-tips li { margin-bottom: 0.5rem; }
        .terms-group { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 1rem; }
        .terms-group input[type="checkbox"] { margin-top: 3px; accent-color: var(--primary-color); flex-shrink: 0; }
        .terms-group label { font-size: 0.9rem; color: #555; cursor: pointer; }
        .terms-group a { color: var(--primary-color); }
        .alert { padding: 0.85rem 1rem; border-radius: var(--border-radius); margin-bottom: 1rem; font-size: 0.9rem; }
        .alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .joint-fields { display: none; }
        footer {
            background-color: var(--secondary-color);
            color: white; text-align: center;
            padding: 1.25rem; font-size: 0.85rem;
        }
        .whatsapp-float {
            position: fixed; bottom: 20px; left: 20px;
            background: #25D366; color: white;
            border-radius: 50%; padding: 16px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.3);
            z-index: 9999; display: flex; align-items: center; justify-content: center;
            text-decoration: none; transition: all 0.3s ease-in-out;
        }
        .whatsapp-float:hover { transform: scale(1.1) rotate(-5deg); box-shadow: 0 12px 20px rgba(0,0,0,0.4); }
        .whatsapp-tooltip {
            position: absolute; left: 70px; background: #333; color: #fff;
            font-size: 14px; padding: 6px 12px; border-radius: 6px;
            opacity: 0; transform: translateY(10px); pointer-events: none;
            transition: all 0.3s ease; white-space: nowrap;
        }
        .whatsapp-float:hover .whatsapp-tooltip { opacity: 1; transform: translateY(0); }
        @media (max-width: 768px) { .form-row { flex-direction: column; gap: 0; } }
        @media (max-width: 576px) {
            .register-container { padding: 1.5rem; }
            .bank-header { padding: 0.75rem 1rem; }
            .main-container { padding: 1rem; }
        }
    </style>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '38d813798c21a51e784e153e8d884e2e10bf6bb8';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>
</head>
<body>
    <header class="bank-header">
        <div class="bank-logo">
            <img src="{{ asset('logo.png') }}" alt="Bank Logo" width="150">
        </div>
        <a href="{{ route('login') }}" class="login-link">
            <i class="fas fa-sign-in-alt"></i> Sign In
        </a>
    </header>

    <div class="main-container">
        <div class="register-container">
            <h2>Create Your Online Banking Account</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('register') }}" id="registrationForm">
                @csrf
                {{-- Honeypot --}}
                <input type="text" name="website_url" style="display:none">

                {{-- Referral --}}
                @if(isset($referred_by) && $referred_by)
                    <input type="hidden" name="ref_by" value="{{ $referred_by->referral_code }}">
                @else
                    <input type="hidden" name="ref_by" value="{{ old('ref_by') }}">
                @endif

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required maxlength="255" placeholder="As it appears on your ID">
                            <div class="error-message">@error('name'){{ $message }}@enderror</div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" required maxlength="100" placeholder="Unique username">
                            <div class="error-message">@error('username'){{ $message }}@enderror</div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="your@email.com">
                            <div class="error-message">@error('email'){{ $message }}@enderror</div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required maxlength="20" placeholder="+1 (123) 456-7890">
                            <div class="error-message">@error('phone'){{ $message }}@enderror</div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="account_type">Account Type</label>
                            <select name="account_type" id="account_type" required onchange="toggleJointFields(this.value)">
                                <option value="">Select Account Type</option>
                                <option value="Personal" {{ old('account_type') == 'Personal' ? 'selected' : '' }}>Personal Account</option>
                                <option value="Joint"    {{ old('account_type') == 'Joint'    ? 'selected' : '' }}>Joint Account</option>
                            </select>
                            <div class="error-message">@error('account_type'){{ $message }}@enderror</div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" id="country" required>
                                <option value="" disabled {{ old('country') ? '' : 'selected' }}>Choose Country</option>
                                <option value="Afghanistan" {{ old('country')=='Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                <option value="Albania" {{ old('country')=='Albania' ? 'selected' : '' }}>Albania</option>
                                <option value="Algeria" {{ old('country')=='Algeria' ? 'selected' : '' }}>Algeria</option>
                                <option value="Andorra" {{ old('country')=='Andorra' ? 'selected' : '' }}>Andorra</option>
                                <option value="Angola" {{ old('country')=='Angola' ? 'selected' : '' }}>Angola</option>
                                <option value="Antigua and Barbuda" {{ old('country')=='Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                                <option value="Argentina" {{ old('country')=='Argentina' ? 'selected' : '' }}>Argentina</option>
                                <option value="Armenia" {{ old('country')=='Armenia' ? 'selected' : '' }}>Armenia</option>
                                <option value="Australia" {{ old('country')=='Australia' ? 'selected' : '' }}>Australia</option>
                                <option value="Austria" {{ old('country')=='Austria' ? 'selected' : '' }}>Austria</option>
                                <option value="Azerbaijan" {{ old('country')=='Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                <option value="Bahamas" {{ old('country')=='Bahamas' ? 'selected' : '' }}>Bahamas</option>
                                <option value="Bahrain" {{ old('country')=='Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                <option value="Bangladesh" {{ old('country')=='Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                <option value="Barbados" {{ old('country')=='Barbados' ? 'selected' : '' }}>Barbados</option>
                                <option value="Belarus" {{ old('country')=='Belarus' ? 'selected' : '' }}>Belarus</option>
                                <option value="Belgium" {{ old('country')=='Belgium' ? 'selected' : '' }}>Belgium</option>
                                <option value="Belize" {{ old('country')=='Belize' ? 'selected' : '' }}>Belize</option>
                                <option value="Benin" {{ old('country')=='Benin' ? 'selected' : '' }}>Benin</option>
                                <option value="Bhutan" {{ old('country')=='Bhutan' ? 'selected' : '' }}>Bhutan</option>
                                <option value="Bolivia" {{ old('country')=='Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                <option value="Bosnia and Herzegovina" {{ old('country')=='Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                                <option value="Botswana" {{ old('country')=='Botswana' ? 'selected' : '' }}>Botswana</option>
                                <option value="Brazil" {{ old('country')=='Brazil' ? 'selected' : '' }}>Brazil</option>
                                <option value="Brunei" {{ old('country')=='Brunei' ? 'selected' : '' }}>Brunei</option>
                                <option value="Bulgaria" {{ old('country')=='Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                <option value="Burkina Faso" {{ old('country')=='Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                                <option value="Burundi" {{ old('country')=='Burundi' ? 'selected' : '' }}>Burundi</option>
                                <option value="Cabo Verde" {{ old('country')=='Cabo Verde' ? 'selected' : '' }}>Cabo Verde</option>
                                <option value="Cambodia" {{ old('country')=='Cambodia' ? 'selected' : '' }}>Cambodia</option>
                                <option value="Cameroon" {{ old('country')=='Cameroon' ? 'selected' : '' }}>Cameroon</option>
                                <option value="Canada" {{ old('country')=='Canada' ? 'selected' : '' }}>Canada</option>
                                <option value="Central African Republic" {{ old('country')=='Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                                <option value="Chad" {{ old('country')=='Chad' ? 'selected' : '' }}>Chad</option>
                                <option value="Chile" {{ old('country')=='Chile' ? 'selected' : '' }}>Chile</option>
                                <option value="China" {{ old('country')=='China' ? 'selected' : '' }}>China</option>
                                <option value="Colombia" {{ old('country')=='Colombia' ? 'selected' : '' }}>Colombia</option>
                                <option value="Comoros" {{ old('country')=='Comoros' ? 'selected' : '' }}>Comoros</option>
                                <option value="Congo (Congo-Brazzaville)" {{ old('country')=='Congo (Congo-Brazzaville)' ? 'selected' : '' }}>Congo (Congo-Brazzaville)</option>
                                <option value="Congo (Democratic Republic of the)" {{ old('country')=='Congo (Democratic Republic of the)' ? 'selected' : '' }}>Congo (Democratic Republic of the)</option>
                                <option value="Costa Rica" {{ old('country')=='Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                                <option value="Croatia" {{ old('country')=='Croatia' ? 'selected' : '' }}>Croatia</option>
                                <option value="Cuba" {{ old('country')=='Cuba' ? 'selected' : '' }}>Cuba</option>
                                <option value="Cyprus" {{ old('country')=='Cyprus' ? 'selected' : '' }}>Cyprus</option>
                                <option value="Czechia (Czech Republic)" {{ old('country')=='Czechia (Czech Republic)' ? 'selected' : '' }}>Czechia (Czech Republic)</option>
                                <option value="Denmark" {{ old('country')=='Denmark' ? 'selected' : '' }}>Denmark</option>
                                <option value="Djibouti" {{ old('country')=='Djibouti' ? 'selected' : '' }}>Djibouti</option>
                                <option value="Dominica" {{ old('country')=='Dominica' ? 'selected' : '' }}>Dominica</option>
                                <option value="Dominican Republic" {{ old('country')=='Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                                <option value="Ecuador" {{ old('country')=='Ecuador' ? 'selected' : '' }}>Ecuador</option>
                                <option value="Egypt" {{ old('country')=='Egypt' ? 'selected' : '' }}>Egypt</option>
                                <option value="El Salvador" {{ old('country')=='El Salvador' ? 'selected' : '' }}>El Salvador</option>
                                <option value="Equatorial Guinea" {{ old('country')=='Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                                <option value="Eritrea" {{ old('country')=='Eritrea' ? 'selected' : '' }}>Eritrea</option>
                                <option value="Estonia" {{ old('country')=='Estonia' ? 'selected' : '' }}>Estonia</option>
                                <option value="Eswatini (fmr. Swaziland)" {{ old('country')=='Eswatini (fmr. Swaziland)' ? 'selected' : '' }}>Eswatini (fmr. Swaziland)</option>
                                <option value="Ethiopia" {{ old('country')=='Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                <option value="Fiji" {{ old('country')=='Fiji' ? 'selected' : '' }}>Fiji</option>
                                <option value="Finland" {{ old('country')=='Finland' ? 'selected' : '' }}>Finland</option>
                                <option value="France" {{ old('country')=='France' ? 'selected' : '' }}>France</option>
                                <option value="Gabon" {{ old('country')=='Gabon' ? 'selected' : '' }}>Gabon</option>
                                <option value="Gambia" {{ old('country')=='Gambia' ? 'selected' : '' }}>Gambia</option>
                                <option value="Georgia" {{ old('country')=='Georgia' ? 'selected' : '' }}>Georgia</option>
                                <option value="Germany" {{ old('country')=='Germany' ? 'selected' : '' }}>Germany</option>
                                <option value="Ghana" {{ old('country')=='Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="Greece" {{ old('country')=='Greece' ? 'selected' : '' }}>Greece</option>
                                <option value="Grenada" {{ old('country')=='Grenada' ? 'selected' : '' }}>Grenada</option>
                                <option value="Guatemala" {{ old('country')=='Guatemala' ? 'selected' : '' }}>Guatemala</option>
                                <option value="Guinea" {{ old('country')=='Guinea' ? 'selected' : '' }}>Guinea</option>
                                <option value="Guinea-Bissau" {{ old('country')=='Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
                                <option value="Guyana" {{ old('country')=='Guyana' ? 'selected' : '' }}>Guyana</option>
                                <option value="Haiti" {{ old('country')=='Haiti' ? 'selected' : '' }}>Haiti</option>
                                <option value="Honduras" {{ old('country')=='Honduras' ? 'selected' : '' }}>Honduras</option>
                                <option value="Hungary" {{ old('country')=='Hungary' ? 'selected' : '' }}>Hungary</option>
                                <option value="Iceland" {{ old('country')=='Iceland' ? 'selected' : '' }}>Iceland</option>
                                <option value="India" {{ old('country')=='India' ? 'selected' : '' }}>India</option>
                                <option value="Indonesia" {{ old('country')=='Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                <option value="Iran" {{ old('country')=='Iran' ? 'selected' : '' }}>Iran</option>
                                <option value="Iraq" {{ old('country')=='Iraq' ? 'selected' : '' }}>Iraq</option>
                                <option value="Ireland" {{ old('country')=='Ireland' ? 'selected' : '' }}>Ireland</option>
                                <option value="Israel" {{ old('country')=='Israel' ? 'selected' : '' }}>Israel</option>
                                <option value="Italy" {{ old('country')=='Italy' ? 'selected' : '' }}>Italy</option>
                                <option value="Jamaica" {{ old('country')=='Jamaica' ? 'selected' : '' }}>Jamaica</option>
                                <option value="Japan" {{ old('country')=='Japan' ? 'selected' : '' }}>Japan</option>
                                <option value="Jordan" {{ old('country')=='Jordan' ? 'selected' : '' }}>Jordan</option>
                                <option value="Kazakhstan" {{ old('country')=='Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                <option value="Kenya" {{ old('country')=='Kenya' ? 'selected' : '' }}>Kenya</option>
                                <option value="Kiribati" {{ old('country')=='Kiribati' ? 'selected' : '' }}>Kiribati</option>
                                <option value="Korea (North)" {{ old('country')=='Korea (North)' ? 'selected' : '' }}>Korea (North)</option>
                                <option value="Korea (South)" {{ old('country')=='Korea (South)' ? 'selected' : '' }}>Korea (South)</option>
                                <option value="Kuwait" {{ old('country')=='Kuwait' ? 'selected' : '' }}>Kuwait</option>
                                <option value="Kyrgyzstan" {{ old('country')=='Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                                <option value="Laos" {{ old('country')=='Laos' ? 'selected' : '' }}>Laos</option>
                                <option value="Latvia" {{ old('country')=='Latvia' ? 'selected' : '' }}>Latvia</option>
                                <option value="Lebanon" {{ old('country')=='Lebanon' ? 'selected' : '' }}>Lebanon</option>
                                <option value="Lesotho" {{ old('country')=='Lesotho' ? 'selected' : '' }}>Lesotho</option>
                                <option value="Liberia" {{ old('country')=='Liberia' ? 'selected' : '' }}>Liberia</option>
                                <option value="Libya" {{ old('country')=='Libya' ? 'selected' : '' }}>Libya</option>
                                <option value="Liechtenstein" {{ old('country')=='Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                                <option value="Lithuania" {{ old('country')=='Lithuania' ? 'selected' : '' }}>Lithuania</option>
                                <option value="Luxembourg" {{ old('country')=='Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                                <option value="Madagascar" {{ old('country')=='Madagascar' ? 'selected' : '' }}>Madagascar</option>
                                <option value="Malawi" {{ old('country')=='Malawi' ? 'selected' : '' }}>Malawi</option>
                                <option value="Malaysia" {{ old('country')=='Malaysia' ? 'selected' : '' }}>Malaysia</option>
                                <option value="Maldives" {{ old('country')=='Maldives' ? 'selected' : '' }}>Maldives</option>
                                <option value="Mali" {{ old('country')=='Mali' ? 'selected' : '' }}>Mali</option>
                                <option value="Malta" {{ old('country')=='Malta' ? 'selected' : '' }}>Malta</option>
                                <option value="Marshall Islands" {{ old('country')=='Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                                <option value="Mauritania" {{ old('country')=='Mauritania' ? 'selected' : '' }}>Mauritania</option>
                                <option value="Mauritius" {{ old('country')=='Mauritius' ? 'selected' : '' }}>Mauritius</option>
                                <option value="Mexico" {{ old('country')=='Mexico' ? 'selected' : '' }}>Mexico</option>
                                <option value="Micronesia" {{ old('country')=='Micronesia' ? 'selected' : '' }}>Micronesia</option>
                                <option value="Moldova" {{ old('country')=='Moldova' ? 'selected' : '' }}>Moldova</option>
                                <option value="Monaco" {{ old('country')=='Monaco' ? 'selected' : '' }}>Monaco</option>
                                <option value="Mongolia" {{ old('country')=='Mongolia' ? 'selected' : '' }}>Mongolia</option>
                                <option value="Montenegro" {{ old('country')=='Montenegro' ? 'selected' : '' }}>Montenegro</option>
                                <option value="Morocco" {{ old('country')=='Morocco' ? 'selected' : '' }}>Morocco</option>
                                <option value="Mozambique" {{ old('country')=='Mozambique' ? 'selected' : '' }}>Mozambique</option>
                                <option value="Myanmar (Burma)" {{ old('country')=='Myanmar (Burma)' ? 'selected' : '' }}>Myanmar (Burma)</option>
                                <option value="Namibia" {{ old('country')=='Namibia' ? 'selected' : '' }}>Namibia</option>
                                <option value="Nauru" {{ old('country')=='Nauru' ? 'selected' : '' }}>Nauru</option>
                                <option value="Nepal" {{ old('country')=='Nepal' ? 'selected' : '' }}>Nepal</option>
                                <option value="Netherlands" {{ old('country')=='Netherlands' ? 'selected' : '' }}>Netherlands</option>
                                <option value="New Zealand" {{ old('country')=='New Zealand' ? 'selected' : '' }}>New Zealand</option>
                                <option value="Nicaragua" {{ old('country')=='Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                                <option value="Niger" {{ old('country')=='Niger' ? 'selected' : '' }}>Niger</option>
                                <option value="Nigeria" {{ old('country')=='Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                <option value="North Macedonia" {{ old('country')=='North Macedonia' ? 'selected' : '' }}>North Macedonia</option>
                                <option value="Norway" {{ old('country')=='Norway' ? 'selected' : '' }}>Norway</option>
                                <option value="Oman" {{ old('country')=='Oman' ? 'selected' : '' }}>Oman</option>
                                <option value="Pakistan" {{ old('country')=='Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                <option value="Palau" {{ old('country')=='Palau' ? 'selected' : '' }}>Palau</option>
                                <option value="Palestine State" {{ old('country')=='Palestine State' ? 'selected' : '' }}>Palestine State</option>
                                <option value="Panama" {{ old('country')=='Panama' ? 'selected' : '' }}>Panama</option>
                                <option value="Papua New Guinea" {{ old('country')=='Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                                <option value="Paraguay" {{ old('country')=='Paraguay' ? 'selected' : '' }}>Paraguay</option>
                                <option value="Peru" {{ old('country')=='Peru' ? 'selected' : '' }}>Peru</option>
                                <option value="Philippines" {{ old('country')=='Philippines' ? 'selected' : '' }}>Philippines</option>
                                <option value="Poland" {{ old('country')=='Poland' ? 'selected' : '' }}>Poland</option>
                                <option value="Portugal" {{ old('country')=='Portugal' ? 'selected' : '' }}>Portugal</option>
                                <option value="Qatar" {{ old('country')=='Qatar' ? 'selected' : '' }}>Qatar</option>
                                <option value="Romania" {{ old('country')=='Romania' ? 'selected' : '' }}>Romania</option>
                                <option value="Russia" {{ old('country')=='Russia' ? 'selected' : '' }}>Russia</option>
                                <option value="Rwanda" {{ old('country')=='Rwanda' ? 'selected' : '' }}>Rwanda</option>
                                <option value="Saint Kitts and Nevis" {{ old('country')=='Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                                <option value="Saint Lucia" {{ old('country')=='Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines" {{ old('country')=='Saint Vincent and the Grenadines' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                                <option value="Samoa" {{ old('country')=='Samoa' ? 'selected' : '' }}>Samoa</option>
                                <option value="San Marino" {{ old('country')=='San Marino' ? 'selected' : '' }}>San Marino</option>
                                <option value="Sao Tome and Principe" {{ old('country')=='Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                                <option value="Saudi Arabia" {{ old('country')=='Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                <option value="Senegal" {{ old('country')=='Senegal' ? 'selected' : '' }}>Senegal</option>
                                <option value="Serbia" {{ old('country')=='Serbia' ? 'selected' : '' }}>Serbia</option>
                                <option value="Seychelles" {{ old('country')=='Seychelles' ? 'selected' : '' }}>Seychelles</option>
                                <option value="Sierra Leone" {{ old('country')=='Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                                <option value="Singapore" {{ old('country')=='Singapore' ? 'selected' : '' }}>Singapore</option>
                                <option value="Slovakia" {{ old('country')=='Slovakia' ? 'selected' : '' }}>Slovakia</option>
                                <option value="Slovenia" {{ old('country')=='Slovenia' ? 'selected' : '' }}>Slovenia</option>
                                <option value="Solomon Islands" {{ old('country')=='Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                                <option value="Somalia" {{ old('country')=='Somalia' ? 'selected' : '' }}>Somalia</option>
                                <option value="South Africa" {{ old('country')=='South Africa' ? 'selected' : '' }}>South Africa</option>
                                <option value="South Sudan" {{ old('country')=='South Sudan' ? 'selected' : '' }}>South Sudan</option>
                                <option value="Spain" {{ old('country')=='Spain' ? 'selected' : '' }}>Spain</option>
                                <option value="Sri Lanka" {{ old('country')=='Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                                <option value="Sudan" {{ old('country')=='Sudan' ? 'selected' : '' }}>Sudan</option>
                                <option value="Suriname" {{ old('country')=='Suriname' ? 'selected' : '' }}>Suriname</option>
                                <option value="Swaziland" {{ old('country')=='Swaziland' ? 'selected' : '' }}>Swaziland</option>
                                <option value="Sweden" {{ old('country')=='Sweden' ? 'selected' : '' }}>Sweden</option>
                                <option value="Switzerland" {{ old('country')=='Switzerland' ? 'selected' : '' }}>Switzerland</option>
                                <option value="Syria" {{ old('country')=='Syria' ? 'selected' : '' }}>Syria</option>
                                <option value="Taiwan" {{ old('country')=='Taiwan' ? 'selected' : '' }}>Taiwan</option>
                                <option value="Tajikistan" {{ old('country')=='Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                                <option value="Tanzania" {{ old('country')=='Tanzania' ? 'selected' : '' }}>Tanzania</option>
                                <option value="Thailand" {{ old('country')=='Thailand' ? 'selected' : '' }}>Thailand</option>
                                <option value="Timor-Leste" {{ old('country')=='Timor-Leste' ? 'selected' : '' }}>Timor-Leste</option>
                                <option value="Togo" {{ old('country')=='Togo' ? 'selected' : '' }}>Togo</option>
                                <option value="Tonga" {{ old('country')=='Tonga' ? 'selected' : '' }}>Tonga</option>
                                <option value="Trinidad and Tobago" {{ old('country')=='Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                                <option value="Tunisia" {{ old('country')=='Tunisia' ? 'selected' : '' }}>Tunisia</option>
                                <option value="Turkey" {{ old('country')=='Turkey' ? 'selected' : '' }}>Turkey</option>
                                <option value="Turkmenistan" {{ old('country')=='Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                                <option value="Tuvalu" {{ old('country')=='Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                                <option value="Uganda" {{ old('country')=='Uganda' ? 'selected' : '' }}>Uganda</option>
                                <option value="Ukraine" {{ old('country')=='Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                <option value="United Arab Emirates" {{ old('country')=='United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                <option value="United Kingdom" {{ old('country')=='United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country')=='United States' ? 'selected' : '' }}>United States</option>
                                <option value="Uruguay" {{ old('country')=='Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                <option value="Uzbekistan" {{ old('country')=='Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                                <option value="Vanuatu" {{ old('country')=='Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                                <option value="Vatican City" {{ old('country')=='Vatican City' ? 'selected' : '' }}>Vatican City</option>
                                <option value="Venezuela" {{ old('country')=='Venezuela' ? 'selected' : '' }}>Venezuela</option>
                                <option value="Vietnam" {{ old('country')=='Vietnam' ? 'selected' : '' }}>Vietnam</option>
                                <option value="Yemen" {{ old('country')=='Yemen' ? 'selected' : '' }}>Yemen</option>
                                <option value="Zambia" {{ old('country')=='Zambia' ? 'selected' : '' }}>Zambia</option>
                                <option value="Zimbabwe" {{ old('country')=='Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                            </select>
                            <div class="error-message">@error('country'){{ $message }}@enderror</div>
                        </div>
                    </div>
                </div>

                {{-- Joint Account Fields --}}
                <div class="joint-fields" id="jointFields" {{ old('account_type') == 'Joint' ? 'style=display:block' : '' }}>
                    <p style="font-weight:600;color:var(--secondary-color);margin-bottom:0.75rem;"><i class="fas fa-users" style="margin-right:6px;color:var(--accent-color)"></i>Joint Account Holder Details</p>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="third_first_name">First Name</label>
                                <input type="text" name="third_first_name" id="third_first_name" value="{{ old('third_first_name') }}" maxlength="255" placeholder="Joint holder first name">
                                <div class="error-message">@error('third_first_name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="third_last_name">Last Name</label>
                                <input type="text" name="third_last_name" id="third_last_name" value="{{ old('third_last_name') }}" maxlength="255" placeholder="Joint holder last name">
                                <div class="error-message">@error('third_last_name'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="third_phone">Phone Number</label>
                                <input type="text" name="third_phone" id="third_phone" value="{{ old('third_phone') }}" maxlength="20" placeholder="Joint holder phone">
                                <div class="error-message">@error('third_phone'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="third_address">Address</label>
                                <input type="text" name="third_address" id="third_address" value="{{ old('third_address') }}" maxlength="255" placeholder="Joint holder address">
                                <div class="error-message">@error('third_address'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Create Password</label>
                    <div class="password-container">
                        <input type="password" name="password" id="password" autocomplete="new-password" required placeholder="Minimum 8 characters">
                        <span class="toggle-password" data-target="password"><i class="far fa-eye"></i></span>
                    </div>
                    <div class="password-strength" id="password-strength" data-strength=""></div>
                    <div class="password-strength-text" id="password-strength-text"></div>
                    <div class="error-message">@error('password'){{ $message }}@enderror</div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="password-container">
                        <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Re-enter your password">
                        <span class="toggle-password" data-target="password_confirmation"><i class="far fa-eye"></i></span>
                    </div>
                    <div class="error-message" id="confirm-password-error">@error('password_confirmation'){{ $message }}@enderror</div>
                </div>

                <div class="form-group">
                    <label for="ref_by_input">Referral ID <span style="font-weight:400;color:#888;">(optional)</span></label>
                    <input type="text" name="ref_by" id="ref_by_input" value="{{ old('ref_by', isset($referred_by) ? $referred_by->referral_code : '') }}" placeholder="Enter referral code if you have one">
                </div>

                <div class="terms-group">
                    <input type="checkbox" id="terms" name="terms" required {{ old('terms') ? 'checked' : '' }}>
                    <label for="terms">I accept the <a href="#">Terms and Privacy Policy</a></label>
                </div>
                <div class="error-message" style="margin-top:-0.5rem;margin-bottom:0.75rem;">@error('terms'){{ $message }}@enderror</div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-user-plus" style="margin-right:8px"></i> Register for Online Banking
                </button>
            </form>

            <div class="login-prompt">
                Already have an account? <a href="{{ route('login') }}">Sign in to your account</a>
            </div>

            <div class="security-tips">
                <h3><i class="fas fa-shield-alt"></i> Security Tips:</h3>
                <ul>
                    <li>Never share your password or PIN with anyone, including bank employees</li>
                    <li>Create a strong password with uppercase, lowercase, numbers and special characters</li>
                    <li>Avoid using personal information like birthdays or names in your password</li>
                    <li>We will never ask for your password via email or phone</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <p>Copyright &copy; {{ date('Y') }} Online Banking. All rights reserved.</p>
    </footer>

    <!-- WhatsApp Floating Button -->
    {{-- <a href="https://wa.me/16673863060?text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20services."
       class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32" fill="white">
            <path d="M19.11 17.53c-.33-.17-1.95-.96-2.25-1.07s-.52-.17-.74.17-.85 1.07-1.05 1.29-.39.26-.72.09a7.87 7.87 0 01-2.31-1.42
            8.62 8.62 0 01-1.59-1.98c-.17-.3 0-.46.13-.63.13-.13.3-.35.46-.52s.22-.3.35-.52.07-.39 0-.56c-.09-.17-.74-1.77-1.02-2.43s-.52-.52-.74-.52h-.63c-.22
            0-.56.09-.85.39s-1.12 1.09-1.12 2.66 1.15 3.09 1.31 3.3 2.27 3.46 5.49 4.85c.77.33 1.37.52 1.84.67a4.42 4.42 0 002.03.13c.62-.09
            1.95-.8 2.23-1.57s.28-1.42.2-1.57-.3-.22-.63-.39zM16.02 3c-7.16 0-12.97 5.81-12.97 12.97 0 2.29.59 4.52 1.71 6.49L3 29l6.74-1.77a12.93
            12.93 0 006.28 1.61h.01c7.16 0 12.97-5.81 12.97-12.97S23.18 3 16.02 3zm0 23.66c-2.2 0-4.35-.59-6.23-1.7l-.45-.27-4 .99 1.06-3.9-.25-.4a10.93
            10.93 0 01-1.68-5.83c0-6.05 4.92-10.97 10.97-10.97 2.93 0 5.68 1.14 7.75 3.21s3.21 4.82 3.21 7.75c0 6.05-4.92 10.97-10.97 10.97z"/>
        </svg>
        <span class="whatsapp-tooltip">Chat with us</span>
    </a> --}}

    <script>
        // Show/hide joint account fields
        function toggleJointFields(value) {
            document.getElementById('jointFields').style.display = (value === 'Joint') ? 'block' : 'none';
        }

        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const passwordStrength = document.getElementById('password-strength');
        const passwordStrengthText = document.getElementById('password-strength-text');

        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            let strength = 0;
            if (password.length >= 8)  strength++;
            if (password.length >= 12) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\d/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            if (password.length === 0) {
                passwordStrength.setAttribute('data-strength', '');
                passwordStrengthText.textContent = '';
                passwordStrengthText.className = 'password-strength-text';
                return;
            }
            let level, text, cls;
            if (strength <= 1)      { level = 'weak';   text = 'Weak';   cls = 'weak'; }
            else if (strength <= 3) { level = 'medium'; text = 'Medium'; cls = 'medium'; }
            else if (strength === 4){ level = 'good';   text = 'Good';   cls = 'good'; }
            else                    { level = 'strong'; text = 'Strong'; cls = 'strong'; }

            passwordStrength.setAttribute('data-strength', level);
            passwordStrengthText.textContent = 'Password Strength: ' + text;
            passwordStrengthText.className = 'password-strength-text ' + cls;
        });

        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });

        // Client-side password match check
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const pw  = document.getElementById('password').value;
            const cpw = document.getElementById('password_confirmation').value;
            const err = document.getElementById('confirm-password-error');
            if (pw !== cpw) {
                e.preventDefault();
                err.textContent = 'Passwords do not match.';
                document.getElementById('password_confirmation').focus();
            }
        });

        // Prevent spaces in username
        document.getElementById('username').addEventListener('keypress', function(e) {
            if (e.which === 32) e.preventDefault();
        });
    </script>
</body>


 <div class="gtranslate_wrapper"></div>
<style>
    .gt_switcher_wrapper { transform: scale(0.55); transform-origin: top right; }
</style>
<script>
    window.gtranslateSettings = {
        "default_language": "en",
        "detect_browser_language": true,
        "wrapper_selector": ".gtranslate_wrapper",
        "switcher_horizontal_position": "right",
        "switcher_vertical_position": "bottom",
        "flags_size": 12,
        "switcher_text_size": 9,
        "alt_flags": {
            "en": "usa",
            "pt": "brazil",
            "es": "colombia",
            "fr": "quebec"
        }
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

        
      

</html>
