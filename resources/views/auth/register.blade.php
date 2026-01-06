<x-layout>
    <main class="bg-[#99F6E4] min-h-screen flex items-center justify-center px-4">
        <div
            class="w-full max-w-md bg-white shadow rounded-lg
                   flex flex-col items-center justify-between
                   py-8 px-4 sm:px-8"
        >
            <h1
                class="font-bold font-sans transform skew-x-[-13deg]
                       tracking-[-.05rem] sm:tracking-[-.1rem] md:tracking-[-.15rem]
                       text-3xl sm:text-4xl md:text-5xl underline leading-tight
                       decoration-[#FEF08A] decoration-8 text-center"
            >
                Criar Conta.
            </h1>

            <form
                action="{{ route('register') }}"
                method="POST"
                class="flex flex-col w-full mt-6 space-y-2"
            >
                @csrf

                <div class="flex flex-col gap-1 py-1 text-xs sm:text-sm font-bold">
                    <label for="name">SEU NOME</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Seu nome"
                        class="border min-h-12 sm:min-h-10 px-3 text-sm sm:text-base rounded"
                    />
                    @error('name')
                    <p class="text-red-500 text-xs sm:text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 py-1 text-xs sm:text-sm font-bold">
                    <label for="email">SEU E-MAIL</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="email@email.com"
                        class="border min-h-12 sm:min-h-10 px-3 text-sm sm:text-base rounded"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs sm:text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 py-1 text-xs sm:text-sm font-bold">
                    <label for="password">SUA SENHA</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="******"
                        class="border min-h-12 sm:min-h-10 px-3 text-sm sm:text-base rounded"
                    />
                    @error('password')
                    <p class="text-red-500 text-xs sm:text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1 py-1 text-xs sm:text-sm font-bold">
                    <label for="password_confirmation">CONFIRME A SENHA</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="******"
                        class="border min-h-12 sm:min-h-10 px-3 text-sm sm:text-base rounded"
                    />
                    @error('password')
                    <p class="text-red-500 text-xs sm:text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="button-primary shadow
                           flex items-center justify-center gap-2
                           text-sm sm:text-md font-semibold w-full mt-4 py-2 px-3 min-h-8"
                >
                    ENTRAR NO PAINEL
                    <x-arrow-right class="arrow-right w-4 h-4" />
                </button>

                <a
                    href="{{ route('view.login') }}"
                    class="button-secondary shadow
                           flex items-center justify-center gap-2
                           text-sm sm:text-md font-semibold w-full mt-3 py-2 px-3"
                >
                    JÁ TENHO CONTA
                </a>

                <a
                    href="{{ route('home') }}"
                    class="cta flex items-center justify-center font-bold gap-2 mt-3 text-xs sm:text-sm"
                >
                    <x-arrow-left class="w-3 h-3 ml-2" />
                    VOLTAR AO INÍCIO
                </a>
            </form>
        </div>
    </body>
</x-layout>
