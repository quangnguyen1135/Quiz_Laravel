@extends('layout.master')

@section('content')
    <div class="main-container h-full flex flex-col">
        <!----><!---->
        <div
            class="flex flex-1 flex-col w-full md:flex-row md:justify-center relative overflow-auto will-change-transform wrapper md:mt-6">
            <!---->
            <div class="z-1 w-60 md:mr-6 sticky top-0 left-0">
                <div class="flex flex-col overflow-y-auto navigation-drawer">
                    <ul>
                        <li>
                            <section>
                                <header>
                                    <div class="flex px-3 pb-1 justify-left items-center font-bold text-dark-3 text-base md:text-xl md:p-0 md:h-8 mb-4"
                                        ismenuitemslistempty="false" mylibrarysidebarsection="[object Object]"
                                        quizcounts="[object Object]" userid="6530d670aa3baa53fa6a0f02" foldersloading="false"
                                        isdesktop="true" isquizcountsloading="false" disableinactivectas="false"><span>Thư
                                            viện của tôi</span>
                                    </div>
                                </header>
                                <ul
                                    class="flex flex-row flex-wrap text-xs p-3 gap-2 md:text-sm md:flex-col md:p-0 md:pb-4 md:gap-y-1">
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false">
                                        <a aria-current="page"
                                            href="/admin/my-library/createdByMe?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="router-link-active router-link-exact-active flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light shadow-sm h-6 h-20"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center fas fa-user px-2 font-semibold text-lilac"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate text-dark-2">Được tạo bởi
                                                        tôi</span><!----></div>
                                                <div class="flex"><!---->
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="0"><span>0
                                                            <!----></span></div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/imported?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-file-import px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Đã nhập</span><!----></div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="0">
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/hostedQuizzes?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-history px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Trước đây đã sử dụng</span><!---->
                                                </div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="1">
                                                        <span>1</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/likedQuizzes?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-heart px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Được tôi thích</span><!----></div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="0">
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/sharedWithMe?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-users px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Được chia sẻ với tôi</span><!---->
                                                </div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="0">
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/standardTagging?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-tags px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Được gắn thẻ tiêu
                                                        chuẩn</span><!----></div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="0">
                                                        <span>0</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li>
                                    <li class="md:w-full bg-light-66% rounded-t rounded-b-lg" quizcounts="[object Object]"
                                        disableinactivectas="false"
                                        getquizzescount="function Le(e){return e===&quot;totalQuizzes&quot;?&quot;&quot;:e===v.LibrarySections.CREATED_BY_ME?t.quizCounts.createdQuizzes:e===v.LibrarySections.SHARED_WITH_ME?t.quizCounts.sharedQuizzes:t.quizCounts[e]??0}">
                                        <a href="/admin/my-library/allQuizzes?order=desc&amp;sortBy=createdAt&amp;contentType=all&amp;quizStatus=draft&amp;term="
                                            class="flex flex-col border border-dark-6 rounded text-dark-4 hover:bg-light hover:shadow-sm hover:text-dark-2 cursor-pointer md:border-0 md:mb-0 md:w-full md:h-8 p-0 bg-light-3 md:bg-light-1 h-6"><button
                                                type="button"
                                                class="flex flex-row flex-grow items-center justify-between h-full">
                                                <div
                                                    class="flex flex-row items-center border-r-1 border-dark-10% md:border-0 w-8 h-full justify-center">
                                                    <i class="flex items-center far fa-archive px-2 font-semibold"
                                                        style="font-size: 12px;"></i>
                                                </div>
                                                <div class="flex flex-grow px-2 items-center"><span
                                                        class="font-semibold truncate">Tất cả nội dung của
                                                        tôi</span><!----></div>
                                                <div class="flex">
                                                    <div class="flex pr-2 items-center text-xs md:font-semibold"
                                                        isdesktop="true" limits="[object Object]" count="8">
                                                        <span>8</span>
                                                    </div>
                                                </div>
                                            </button></a><!---->
                                    </li><!---->
                                </ul>
                            </section>
                        </li>
                    </ul><!---->
                    <div class="">
                        <ul class="flex flex-col text-xs p-3 gap-2 md:text-sm md:p-0 md:py-4 md:gap-y-1">
                            <div>
                                <li class="flex justify-start md:block mb-2">
                                    <section class="mb-2 flex"><span class="text-dark-3 text-sm font-bold flex-1"><span>Bộ
                                                sưu tập của tôi</span></span><!----></section><!----><button
                                        class="w-full flex items-center justify-center bg-light-3 border border-dark-6 rounded cursor-pointer hover:bg-light-1 text-lilac md:text-dark-2 hover:text-dark-3 px-2 h-6 md:p-0"
                                        data-testid="my-library-collections-new-button" tabindex="0" type="button"><i
                                            class="flex items-center far fa-folder-plus"
                                            style="font-size: 12px;"></i><span
                                            class="ml-2.5 justify-left text-xs font-semibold"><span>Bộ sưu tập
                                                mới</span></span></button>
                                </li>
                            </div><!----><!---->
                        </ul><!---->
                    </div>
                </div>
            </div>
            <div class="LibraryView2-LibraryView-LibraryView bg-light md:bg-transparent w-4/6">
                <div class="flex flex-col m-0 p-0 gap-y-4"><!----><!----><!---->
                    <div>
                        <div
                            class="MyLibraryV2-Filters-index flex flex-row py-4 px-3 justify-between bg-light-3 z-1 md:p-0 md:bg-light-1 md:min-h-8 md:items-center sticky top-0">
                            <div class="flex flex-row gap-2">
                                <a href="{{ route('quizzes.my', ['filter' => 'published']) }}"
                                    class="px-2 pt-2 pb-1.5 border-b-2 font-semibold text-dark-4 text-xs text-center {{ $filter === 'published' ? 'border-b-lilac font-bold text-lilac' : 'border-b-transparent' }}">
                                    Published ({{ $publishedCount }})
                                </a>
                                <a href="{{ route('quizzes.my', ['filter' => 'draft']) }}"
                                    class="px-2 pt-2 pb-1.5 border-b-2 font-semibold text-dark-4 text-xs text-center {{ $filter === 'draft' ? 'border-b-lilac font-bold text-lilac' : 'border-b-transparent' }}">
                                    Drafts ({{ $draftCount }})
                                </a>
                            </div>
                            <div class="flex"><!----><!---->
                                <div
                                    class="field relative rounded text-sm text-dark-4 bg-light-3 h-6 border border-dark-6">
                                    <div id="2" class="chromium-scroll-fix-sr-only label sr-only">Dropdown (no
                                        selected value)
                                    </div>
                                    <div class="dropdown flex relative rounded"><button data-testid="dropdown"
                                            type="button" aria-haspopup="listbox" aria-labelledby="2 3"
                                            aria-expanded="false"
                                            class="w-full flex rounded font-semibold items-center whitespace-nowrap py-1 pl-2 pr-1 text-xs h-6 cursor-pointer"><i
                                                class="flex items-center far fa-filter mr-2"
                                                style="font-size: 12px;"></i><!----><span data-testid="dropdown-title"
                                                class="">Tất cả</span>
                                            <div class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                <!----><i class="flex items-center fas fa-caret-down" aria-hidden="true"
                                                    style="font-size: 11px;"></i>
                                            </div><!---->
                                        </button><!----></div>
                                </div>
                                <div
                                    class="field relative rounded text-sm text-dark-4 bg-light-3 h-6 border border-dark-6 ml-2">
                                    <div id="5" class="chromium-scroll-fix-sr-only label sr-only">Dropdown (with
                                        selected value)
                                        Alphabetical</div>
                                    <div class="dropdown flex relative rounded"><button data-testid="dropdown"
                                            type="button" aria-haspopup="listbox" aria-labelledby="5 6"
                                            aria-expanded="false"
                                            class="w-full flex rounded font-semibold items-center whitespace-nowrap py-1 pl-2 pr-1 text-xs h-6 cursor-pointer"><i
                                                class="flex items-center far fa-sort mr-2"
                                                style="font-size: 12px;"></i><!----><span data-testid="dropdown-title"
                                                class="">Gần đây nhất</span>
                                            <div class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                <!----><i class="flex items-center fas fa-caret-down" aria-hidden="true"
                                                    style="font-size: 11px;"></i>
                                            </div><!---->
                                        </button><!----></div>
                                </div><!---->
                            </div><!---->
                        </div><!---->
                    </div><!----><!----><!---->
                    <div class="flex flex-col" data-testid="my-library-createdByMe">
                        <div class="flex flex-col gap-y-1 pb-12">
                            @foreach ($quizzes as $quiz)
                                <div class="flex flex-row w-full bg-white p-2">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="h-18 w-18 md:w-26 md:h-26 relative rounded-sm overflow-hidden 
                                     @if (empty($quiz->image)) bg-lilac @endif">
                                            <div class="w-full h-full v-image">
                                                @if (!empty($quiz->image))
                                                    <img src="{{ $quiz->image }}" alt="Quiz Image"
                                                        class="lazy-img rounded-inherit object-contain w-full h-full"
                                                        loading="lazy">
                                                @else
                                                    <img src="https://cf.quizizz.com/img/logos/new/logo_placeholder_sm.webp?w=200&h=200"
                                                        alt="Default Quiz Image"
                                                        class="lazy-img rounded-inherit object-contain w-full h-full"
                                                        loading="lazy">
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex w-full">
                                        <div class="flex flex-col w-full ml-3 content-container relative md:gap-1.5">
                                            <!---->
                                            <div class="flex items-center font-semibold text-dark-4 gap-2 text-xxs">
                                                <div
                                                    class="px-2 flex items-center uppercase rounded-full border border-solid border-ds-dark-500-20">
                                                    <div class="ml-1 text-xxs text-ds-dark-200 font-semibold">
                                                        quiz
                                                    </div>
                                                </div>
                                                <div class="flex h-4 gap-2">
                                                    @if ($quiz->is_published == 0)
                                                        <div translate="no"
                                                            class="lozenge items-center inline-flex text-tn font-semibold rounded-full px-1.5 uppercase bg-red-faded text-red">
                                                            <span class="">BẢN NHÁP</span>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="absolute top-2 right-2">
                                                    <div class="field relative">
                                                        <form action="{{ route('quizzes.destroy', $quiz->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this quiz?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded hover:!bg-ds-light-300 white relative min-w-max border-1 p-0 !w-6 !h-6">
                                                                <i class="far fa-trash-alt text-dark-3"
                                                                    style="font-size: 11px;"></i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="name font-bold flex flex-row justify-between text-base">
                                                <div class="w-full">
                                                    <div class="w-full flex justify-between">
                                                        <div class="name overflow-hidden md:h-6 text-left">
                                                            {{ $quiz->title }}</div>
                                                        <div><!----></div>
                                                    </div>
                                                </div>
                                            </div><!---->
                                            <div translate="no"
                                                class="text-dark-3 flex flex-row justify-between items-center text-xs">
                                                <div class="flex flex-row items-center">
                                                    <div translate="no" class="mr-3.5"><i
                                                            class="flex items-center far fa-list mr-0.5"
                                                            style="font-size: 12px;"></i> {{ $quiz->questions_count }} Câu
                                                        hỏi</div>
                                                    <div translate="no" class="mr-3.5"><i
                                                            class="flex items-center far fa-graduation-cap mr-0.5"
                                                            style="font-size: 12px;"></i> {{ $quiz->level }} </div>
                                                    <!---->
                                                    <div class=""><i class="flex items-center far fa-books mr-0.5"
                                                            style="font-size: 12px;"></i>
                                                        {{ $quiz->category->name ?? 'Không có category' }}</div>
                                                </div><!---->
                                            </div>
                                            <div class="flex items-center justify-between mt-1.5">
                                                <div class="flex items-center pr-2 text-tn">
                                                    <div><img
                                                            src="https://lh3.googleusercontent.com/a/ACg8ocIDTXDAWTTdAYcxsGmX1kNs8fPGtdtW4pR_IyC0l3H_EFMB7A=s96-c"
                                                            class="w-6 h-6 mr-2 rounded-full" alt="User"></div>
                                                    <div class="flex items-center font-normal text-dark-4"
                                                        data-testid="quiz-card-profile-66ce7cd8ef67092454c8be73"><a
                                                            href="/profile/6530d670aa3baa53fa6a0f02"
                                                            class="mr-2 hover:underline max-w-20 userName">Nguyễn Quang</a>
                                                        <div
                                                            class="mr-2 h-0.5 w-0.5 flex justify-center items-center rounded-full bg-dark-4 max-w-20">
                                                        </div>
                                                        <div translate="no" class="time">7
                                                            ngày&nbsp;<span>trước</span></div>
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                                <div class="flex text-dark-2 gap-2">
                                                    <!----><!----><!----><!---->
                                                    <a href="{{ route('quizzes.edit', $quiz->id) }}">
                                                        <button
                                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3 rounded other relative min-w-max"
                                                            aria-label="Tiếp tục chỉnh sửa" type="button" translate="no"
                                                            data-testid="quiz-card-0-continue-editing-button">
                                                            <span class="title" title="Tiếp tục chỉnh sửa">Tiếp tục chỉnh
                                                                sửa</span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@php
    $hideFooter = true;
@endphp
