<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Team</title>
</head>
<script>
    // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
    if (
        localStorage.getItem('color-theme') === 'dark' ||
        (!('color-theme' in localStorage) &&
            window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
</script>

<body>

    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Catatan penjualan
                    <br class="hidden lg:inline-block">dan Stok Barang
                </h1>
                <p class="mb-8 leading-relaxed">Sebuah website senderhana untuk melakukan pencatatan penjualan barang dan
                    juga stok barang. Website ini secara khusu dibuat untuk Toko Komputer akan tetapi dapat digunakan
                    untuk keperluan lain.</p>
                <div class="flex justify-center">
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 w-full">
                        <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                            </path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/contoh.png') }}">
            </div>
        </div>
    </section>


    <div class="w-full container mx-auto flex justify-center pt-16 ">
        <div>
            {{-- <p class="pb-3 text-center text-lg font-normal text-gray-500">DAFTAR TIM</p> --}}
            <h1 class="mx-auto w-5/6 pb-6 text-center text-3xl font-extrabold text-gray-800  sm:w-4/6 xl:text-4xl">
                Daftar
                Tim</h1>
        </div>
    </div>
    <div class="w-full bg-gray-100 px-10 pt-10 dark:bg-gray-800">
        <div class="container mx-auto">
            <div role="list" aria-label="Behind the scenes People "
                class="flex-wrap items-center sm:flex sm:justify-around md:flex md:justify-around lg:flex lg:justify-around xl:justify-around">
                <div role="listitem"
                    class="relative mt-16 mb-32 sm:mb-24 sm:w-3/4 md:w-2/5 lg:w-2/5 xl:w-1/3 xl:max-w-sm">
                    <div class="overflow-hidden rounded bg-white shadow-md dark:bg-gray-900">
                        <div class="absolute -mt-20 flex w-full justify-center">
                            <div class="h-32 w-32">
                                <img src="{{ asset('images/bela.webp') }}" alt="Dwi Nabela" role="img"
                                    class="h-full w-full rounded-full object-cover shadow-md" />
                            </div>
                        </div>
                        <div class="mt-16 px-6">
                            <h1 class="mb-1 text-center text-3xl font-bold dark:text-white">Dwi Nabela</h1>
                            <p class="text-center text-sm text-gray-800 dark:text-white">Chief Executive Officer</p>
                            <p class="pt-3 text-center text-base font-normal text-gray-600 dark:text-gray-200">The CEO's
                                role in raising a company's corporate IQ is to establish an atmosphere that promotes
                                knowledge sharing and collaboration.</p>
                            <div class="flex w-full justify-center pt-5 pb-5">
                                <a href="https://github.com/dwinabelaa" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="Github" />
                                    </div>
                                </a>

                                <a href="https://instagram.com/dwinabelaa_" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem"
                    class="relative mt-16 mb-32 sm:mb-24 sm:w-3/4 md:w-2/5 lg:mx-3 lg:w-2/5 xl:w-1/3 xl:max-w-sm">
                    <div class="overflow-hidden rounded bg-white shadow-md dark:bg-gray-900">
                        <div class="absolute -mt-20 flex w-full justify-center">
                            <div class="h-32 w-32">
                                <img src="{{ asset('images/uluum.jpg') }}" alt="Display Picture of Silene Tokyo"
                                    role="img" class="h-full w-full rounded-full object-cover shadow-md" />
                            </div>
                        </div>
                        <div class="mt-16 px-6">
                            <h1 class="mb-1 text-center text-3xl font-bold dark:text-white">Bachrul Uluum</h1>
                            <p class="text-center text-sm text-gray-800 dark:text-white">Product Design Head</p>
                            <p class="pt-3 text-center text-base font-normal text-gray-600 dark:text-gray-200">The
                                emphasis on innovation and technology in our companies has resulted in a few of them
                                establishing global benchmarks in product design and development.</p>
                            <div class="flex w-full justify-center pt-5 pb-5">
                                <a href="https://github.com/uluumbch" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                            alt="github" />
                                    </div>
                                </a>

                                <a href="https://instagram.com/uluumbch" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                            alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                    </svg>
                    <span class="relative">Daftar</span>
                </span>
                Teknologi
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Beberapa teknologi yang kami gunakan untuk membangun website ini
            </p>
        </div>
        <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">

                        <svg viewBox="0 0 128 128">
                            <path
                                d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0"
                                fill="#38b2ac"></path>
                        </svg>

                    </div>
                    <h6 class="mb-2 font-semibold leading-5">Tailwindcss</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Tailwind CSS merupakan framework yang bersifat utility-first untuk membangun desain antarmuka
                        khusus dengan cepat.
                    </p>
                </div>
                <a href="https://tailwindcss.com/" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                    more</a>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                        <svg width="702px" height="134px" viewBox="0 0 702 134" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Custom-Preset-4-Copy-5" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <path
                                    d="M236.145,101 L240.16,88.02 L265.625,88.02 L269.64,101 L288.175,101 L264.69,27.19 L242.305,27.19 L217.445,101 L236.145,101 Z M261.61,74.985 L244.615,74.985 L253.25,47.98 L261.61,74.985 Z M317.05,101 L317.05,25.1 L299.45,25.1 L299.45,101 L317.05,101 Z M353.35,127.29 L353.349,98.719 L353.403988,98.7692 C353.956452,99.2796 354.54746,99.7372 355.177012,100.142 L355.495,100.34 C358.171667,101.953333 361.508333,102.76 365.505,102.76 C370.088333,102.76 374.3875,101.623333 378.4025,99.35 C382.4175,97.0766667 385.6625,93.795 388.1375,89.505 C390.6125,85.215 391.85,80.0266667 391.85,73.94 C391.85,67.8166667 390.630833,62.61 388.1925,58.32 C385.754167,54.03 382.591667,50.7483333 378.705,48.475 C374.818333,46.2016667 370.711667,45.065 366.385,45.065 C363.121667,45.065 360.041667,45.8991667 357.145,47.5675 C355.0594,48.7687 353.263672,50.497372 351.757816,52.753516 L351.541,53.086 L350.105,46.825 L335.75,46.825 L335.75,127.29 L353.35,127.29 Z M362.7,86.7 C361.013333,86.7 359.455,86.3883333 358.025,85.765 C356.595,85.1416667 355.458333,84.28 354.615,83.18 C353.771667,82.08 353.35,80.7966667 353.35,79.33 L353.349,79.33 L353.349,70.42 L353.3555,70.0419667 C353.403167,68.4181222 353.760667,66.9801778 354.428,65.7281333 L354.5875,65.4425 C355.4125,64.0308333 356.558333,62.94 358.025,62.17 C359.491667,61.4 361.16,61.015 363.03,61.015 C365.34,61.015 367.329167,61.5466667 368.9975,62.61 C370.665833,63.6733333 371.958333,65.1766667 372.875,67.12 C373.791667,69.0633333 374.25,71.3366667 374.25,73.94 C374.25,77.02 373.635833,79.495 372.4075,81.365 C371.179167,83.235 369.675833,84.5916667 367.8975,85.435 C366.119167,86.2783333 364.386667,86.7 362.7,86.7 Z M416.325,39.84 C419.551667,39.84 422.1,38.9875 423.97,37.2825 C425.84,35.5775 426.775,33.1666667 426.775,30.05 C426.775,27.0066667 425.84,24.5775 423.97,22.7625 C422.1,20.9475 419.551667,20.04 416.325,20.04 C412.988333,20.04 410.4125,20.9475 408.5975,22.7625 C406.7825,24.5775 405.875,27.0066667 405.875,30.05 C405.875,33.1666667 406.7825,35.5775 408.5975,37.2825 C410.4125,38.9875 412.988333,39.84 416.325,39.84 Z M425.125,101 L425.125,46.495 L407.525,46.495 L407.525,101 L425.125,101 Z M462.965,101 L462.965,78.175 L462.968125,77.6150568 C463.009792,73.9158144 463.468125,70.8908144 464.343125,68.5400568 L464.4775,68.1925 C465.485833,65.6808333 466.833333,63.8566667 468.52,62.72 C470.206667,61.5833333 472.058333,61.015 474.075,61.015 C476.055,61.015 477.741667,61.7025 479.135,63.0775 C480.528333,64.4525 481.225,66.57 481.225,69.43 L481.225,69.43 L481.225,101 L498.935,101 L498.935,69.43 C498.935,64.7 498.238333,60.5016667 496.845,56.835 C495.451667,53.1683333 493.279167,50.29 490.3275,48.2 C487.375833,46.11 483.571667,45.065 478.915,45.065 C474.845,45.065 471.205833,46.2016667 467.9975,48.475 C466.006121,49.8860345 464.276073,51.7985434 462.807357,54.2125268 L462.656,54.466 L460.875,46.825 L445.365,46.825 L445.365,101 L462.965,101 Z M537.82,102.76 C542.293333,102.76 546.244167,101.953333 549.6725,100.34 C553.100833,98.7266667 555.8875,96.545 558.0325,93.795 C560.1775,91.045 561.525,87.9833333 562.075,84.61 L562.075,84.61 L544.585,84.61 C544.108333,86.04 543.265,87.085 542.055,87.745 C540.845,88.405 539.433333,88.735 537.82,88.735 C535.84,88.735 534.199167,88.2675 532.8975,87.3325 C531.595833,86.3975 530.615,85.0866667 529.955,83.4 C529.295,81.7133333 528.965,79.715 528.965,77.405 L528.966,77.515 L561.525,77.515 C562.393421,73.6244737 562.562535,69.8409003 562.032341,66.1642798 L561.9375,65.5525 C561.295833,61.6841667 559.939167,58.21 557.8675,55.13 C555.795833,52.05 553.073333,49.6025 549.7,47.7875 C546.326667,45.9725 542.366667,45.065 537.82,45.065 C533.236667,45.065 528.946667,46.2016667 524.95,48.475 C520.953333,50.7483333 517.726667,54.0208333 515.27,58.2925 C512.813333,62.5641667 511.585,67.6883333 511.585,73.665 C511.585,79.6416667 512.8225,84.8116667 515.2975,89.175 C517.7725,93.5383333 521.008333,96.8933333 525.005,99.24 C529.001667,101.586667 533.273333,102.76 537.82,102.76 Z M546.179,68.605 L529.044,68.605 L529.045178,68.5898444 C529.178807,67.0856963 529.479474,65.7485852 529.947178,64.5785111 L530.0925,64.2325 C530.844167,62.5275 531.9075,61.2258333 533.2825,60.3275 C534.6575,59.4291667 536.28,58.98 538.15,58.98 C539.836667,58.98 541.220833,59.3191667 542.3025,59.9975 C543.384167,60.6758333 544.218333,61.5741667 544.805,62.6925 C545.391667,63.8108333 545.785833,65.03 545.9875,66.35 C546.088333,67.01 546.150208,67.6654167 546.173125,68.31625 L546.179,68.605 Z M580.775,101.99 C584.258333,101.99 587.136667,100.935833 589.41,98.8275 C591.683333,96.7191667 592.82,94.0333333 592.82,90.77 C592.82,87.5066667 591.683333,84.7933333 589.41,82.63 C587.136667,80.4666667 584.258333,79.385 580.775,79.385 C577.291667,79.385 574.459167,80.4666667 572.2775,82.63 C570.095833,84.7933333 569.005,87.5066667 569.005,90.77 C569.005,93.9966667 570.095833,96.6733333 572.2775,98.8 C574.459167,100.926667 577.291667,101.99 580.775,101.99 Z M614.38,39.84 C617.606667,39.84 620.155,38.9875 622.025,37.2825 C623.895,35.5775 624.83,33.1666667 624.83,30.05 C624.83,27.0066667 623.895,24.5775 622.025,22.7625 C620.155,20.9475 617.606667,20.04 614.38,20.04 C611.153333,20.04 608.586667,20.9475 606.68,22.7625 C604.773333,24.5775 603.82,27.0066667 603.82,30.05 C603.82,33.1666667 604.773333,35.5775 606.68,37.2825 C608.586667,38.9875 611.153333,39.84 614.38,39.84 Z M603.875,129.215 C610.291667,129.215 615.15,127.464167 618.45,123.9625 C621.75,120.460833 623.4,114.548333 623.4,106.225 L623.4,106.225 L623.4,46.605 L605.69,46.605 L605.69,105.895 C605.69,109.048333 605.130833,111.156667 604.0125,112.22 C602.894167,113.283333 601.198333,113.815 598.925,113.815 C597.165,113.815 595.258333,113.558333 593.205,113.045 C591.151667,112.531667 589.336667,111.963333 587.76,111.34 L587.76,111.34 L587.76,126.465 C590.29,127.161667 592.801667,127.794167 595.295,128.3625 C597.788333,128.930833 600.648333,129.215 603.875,129.215 Z M664.54,102.76 C669.086667,102.76 673.156667,101.916667 676.75,100.23 C680.343333,98.5433333 683.175833,96.3525 685.2475,93.6575 C687.319167,90.9625 688.355,88.1116667 688.355,85.105 C688.355,81.805 687.291667,79.055 685.165,76.855 C683.038333,74.655 680.123333,72.8216667 676.42,71.355 L676.42,71.355 L661.46,65.36 C659.15,64.5533333 657.995,63.4533333 657.995,62.06 C657.995,61.0333333 658.545,60.2083333 659.645,59.585 C660.745,58.9616667 662.248333,58.65 664.155,58.65 C666.465,58.65 668.115,59.0808333 669.105,59.9425 C670.095,60.8041667 670.59,61.8216667 670.59,62.995 L670.59,62.995 L686.705,62.995 C686.668333,57.7883333 684.706667,53.4983333 680.82,50.125 C676.933333,46.7516667 671.378333,45.065 664.155,45.065 C656.455,45.065 650.386667,46.55 645.95,49.52 C641.513333,52.49 639.295,56.3766667 639.295,61.18 C639.295,64.59 640.349167,67.5325 642.4575,70.0075 C644.565833,72.4825 647.563333,74.5266667 651.45,76.14 L651.45,76.14 L664.595,81.255 C665.988333,81.805 667.015,82.355 667.675,82.905 C668.335,83.455 668.665,84.1883333 668.665,85.105 C668.665,85.8016667 668.426667,86.4525 667.95,87.0575 C667.473333,87.6625 666.758333,88.1483333 665.805,88.515 C664.851667,88.8816667 663.641667,89.065 662.175,89.065 C659.755,89.065 657.839167,88.6983333 656.4275,87.965 C655.015833,87.2316667 654.273333,85.9116667 654.2,84.005 L654.2,84.005 L638.305,84.005 C638.268333,88.2216667 639.359167,91.7141667 641.5775,94.4825 C643.795833,97.2508333 646.885,99.3225 650.845,100.6975 C654.805,102.0725 659.37,102.76 664.54,102.76 Z"
                                    id="Alpine.js" fill="#2D3441" fill-rule="nonzero"></path>
                                <g id="Group-4" transform="translate(0.000000, 12.000000)">
                                    <polygon id="Path" fill="#77C1D2"
                                        points="149.520377 10.3027772 189.392477 50 149.520377 89.6972228 109.648276 50">
                                    </polygon>
                                    <polygon id="Path" fill="#2D3441"
                                        points="49.8401255 10.3027772 132.499974 92.6000822 52.7557729 92.6000822 9.96802511 50">
                                    </polygon>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <h6 class="mb-2 font-semibold leading-5">Alpine Js</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Alpine.js ini adalah framework JavaScript yang bersifat lightweight (ukuran source code yang
                        relatif lebih sedikit). Alpine.js menghadirkan fitur yang biasa kita pakai dari framework yang
                        jauh lebih besar, tanpa perlu load banyak kode seperti ketika kita load framework yang lebih
                        besar misalnya jQuery.
                    </p>
                </div>
                <a href="https://alpinejs.dev/" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                    more</a>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 mb-4 bg-indigo-50">
                        <img src="https://livewire-powergrid.com/_media/logo@2x-sm.png" alt="">
                    </div>
                    <h6 class="mb-2 font-semibold leading-5">Livewire Powergrid</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        PowerGrid creates modern, powerful and easy to customize Datatables based on Laravel Livewire
                        library.
                    </p>
                </div>
                <a href="https://livewire-powergrid.com/" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                    more</a>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
                <div>
                    <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">

                        <svg viewBox="0 0 128 128">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31"
                                d="M16.934 1.719c-1.127.088-2.234.074-3.325.373-2.387.655-4.508 1.702-6.379 3.316-1.1.948-2.06 1.97-2.875 3.174-1.258 1.859-2.115 3.857-2.545 6.106.172.301.353.617.545.938 1.219 2.038 2.439 4.062 3.661 6.098l3.212 5.341c.988 1.646 1.974 3.293 2.96 4.939l4.608 7.688 3.143 5.244c1.527 2.545 3.058 5.088 4.583 7.634l5.609 9.371c1.617 2.699 3.237 5.396 4.857 8.093l.216.314c.235.075.422.011.616-.035 2.134-.512 4.268-1.021 6.402-1.531 3.461-.827 6.922-1.651 10.383-2.479l5.421-1.297c3.499-.836 6.999-1.67 10.498-2.508 3.537-.846 7.073-1.696 10.611-2.543 1.788-.429 3.576-.856 5.365-1.283 3.461-.826 6.922-1.65 10.383-2.474l11.308-2.693.611-.165-.167-.331-3.086-4.362-3.048-4.315-3.26-4.604-3.116-4.413-3.088-4.361-3.188-4.507c-1.041-1.47-2.084-2.938-3.126-4.407l-1.647-2.326a4.275 4.275 0 01-.587-1.159c-.326-1.011.046-1.684.636-2.181.382-.323.822-.56 1.298-.7a20.898 20.898 0 012.01-.51c1.359-.257 2.727-.475 4.091-.702l4.624-.754c.975-.161 1.949-.33 2.924-.495 1.325-.224 2.65-.449 3.976-.67 1.287-.216 2.574-.43 3.861-.642l4.213-.689 2.924-.491c1.112-.186 2.223-.371 3.334-.553 1.386-.226 2.771-.454 4.157-.671.826-.129 1.652-.174 2.472.062a5.63 5.63 0 011.696.833l.721.503c.072-.166-.032-.256-.08-.351a16.543 16.543 0 00-4.26-5.422 16.399 16.399 0 00-5.636-3.09c-1.229-.389-2.492-.208-3.778-.305M55.689 127c-.062 0-.117-.45-.187-.569-1.5-2.56-3.016-5.308-4.498-7.877a1335.74 1335.74 0 01-5.557-9.74c-1.965-3.478-3.913-6.966-5.863-10.452a5709.989 5709.989 0 01-5.549-9.948c-1.115-2.005-2.223-4.014-3.337-6.02l-.296-.459-.542.107c-1.072.277-2.142.556-3.212.838-1.49.392-2.979.791-4.47 1.18-3.347.871-6.694 1.737-10.041 2.605-3.404.884-6.951 1.77-10.356 2.65-.207.053.219.071-.781.106v21.145c.412.656.373.347.399.563.079.626.207 1.257.317 1.877.412 2.31 1.339 4.425 2.679 6.351 1.965 2.826 4.582 4.846 7.788 6.082 1.145.44 2.34.75 3.562.9l1.241.328">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31"
                                d="M4.976 77.742c3.939-.937 7.879-1.873 11.818-2.808 1.73-.41 3.461-.815 5.191-1.227.865-.206 1.732-.402 2.59-.634.764-.206.858-.459.465-1.148-.568-.996-1.146-1.986-1.721-2.979l-5.064-8.72-5.062-8.721c-1.717-2.958-3.436-5.916-5.154-8.873l-4.412-7.59c-.636-1.094-1.408-2.191-2.047-3.284-.119-.199.42-.437-.58-.543v47.396c0-.032.453-.059.606-.096l3.37-.773zm121.248 33.878c-1.544.549-3.089 1.102-4.632 1.655l-10.545 3.781c-1.953.701-3.902 1.41-5.856 2.108-3.982 1.421-7.966 2.837-11.949 4.255-2.308.822-4.617 1.838-6.924 2.664-.632.227-1.255.917-1.881.917h26.49l.57-.327c.674-.029 1.337-.229 1.999-.35 2.719-.497 5.154-1.673 7.311-3.392 1.657-1.321 3.005-2.936 4.061-4.778 1.086-1.896 1.731-3.947 2.041-6.101.027-.186.085-.397-.071-.589-.22-.017-.414.086-.614.157zm-2.275-35.571c-1.168-1.598-2.339-3.193-3.505-4.792-1.609-2.207-3.215-4.416-4.822-6.624-.653-.896-1.315-1.785-1.952-2.691-.192-.273-.411-.346-.71-.265l-.171.049c-2.958.719-5.917 1.436-8.876 2.153l-5.302 1.287-10.372 2.519c-3.419.831-6.838 1.663-10.258 2.492l-10.662 2.582c-3.497.849-6.992 1.701-10.488 2.551l-10.142 2.462c-1.787.434-3.574.866-5.359 1.302-.263.064-.546.08-.826.292l.239.455a5999.968 5999.968 0 009.598 16.529c1.874 3.213 3.753 6.424 5.63 9.636 1.079 1.845 2.151 3.692 3.239 5.532a661.851 661.851 0 003.653 6.115c.369.607.788 1.187 1.21 1.759a3.64 3.64 0 001.046.957c.426.257.885.338 1.369.229.25-.057.495-.139.737-.223l.89-.33c3.237-1.107 6.473-2.214 9.711-3.317 2.526-.86 5.055-1.716 7.583-2.571 2.509-.851 5.02-1.698 7.53-2.545l7.474-2.524c2.548-.861 5.095-1.722 7.642-2.585 3.126-1.061 6.251-2.126 9.379-3.185 3.015-1.02 6.033-2.034 9.049-3.052.185-.062.389-.088.542-.291l.019-.439c.001-6.255-.001-12.511.006-18.766a1.38 1.38 0 00-.289-.873c-.948-1.269-1.877-2.551-2.812-3.828zm-.519-58.938c-.702-.889-1.596-1.171-2.692-.885-.477.125-.967.204-1.453.293-1.594.292-3.19.579-4.784.868-2.334.424-4.667.852-7.001 1.272-1.848.332-3.697.659-5.546.983l-7.418 1.298c-.311.054-.625.108-.925.204-.437.14-.563.414-.363.825.163.336.366.657.586.959 1.534 2.114 3.075 4.223 4.616 6.333 2.124 2.909 4.249 5.817 6.374 8.724 1.798 2.46 3.598 4.92 5.397 7.379 1.414 1.932 2.828 3.864 4.244 5.795l.279.338 12.271-3.033.029-.636c.001-8.511-.001-17.022.006-25.534 0-.376-.091-.678-.328-.976-1.032-1.303-2.045-2.621-3.066-3.933l-.226-.274zm3.301 41.241c-1.856.446-3.719.87-5.62 1.373.201.357 5.415 7.395 5.718 7.729l.19.105.021-.429.001-2.963c.001-1.719.005-3.438.001-5.157 0-.209.059-.434-.085-.646l-.226-.012z">
                            </path>
                        </svg>

                    </div>
                    <h6 class="mb-2 font-semibold leading-5">Laravel</h6>
                    <p class="mb-3 text-sm text-gray-900">
                        Laravel adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep
                        Model-View-Controller. Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai
                        tempat berbagi kode
                    </p>
                </div>
                <a href="https://laravel.com/docs/9.x" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn
                    more</a>
            </div>
        </div>
    </div>

</body>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    const themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>

</html>
