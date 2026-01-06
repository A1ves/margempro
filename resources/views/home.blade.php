<x-layout>
    <main class="bg-backgroud h-full w-full flex items-center justify-center bg-grid-yellow">

        <section class="w-full h-full px-6">
            <ul class="flex items-center justify-center gap-2 text-xs font-bold mb-12 text-[rgb(0_0_0)]/40 tracking-[.3rem]">
                <li>SIMPLES</li>
                <li>•</li>
                <li>INTELIGENTE</li>
                <li>•</li>
                <li>VISUAL</li>
            </ul>

            <div class="max-w-3xl mx-auto text-center">
                <h1
                    class="font-extrabold font-sans transform skew-x-[-13deg]
                           tracking-[-.1rem] sm:tracking-[-.2rem] md:tracking-[-.3rem]
                           text-4xl sm:text-5xl md:text-7xl lg:text-8xl leading-tight"
                >
                    {{-- Mobile / até md: 2 linhas --}}
                    <span class="block md:hidden">
                        Domine seus lucros
                    </span>
                    <span class="block md:hidden">
                        sem complicação
                    </span>

                    {{-- De md pra cima: 3 linhas --}}
                    <span class="hidden md:block">
                        Domine seus
                    </span>
                    <span class="hidden md:block">
                        lucros
                    </span>
                    <span class="hidden md:block">
                        sem complicação
                    </span>
                </h1>

                <p class="mt-5 font-bold text-[rgb(0_0_0)]/80 text-lg sm:text-xl md:text-2xl leading-relaxed">
                    Transforme seus rascunhos em decisões lucrativas com o MargemPro.
                    Design intuitivo para quem foca no que importa: o crescimento.
                </p>

                <div class="py-8 flex justify-center">
                    <a
                        href="{{ route('view.login') }}"
                        class="button-primary shadow
                               flex items-center justify-center gap-4
                               text-lg sm:text-xl font-semibold w-full sm:w-auto"
                    >
                        ACESSAR AGORA
                        <x-arrow-right class="arrow-right w-6 h-6"/>
                    </a>
                </div>

                <ul class="flex items-center justify-center gap-6 sm:gap-10 md:gap-16
                           text-[0.65rem] sm:text-xs font-bold mt-4 sm:mt-8 text-[rgb(0_0_0)]/60 tracking-[.1rem]">
                    <li class="flex"><x-check/>CUSTOS REAIS</li>
                    <li class="flex"><x-check/>MARGENS SEGURAS</li>
                    <li class="flex"><x-check/>IA INTELIGENTE</li>
                </ul>
            </div>
        </section>
    </main>
</x-layout>
