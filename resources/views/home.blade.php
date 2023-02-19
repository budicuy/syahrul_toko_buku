<x-layout>
    <div class="container flex flex-col flex-1 pb-24 mt-12 md:flex-row main-content md:mt-2 md:pb-5">

        <div class="flex flex-wrap">
            <div class="w-full p-6">
                <!--Metric Card-->
                <div
                    class="p-5 border-b-4 border-green-600 rounded-lg shadow-xl bg-gradient-to-b from-green-200 to-green-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-green-600 rounded-full"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Total Laba</h2>
                            <p class="text-3xl font-bold">
                                {{ 'Rp' . number_format($penjualan->sum('laba'), 0, ',', '.') }} <span
                                    class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full p-6">
                <!--Metric Card-->
                <div
                    class="p-5 border-b-4 border-blue-600 rounded-lg shadow-xl bg-gradient-to-b from-blue-200 to-blue-100">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="p-5 bg-blue-600 rounded-full"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold text-gray-600 uppercase">Total Penjualan</h2>
                            <p class="text-3xl font-bold">{{ $penjualan->count() }} <span class="text-green-500"><i
                                        class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>

        </div>

    </div>
</x-layout>
