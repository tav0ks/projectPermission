<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @can('parceiro')
                        Somente o parceiro pode ver isso
                    @elsecan('comprador')
                        Somente o parceiro pode ver isso
                    @elsecan('visitante')
                        Somente o visitante pode ver isso
                    @elsecan('operador')
                        Somente o operador pode ver isso
                    @elsecan('gestorUnidade')
                        Somente o Gestor da Unidade pode ver isso
                    @elsecan('gestorFinanceiro')
                        Somente o Gestor pode Ver isso
                    @elsecan('admin')
                        Somente adm está vendo isso
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
