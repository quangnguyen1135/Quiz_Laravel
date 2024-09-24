@extends('layout.master')

@section('content')
    <div class="flex relative w-full justify-center flex-row-reverse main-container-quiz">
        <div class="flex flex-col isMinWidthForRecommendedVisiblty">
            <div><!----></div><!---->
            <div translate="no" class="py-4 ml-8 w-80">
                <div>
                    <h2 class="mb-4 flex justify-between"><span class="text-sm"><span>Gợi ý cho bạn</span></span><button
                            type="button"
                            class="bg-lilac-faded text-xs flex text-lilac justify-center items-center py-1 px-3 rounded border border-lilac cursor-pointer"
                            data-testid="qp-quiz-recommend-desktop-see-more-btn">
                            <div class="pr-1"><span>Xem thêm</span></div><i
                                class="fas fa-chevron-right flex items-center"></i>
                        </button></h2>
                    <div class="quiz-card-container grid gap-4">
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/5e9c290a9c2e31001b98be66/cau-dieu-kien-cau-dieu-kien?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-0"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!----></div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/9fc0a24b-1a30-4a63-9bf4-62a35a8cf71d?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">20
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">CÂU ĐIỀU KIỆN (CÂU ĐIỀU KIỆN)</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">7.2K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark- 4">lớp 10</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/5e9c4204054a220020383944/tag-question?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-1"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!----></div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/323c547c-f99e-4265-9364-70f9239fcf1e?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">20
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">tag question</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">2K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">lớp 12</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/5f221f959ae786001b6a94bd/chu-a?isSuperRecommeded=true"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-2"
                                rel="follow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2">
                                    <div translate="no"
                                        class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-super-10% text-super ml-auto">
                                        <!----><i class="flex items-center fas fa-bolt-lightning mr-1"
                                            style="font-size: 9px;"></i><span class="">PREMIUM</span>
                                    </div><!----><!---->
                                </div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/526e6282-987d-40e2-960f-33c133f36040?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">8
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">Chữ A</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">20K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">Lớp 1</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/5fa1c7bcb242e0001ce7db75/mid-tearm-revision-1-ed-ses-pronunciation?isSuperRecommeded=true"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-3"
                                rel="follow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2">
                                    <div translate="no"
                                        class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-super-10% text-super ml-auto">
                                        <!----><i class="flex items-center fas fa-bolt-lightning mr-1"
                                            style="font-size: 9px;"></i><span class="">PREMIUM</span>
                                    </div><!----><!---->
                                </div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/ee2d9e3e-0855-4966-9d8a-fc11c11feda9?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">30
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">phát âm thanh / -ed &amp; -s / es</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">630 lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">L6 - Lớp 7</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/presentation/5fb08a29fdc0e5001c658bd0/present-simple?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-4"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!---->
                                    <div translate="no"
                                        class="lozenge items-center inline-flex text-tn font-semibold rounded px-1 bg-[#2d9da61a] text-brand-b ml-1 px-2 rounded-lg">
                                        <!----><!----><span class="">BÀI HỌC</span>
                                    </div>
                                </div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://cf.quizizz.com/img/presentation/default-img/presentation_title_img-1_default.jpg?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">20
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">Present simple</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">4.6K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">lớp 6</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/611b3e844388f900208a0975/the-present-simple-tense?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-5"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!----></div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/53e67f9e-fc1a-4371-bd02-278748cb317b?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">20
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">The present simple tense</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">6K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">L6 - lớp 8</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/617d30da8f17e6001d140578/reported-speech?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-6"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!----></div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/725dae9f-627a-412c-b047-bbf067ad379f?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">15
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">Reported speech</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">3.5K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">lớp 12</span></h6>
                                </div>
                            </a></div>
                        <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                href="/admin/quiz/61a222f478ba7a001dffd784/a-an-some-any?isSuperRecommeded=false"
                                class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-desktop-7"
                                rel="nofollow">
                                <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!----></div>
                                <div class="relative rounded-lg image-exists">
                                    <div class="w-full h-full v-image"><img
                                            src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/5f4f386d-d8d7-471f-9b20-26c4ca45c3ec?w=90&amp;h=90"
                                            data-testid=""
                                            class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                            alt="Hình ảnh bài quiz" loading="lazy"></div>
                                    <h6 class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">15
                                        Qs </h6>
                                </div>
                                <div class="flex flex-col mx-2">
                                    <h5 class="text-sm font-semibold text-dark-3">A, AN, SOME, ANY</h5>
                                    <h6 class="text-xs font-semibold text-dark-3">11.7K lần chơi</h6>
                                    <h6 class="flex"><span class="text-xxs text-dark-4">Lớp 7</span></h6>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="mt-0 ml-8 bg-light rounded-lg mb-6 pb-6 create-your-own-sec" style="display: none;">
                <div class="flex mt-5 items-center pb-4">
                    <div class="ml-4 p-2 rounded-full pencilStyle h-9 w-9"><img
                            src="https://cf.quizizz.com/image/pencil.png" alt="pencil-icon"></div><span
                        class="pl-3 text-base pr-2">Xây dựng bài quiz của riêng bạn</span>
                </div>
                <div class="mx-4">
                    <button
                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max text-base font-semibold createBtn m-0 w-full h-10 text-base font-semibold createBtn m-0 w-full h-10"
                        aria-label="Tạo một bài quiz mới" type="button" translate="no"
                        data-testid="create-a-quiz-below-recommend-button"><!----><!----><span class="title"
                            title="Tạo một bài quiz mới">Tạo một bài quiz
                            mới</span><!----><!----><!----><!----><!----><!---->
                    </button>
                </div>
            </div>
        </div>
        <div class="quiz-container md:min-w-160"><!----><!---->
            <div class="pt-4 hidden md:block" style="display: none;"><span>Browse
                    from millions of quizzes</span>
            </div><!----><!----><!----><!---->
            <div class="relative w-full my-4 md:block" data-cy="quiz-details" quiz="[object Object]">
                <div>
                    <div class="relative rounded z-10 p-4 h-54 bg-light-3 border-sm border border-ds-dark-500-20">
                        <div class="flex">
                            <div class="w-30 h-30 relative flex justify-center items-center overflow-hidden">
                                <div class="bg-light-1 flex items-center justify-center shrink-0 rounded-sm w-full h-full"
                                    objectfit="cover" alt="Quiz Image">
                                    <div class="flex items-center w-full h-full image-preview cursor-zoom-in">
                                        <div class="w-full h-full v-image">
                                            @if (!empty($quiz->image))
                                                <img src="{{ $quiz->image }}" alt="Quiz Image"
                                                    class="rounded-inherit object-contain w-full h-full">
                                            @else
                                                <img src="https://cf.quizizz.com/img/logos/new/logo_placeholder_sm.webp?w=200&h=200"
                                                    alt="Default Quiz Image"
                                                    class="rounded-inherit object-contain w-full h-full">
                                            @endif
                                        </div>
                                        <div class="image-preview__border"></div>
                                    </div><!----><!----><!---->
                                </div><!---->
                            </div>
                            <div class="flex flex-col w-10/12 ml-3">
                                <div translate="no" class="flex text-xxs text-dark-4 font-semibold h-4 mb-0.5 gap-1">
                                    <div
                                        class="px-2 flex items-center uppercase rounded-full border border-solid border-ds-dark-500-20">
                                        <div class="ml-1 text-xxs text-ds-dark-200 font-semibold">quiz
                                        </div>
                                    </div><!----><!----><!----><!----><!----><!---->
                                </div>
                                <div class="flex w-3/5 my-1 quiz-name text-xl min-h-12 text-dark-2">
                                    <button type="button" class="flex w-full items-center" disabled="">
                                        <h1 class="text-lg font-semibold inline-block text-left align-middle break-custom"
                                            observe-mutation="quiz_title"><span
                                                data-testid="quiz-title">{{ $quiz->title }}</span><!----></h1>
                                    </button>
                                </div>
                                <div class="profile-details-row-container">
                                    <h2 class="items-center flex"><i
                                            class="flex items-center far fa-graduation-cap mr-1 text-dark-4"
                                            style="font-size: 12px;"></i><span
                                            class="text-dark-3 text-xs">{{ $quiz->level->name ?? 'Không có level' }}</span>
                                    </h2>
                                    <div class="items-center mx-2 flex">
                                        <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                                    </div>
                                    <div class="flex items-center"><i
                                            class="flex items-center far fa-book text-dark-4 mr-1"
                                            style="font-size: 12px;"></i>
                                        <h2 translate="no"
                                            class="text-xs text-dark-3 max-w-50 truncate v-popper--has-tooltip"><span
                                                translate="no" class="_i18n-container LANG_vi" maxlenght="-1">
                                                {{ $quiz->language ?? 'Không có ngôn ngữ' }}</span></h2>
                                    </div>
                                    <div translate="no" class="flex items-center w-fit w-26 v-popper--has-tooltip"><i
                                            class="flex items-center far fa-bullseye-arrow mr-1.5 text-dark-4"
                                            style="font-size: 12px;"></i>
                                        <div class="flex items-center text-dark-3 text-xs min-w-max" translate="no">85%
                                            <div class="ml-1"><span>độ chính xác</span></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center mx-2">
                                        <div class="w-1 h-1 rounded-full bg-dark-5"></div>
                                    </div>
                                    <div class="flex items-center"><i
                                            class="flex items-center far fa-play text-dark-4 mr-1.5"
                                            style="font-size: 12px;"></i>
                                        <div translate="no" class="flex items-center text-dark-3 text-xs">
                                            {{ $quiz->play_count }}<div class="mx-1">lần chơi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div translate="no" class="absolute top-4 right-4 flex gap-1"><button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                                    aria-label="Nhúng bài quiz này" type="button" translate="no"
                                    data-testid="embed-button"><i class="flex items-center fa-regular fa-code mr-2"
                                        style="font-size: 11px;"></i><!----><span class="title"
                                        title="Nhúng">Nhúng</span><!----><!----><!----><!----><!----><!----></button><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max"
                                    aria-label="Chia sẻ bài quiz" type="button" translate="no"
                                    data-testid="quiz-details-share-top-button" data-cy="quiz-details-share-button"><i
                                        class="flex items-center fas fa-share mr-2"
                                        style="font-size: 11px;"></i><!----><span class="title" title="Chia sẻ">Chia
                                        sẻ</span><!----><!----><!----><!----><!----><!----></button><!----><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max shrink-0 hover:text-red shrink-0 hover:text-red"
                                    aria-label="Thích bài quiz" type="button" translate="no"
                                    data-testid="quiz-details-like-button" data-cy="quiz-details-like-button"><i
                                        class="flex items-center far fa-heart mr-2"
                                        style="font-size: 11px;"></i><!----><span class="title"
                                        title="10">10</span><!----><!----><!----><!----><!----><!----></button><button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                                    aria-label="Báo cáo một vấn đề" type="button" translate="no"
                                    data-testid="report-issue-button"><i
                                        class="flex items-center far fa-exclamation-triangle"
                                        style="font-size: 11px;"></i><!----><span class="title"
                                        title=""></span><!----><!----><!----><!----><!----><!----></button><!----><!----><button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                                    aria-label="In bài quiz" type="button" translate="no"
                                    data-testid="print-quiz-quiz-detail-card-button"><i
                                        class="flex items-center far fa-print" style="font-size: 11px;"></i><!----><span
                                        class="title"
                                        title=""></span><!----><!----><!----><!----><!----><!----></button><!----><!---->
                            </div>
                        </div>
                        <div class="flex mt-4 flex-row justify-between items-center">
                            <div class="flex">
                                <div class="flex items-start">
                                    <div><img data-testid="quiz-creator-image-0"
                                            src="https://lh3.googleusercontent.com/a/ACg8ocIBuXwXMWRmAeTt-hs8GYuaMTXQgwdqwTwxhnKIx_qj=s96-c"
                                            alt="User image"
                                            class="w-8 h-8 mr-2 rounded-full cursor-pointer min-w-8 min-h-8 relative v-popper--has-tooltip"><!---->
                                    </div><!---->
                                </div>
                                <div translate="no" class="flex flex-col items-start"><a
                                        href="/profile/61484ca7e19f5c001dcd0daf"
                                        class="text-xs truncate cursor-pointer text-dark-2 hover:underline max-w-28 v-popper--has-tooltip"
                                        data-testid="quiz-creator-name-0" rel="author"><span>Phương
                                            Liên</span></a>
                                    <div translate="no" class="text-dark-4 text-xxs">3 năm trước</div>
                                </div>
                            </div>
                            <div class="flex justify-between space-x-1"><!----><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max shrink-0 shrink-0"
                                    aria-label="Tải xuống bảng tính" type="button" translate="no"
                                    data-testid="worksheet-quiz-page-button"><i
                                        class="flex items-center far fa-download mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title" title="Bảng tính">Bảng
                                        tính</span><!----><!----><!----><!----><!----><!----></button><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max shrink-0 hidden lg:block shrink-0 hidden lg:block"
                                    aria-label="Lưu" type="button" translate="no"
                                    data-testid="quiz-details-save-button" data-cy="quiz-details-save-button"><i
                                        class="flex items-center far fa-folder mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title"
                                        title="Lưu">Lưu</span><!----><!----><!----><!----><!----><!----></button><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max"
                                    aria-label="Chia sẻ bài quiz" type="button" translate="no"
                                    data-testid="quiz-details-share-top-button" data-cy="quiz-details-share-button"
                                    style="display: none;"><i class="flex items-center far fa-share mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title" title="Chia sẻ">Chia
                                        sẻ</span><!----><!----><!----><!----><!----><!----></button><!---->
                                <div class="v-popper v-popper--theme-menu v-popper--theme-dropdown bg-light-3 h-full">
                                    <button
                                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max shrink-0 shrink-0"
                                        aria-label="Tăng cường AI" type="button" translate="no"
                                        data-testid="quiz-details-ai-enhance-button"
                                        data-cy="quiz-details-ai-enhance-button"><i
                                            class="flex items-center fas fa-sparkles mr-2"
                                            style="font-size: 12px;"></i><!----><span class="title"
                                            title="Tăng cường AI">Tăng cường
                                            AI</span><!----><!----><!----><!----><!----><!----></button>
                                </div><!----><!---->
                                <div data-testid="for-super-container" class="for-super flex-1">
                                    <button
                                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded other relative min-w-max"
                                        aria-label="Sao chép và chỉnh sửa bài quiz" type="button" translate="no"
                                        data-testid="copy-and-edit-quiz-button"><i
                                            class="flex items-center far fa-copy mr-2"
                                            style="font-size: 12px;"></i><!----><span class="title"
                                            title="Sao chép và chỉnh sửa.">Sao chép và chỉnh
                                            sửa.</span><!----><!----><!----><!----><!----><!----></button>
                                </div>
                                <div class="field relative block lg:hidden">
                                    <div id="25" class="chromium-scroll-fix-sr-only label sr-only">Dropdown (no
                                        selected value)
                                    </div>
                                    <div class="dropdown flex relative rounded"><button data-testid="dropdown"
                                            type="button" aria-haspopup="listbox" aria-labelledby="25 26"
                                            aria-expanded="false"
                                            class="w-full flex rounded font-semibold items-center whitespace-nowrap text-xs cursor-pointer bg-dark-5% h-8 text-dark-2 text-sm px-2"><!----><!----><!---->
                                            <div class="w-4 h-4 items-center justify-center flex relative"><!----><i
                                                    class="flex items-center far fa-ellipsis-vertical" aria-hidden="true"
                                                    style="font-size: 11px;"></i></div><!---->
                                        </button><!----></div>
                                </div>
                            </div>
                        </div>
                    </div><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                </div>
            </div><!---->
            <div class="pb-4" data-cy="quiz-content-container">
                <div class="">
                    <div class="relative">
                        <div class="md:rounded">
                            <div class="cta-container grid gap-2">
                                <div data-testid="for-super-container" class="for-super">
                                    <div class="relative rounded-lg">
                                        <a href="{{ route('quizzes.start', ['quiz' => $quiz->id]) }}">
                                            <button
                                                class="transition-colors duration-200 ease-in-out flex items-center px-4 py-2.5 text-lg font-semibold q-shadow mb-1 h-full base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg special relative w-full justify-center md:justify-start !h-13 v-popper--has-tooltip"
                                                aria-label="Bắt đầu ngay" type="button" translate="no"
                                                data-testid="start-live-button" data-cy="start-live-button">
                                                <i class="flex items-center fas fa-chalkboard-teacher mr-2"
                                                    style="font-size: 16px;"></i>
                                                <span class="title text-base md:text-lg truncate md:w-full xs:text-left"
                                                    title="Bắt đầu ngay">Bắt đầu ngay</span>
                                                <i class="flex items-center fas fa-caret-right ml-auto"
                                                    style="font-size: 16px;"></i>
                                            </button>
                                        </a>

                                    </div>
                                </div>
                                <div data-testid="for-super-container" class="for-super" data-cy="start-async-button">
                                    <button
                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center px-7.5 py-2.5 text-lg font-semibold q-shadow mb-1 h-full base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded-lg secondary relative w-full md:justify-start !h-13 !px-4 v-popper--has-tooltip"
                                        aria-label="Giao bài" type="button" translate="no"
                                        data-testid="asynchronous-learning-button"><i
                                            class="flex items-center fas fa-clock mr-2"
                                            style="font-size: 16px;"></i><!----><span
                                            class="title text-base md:text-lg truncate md:w-full md:text-left"
                                            title="Giao bài">Giao bài</span><!----><i
                                            class="flex items-center fas fa-caret-right ml-2"
                                            style="font-size: 16px;"></i><!----><!----><!----><!----></button>
                                </div>
                                <!----><!----><!---->
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:hidden"><!----><!----><!----></div><!----><!----><!---->
                </div><!----><!---->
                <div class="md:hidden">
                    <div
                        class="relative w-full mt-5 class bg-lilac-faded border-1 border-lilac-light rounded-lg flex items-center justify-start space-x-2 overflow-hidden">
                        <div class="h-full w-18">
                            <div class="w-full h-full v-image"><img
                                    src="https://cf.quizizz.com/image/paper_mode_mobile_discovery.png" data-testid=""
                                    class="lazy-img rounded-inherit object-contain w-full h-full" alt="Player avatar"
                                    loading="lazy"></div>
                        </div>
                        <div class="flex-1 flex flex-col py-4 pr-2">
                            <h1 class="text-dark-1 font-semibold text-sm"><span>Giới thiệu mới</span>&nbsp;<span
                                    class="text-lilac font-bold italic"><span>Chế độ giấy</span></span></h1>
                            <p class="text-dark-80% text-xs"><span>Không có thiết bị sinh viên cần thiết.</span>&nbsp;<span
                                    class="text-dark-1 underline cursor-pointer"><span>Biết nhiều hơn</span></span></p>
                        </div>
                    </div><!---->
                </div><!---->
                <div translate="no" class="md:flex justify-between mb-4 mt-7">
                    <div class="flex items-center text-base"><i class="flex items-center fas fa-tasks text-dark-3"
                            style="font-size: 12px;"></i>
                        <p translate="no" class="mx-2 text-dark-2">{{ $quiz->questionsCount }} câu hỏi</p>
                    </div>
                    <div class="flex"><!---->
                        <button
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max mx-1 mx-1"
                            aria-label="Ẩn đáp án" type="button" translate="no"
                            data-testid="qp-show-answer-button"><i class="flex items-center far fa-eye-slash mr-2"
                                style="font-size: 11px;"></i><!----><span class="title" title="Ẩn đáp án">Ẩn đáp
                                án</span><!----><!----><!----><!----><!----><!----></button><button
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max mx-1 mx-1"
                            aria-label="Xem trước Quiz" type="button" translate="no"
                            data-testid="qp-preview-quiz-button"><i class="flex items-center fas fa-play mr-2"
                                style="font-size: 11px;"></i><!----><span class="title" title="Xem trước">Xem
                                trước</span><!----><!----><!----><!----><!----><!----></button><!---->
                    </div>
                </div>
                <div translate="no"
                    class="flex justify-between px-4 pt-3 pb-4 text-xs rounded-t-lg text-dark-3 bg-dark-6 mt-7 -mb-2">
                    <div class="flex"><span class="mr-2">Hiển thị câu trả
                            lời</span>
                        <div class="switch block relative sm"><input id="show-answers" aria-label="Hiển thị đáp án"
                                class="switch__input absolute mr-2 w-px h-px overflow-hidden cursor-pointer"
                                type="checkbox" data-cy=":switch-box" name="show-answers" data-testid="generic-checkbox"
                                value="true"><label
                                class="switch__label flex items-center whitespace-nowrap relative select-none default cursor-pointer label-bg-dark"
                                for="show-answers" data-testid="generic-label" style="--bgColor: rgba(9, 9, 9, 0.1);">
                                <div class="sr-only">Hiển thị đáp án</div>
                            </label></div>
                    </div>
                    <div class="cursor-pointer"><span class="mr-2">Xem bản xem
                            trước</span><i class="flex items-center far fa-angle-right" style="font-size: 11px;"></i>
                    </div>
                </div>
                <ul class="relative grid gap-4">
                    @foreach ($questions as $question)
                        <li class="">
                            <div id="question-details-card-{{ $question->id }}"
                                data-testid="question-details-card-top-{{ $question->id }}"
                                class="question-details-card flex flex-col border border-solid border-dark-6 rounded-lg mb-4 rounded cursor-pointer bg-light-3 hover:bg-light-2"
                                data-cy="question-details-card" role="button"
                                aria-label="Question {{ $loop->index + 1 }}" quizhasallmcqs="true">
                                <div class="p-4 rounded-t-lg shadow-sm">
                                    <div class="question-details-card-question-text">
                                        <div class="flex justify-between h-6 mb-4">
                                            <div class="flex flex-col xs:flex-row gap-2 xs:gap-0 justify-between grow">
                                                <span class="inline-flex items-center min-w-max">
                                                    <div translate="no"
                                                        class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5">
                                                        <span class="mr-2">
                                                            <span data-testid="question-type-icon-container"
                                                                class="question-type-icon relative flex items-center justify-center text-brand-b">
                                                                <i class="flex items-center far fa-check-square"
                                                                    data-testid="question-type-icon"
                                                                    style="font-size: 11px;"></i>
                                                            </span>
                                                        </span>
                                                        <span>{{ $loop->index + 1 }}.
                                                            {{ $question->question_type }}</span>
                                                    </div>
                                                </span>
                                            </div>
                                            <span class="ml-auto h-full self-start flex">
                                                <div class="flex show-on-hover">
                                                    <!-- Dropdown and buttons -->
                                                    <div
                                                        class="field relative flex justify-center items-center h-6 font-semibold font-sans text-dark-3 py-1 border border-dark-6 rounded mr-2 hover:bg-light-2">
                                                        <div id="31"
                                                            class="chromium-scroll-fix-sr-only label sr-only">Dropdown (no
                                                            selected value)</div>
                                                        <div class="dropdown flex relative rounded">
                                                            <button data-testid="dropdown" type="button"
                                                                aria-haspopup="listbox" aria-labelledby="31 32"
                                                                aria-expanded="false"
                                                                class="w-full flex rounded font-semibold items-center whitespace-nowrap py-2 pl-2 pr-1 text-xs h-8 cursor-pointer">
                                                                <i class="flex items-center fas fa-sparkles h-4 w-4 mr-1"
                                                                    style="font-size: 12px;"></i>
                                                                <span data-testid="dropdown-title" class="text-sm">Tối ưu
                                                                    với AI</span>
                                                                <div
                                                                    class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                                    <i class="flex items-center fas fa-caret-down"
                                                                        aria-hidden="true" style="font-size: 11px;"></i>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div data-testid="for-super-container" class="for-super mr-2">
                                                        <button
                                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max"
                                                            aria-label="Chỉnh sửa câu hỏi này" type="button"
                                                            translate="no"
                                                            data-testid="quiz-details-edit-{{ $question->id }}-button">
                                                            <i class="flex items-center far fa-pencil mr-2"
                                                                style="font-size: 11px;"></i>
                                                            <span class="title" title="Chỉnh sửa">Chỉnh sửa</span>
                                                        </button>
                                                    </div>
                                                    <button
                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                                                        aria-label="Report an issue in question {{ $loop->index + 1 }}"
                                                        type="button" translate="no" data-testid="generic-button">
                                                        <i class="flex items-center far fa-exclamation-triangle"
                                                            style="font-size: 11px;"></i>
                                                    </button>
                                                </div>
                                                <div class="transform transition-transform origin-top flex"></div>
                                                <div class="flex hide-on-hover h-6">
                                                    <div translate="no"
                                                        class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5 ml-2 border bg-light-3 border-dark-6 min-w-max">
                                                        <i class="flex items-center far fa-clock mr-1"
                                                            style="font-size: 11px;"></i>
                                                        <span>30 giây</span>
                                                    </div>
                                                    <div translate="no"
                                                        class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5 ml-2 border bg-light-3 border-dark-6 min-w-max">
                                                        <i class="flex items-center far fa-check-circle mr-1"
                                                            style="font-size: 11px;"></i>
                                                        <span>1 điểm</span>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="flex gap-2 items-center mb-4">
                                            <div
                                                class="question-wrapper text-sm flex overflow-hidden w-full text-dark-2 items-center">
                                                <span observe-mutation="quiz_question_{{ $question->id }}">
                                                    <p><strong>{{ $question->question_text }}</strong></p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-px mb-4 bg-light-1">
                                        <span
                                            class="absolute px-2 text-tn left-4 -translate-y-1/2 transform text-dark-4 bg-light"
                                            translate="no">lựa chọn trả lời</span>
                                    </div>
                                    <div class="flex flex-wrap">
                                        @foreach ($question->options as $option)
                                            <div class="flex items-start mb-2 w-1/2">
                                                <span
                                                    class="w-4 h-4 rounded-full my-1 mr-2 shrink-0 relative {{ $option->correct ? 'bg-green' : 'bg-red' }}"></span>
                                                <span class="text-sm text-dark-2">
                                                    <p>{{ $option->option_text }}</p>
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    <button
                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-8 text-lilac hover:text-lilac-light active:text-lilac-dark rounded link-no-bg relative min-w-max -mx-4 mt-4 -mx-4 mt-4"
                        aria-label="Báo cáo một vấn đề" type="button" translate="no" data-testid="generic-button">
                        <span class="title" title="Báo cáo một vấn đề">Báo cáo một vấn đề</span>
                    </button>
                </ul>

                <div translate="no" class="py-4 md:hidden">
                    <div>
                        <h2 class="mb-4 flex justify-between"><span class="text-sm"><span>Gợi ý cho
                                    bạn</span></span><button type="button"
                                class="bg-lilac-faded text-xs flex text-lilac justify-center items-center py-1 px-3 rounded border border-lilac cursor-pointer"
                                data-testid="qp-quiz-recommend-mobile-see-more-btn">
                                <div class="pr-1"><span>Xem thêm</span></div>
                                <i class="fas fa-chevron-right flex items-center"></i>
                            </button></h2>
                        <div class="quiz-card-container grid gap-4">
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/5e9c290a9c2e31001b98be66/cau-dieu-kien-cau-dieu-kien?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-0"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/9fc0a24b-1a30-4a63-9bf4-62a35a8cf71d?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            20 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">CÂU ĐIỀU KIỆN (CÂU ĐIỀU KIỆN)</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">7.2K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">lớp 10</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/5e9c4204054a220020383944/tag-question?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-1"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/323c547c-f99e-4265-9364-70f9239fcf1e?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            20 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">tag question</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">2K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">lớp 12</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/5f221f959ae786001b6a94bd/chu-a?isSuperRecommeded=true"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-2"
                                    rel="follow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2">
                                        <div translate="no"
                                            class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-super-10% text-super ml-auto">
                                            <!----><i class="flex items-center fas fa-bolt-lightning mr-1"
                                                style="font-size: 9px;"></i><span class="">PREMIUM</span>
                                        </div><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/526e6282-987d-40e2-960f-33c133f36040?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            8 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">Chữ A</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">20K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">Lớp 1</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/5fa1c7bcb242e0001ce7db75/mid-tearm-revision-1-ed-ses-pronunciation?isSuperRecommeded=true"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-3"
                                    rel="follow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2">
                                        <div translate="no"
                                            class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 bg-super-10% text-super ml-auto">
                                            <!----><i class="flex items-center fas fa-bolt-lightning mr-1"
                                                style="font-size: 9px;"></i><span class="">PREMIUM</span>
                                        </div><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/ee2d9e3e-0855-4966-9d8a-fc11c11feda9?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            30 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">phát âm thanh / -ed &amp; -s / es
                                        </h5>
                                        <h6 class="text-xs font-semibold text-dark-3">630 lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">L6 - Lớp 7</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/presentation/5fb08a29fdc0e5001c658bd0/present-simple?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-4"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!---->
                                        <div translate="no"
                                            class="lozenge items-center inline-flex text-tn font-semibold rounded px-1 bg-[#2d9da61a] text-brand-b ml-1 px-2 rounded-lg">
                                            <!----><!----><span class="">BÀI HỌC</span>
                                        </div>
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://cf.quizizz.com/img/presentation/default-img/presentation_title_img-1_default.jpg?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            20 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">Present simple</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">4.6K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">lớp 6</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/611b3e844388f900208a0975/the-present-simple-tense?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-5"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/53e67f9e-fc1a-4371-bd02-278748cb317b?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            20 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">The present simple tense</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">6K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">L6 - lớp 8</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/617d30da8f17e6001d140578/reported-speech?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-6"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/725dae9f-627a-412c-b047-bbf067ad379f?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            15 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">Reported speech</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">3.5K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">lớp 12</span></h6>
                                    </div>
                                </a></div>
                            <div class="w-full md:w-80 p-1 rounded hover:bg-dark-6 bg-light-3 border-dark-10%"><a
                                    href="/admin/quiz/61a222f478ba7a001dffd784/a-an-some-any?isSuperRecommeded=false"
                                    class="relative flex cursor-pointer" data-testid="qp-quiz-recommend-mobile-7"
                                    rel="nofollow">
                                    <div class="absolute bottom-0 flex items-center p-1 right-2"><!----><!----><!---->
                                    </div>
                                    <div class="relative rounded-lg image-exists">
                                        <div class="w-full h-full v-image"><img
                                                src="https://quizizz.com/media/resource/gs/quizizz-media/quizzes/5f4f386d-d8d7-471f-9b20-26c4ca45c3ec?w=90&amp;h=90"
                                                data-testid=""
                                                class="lazy-img rounded-inherit object-contain w-20 h-20 rounded-lg min-w-20"
                                                alt="Hình ảnh bài quiz" loading="lazy"></div>
                                        <h6
                                            class="absolute bottom-2 right-2 text-xxs text-light-3 bg-dark-80% rounded px-1">
                                            15 Qs </h6>
                                    </div>
                                    <div class="flex flex-col mx-2">
                                        <h5 class="text-sm font-semibold text-dark-3">A, AN, SOME, ANY</h5>
                                        <h6 class="text-xs font-semibold text-dark-3">11.7K lần chơi</h6>
                                        <h6 class="flex"><span class="text-xxs text-dark-4">Lớp 7</span></h6>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div><!----><!----><!----><!----><!----><!----><!----><!---->
            </div>
        </div>
    </div>
@endsection
