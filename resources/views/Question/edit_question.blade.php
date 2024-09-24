@extends('layout.master')
@section('content')
    <div id="app" class="app-container">
        <div id="base-0" class="z-0 absolute w-screen h-screen"><!---->
            <div id="question-editor-container" class="overflow-hidden h-screen bg-dark-6">
                <header data-testid="editor-main-header"
                    class="w-full font-open-sans bg-light-3 flex items-center gap-2 py-2 px-4 h-14 col-span-full"
                    id="question-editor-header">
                    <button
                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3 rounded other relative min-w-max v-popper--has-tooltip"
                        aria-label="Quay lại" type="button" translate="no" data-testid="generic-button"><i
                            class="flex items-center fas fa-chevron-left" style="font-size: 12px;"></i><!----><span
                            class="title" title=""></span><!----><!----><!----><!----><!----><!---->
                    </button>
                    <div class="field relative question-types-dropdown flex-grow flex-shrink-0 max-w-55" tabindex="80">
                        <div class="dropdown flex relative rounded">
                            <button data-testid="dropdown" type="button" aria-haspopup="listbox" aria-labelledby="109 110"
                                aria-expanded="false"
                                class="w-full flex rounded font-semibold items-center whitespace-nowrap py-2 pl-2 pr-1 text-xs h-8 cursor-pointer bg-dark-5% text-dark-2 hover:text-dark-3">
                                <span data-testid="question-type-icon-container"
                                    class="question-type-icon relative flex items-center justify-center p-1 bg-brand-b text-light rounded-sm mr-2"
                                    width="4">
                                    <i class="flex items-center far fa-check-square" data-testid="question-type-icon"
                                        style="font-size: 10px;"></i>
                                </span>
                                <span data-testid="dropdown-title" class="">Nhiều lựa chọn</span>
                                <div class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                    <i class="flex items-center fas fa-caret-down" aria-hidden="true"
                                        style="font-size: 11px;"></i>
                                </div>
                            </button>
                            <!-- Dropdown content -->
                            <ul class="absolute z-10 bg-white text-black shadow-md rounded w-full mt-1 hidden"
                                data-testid="dropdown-menu">
                                <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer"
                                    onclick="selectQuestionType('multiple-choice')">
                                    Nhiều lựa chọn
                                </li>
                                <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer"
                                    onclick="selectQuestionType('true-false')">
                                    True/False
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown flex relative rounded">Add Question to
                        {{ $quiz->title }}
                    </div>
                    <div class="ml-auto flex items-center gap-2">
                        <!-- Points Dropdown -->
                        <div class="field relative points-dropdown flex-grow flex-shrink-0 max-w-55" tabindex="81">
                            <div class="dropdown flex relative rounded">
                                <button data-testid="dropdown" type="button" aria-haspopup="listbox"
                                    aria-labelledby="points-dropdown" aria-expanded="false"
                                    class="w-full flex rounded font-semibold items-center whitespace-nowrap py-2 pl-2 pr-1 text-xs h-8 cursor-pointer bg-dark-5% text-dark-2 hover:text-dark-3"
                                    onclick="toggleDropdown(event)">
                                    <span data-testid="point-icon-container"
                                        class="point-icon relative flex items-center justify-center p-1 bg-brand-b text-light rounded-sm mr-2">
                                        <i class="flex items-center far fa-star" data-testid="point-icon"
                                            style="font-size: 10px;"></i>
                                    </span>
                                    <span data-testid="points-dropdown-title">{{ $question->points }}</span>
                                    <div class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                        <i class="flex items-center fas fa-caret-down" aria-hidden="true"
                                            style="font-size: 11px;"></i>
                                    </div>
                                </button>
                                <ul class="absolute z-10 bg-white text-black shadow-md rounded w-full mt-1 hidden"
                                    data-testid="points-dropdown-menu">
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(1)">1
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(2)">2
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(3)">3
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(4)">4
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(5)">5
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(6)">6
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(7)">7
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(8)">8
                                        điểm</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectPointValue(9)">9
                                        điểm</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Time Dropdown -->
                        <div class="field relative time-dropdown flex-grow flex-shrink-0 max-w-55" tabindex="82">
                            <div class="dropdown flex relative rounded">
                                <button data-testid="dropdown" type="button" aria-haspopup="listbox"
                                    aria-labelledby="time-dropdown" aria-expanded="false"
                                    class="w-full flex rounded font-semibold items-center whitespace-nowrap py-2 pl-2 pr-1 text-xs h-8 cursor-pointer bg-dark-5% text-dark-2 hover:text-dark-3"
                                    onclick="toggleDropdown(event)">
                                    <i class="flex items-center fal fa-clock mr-2" style="font-size: 11px;"></i>
                                    <span data-testid="time-dropdown-title">{{ $question->time }}</span>
                                    <div class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                        <i class="flex items-center fas fa-caret-down" aria-hidden="true"
                                            style="font-size: 11px;"></i>
                                    </div>
                                </button>
                                <ul class="absolute z-10 bg-white text-black shadow-md rounded w-full mt-1 hidden"
                                    data-testid="time-dropdown-menu">
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(15)">
                                        15
                                        giây</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(30)">
                                        30
                                        giây</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(45)">
                                        45
                                        giây</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(60)">1
                                        phút</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(120)">
                                        2
                                        phút</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(180)">
                                        3
                                        phút</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(240)">
                                        4
                                        phút</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(300)">
                                        5
                                        phút</li>
                                    <li class="py-2 px-4 hover:bg-gray-200 cursor-pointer" onclick="selectTimeValue(600)">
                                        10
                                        phút</li>
                                </ul>
                            </div>
                        </div>


                        <!-- Save Button -->
                        <button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-8 bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded relative min-w-max"
                            aria-label="Save question" type="button" translate="no" data-testid="save-question-button">
                            <i class="flex items-center fas fa-floppy-disk mr-2" style="font-size: 11px;"></i>
                            <span class="title" title="Save question">Save question</span>
                        </button>
                    </div>
                </header><!---->
                <main id="question-editor-main" class="">
                    <header id="question-editor-main-header" data-testid="editor-toolbar"
                        class="flex items-center bg-light-2 col-span-full h-12">
                        <section data-testid="font-toolbar" class="flex items-center gap-x-2 relative pl-4"><!---->
                            <div class="v-popper v-popper--theme-menu v-popper--theme-dropdown"><button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                    aria-label="" type="button" translate="no" data-testid="font-color-button"
                                    style="border-bottom: 2px solid; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><i
                                        class="flex items-center fas fa-font text-dark-3"
                                        style="font-size: 11px;"></i><!----><span class="title"
                                        title=""></span><!----><!----><!----><!----><!----><!----></button></div>
                            <!----><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-bold-button"><i
                                    class="flex items-center fas fa-bold text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-italic-button"><i
                                    class="flex items-center fas fa-italic text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-underline-button"><i
                                    class="flex items-center fas fa-underline text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-strike-button"><i
                                    class="flex items-center fas fa-strikethrough"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-superscript-button"><i
                                    class="flex items-center fas fa-superscript text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-subscript-button"><i
                                    class="flex items-center fas fa-subscript text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max v-popper--has-tooltip"
                                aria-label="" type="button" translate="no" data-testid="font-symbol-button"><i
                                    class="flex items-center fas fa-sigma text-dark-3"
                                    style="font-size: 11px;"></i><!----><span class="title"
                                    title=""></span><!----><!----><!----><!----><!----><!----></button><!---->
                            <div class="h-8 border rounded border-dark-10%"></div>
                        </section>
                        <button
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max mx-2 mx-2"
                            aria-label="Chèn kí hiệu toán học" type="button" translate="no"
                            data-testid="generic-button"><i class="flex items-center fas fa-function mr-2 text-dark-3"
                                style="font-size: 11px;"></i><!----><span class="title text-dark-3"
                                title="Chèn kí hiệu toán học">Chèn kí hiệu toán
                                học</span><!----><!----><!----><!----><!----><!----></button><button
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 text-dark-2 hover:bg-lilac-faded hover:text-lilac rounded only-text relative min-w-max ml-auto mr-4 text-dark-3 ml-auto mr-4 text-dark-3"
                            aria-label="Thêm giải thích cho đáp án" type="button" translate="no"
                            data-testid="generic-button"><i class="flex items-center far fa-lightbulb mr-2"
                                style="font-size: 11px;"></i><!----><span class="title"
                                title="Thêm giải thích cho đáp án">Thêm giải thích cho
                                đáp án</span><!----><!----><!----><!----><!----><!----></button>
                    </header>
                    <form
                        action="{{ route('quizzes.questions.update', ['quiz' => $quiz->id, 'question' => $question->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <section id="question-editor-content"
                            class="bg-dark-6 py-4 col-span-full px-8 overflow-auto flex items-center justify-center">
                            <div id="question-editor-content-inner" class="self-center"
                                style="width: 1210px; height:560px">
                                <div
                                    class="flex justify-center items-center flex-col gap-2 col-start-2 col-span-10 !aspect-video">
                                    <!----><!---->
                                    <div
                                        class="w-full h-full md:rounded-2xl flex-0 overflow-hidden question-editor-desktop bg-purple">
                                        <section class="h-full p-4">
                                            <div data-testid="mcq-editor"
                                                class="h-full flex flex-col md:grid md:grid-rows-2">
                                                <div class="query-editor relative text-center flex flex-col gap-4 justify-center items-center md:flex-grow md:flex-row md:h-auto mb-4"
                                                    data-testid="query-editor"><!---->
                                                    <div id="query-editor-tiptap-wrapper"
                                                        class="rounded-lg h-52 md:h-full text-light-3 relative flex flex-col border-light-20% w-full border-1">
                                                        <div id="query-editor-tiptap-controls"
                                                            class="flex justify-between p-2">
                                                            <div class="query-action-center flex gap-2"><button
                                                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max v-popper--has-tooltip"
                                                                    aria-label="" type="button" translate="no"
                                                                    data-testid="media-image-button"><i
                                                                        class="flex items-center fas fa-image"
                                                                        style="font-size: 12px;"></i><!----><span
                                                                        class="title"
                                                                        title=""></span><!----><!----><!----><!----><!----><!----></button>
                                                                <div class="flex relative"><button
                                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max v-popper--has-tooltip"
                                                                        aria-label="" type="button" translate="no"
                                                                        data-testid="media-audio-button"><i
                                                                            class="flex items-center far fa-microphone-lines"
                                                                            style="font-size: 12px;"></i><!----><span
                                                                            class="title"
                                                                            title=""></span><!----><!----><!----><!----><!----><!----></button><!---->
                                                                </div>
                                                                <div class="flex relative"><button
                                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max v-popper--has-tooltip"
                                                                        aria-label="" type="button" translate="no"
                                                                        data-testid="media-video-button"><i
                                                                            class="flex items-center far fa-video"
                                                                            style="font-size: 12px;"></i><!----><span
                                                                            class="title"
                                                                            title=""></span><!----><!----><!----><!----><!----><!----></button><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                        <div class="tiptap-mini flex flex-col justify-center relative h-full max-h-full overflow-y-auto w-full word-wrap-break-word px-2"
                                                            data-testid="query-editor-tiptap"
                                                            style="--placeholder-color: rgba(255, 255, 255, 0.66); font-size: 20px;"
                                                            onclick="focusOnContentEditable(this)">
                                                            <div class="question-container">
                                                                <div id="66cedad1a5ddd73aad56ae28" class=""
                                                                    data-testid="tiptap-mini-editor-content">
                                                                    <div contenteditable="true" translate="no"
                                                                        class="tiptap ProseMirror" tabindex="0">
                                                                        <p name="question_text" id="focus-target" tabindex
                                                                            data-placeholder="Nhập câu hỏi vào đây"
                                                                            class="question_text is-empty is-editor-empty">
                                                                            {{ $question->question_text }}

                                                                            <br class="ProseMirror-trailingBreak">
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col md:flex-row w-full h-full gap-2">
                                                    <div class="grid md:grid-flow-col md:auto-cols-fr w-full h-full gap-2">
                                                        @foreach ($question->options as $index => $option)
                                                            <div class="question-option relative rounded-lg h-full max-h-full overflow-y-auto overflow-x-hidden flex flex-row-reverse md:flex-col bg-brand-a p-1 gap-2 group"
                                                                data-testid="question-option-1">
                                                                <div class="action-center flex flex-col md:flex-row gap-2"
                                                                    style="flex: 0 0 auto;">
                                                                    <button
                                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max flex-shrink-0 v-popper--has-tooltip"
                                                                        aria-label="Xóa phương án" type="button"
                                                                        translate="no" data-testid="delete-option-button"
                                                                        tabindex="-1"><i
                                                                            class="flex items-center fas fa-trash-alt"
                                                                            style="font-size: 11px;"></i><!----><span
                                                                            class="title"
                                                                            title=""></span><!----><!----><!----><!----><!----><!---->
                                                                    </button>
                                                                    <button
                                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max flex-shrink-0 v-popper--has-tooltip"
                                                                        aria-label="Tải hình ảnh lên" type="button"
                                                                        translate="no" data-testid="upload-image-button"
                                                                        tabindex="-1"><i
                                                                            class="flex items-center fas fa-image"
                                                                            style="font-size: 11px;"></i><!----><span
                                                                            class="title"
                                                                            title=""></span><!----><!----><!----><!----><!----><!---->
                                                                    </button><!----><!---->
                                                                    <button
                                                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-6 h-6 bg-dark-50% text-light hover:bg-dark-60% active:bg-dark-50% rounded dark relative min-w-max border-2 text-light-50% ml-auto rounded-full border-light v-popper--has-tooltip"
                                                                        aria-label="Mark as correct answer" type="button"
                                                                        translate="no"
                                                                        data-testid="mcq-editor-mark-answer-0-button"
                                                                        onclick="toggleAnswer(this)" tabindex="-1"
                                                                        theme="dark">
                                                                        <i class="flex items-center fas fa-check"
                                                                            style="font-size: 11px;"></i>
                                                                        <span class="title"
                                                                            title="Mark as answer"></span>
                                                                    </button>

                                                                </div>
                                                                <div class="tiptap-mini flex flex-col justify-center relative p-2 text-light-3 text-center rounded text-lg overflow-y-auto h-full w-full max-h-full break-word"
                                                                    data-testid="question-option-text"
                                                                    onclick="focusOnContentEditable(this)"
                                                                    oninput="checkContent(this)"
                                                                    style="--placeholder-color: rgba(255,255,255,0.66); font-size: 20px;">
                                                                    <!---->
                                                                    <div id="66cedad0a5ddd73aad56ae12" class=""
                                                                        data-testid="tiptap-mini-editor-content">
                                                                        <div contenteditable="true" translate="no"
                                                                            class="tiptap ProseMirror" tabindex="0">
                                                                            <p data-placeholder="Nhập tùy chọn trả lời ở đây"
                                                                                class="is-empty is-editor-empty">
                                                                                {{ $option->option_text }}
                                                                                <br class="ProseMirror-trailingBreak">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="flex items-center"><button
                                                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded relative min-w-max v-popper--has-tooltip"
                                                            aria-label="" type="button" translate="no"
                                                            data-testid="add-option-button"><i
                                                                class="flex items-center fas fa-plus"
                                                                style="font-size: 11px;"></i><!----><span class="title"
                                                                title=""></span><!----><!----><!----><!----><!----><!----></button>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="question_type" id="question_type"
                                                    value="multiple-choice">
                                                <input type="hidden" id="selected_point" name="selected_point"
                                                    value="1">
                                                <input type="hidden" id="selected_time" name="selected_time"
                                                    value="30">
                                                <input type="hidden" id="question_text" name="question_text"
                                                    value="{{ $question->question_text }}">
                                                @foreach ($question->options as $index => $option)
                                                    <input type="hidden" name="option_{{ $index + 1 }}"
                                                        id="option_{{ $index + 1 }}"
                                                        value="{{ $option->option_text }}">
                                                @endforeach
                                                <input type="hidden" id="correct_option" name="correct_option"
                                                    value="{{ $question->correct_answer }}">
                                                <input type="hidden" id="quiz_id" name="quiz_id"
                                                    value="{{ $quiz->id }}">
                                                <input type="hidden" id="question_id" name="question_id"
                                                    value="{{ $question->id }}">
                                                <span
                                                    class="bg-dark-50% p-0.5 text-light-66% flex md:w-fit rounded gap-0.5 w-full my-2"
                                                    data-testid="mcq-editor-question-type-toggle">
                                                    <button
                                                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 transparent bg-light-20% text-light-3 hover:bg-light-33% active:bg-light-10% rounded transparent relative min-w-max transform flex-1 transform flex-1"
                                                        aria-label="Câu trả lời đúng duy nhất" type="submit"
                                                        translate="no"
                                                        data-testid="toggle-button-group-btn-1-button"><!----><!----><span
                                                            class="title" title="Câu trả lời đúng duy nhất">Save
                                                            Question
                                                    </button>
                                                </span><!----><!----><!----><!----><!----><!---->
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </main>
            </div>
        </div>
    </div>
    <script>
        // document.querySelectorAll('.dropdown').forEach(dropdown => {
        //     const button = dropdown.querySelector('button');
        //     const menu = dropdown.querySelector('.dropdown-menu');
        //     const title = button.querySelector('[data-testid="dropdown-title"]');

        //     button.addEventListener('click', () => {
        //         menu.classList.toggle('hidden');
        //         button.setAttribute('aria-expanded', menu.classList.contains('hidden') ? 'false' : 'true');
        //     });

        //     menu.querySelectorAll('.dropdown-item').forEach(item => {
        //         item.addEventListener('click', () => {
        //             const value = item.getAttribute('data-value');
        //             title.textContent = item.textContent;
        //             menu.classList.add('hidden');
        //             button.setAttribute('aria-expanded', 'false');

        //             console.log(`Selected value: ${value}`);
        //         });
        //     });
        // });

        function focusOnContentEditable(element) {
            const contentEditableDiv = element.querySelector('[contenteditable="true"]');
            if (contentEditableDiv) {
                contentEditableDiv.focus();
            }
        }

        function checkContent(contentEditableDiv) {
            const paragraph = contentEditableDiv.querySelector('p');
            // Check if the button exists in the DOM and assign it to markButton
            const markButton = document.querySelector('.action-center button');

            if (paragraph.textContent.trim() !== '') {
                if (markButton) {
                    markButton.removeAttribute('tabindex');
                    markButton.classList.remove('disabled');
                    markButton.disabled = false;
                    if (markButton.classList.contains('active')) {
                        markButton.setAttribute('aria-checked', 'true');
                    }
                }
            } else {
                if (markButton) {
                    markButton.setAttribute('tabindex', '-1');
                    markButton.classList.add('disabled');
                    markButton.disabled = true;
                    markButton.setAttribute('aria-checked', 'false');
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const correctOptionInput = document.getElementById('correct_option');
            const correctOptionValue = correctOptionInput.value;

            if (correctOptionValue) {
                // Get all the answer buttons
                const allButtons = document.querySelectorAll('[data-testid^="mcq-editor-mark-answer"]');

                // Uncheck all buttons first (in case one is already checked)
                allButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-checked', 'false');
                });

                // Check the button that corresponds to the correct option
                const correctButtonIndex = parseInt(correctOptionValue, 10) - 1; // Convert to zero-based index
                const correctButton = allButtons[correctButtonIndex];

                if (correctButton) {
                    correctButton.classList.add('active');
                    correctButton.setAttribute('aria-checked', 'true');
                }
            }
        });

        function toggleAnswer(button) {
            const contentEditableDiv = button.closest('.action-center').nextElementSibling;
            const paragraph = contentEditableDiv.querySelector('p');
            const correctOptionInput = document.getElementById('correct_option');

            if (paragraph.textContent.trim() === '') {
                alert("Thêm văn bản để check thành đáp án đúng");
                return;
            }

            // Uncheck any other checked button
            const allButtons = document.querySelectorAll('[data-testid^="mcq-editor-mark-answer"]');
            allButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.setAttribute('aria-checked', 'false');
            });

            // Mark this button as active
            button.classList.add('active');
            button.setAttribute('aria-checked', 'true');

            const optionIndex = Array.from(allButtons).indexOf(button) + 1;
            correctOptionInput.value = optionIndex;
        }


        function selectQuestionType(type) {
            const dropdownTitle = document.querySelector('[data-testid="dropdown-title"]');
            const dropdownIcon = document.querySelector('[data-testid="question-type-icon"]');
            const questionTypeInput = document.getElementById('question_type');

            if (type === 'multiple-choice') {
                dropdownTitle.textContent = 'Nhiều lựa chọn';
                dropdownIcon.classList.remove('fas', 'fa-toggle-on');
                dropdownIcon.classList.add('far', 'fa-check-square');
                questionTypeInput.value = 'multiple-choice';
            } else if (type === 'true-false') {
                dropdownTitle.textContent = 'True/False';
                dropdownIcon.classList.remove('far', 'fa-check-square');
                dropdownIcon.classList.add('fas', 'fa-toggle-on');
                questionTypeInput.value = 'true-false';
            }
            // Close the dropdown after selection
            document.querySelector('[data-testid="dropdown-menu"]').classList.add('hidden');
        }

        function selectPointValue(value) {
            const pointsDropdownTitle = document.querySelector('[data-testid="point-icon-container"] + span');
            const pointsDropdownMenu = document.querySelector('[data-testid="points-dropdown-menu"]');
            const pointInput = document.getElementById('selected_point'); // Sửa thành 'selected_point'

            pointsDropdownTitle.textContent = `${value} điểm`;
            pointInput.value = value; // Gán giá trị đúng
            pointsDropdownMenu.classList.add('hidden'); // Ẩn menu sau khi chọn
        }

        function selectTimeValue(value) {
            const timeDropdownTitle = document.querySelector('[data-testid="time-dropdown-title"]');
            const timeDropdownMenu = document.querySelector('[data-testid="time-dropdown-menu"]');
            const timeInput = document.getElementById('selected_time'); // Sửa thành 'selected_time'

            timeDropdownTitle.textContent = `${value} giây`;
            timeInput.value = value; // Gán giá trị đúng
            timeDropdownMenu.classList.add('hidden'); // Ẩn menu sau khi chọn
        }

        function toggleDropdown(event) {
            const dropdownMenu = event.currentTarget.nextElementSibling; // Lấy phần tử menu kế tiếp
            const isHidden = dropdownMenu.classList.contains('hidden'); // Kiểm tra xem menu có đang bị ẩn không

            // Đóng tất cả các dropdown khác nếu đang mở
            document.querySelectorAll('ul[data-testid$="-dropdown-menu"]').forEach(menu => {
                menu.classList.add('hidden');
            });

            // Hiển thị/Ẩn menu được nhấp vào
            if (isHidden) {
                dropdownMenu.classList.remove('hidden'); // Hiển thị
            } else {
                dropdownMenu.classList.add('hidden'); // Ẩn nếu đã hiển thị
            }
        }

        // Toggle dropdown visibility
        document.querySelectorAll('[data-testid="dropdown"]').forEach(button => {
            button.addEventListener('click', () => {
                const dropdownMenu = button.nextElementSibling;
                dropdownMenu.classList.toggle('hidden');
            });
        });

        // Update hidden inputs when user types in contenteditable divs
        // document.querySelectorAll('.tiptap-mini [contenteditable="true"]').forEach((editableElement, index) => {
        //     editableElement.addEventListener('input', function() {
        //         var optionId = 'option_' + (index + 1);
        //         var inputElement = document.getElementById(optionId);
        //         if (inputElement) {
        //             inputElement.value = this.innerText.trim();
        //         }
        //     });
        // });

        document.querySelectorAll('.question-option [contenteditable="true"]').forEach((editableElement, index) => {
            editableElement.addEventListener('input', function() {
                var optionId = 'option_' + (index + 1);
                var inputElement = document.getElementById(optionId);
                if (inputElement) {
                    inputElement.value = this.innerText.trim();
                }
            });
        });

        document.querySelector('[data-testid="tiptap-mini-editor-content"] [contenteditable="true"]').addEventListener(
            'input',
            function() {
                var questionTextInput = document.getElementById('question_text');
                if (questionTextInput) {
                    questionTextInput.value = this.innerText.trim();
                }
            });
        document.getElementById('focus-target').addEventListener('paste', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi dán mặc định

            // Lấy dữ liệu văn bản từ clipboard
            let paste = (event.clipboardData || window.clipboardData).getData('text/plain');

            // Chèn văn bản vào thẻ <p>
            document.getElementById('focus-target').textContent = paste;
        });

        // Select all elements with the class 'question-option'
        document.querySelectorAll('.question-option').forEach(option => {
            option.addEventListener('paste', function(event) {
                event.preventDefault(); 

                let paste = (event.clipboardData || window.clipboardData).getData('text/plain');

                let paragraphs = this.querySelectorAll('p');

                paragraphs.forEach(p => {
                    p.textContent = paste;
                });
            });
        });
    </script>
@endsection
@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
