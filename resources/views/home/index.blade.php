@extends('layout.master')
@section('content')
    <div id="app-body-container" class="main-container flex bg-light-1 main-content justify-center overflow-auto">
        <div class="w-full h-full"><!---->
            <section class="w-full admin"><!----><!----><!---->
                <div data-testid="search-b2sfc" class="z-1 relative border-lilac-20% bg-purple-faded-2 py-2 pb-8"
                    style="background-image: url(&quot;https://cf.quizizz.com/image/bts-hero-search-bg.png&quot;);"><!---->
                    <div class="w-full max-h-70 left-0 t-0 px-8">
                        <div class="app-main-grid mx-auto grid-flow-row">
                            <header class="flex gap-2 h-14.5 col-span-12">
                                <div id="app-header" class="main-header h-fit flex-grow border-transparent border-b z-10"
                                    translate="no">
                                    <nav
                                        class="text-dark-3 flex flex-row relative justify-between h-auto bg-transparent p-2">
                                        <a aria-current="page" href="/admin"
                                            class="router-link-active router-link-exact-active logo hidden md:block"
                                            prefetch="false" aria-label="Quizizz" title="Quizizz"
                                            style="display: none;"><img aria-hidden="true"
                                                class="p-1 w-32 h-10 object-contain"
                                                src="https://cf.quizizz.com/img/quizizz_logos/purple-brandmark-600x164.png"
                                                alt="logo"></a>
                                        <div class="flex flex-row items-center md:hidden md:pl-3">
                                            <div class="flex items-center h-full text-xxs" style="display: none;"><span
                                                    class="pr-1.5"><i class="fas fa-angle-left pr-1.5"></i></span><span
                                                    class="font-semibold">Quay lại</span></div><button type="button">
                                                <div class="relative"><!----><i class="flex items-center fas fa-bars"
                                                        style="font-size: 16px;"></i>
                                                </div>
                                            </button><a aria-current="page" href="/admin"
                                                class="router-link-active router-link-exact-active pl-2 md:hidden"
                                                prefetch="false" style="display: none;"><img
                                                    class="object-contain w-20 h-full p-1 mr-auto"
                                                    src="https://cf.quizizz.com/img/quizizz_logos/purple-brandmark-600x164.png"
                                                    alt="logo"></a>
                                        </div>
                                        <div class="flex flex-row space-x-2 flex-grow flex-grow pl-6 md:pl-0 justify-end">
                                            <div class="flex space-x-2 flex-row pl-0 md:pl-2 h-10">
                                                <div class="xs:hidden" style="display: none;"><!----></div><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-8 h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded-full other relative min-w-max mt-auto mb-auto md:hidden mt-auto mb-auto md:hidden"
                                                    aria-label="tìm kiếm" type="button" translate="no"
                                                    data-testid="generic-button" iconsize="sm" style="display: none;"><i
                                                        class="flex items-center far fa-search"
                                                        style="font-size: 12px;"></i><!----><span class="title"
                                                        title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-full base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max"
                                                    aria-label="Nhập mã" type="button" translate="no"
                                                    data-testid="generic-button"><!----><!----><span class="title"
                                                        title="Nhập mã">Nhập
                                                        mã</span><!----><!----><!----><!----><!----><!----></button>
                                                <div>
                                                    <div class="relative hidden md:block"><!----><button
                                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-10 h-10 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded-full other relative min-w-max"
                                                            aria-label="thông báo" type="button" translate="no"
                                                            data-testid="generic-button" iconsize="lg"><i
                                                                class="flex items-center far fa-bell"
                                                                style="font-size: 16px;"></i><!----><span class="title"
                                                                title=""></span><!----><!----><!----><!----><!----><!----></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="absolute"><!----></div><!---->
                            </header>
                            <div class="mt-2 w-full col-span-12 flex flex-col items-center z-20">
                                <h1 class="text-dark-80% font-semibold flex flex-col items-center"><span class="text-xl">Xin
                                        chào Nguyễn 👋</span><span class="text-2xl">Hôm nay bạn dạy gì?</span></h1>
                                <div class="w-3/5 mt-4 z-30 relative">
                                    <div class="relative w-full"><!---->
                                        <div class="relative">
                                            <div
                                                class="w-6 h-6 flex items-center justify-center absolute left-2 inset-0 my-auto p-4 px-4 top-1 font-light text-dark-4">
                                                <i class="flex items-center fa fa-search font-light text-dark-5"
                                                    style="font-size: 20px;"></i>
                                            </div><input id="" data-hj-allow="" data-testid="search-fcbts-input"
                                                aria-describedby="input-error-message" aria-invalid="false"
                                                aria-required="false" type="text" name=""
                                                class="focus:outline-none h-10 w-full py-2 text-sm placeholder-sm rounded-64 h-14 pl-[40px] text-xl shadow hover:shadow-lg remove-number-selector pl-9 border border-solid border-dark-6 rounded bg-light-3 text-dark-2  border-dark-4 placeholder-dark-5 pr-9 pr-10"
                                                placeholder="Search for bất kỳ chủ đề" autocomplete="off" lang=""
                                                maxlength="-1" tabindex="0">
                                            <div
                                                class="w-6 h-6 flex items-center justify-center absolute right-2 top-2 pt-0.5 p-4 px-4 top-[1.5rem] font-light">
                                                <i class="flex items-center far fa-chevron-right font-light hover:cursor-pointer text-dark-5"
                                                    style="font-size: 20px;"></i>
                                            </div><!----><!----><!----><!---->
                                        </div>
                                        <div class="flex pt-1 text-xs font-semibold text-red" aria-live="assertive"
                                            style="display: none;"><span
                                                class="w-4 h-4 flex items-center justify-center mr-0.5"><i
                                                    class="flex items-center far fa-exclamation-circle"
                                                    style="font-size: 11px;"></i></span><span id="input-error-message"
                                                data-testid="input-error-message"></span></div>
                                        <!---->
                                    </div><!----><!---->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="p-4">
                            <div>
                                <img src="https://cf.quizizz.com/img/Explore/folder.png" alt="Quiz image" class="inline"
                                    style="width: 24px; height: 24px">
                                <span class="px-1 font-bold">Khám phá một hoạt động có liên quan để tổ chức</span>
                            </div>
                            <div class="grid-container">
                                @foreach ($quizzes as $quiz)
                                    <div class="grid-item">
                                        <a href="{{ route('quiz.view', $quiz->id) }}">
                                            <!-- Adjust the route if necessary -->
                                            <div class="image-container">
                                                @if (!empty($quiz->image))
                                                    <img src="{{ $quiz->image }}" alt="Quiz Image"
                                                        class="rounded-inherit object-contain w-full h-full">
                                                @else
                                                    <img src="https://cf.quizizz.com/img/logos/new/logo_placeholder_sm.webp?w=200&h=200"
                                                        alt="Default Quiz Image"
                                                        class="rounded-inherit object-contain w-full h-full">
                                                @endif
                                            </div>

                                            <div class="item-info">
                                                <div class="item-type">Quiz</div>
                                                <div class="item-title">{{ $quiz->title }}</div>
                                                <div class="item-details">{{ $quiz->questions_count }} Câu hỏi •
                                                    {{ $quiz->play_count }} lần chơi</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center mb-4">
                                    <i class="flex items-center fas fa-star text-brand-c" style="font-size: 20px;"></i>
                                    <h2 class="text-sm md:text-2xl text-dark-2 ml-2 font-semibold"
                                        aria-label="Mathematics">Toán</h2>
                                    <div class="hidden md:block ml-auto">
                                        <button
                                            class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded-full secondary relative min-w-max ml-auto"
                                            aria-label="Xem thêm" type="button">
                                            <span class="title" title="Xem thêm">Xem thêm</span>
                                            <i class="flex items-center far fa-chevron-right ml-2"
                                                style="font-size: 12px;"></i>
                                        </button>
                                    </div>
                                </div>


                            </div>
                            <div class="admin-card flex max-w-full relative mb-4">
                                <div class="w-full flex gap-4 overflow-auto smooth-scroll no-scrollbar">
                                    <!-- Loop through Mathematics quizzes -->
                                    @foreach ($mathQuizzes as $quiz)
                                        <a href="{{ route('quiz.view', $quiz->id) }}"
                                            class="quiz-card mb-4 md:mb-8 h-60 md:h-72 rounded-lg bg-light-3 text-left ring-1 ring-dark-10% flex-shrink-0 cursor-pointer hover:shadow-lg max-w-56 md:max-w-72"
                                            title="{{ $quiz->title }}"
                                            aria-label="{{ $quiz->title }}, {{ $quiz->questions_count }} Câu hỏi">
                                            <div class="overflow-hidden rounded-t-lg h-full">
                                                <div class="w-56 md:w-72 h-30 md:h-40 flex items-center justify-around">
                                                    <div class="image-container">
                                                        @if (!empty($quiz->image))
                                                            <img src="{{ $quiz->image }}" alt="Quiz Image"
                                                                class="rounded-inherit object-contain w-full h-full">
                                                        @else
                                                            <img src="https://cf.quizizz.com/img/logos/new/logo_placeholder_sm.webp?w=200&h=200"
                                                                alt="Default Quiz Image"
                                                                class="rounded-inherit object-contain w-full h-full">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="px-2.5 pt-2.5 pb-3.5 flex flex-col h-30">
                                                    <div class="flex items-center">
                                                        <div translate="no"
                                                            class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-light-1 text-dark-3">
                                                            <span>{{ $quiz->type == 'QUIZ' ? 'QUIZ' : 'BÀI HỌC' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 mb-4 text-sm md:text-base text-dark-2 font-semibold"
                                                        title="{{ $quiz->title }}">
                                                        {{ $quiz->title }}
                                                    </div>
                                                    <div class="flex text-tn md:text-xs text-dark-4 font-semibold mt-auto">
                                                        <div class="mr-1.5">
                                                            {{ $quiz->questions_count }} Câu hỏi</div>
                                                        <div class="mr-1.5 ml-1.5">
                                                            {{ $quiz->play_count }} lần chơi</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="flex items-center mb-4">
                                    <i class="flex items-center fas fa-star text-brand-c" style="font-size: 20px;"></i>
                                    <h2 class="text-sm md:text-2xl text-dark-2 ml-2 font-semibold" aria-label="English">
                                        Tiếng Anh</h2>
                                    <div class="md:block ml-auto">
                                        <button
                                            class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded-full secondary relative min-w-max ml-auto"
                                            aria-label="Xem thêm" type="button">
                                            <span class="title" title="Xem thêm">Xem thêm</span>
                                            <i class="flex items-center far fa-chevron-right ml-2"
                                                style="font-size: 12px;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="admin-card flex max-w-full relative mb-4">
                                <div class="w-full flex gap-4 overflow-auto smooth-scroll no-scrollbar">
                                    <!-- Loop through English quizzes -->
                                    @foreach ($englishQuizzes as $quiz)
                                        <a href="{{ route('quiz.view', $quiz->id) }}"
                                            class="quiz-card mb-4 md:mb-8 h-60 md:h-72 rounded-lg bg-light-3 text-left ring-1 ring-dark-10% flex-shrink-0 cursor-pointer hover:shadow-lg max-w-56 md:max-w-72"
                                            title="{{ $quiz->title }}"
                                            aria-label="{{ $quiz->title }}, {{ $quiz->questions_count }} Câu hỏi">
                                            <div class="overflow-hidden rounded-t-lg h-full">
                                                <div class="w-56 md:w-72 h-30 md:h-40 flex items-center justify-around">
                                                    <div class="image-container">
                                                        @if (!empty($quiz->image))
                                                            <img src="{{ $quiz->image }}" alt="Quiz Image"
                                                                class="rounded-inherit object-contain w-full h-full">
                                                        @else
                                                            <img src="https://cf.quizizz.com/img/logos/new/logo_placeholder_sm.webp?w=200&h=200"
                                                                alt="Default Quiz Image"
                                                                class="rounded-inherit object-contain w-full h-full">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="px-2.5 pt-2.5 pb-3.5 flex flex-col h-30">
                                                    <div class="flex items-center">
                                                        <div translate="no"
                                                            class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-light-1 text-dark-3">
                                                            <span>{{ $quiz->type == 'QUIZ' ? 'QUIZ' : 'BÀI HỌC' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 mb-4 text-sm md:text-base text-dark-2 font-semibold"
                                                        title="{{ $quiz->title }}">
                                                        {{ $quiz->title }}
                                                    </div>
                                                    <div class="flex text-tn md:text-xs text-dark-4 font-semibold mt-auto">
                                                        <div class="mr-1.5">
                                                            {{ $quiz->questions_count }} Câu hỏi</div>
                                                        <div class="mr-1.5 ml-1.5">
                                                            {{ $quiz->play_count }} lần chơi</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div id="app-body-teleport" class="z-20 absolute"></div>
    </div>
@endsection
