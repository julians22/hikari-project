@extends('layouts.app')

@section('content')
    <section class="overflow-hidden">
        <div class="container mx-auto">
            <div class="image-container xl:h-[789px] min-[1366px]:h-[850px] min-[1440px]:h-[900px] 2xl:h-[960px] min-[1920px]:h-[1240px] aspect-square relative -mt-28 -mb-20 mx-auto">

                <img draggable="false" src="{{ asset('img/front-text.png') }}" alt="" class="absolute z-[7] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-screen max-w-none">

                {{-- Turn Off Menu --}}
                <div class="w-full h-full z-[7] relative">
                    <img draggable="false" src="{{ asset('img/pentagon/xoba01 r.png') }}" alt="Xoba01" class="object-cover w-full h-full">
                </div>

                {{-- Turn Light On Menu --}}
                <div class="image-menu-wrapper">
                    @for ($i = 1; $i <= 7; $i++)
                        <img data-menu-index="menu-{{ $i }}"
                            src="{{ asset('img/pentagon/0' . $i . '.png') }}"
                            draggable="false"
                            class="image-menu-item">
                    @endfor
                </div>

                <img draggable="false" src="{{ asset('img/back-text.png') }}" alt="" class="absolute z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-screen max-w-none opacity-30">

                <div class="image-menu-hovers absolute inset-0 z-20">
                    <div
                        class="absolute rounded-full h-40 cursor-pointer"
                        style="top: 16%;right: 18%;width: 33%;height: 27%;"
                        data-menu-target="menu-1">
                        <button
                            class="tooltip"
                            data-tooltip-index="menu-1">
                            <span>
                                OUR SERVICES
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 59%; right: 23%; width: 31%; height: 23%;"
                        data-menu-target="menu-2">
                        <button
                            class="tooltip"
                            data-tooltip-index="menu-2">
                            <span>
                                CONTACT US
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 17%; right: 52%; width: 29%; height: 22%;"
                        data-menu-target="menu-3">
                        <button class="tooltip" data-tooltip-index="menu-3">
                            <span>
                                ABOUT US
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 59%; right: 55%; width: 28%; height: 24%;"
                        data-menu-target="menu-4">
                        <button class="tooltip" data-tooltip-index="menu-4">
                            <span>
                                OUR GROUPS
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 42%; right: 12%; width: 21%; height: 21%;"
                        data-menu-target="menu-5">
                        <button class="tooltip" data-tooltip-index="menu-5">
                            <span>
                                OUR PARTNERS
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 39%; right: 69%; width: 22%; height: 20%;"
                        data-menu-target="menu-6">
                        <button class="tooltip"
                            style="right: 45.3%;top: 51%;"
                            data-tooltip-index="menu-6">
                            <span>
                                OUR PROJECTS
                            </span>
                        </button>
                    </div>
                    <div
                        class="absolute rounded-full w-40 h-40 cursor-pointer"
                        style="top: 40%; right: 34%; width: 36%; height: 22%;"
                        data-menu-target="menu-7">

                        <button class="tooltip"
                            style="right: 8.5%;top: 55%;"
                            data-tooltip-index="menu-7">
                            <span>
                                WHY CHOOSE US?
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto pb-10">
            <img src="{{ asset('img/data/content-1.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section class="bg-primary-yellow py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-2.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section>
        <img src="{{ asset('img/data/content-3.png') }}" alt="" class="w-full">
    </section>

    <section>
        <img src="{{ asset('img/data/content-4.png') }}" alt="" class="w-full">
    </section>

    <section class="bg-primary-yellow py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-5.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-6.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section class="bg-primary-yellow py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-7.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-8.png') }}" alt="" class="w-full">
        </div>
    </section>

    <section class="bg-primary-yellow py-10">
        <div class="container mx-auto">
            <img src="{{ asset('img/data/content-9.png') }}" alt="" class="w-full">
        </div>
    </section>

@endsection

@push('after-scripts')

    <script>

        const imageMenuItems = document.querySelectorAll('.image-menu-item');
        const imageMenuHovers = document.querySelectorAll('.image-menu-hovers');

        imageMenuHovers.forEach((imageMenuHover) => {
            imageMenuHover.addEventListener('mouseover', (e) => {
                const target = e.target;
                const menuTarget = target.getAttribute('data-menu-target');

                imageMenuItems.forEach((imageMenuItem) => {
                    imageMenuItem.classList.remove('active');
                });

                if (null !== menuTarget){
                    document.querySelector(`[data-menu-index="${menuTarget}"]`).classList.add('active');
                    // Find class tooltip & add active class to it
                    const tooltip = document.querySelector(`[data-tooltip-index="${menuTarget}"]`);
                    tooltip.classList.add('active');
                }

            });

            imageMenuHover.addEventListener('mouseout', (e) => {
                imageMenuItems.forEach((imageMenuItem) => {
                    imageMenuItem.classList.remove('active');
                });

                // Find all class tooltip & remove active class from it
                const tooltips = document.querySelectorAll('.tooltip');
                tooltips.forEach((tooltip) => {
                    tooltip.classList.remove('active');
                });
            });

        });



    </script>

@endpush
