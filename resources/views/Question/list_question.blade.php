@extends('layout.master')
@section('content')
    <div id="app" class="app-container quizizz-app-container">
        <div id="base-0" class="z-0 absolute w-screen h-screen">
            <!----><!---->
            <div id="quiz-editor" class="bg-light-1 h-screen max-h-screen overflow-y-auto scrollbar-hide relative"
                data-testid="quiz-editor">
                <header class="editor-header z-overlay sticky top-0 bg-light-3 shadow flex items-center p-3"
                    id="quiz-editor-header"><button
                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                        aria-label="" type="button" translate="no" data-testid="generic-button"><i
                            class="flex items-center fas fa-chevron-left" style="font-size: 12px;"></i><!----><span
                            class="title" title=""></span><!----><!----><!----><!----><!----><!----></button><button
                        type="button" data-testid="edit-name-button"
                        class="min-w-52 w-fit px-2 py-1 h-full text-sm hover:bg-dark-5% font-semibold text-dark-2 text-left rounded whitespace-nowrap">Bài
                        Quiz không có tiêu đề</button>
                    <div class="action-center ml-auto flex items-center gap-2"><button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                            aria-label="Cài đặt Quiz" type="button" translate="no"
                            data-testid="edit-quiz-settings-button" icononly=""><i class="flex items-center fas fa-cog"
                                style="font-size: 11px;"></i><!----><span class="title"
                                title=""></span><!----><!----><!----><!----><!----><!----></button><button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max v-popper--has-tooltip"
                            aria-label="Xem trước Quiz" type="button" translate="no" data-testid="preview-quiz-button"
                            icononly=""><i class="flex items-center fas fa-play"
                                style="font-size: 11px;"></i><!----><span class="title"
                                title=""></span><!----><!----><!----><!----><!----><!----></button>
                        <button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-8 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max v-popper--has-tooltip"
                            aria-label="Xuất bản bài kiểm tra" type="button" translate="no"
                            data-testid="publish-quiz-button" id="publish-quiz-button" data-quiz-id="{{ $quiz->id }}">
                            <i class="flex items-center fas fa-floppy-disk mr-2" style="font-size: 11px;"></i>
                            <span class="title" title="Xuất bản">Xuất bản</span>
                        </button>
                </header>
                <div class="simpler-quiz-wrapper mx-auto w-full max-w-320 grid grid-cols-12 gap-4 relative">
                    <main id="quiz-editor-content" data-testid="quiz-editor-content" class="editor-content col-span-full">
                        <section class="questions-section py-4 col-span-9" data-testid="questions-section">
                            <div class="flex transition-all duration-200 flex-col justify-center gap-2 h-fit bg-light-3 rounded-lg border border-dark-6 p-4 editor-search z-100"
                                data-testid="search-bar-v2-container" id="editor-search">
                                <div><span class="font-semibold">Tìm kiếm câu hỏi từ Thư viện Quizizz</span></div><!---->
                                <div class="flex items-center justify-between rounded border border-dark-6 p-1 pl-3">
                                    <div class="relative w-full"><!---->
                                        <div class="relative"><!----><input id="" data-hj-allow=""
                                                data-testid="page-teleport-search-input"
                                                aria-describedby="input-error-message" aria-invalid="false"
                                                aria-required="false" type="text" name=""
                                                class="focus:outline-none h-10 w-full py-2 text-sm placeholder-sm border-0 bg-transparent shadow-none outline-none !p-0 remove-number-selector pl-3 border border-solid border-dark-6 rounded bg-light-3 text-dark-2  border-dark-4 placeholder-dark-5 pr-3 pr-2"
                                                placeholder="Nhập tên chủ đề " autocomplete="off" lang=""
                                                maxlength="-1" tabindex="0"
                                                readonly=""><!----><!----><!----><!----><!----></div>
                                        <div class="flex pt-1 text-xs font-semibold text-red" aria-live="assertive"
                                            style="display: none;"><span
                                                class="w-4 h-4 flex items-center justify-center mr-0.5"><i
                                                    class="flex items-center far fa-exclamation-circle"
                                                    style="font-size: 11px;"></i></span><span id="input-error-message"
                                                data-testid="input-error-message"></span></div>
                                        <!---->
                                    </div>
                                    <section class="flex items-center gap-1"><button
                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded border-1 border-dark-6 other relative min-w-max"
                                            aria-label="Tìm kiếm câu hỏi" type="button" translate="no"
                                            data-testid="search-question-bank-button"><i
                                                class="flex items-center far fa-search mr-2"
                                                style="font-size: 12px;"></i><!----><span class="title"
                                                title="Tìm kiếm câu hỏi">Tìm kiếm câu
                                                hỏi</span><!----><!----><!----><!----><!----><!----></button></section>
                                </div>
                            </div>
                            <div class="flex justify-between py-4 items-center"><span class="text-dark-3 text-lg"
                                    data-testid="quiz-info-section"><span class="font-bold"><span
                                            data-testid="left-sidebar-questions-count">1</span> câu hỏi</span><span
                                        class="text-ds-dark-200">&nbsp; (1 điểm) </span></span><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded border border-lilac-light secondary relative min-w-max"
                                    aria-label="Thêm câu hỏi" type="button" translate="no"
                                    data-testid="create-new-question-button"><i class="flex items-center fas fa-plus mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title"
                                        title="Thêm câu hỏi">Thêm
                                        câu
                                        hỏi</span><!----><!----><!----><!----><!----><!----></button></div>
                            <div id="question-banner"
                                class="question-banner bg-light-1 grid items-center w-full gap-2 text-left text-sm col-span-full">
                                <!----><!----><!---->
                            </div><!----><!---->
                            <div data-testid="quiz-editor-question-list"
                                class="question-list grid col-span-full grid-cols-12">
                                @if ($questions && $questions->count())
                                    @foreach ($questions as $question)
                                        <div class="question-details-card flex flex-col group z-12 h-fit col-span-full"
                                            data-testid="question-details-card-0" data-draggable="true">
                                            <div class="bg-ds-light-500 rounded-none md-xl:rounded-lg p-4 border-1 border-ds-light-200 shadow-sm w-full"
                                                questionid="66ce7ce5e4f49601a6e15c01"
                                                data-testid="question-details-card-top-0" questiontopics=""
                                                aria-label="Question 1" selectedtime="20000" selectedcorrectpoints="1"
                                                handleclass="my-handle cursor-grab">
                                                <div class="flex justify-between h-6 items-center mb-4">
                                                    <div class="flex gap-2"><button
                                                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-6 h-6 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3  rounded border border-dark-6 bg-light-3 !cursor-grab other relative min-w-max grab-handle grabbable ml-auto flex-shrink-0 grab-handle grabbable ml-auto flex-shrink-0"
                                                            aria-label="card-grab-handle-0" type="button" translate="no"
                                                            data-testid="question-details-card-grab-handle-0-button"
                                                            tabindex="-1"><i
                                                                class="flex items-center fas fa-grip-dots-vertical"
                                                                style="font-size: 11px;"></i><!----><span class="title"
                                                                title=""></span><!----><!----><!----><!----><!----><!----></button><span
                                                            class="inline-flex items-center min-w-max border border-dark-6 rounded">
                                                            <div translate="no"
                                                                class="lozenge items-center inline-flex text-xs font-semibold py-0.5 rounded px-1.5 text-dark-3 px-2"
                                                                data-testid="question-type-lozenge"><span
                                                                    class="mr-2"><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center text-dark-3"><i
                                                                            class="flex items-center far fa-check"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></span><!----><span
                                                                    class=""> {{ $loop->index + 1 }}.
                                                                    {{ $question->question_type }}</span></div>
                                                        </span><!---->
                                                        <div
                                                            class="field relative min-w-18 w-25 hover:bg-ds-light-300 hover:rounded text-dark-3">
                                                            <div id="2"
                                                                class="chromium-scroll-fix-sr-only label sr-only">Timer
                                                                (with selected
                                                                value)
                                                                20 giây</div>
                                                            <div class="dropdown flex relative rounded"><button
                                                                    data-testid="question-timer-dropdown" type="button"
                                                                    aria-haspopup="listbox" aria-labelledby="2 3"
                                                                    aria-expanded="false"
                                                                    class="w-full flex rounded font-semibold items-center whitespace-nowrap py-1 pl-2 pr-1 text-xs h-6 cursor-pointer bg-light-3 text-dark-3 border border-dark-6 hover:bg-light-5%"><!----><!----><span
                                                                        data-testid="question-timer-dropdown-title"
                                                                        class="">20 giây</span>
                                                                    <div
                                                                        class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                                        <!----><i
                                                                            class="flex items-center fas fa-caret-down"
                                                                            aria-hidden="true"
                                                                            style="font-size: 11px;"></i>
                                                                    </div>
                                                                    <!---->
                                                                </button><!----></div>
                                                        </div>
                                                        <div class="field relative min-w-18 w-25 hover:bg-ds-light-300 hover:rounded text-dark-3"
                                                            xsdropdowntextsize="true">
                                                            <div id="5"
                                                                class="chromium-scroll-fix-sr-only label sr-only">Question
                                                                Points (with
                                                                selected value) 1 điểm</div>
                                                            <div class="dropdown flex relative rounded"><button
                                                                    data-testid="question-points-dropdown" type="button"
                                                                    aria-haspopup="listbox" aria-labelledby="5 6"
                                                                    aria-expanded="false"
                                                                    class="w-full flex rounded font-semibold items-center whitespace-nowrap py-1 pl-2 pr-1 text-xs h-6 cursor-pointer bg-light-3 text-dark-3 border border-dark-6 hover:bg-light-5%"><!----><!----><span
                                                                        data-testid="question-points-dropdown-title"
                                                                        class="">1
                                                                        điểm</span>
                                                                    <div
                                                                        class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                                        <!----><i
                                                                            class="flex items-center fas fa-caret-down"
                                                                            aria-hidden="true"
                                                                            style="font-size: 11px;"></i>
                                                                    </div>
                                                                    <!---->
                                                                </button><!----></div>
                                                        </div><!---->
                                                    </div>
                                                    <div
                                                        class="transform transition-transform origin-top flex gap-2 h-full">
                                                        <div
                                                            class="field relative flex justify-center items-center h-full font-semibold font-sans text-dark-3 py-1 border border-dark-6 rounded z-on-overlay hover:bg-ds-light-300">
                                                            <div id="8"
                                                                class="chromium-scroll-fix-sr-only label sr-only">Dropdown
                                                                (no selected
                                                                value)</div>
                                                            <div class="dropdown flex relative rounded"><button
                                                                    data-testid="question-ai-enhance-dropdown"
                                                                    type="button" aria-haspopup="listbox"
                                                                    aria-labelledby="8 9" aria-expanded="false"
                                                                    class="w-full flex rounded font-semibold items-center whitespace-nowrap py-2 pl-2 pr-1 text-xs h-8 cursor-pointer"><i
                                                                        class="flex items-center fas fa-sparkles h-4 w-4 mr-1"
                                                                        style="font-size: 12px;"></i><!----><span
                                                                        data-testid="question-ai-enhance-dropdown-title"
                                                                        class="text-xs text-dark-3">trí tuệ nhân tạo</span>
                                                                    <div
                                                                        class="w-4 h-4 items-center justify-center flex relative ml-auto">
                                                                        <!----><i
                                                                            class="flex items-center fas fa-caret-down"
                                                                            aria-hidden="true"
                                                                            style="font-size: 11px;"></i>
                                                                    </div>
                                                                    <!---->
                                                                </button><!----></div>
                                                        </div><!---->
                                                        <button
                                                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded hover:!bg-ds-light-300 white relative min-w-max border-1 p-0 !w-6 !h-6 v-popper--has-tooltip"
                                                            aria-label="Nhân đôi câu hỏi này" type="button"
                                                            translate="no" data-testid="duplicate-question-button"><i
                                                                class="flex items-center far fa-copy text-dark-3"
                                                                style="font-size: 11px;"></i><!----><span class="title"
                                                                title=""></span><!----><!----><!----><!----><!----><!----></button><button
                                                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded hover:!bg-ds-light-300 white relative min-w-max border-1 p-0 !w-6 !h-6 v-popper--has-tooltip"
                                                            aria-label="Đánh dấu câu hỏi này" type="button"
                                                            translate="no" data-testid="tag-question-button"><i
                                                                class="flex items-center far fa-tags text-dark-3"
                                                                style="font-size: 11px;"></i><!----><span class="title"
                                                                title=""></span><!----><!----><!----><!----><!----><!----></button>
                                                        <a
                                                            href="{{ route('questions.edit', ['quiz' => $quiz->id, 'question' => $question->id]) }}">
                                                            <button
                                                                class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-full bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded hover:!bg-ds-light-300 text-dark-3 white relative min-w-max border-1 !py-0 !h-6 v-popper--has-tooltip"
                                                                aria-label="Chỉnh sửa câu hỏi này" type="button"
                                                                translate="no"
                                                                data-testid="question-details-edit-0-button">
                                                                <i class="flex items-center far fa-pen mr-2 text-dark-3"
                                                                    style="font-size: 11px;"></i>
                                                                <span class="title" title="Chỉnh sửa">Chỉnh sửa</span>
                                                            </button>
                                                        </a>

                                                        <div class="v-popper v-popper--theme-dropdown p-type-danger relative z-10"
                                                            type="danger-popper"
                                                            datatestid="question-details-delete-0-popover">
                                                            <form
                                                                action="{{ route('quizzes.questions.destroy', [$quiz->id, $question->id]) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this question?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center w-7 h-7 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded hover:!bg-ds-light-300 white relative min-w-max border-1 p-0 !w-6 !h-6 v-popper--has-tooltip">
                                                                    <i class="flex items-center far fa-trash-alt text-dark-3"
                                                                        style="font-size: 11px;"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col">
                                                        <div class="question-content-card flex gap-2 flex-col-reverse w-full"
                                                            data-testid="qdc-inner-card-question"><!----><!---->
                                                            <div class="question-text-wrapper text-sm"><!---->
                                                                <div>
                                                                    <p>{{ $question->question_text }}</p>
                                                                </div><!---->
                                                            </div>
                                                        </div>
                                                        <div class="grid gap-1 qdc-inner-card-question-answer"
                                                            data-testid="qdc-inner-card-question-answer">
                                                            <div class="text-ds-dark-200 font-semibold text-xs leading-4">
                                                                Lựa chọn trả
                                                                lời</div>
                                                            <div class="grid grid-cols-2 gap-y-2 gap-x-1">
                                                                @foreach ($question->options as $option)
                                                                    <div class="flex gap-0.5 items-start">
                                                                        <i class="flex items-center fas {{ $option->correct ? 'fa-check text-ds-success-500' : 'fa-times text-ds-fail-500' }} h-5 w-5 flex justify-center items-center flex-shrink-0"
                                                                            style="font-size: 12px;"></i><!---->
                                                                        <div><!---->
                                                                            <p
                                                                                class="grid-item text-ds-dark-400 text-sm leading-5">
                                                                            <p>{{ $option->option_text }}</p>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                </div>
            @else
                <p>No questions available.</p>
                @endif
                </section>
                <div class="add-question-actions z-10 transition-all duration-400 block !py-2 py-1">
                    <div class="flex items-center gap-3 justify-center" data-testid="add-question-toolbar-0">
                        <a href="{{ route('questions.create', ['id' => $quiz->id]) }}"
                            class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1.5 text-xs font-semibold h-8 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded border border-lilac-light secondary relative min-w-max"
                            aria-label="Thêm câu hỏi" data-testid="add-question-0-from-toolbar-button">
                            <i class="flex items-center far fa-plus mr-2" style="font-size: 11px;"></i>
                            <span class="title" title="Thêm câu hỏi">Thêm câu hỏi</span>
                        </a>
                    </div>
                </div>

                </main><!----><!---->
            </div>
        </div>
    </div>
@endsection
@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const publishButton = document.getElementById('publish-quiz-button');

        if (publishButton) {
            publishButton.addEventListener('click', function() {
                const quizId = this.getAttribute('data-quiz-id');

                if (confirm('Bạn có chắc chắn muốn xuất bản bài kiểm tra này không?')) {
                    fetch(`/quizzes/${quizId}/publish`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({})
                        }).then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Quiz đã được xuất bản.');
                            }
                        }).catch(error => {
                            console.error('Error publishing quiz:', error);
                            alert('Có lỗi xảy ra. Vui lòng thử lại.');
                        });
                }
            });
        }
    });
</script>
