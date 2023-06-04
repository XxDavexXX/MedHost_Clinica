<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombres') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            
            <div class="mt-4">
                <x-label for="apellido_paterno" value="{{ __('Apellido Paterno') }}" />
                <x-input id="apellido_paterno" class="block mt-1 w-full" type="text" name="apellido_paterno" :value="old('apellido_paterno')" required autofocus autocomplete="apellido_paterno" />
            </div>
            
            <div class="mt-4">
                <x-label for="apellido_materno" value="{{ __('Apellido Materno') }}" />
                <x-input id="apellido_materno" class="block mt-1 w-full" type="text" name="apellido_materno" :value="old('apellido_materno')" required autofocus autocomplete="apellido_materno" />
            </div>
            
            <div class="mt-4">
                <x-label for="dni" value="{{ __('Nº Dni') }}" />
                <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus autocomplete="dni" />
            </div>
            
            <div class="mt-4">
                <x-label for="tipo_user" value="{{ __('Tipo de Usuario') }}" />
                <x-input id="tipo_user" class="block mt-1 w-full" type="text" name="tipo_user" :value="old('tipo_user')" required autofocus autocomplete="tipo_user" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
