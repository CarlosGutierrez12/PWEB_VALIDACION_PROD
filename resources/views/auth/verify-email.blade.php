<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            
        </x-slot>
        <img src="/user/assets/imgs/logo/app_logo.png" alt="">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Antes de continuar, por favor verifica tu cuenta por medio del link que te enviamos al correo, si no te llego presiona el boton para enviarte otro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuevo link de verificación ha sido enviado a tu correo.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Reenviar link de verificaion') }}
                    </x-button>
                </div>
            </form>

            <div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                        {{ __('Salir') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
