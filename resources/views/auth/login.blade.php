<x-layout>
    <body class="bg-[#A5B4FC] flex min-h-screen items-center justify-center px-4">
        <div class="w-full max-w-md bg-white
        flex flex-col items-center justify-around shadow py-8 rounded-lg">

            <h1 class="font-bold font-sans transform skew-x-[-13deg]
                       tracking-[-.05rem] sm:tracking-[-.1rem] md:tracking-[-.15rem]
                       text-3xl sm:text-4xl md:text-5xl underline leading-tight
                       decoration-[#FEF08A] decoration-8 text-center">
                Acessar.
            </h1>

            <form action="{{ route('login') }}" method="POST" class="flex flex-col w-full px-6 sm:px-10 mt-6">
                @csrf
                <div class="flex flex-col gap-2 py-2 text-xs sm:text-sm font-bold">
                    <label for="email">
                        SEU E-MAIL
                    </label>
                    <input type="email" name="email" placeholder="email@email.com"
                           class="border min-h-12 sm:min-h-14 pl-3 text-sm sm:text-base"/>
                    @error('email')
                        <p class="text-red-500 text-xs sm:text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 py-2 text-xs sm:text-sm font-bold">
                    <label for="password">
                        SUA SENHA
                    </label>
                    <input type="password" name="password" placeholder="******"
                           class="border min-h-12 sm:min-h-14 pl-3 text-sm sm:text-base"/>
                    @error('password')
                    <p class="text-red-500 text-xs sm:text-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <button type="submit"
                    class="button-primary shadow
                           flex items-center justify-center gap-2
                           text-md font-semibold w-full mt-6 py-2 px-3 min-h-8">
                    ENTRAR NO PAINEL
                    <x-arrow-right class="arrow-right w-4 h-4"/>
                </button>

                <a href="#"
                   class="button-secondary shadow
                   flex items-center justify-center gap-2
                   text-md font-semibold w-full mt-4 py-2 px-3">
                    OBTENHA ACESSO
                </a>

                <a href="{{ route('home') }}"
                   class="cta flex items-center justify-center font-bold gap-2 mt-4 text-xs sm:text-sm">
                    <x-arrow-left class="w-3 h-3 ml-2"/>
                    VOLTAR AO INÍCIO
                </a>

            </form>
        </div>
    </body>
</x-layout>
