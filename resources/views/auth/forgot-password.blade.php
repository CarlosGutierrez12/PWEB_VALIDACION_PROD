<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>
        <img src="/user/assets/imgs/logo/app_logo.png" alt="">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste la contraseña? Escribe tu correo y te enviaremos un correo para restablecer tu contraseña') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Enviar correo') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
