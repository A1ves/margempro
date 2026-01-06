<div
    class="bg-[#CCFBF1] w-[15%] min-w-[280px] h-full border-nav outline flex flex-col justify-around items-center p-6">
    <div>
        <div class="font-extrabold text-xl italic">
            MARGEM.PRO
        </div>
    </div>
    <div class="gap-5 flex flex-col items-center w-full h-full justify-center">
        <a href="{{ route('development') }}" class="button-nav border shadow">
            HOME
        </a>
        <a href="{{ route('development') }}" class="button-nav border shadow">
            CALCULADORA
        </a>
        <a href="{{ route('development') }}" class="button-nav border shadow">
            PREÇOS
        </a>
        <a href="{{ route('development') }}" class="button-nav border shadow">
            PRODUTOS
        </a>
        <a href="{{ route('development') }}" class="button-nav border shadow">
            AJUSTES
        </a>
    </div>
    <div class="flex justify-center w-full button-exit border shadow">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="cursor-pointer">
                SAIR
            </button>
        </form>
    </div>
</div>
