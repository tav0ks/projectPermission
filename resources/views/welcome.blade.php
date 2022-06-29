<div style="display: flex; flex-direction: row; align-items:center;    justify-content: center; height: 100vh;">
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <button style="background-color: #0f7737;"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: white;">LOGAR</a></button>

                        @if (Route::has('register'))
                         <button style="background-color: #0f7737;"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: white;">REGISTRAR</a></button>
                        @endif
                    @endauth
                </div>
            @endif
</div>