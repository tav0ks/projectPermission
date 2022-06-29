<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h1 style="color: white; text-align:center; font-size: 25px">Cadastro</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NOME OU RAZAO SOCIAL -->
            <div class="mt-4">
                <x-label style="color: white;" for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus />
            </div>

            <!-- CPF OU CNPJ -->
            <div class="mt-4">
                <x-label style="color: white;" for="cpf" :value="__('Cpf ou Cnpj')" />

                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label style="color: white;" for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label style="color: white;" for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label style="color: white;" for="password_confirmation" :value="__('Confirmar senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a style="color: white;" class="underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('login') }}">
                    {{ __('Já sou registrado') }}
                </a>

                <x-button style="color: white;" class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<style>
    .body {
        background-color: black;
    }
</style>
