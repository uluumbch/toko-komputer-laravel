@extends('template.main')

@section('container')
    <div class="container flex flex-col md:flex-row main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="flex flex-wrap">
            <div class="w-full p-6">
                <!--Metric Card-->
                <div
                    class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">Total Laba</h2>
                            <p class="font-bold text-3xl">
                                {{ 'Rp' . number_format($penjualan->sum('laba'), 0, ',', '.') }} <span
                                    class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full p-6">
                <!--Metric Card-->
                <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-blue-600"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">Total Penjualan</h2>
                            <p class="font-bold text-3xl">{{ $penjualan->count() }} <span class="text-green-500"><i
                                        class="fas fa-caret-up"></i></span></p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>

        </div>


    </div>
@endsection
