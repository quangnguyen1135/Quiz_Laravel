@extends('layout.master')
@section('content')
    <div class="w-full h-full box-border z-on-overlay bg-ds-light-400 grid grid-rows-[auto_1fr] max-h-screen">
        <div class="h-14 border border-ds-dark-500-20 flex flex-row gap-2 items-center px-4 py-3 bg-light-3 w-full">
            <div class="border border-ds-dark-500-20 h-8 w-8 rounded-md flex items-center justify-center cursor-pointer"><i
                    class="flex items-center fas fa-chevron-left" style="font-size: 14px;"></i></div><span
                class="text-ds-dark-200 font-semibold">Tạo một hoạt động mới</span>
        </div>
        <div class="flex items-center justify-center flex-col gap-4 absolute w-full h-full"
            style="background-color: #F7F7F7; z-index: -9999"><span class="font-semibold text-ds-dark-500 text-2xl">Tạo một
                hoạt động mới</span>
            <div class="flex flex-row gap-4">
                <div class="w-80 h-70 flex flex-col items-center gap-6 cursor-pointer border border-ds-dark-500-20 rounded-lg hover:border-ds-lilac-500 hover:border-2 bg-ds-light-500 overflow-hidden"
                    data-testid="pre_made_questions"><img
                        src="https://cf.quizizz.com/CreateWithAIV2/Source%20abstractions-min.png" class="w-full">
                    <div class="flex flex-col gap-1"><span class="text-center font-semibold text-base">Nhập bảng tính/câu
                            hỏi</span><span class="text-sm font-normal text-ds-dark-200 text-center">từ tài liệu, biểu mẫu
                            google, bảng tính</span></div>
                </div>
                <div class="w-80 h-70 flex flex-col items-center gap-6 cursor-pointer border border-ds-dark-500-20 rounded-lg hover:border-ds-lilac-500 hover:border-2 bg-ds-light-500 overflow-hidden"
                    data-testid="start_from_scratch"><img
                        src="https://cf.quizizz.com/CreateWithAIV2/Source%20abstractions-2-min.png" class="w-full">
                    <div class="flex flex-col gap-1"><span class="text-center font-semibold text-base">Tạo từ
                            đầu</span><span class="text-sm font-normal text-ds-dark-200 text-center">từ tìm kiếm, các loại
                            câu hỏi</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 flex flex-row gap-4 absolute w-full h-full left-full">
        <div class="flex flex-col gap-4 rounded border border-ds-dark-500-20 min-w-72 h-full py-6 px-4 bg-light-3"><span
                class="font-semibold text-xl text-dark">Bắt đầu từ</span>
            <div class="flex flex-row gap-2 items-center rounded-lg p-2 cursor-pointer" data-testid="pre_made_questions">
                <div class="w-10 h-10 v-image"><img data-testid="" class="lazy-img rounded-inherit w-full h-full"
                        alt="Image" lazy="loaded" src="https://cf.quizizz.com/CreateWithAIV2/pre_made_questions.png">
                </div><span class="text-sm font-semibold">Nhập bảng tính</span>
            </div>
            <div class="flex flex-row gap-2 items-center rounded-lg p-2 cursor-pointer bg-ds-lilac-100"
                data-testid="start_from_scratch">
                <div class="w-10 h-10 v-image"><img data-testid="" class="lazy-img rounded-inherit w-full h-full"
                        alt="Image" lazy="loaded" src="https://cf.quizizz.com/CreateWithAIV2/create_from_scratch.png">
                </div><span class="text-sm font-semibold">Tạo từ đầu</span>
            </div>
        </div>
        <div class="grow relative h-full overflow-hidden w-full">
            <div class="flex flex-col relative h-full -top-[200%] transition-top w-full">
                <div class="h-full absolute w-full">
                    <div class="flex flex-col gap-3 relative h-full">
                        <div class="w-full h-14 rounded border border-ds-dark-500-20">
                            <div class="tabs flex relative h-[54px] items-center bg-light-3 rounded">
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4 text-lilac"
                                    data-testid="document"><i class="flex items-center fas fa-file mr-2"
                                        style="font-size: 20px;"></i><span>Tài liệu </span><!----></div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="text"><i class="flex items-center fas fa-align-left mr-2"
                                        style="font-size: 20px;"></i>
                                    <span>Dán câu hỏi</span><!---->
                                </div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="google_form"><i class="flex items-center fas fa-file-text mr-2"
                                        style="font-size: 20px;"></i>
                                    <span> Biểu mẫu Google</span><!---->
                                </div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="spreadsheet"><i class="flex items-center fas fa-table mr-2"
                                        style="font-size: 20px;"></i><span>Bảng tính</span><!----></div>
                                <div class="absolute bottom-0 transition-all duration-200 ease-in-out bg-lilac flex justify-center h-1"
                                    style="width: 253px; left: 0px;"><!----></div><!---->
                            </div>
                        </div><!---->
                        <div class="rounded h-fit overflow-scroll flex flex-col gap-3">
                            <div class="bg-light-3 p-8 border border-ds-dark-500-20 rounded">
                                <div class="font-semibold mb-6">Trích xuất câu hỏi từ bảng tính/ngân hàng câu hỏi</div>
                                <div class="w-full h-fit">
                                    <div class="border border-dashed border-ds-dark-500-40 flex flex-col items-center justify-center py-8 px-4 w-full h-fit relative rounded gap-3 min-h-80"
                                        data-testid="file-input">
                                        <div class="flex flex-col gap-4" style="display: none;">
                                            <div class="relative flex items-center justify-center w-full h-full">
                                                <div class="animate-spin absolute">
                                                    <div datatestid=""><i class="flex items-center far fa-sync"
                                                            style="font-size: 16px;"></i></div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-ds-dark-200">Đang tìm nạp tệp từ Google Drive</p>
                                        </div>
                                        <div class="flex flex-col items-center justify-center"><i
                                                class="flex items-center far fa-cloud-upload-alt text-ds-dark-100"
                                                style="font-size: 32px;"></i><span class="font-semibold">Kéo và thả
                                                bảng tính/ngân hàng câu hỏi</span>
                                            <div class="flex flex-row items-center gap-2">
                                                <div class="h-[1px] w-20 border border-ds-dark-500-20"></div><span
                                                    class="text-sm font-semibold">Hoặc</span>
                                                <div class="h-[1px] w-20 border border-ds-dark-500-20"></div>
                                            </div>
                                            <div class="flex flex-row gap-3"><input
                                                    data-testid="file-input-button-worksheet"
                                                    class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                                    type="file"
                                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.presentationml.slideshow,application/vnd.openxmlformats-officedocument.presentationml.presentation,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*"><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-6 py-2 text-lg font-semibold h-9 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max"
                                                    aria-label="Tải lên từ thiết bị" type="button" translate="no"
                                                    data-testid="generic-button"><i
                                                        class="flex items-center fas fa-display mr-2"
                                                        style="font-size: 14px;"></i><!----><span class="title"
                                                        title="Tải lên từ thiết bị">Tải lên từ thiết
                                                        bị</span><!----><!----><!----><!----><!----><!----></button><button
                                                    type="button"
                                                    class="flex items-center justify-center border rounded-lg border-dark-6 text-dark-2 p-3 !h-9 !bg-ds-lilac-500 !rounded-lg !border-none !px-4 flex-1 z-1"><i
                                                        class="flex items-center fab fa-google-drive text-ds-light-500 mr-2"
                                                        style="font-size: 16px;"></i><!----><span
                                                        class="text-lg font-semibold text-ds-light-500"><span>Nhập từ ổ
                                                            đĩa</span></span></button><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-6 py-2 text-lg font-semibold h-9 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max"
                                                    aria-label="Chụp ảnh" type="button" translate="no"
                                                    data-testid="generic-button"><i
                                                        class="flex items-center fas fa-camera mr-2"
                                                        style="font-size: 14px;"></i><!----><span class="title"
                                                        title="Chụp ảnh">Chụp
                                                        ảnh</span><!----><!----><!----><!----><!----><!----></button>
                                            </div>
                                            <div class="text-sm text-ds-dark-200 flex flex-col items-center mt-3">
                                                <span>Các định dạng được hỗ trợ: PDF, PPT, PPTX, DOC, DOCX, PNG,
                                                    JPG</span><span>Giới hạn kích thước tệp: tối đa 25 MB, không dài quá
                                                    30 trang.</span>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                                <div class="w-full flex flex-col">
                                    <div class="flex flex-row gap-1 items-center self-center mt-9"
                                        data-testid="powered-by-ai-component"><span
                                            class="text-sm font-semibold text-ds-dark-200">Được cung cấp bởi</span><img
                                            src="https://cf.quizizz.com/image/AI-wordmark%20(1).svg" alt="Quizizz AI"
                                            data-testid="quizizz-ai-image" class="mr-1.5" height="20" width="90">
                                    </div>
                                </div><!----><!---->
                            </div><!---->
                            <div class="w-full flex flex-row justify-between items-center bg-lilac-faded px-4 py-3 rounded border border-ds-lilac-500-40"
                                data-testid="download-q-app-banner">
                                <div class="flex flex-row gap-1 items-center"><img
                                        src="https://cf.quizizz.com/CreateWithAIV2/Mobile.png" class="w-8 h-8"
                                        width="32" height="32"><span
                                        class="font-semibold text-ds-lilac-600 ml-1">Chụp ảnh tài liệu và tạo câu đố
                                        bằng ứng dụng di động</span></div><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max justify-center rounded justify-center rounded"
                                    aria-label="Tải ứng dụng" type="button" translate="no"
                                    data-testid="generic-button"><i
                                        class="flex items-center fas fa-arrow-down-to-line mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title" title="Tải ứng dụng">Tải
                                        ứng
                                        dụng</span><!----><!----><!----><!----><!----><!----></button>
                            </div><!----><!---->
                        </div>
                    </div>
                </div>
                <div class="h-full absolute w-full top-full">
                    <div class="flex flex-col gap-3 relative h-full">
                        <div class="w-full h-14 rounded border border-ds-dark-500-20">
                            <div class="tabs flex relative h-[54px] items-center bg-light-3 rounded">
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4 text-lilac"
                                    data-testid="study_material"><i class="flex items-center fas fa-file mr-2"
                                        style="font-size: 20px;"></i><span> Tài liệu</span><!----></div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="ai_create_topic"><i class="flex items-center fas fa-sparkles mr-2"
                                        style="font-size: 20px;"></i>
                                    <span> Text / Prompt</span><!---->
                                </div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="website"><i class="flex items-center fas fa-globe mr-2"
                                        style="font-size: 20px;"></i><span> Trang mạng</span><!----></div>
                                <div class="relative font-semibold cursor-pointer text-center hover:text-lilac flex-grow basis-0 px-6 py-2 text-dark-4"
                                    data-testid="youtube_video"><i class="flex items-center fab fa-youtube text-red mr-2"
                                        style="font-size: 20px;"></i>
                                    <span>YouTube </span><!---->
                                </div>
                                <div class="absolute bottom-0 transition-all duration-200 ease-in-out bg-lilac flex justify-center h-1"
                                    style="width: 253px; left: 0px;"><!----></div><!---->
                            </div>
                        </div><!---->
                        <div class="rounded h-fit overflow-scroll flex flex-col gap-3">
                            <div class="bg-light-3 p-8 border border-ds-dark-500-20 rounded">
                                <div class="flex justify-between font-semibold mb-6">Tạo câu hỏi từ tài liệu học tập
                                    (bài thuyết trình/tài liệu) <!----></div>
                                <div class="w-full h-fit">
                                    <div class="border border-dashed border-ds-dark-500-40 flex flex-col items-center justify-center py-8 px-4 w-full h-fit relative rounded gap-3 min-h-80"
                                        data-testid="file-input">
                                        <div class="flex flex-col gap-4" style="display: none;">
                                            <div class="relative flex items-center justify-center w-full h-full">
                                                <div class="animate-spin absolute">
                                                    <div datatestid=""><i class="flex items-center far fa-sync"
                                                            style="font-size: 16px;"></i></div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-ds-dark-200">Đang tìm nạp tệp từ Google Drive</p>
                                        </div>
                                        <div class="flex flex-col items-center justify-center"><i
                                                class="flex items-center far fa-cloud-upload-alt text-ds-dark-100"
                                                style="font-size: 32px;"></i><span class="font-semibold">Kéo và thả
                                                tài liệu học tập</span>
                                            <div class="flex flex-row items-center gap-2">
                                                <div class="h-[1px] w-20 border border-ds-dark-500-20"></div><span
                                                    class="text-sm font-semibold">Hoặc</span>
                                                <div class="h-[1px] w-20 border border-ds-dark-500-20"></div>
                                            </div>
                                            <div class="flex flex-row gap-3"><input
                                                    data-testid="file-input-button-study-material"
                                                    class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer"
                                                    type="file"
                                                    accept="application/pdf,application/vnd.openxmlformats-officedocument.presentationml.slideshow,application/vnd.openxmlformats-officedocument.presentationml.presentation,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*"><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-6 py-2 text-lg font-semibold h-9 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max"
                                                    aria-label="Tải lên từ thiết bị" type="button" translate="no"
                                                    data-testid="generic-button"><i
                                                        class="flex items-center fas fa-display mr-2"
                                                        style="font-size: 14px;"></i><!----><span class="title"
                                                        title="Tải lên từ thiết bị">Tải lên từ thiết
                                                        bị</span><!----><!----><!----><!----><!----><!----></button><button
                                                    type="button"
                                                    class="flex items-center justify-center border rounded-lg border-dark-6 text-dark-2 p-3 !h-9 !bg-ds-lilac-500 !rounded-lg !border-none !px-4 flex-1 z-1"><i
                                                        class="flex items-center fab fa-google-drive text-ds-light-500 mr-2"
                                                        style="font-size: 16px;"></i><!----><span
                                                        class="text-lg font-semibold text-ds-light-500"><span>Nhập từ ổ
                                                            đĩa</span></span></button><button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-6 py-2 text-lg font-semibold h-9 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max"
                                                    aria-label="Chụp ảnh" type="button" translate="no"
                                                    data-testid="generic-button"><i
                                                        class="flex items-center fas fa-camera mr-2"
                                                        style="font-size: 14px;"></i><!----><span class="title"
                                                        title="Chụp ảnh">Chụp
                                                        ảnh</span><!----><!----><!----><!----><!----><!----></button>
                                            </div>
                                            <div class="text-sm text-ds-dark-200 flex flex-col items-center mt-3">
                                                <span>Các định dạng được hỗ trợ: PDF, PPT, PPTX, DOC, DOCX, PNG,
                                                    JPG</span><span>Giới hạn kích thước tệp: tối đa 25 MB, không dài quá
                                                    30 trang.</span>
                                            </div>
                                        </div><!---->
                                    </div>
                                </div>
                                <div class="w-full flex flex-col">
                                    <div class="flex flex-row gap-1 items-center self-center mt-9"
                                        data-testid="powered-by-ai-component"><span
                                            class="text-sm font-semibold text-ds-dark-200">Được cung cấp bởi</span><img
                                            src="https://cf.quizizz.com/image/AI-wordmark%20(1).svg" alt="Quizizz AI"
                                            data-testid="quizizz-ai-image" class="mr-1.5" height="20" width="90">
                                    </div>
                                </div><!----><!---->
                            </div><!---->
                            <div class="w-full flex flex-row justify-between items-center bg-lilac-faded px-4 py-3 rounded border border-ds-lilac-500-40"
                                data-testid="download-q-app-banner">
                                <div class="flex flex-row gap-1 items-center"><img
                                        src="https://cf.quizizz.com/CreateWithAIV2/Mobile.png" class="w-8 h-8"
                                        width="32" height="32"><span
                                        class="font-semibold text-ds-lilac-600 ml-1">Chụp ảnh tài liệu và tạo câu đố
                                        bằng ứng dụng di động</span></div><button
                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-light-3 border border-solid border-dark-6 text-dark-2 hover:bg-light-2 active:bg-light-1 rounded white relative min-w-max justify-center rounded justify-center rounded"
                                    aria-label="Tải ứng dụng" type="button" translate="no"
                                    data-testid="generic-button"><i
                                        class="flex items-center fas fa-arrow-down-to-line mr-2"
                                        style="font-size: 12px;"></i><!----><span class="title" title="Tải ứng dụng">Tải
                                        ứng
                                        dụng</span><!----><!----><!----><!----><!----><!----></button>
                            </div><!----><!---->
                        </div>
                    </div>
                </div>
                <div class="h-full absolute w-full top-[200%]">
                    <div class="flex flex-col gap-3 relative h-full"><!----><!---->
                        <div class="rounded h-fit overflow-scroll flex flex-col gap-3">
                            <div class="bg-light-3 p-8 border border-ds-dark-500-20 rounded">
                                <section class="questions-section" data-testid="empty-state-container">
                                    <div class="mb-4"><span class="font-semibold">Tìm kiếm câu hỏi từ các câu đố của
                                            các giáo viên khác</span></div>
                                    <div class="relative w-full p-1" hasbutton="true"><!---->
                                        <div class="relative">
                                            <div
                                                class="w-6 h-6 flex items-center justify-center absolute left-2 inset-0 my-auto text-dark-4">
                                                <i class="flex items-center far fa-search" style="font-size: 12px;"></i>
                                            </div><input id="" data-hj-allow="" data-testid="generic-input"
                                                aria-describedby="input-error-message" aria-invalid="false"
                                                aria-required="false" type="text" name=""
                                                class="focus:outline-none h-10 w-full py-2 text-sm placeholder-sm remove-number-selector pl-9 border border-solid border-dark-6 rounded focus:ring-2 focus:ring-lilac focus:ring-offset-0 bg-light-3 text-dark-2  border-dark-4 placeholder-dark-5 pr-3 pr-2"
                                                placeholder="Tìm kiếm từ hàng triệu câu đố miễn phí " autocomplete="off"
                                                lang="" maxlength="-1" tabindex="0"><!----><!----><!----><!---->
                                            <div class="absolute inline-table top-1 right-1 w-20">
                                                <button
                                                    class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 bg-dark-6 text-dark-20% cursor-not-allowed rounded other relative min-w-max w-full w-full"
                                                    aria-label="Tìm kiếm câu đố" disabled="" type="button"
                                                    translate="no" data-testid="generic-input-button"
                                                    layout="default"><!----><!----><span class="title"
                                                        title="Tìm kiếm câu đố">Tìm kiếm câu
                                                        đố</span><!----><!----><!----><!----><!----><!----></button>
                                            </div>
                                        </div>
                                        <div class="flex pt-1 text-xs font-semibold text-red" aria-live="assertive"
                                            style="display: none;"><span
                                                class="w-4 h-4 flex items-center justify-center mr-0.5"><i
                                                    class="flex items-center far fa-exclamation-circle"
                                                    style="font-size: 11px;"></i></span><span id="input-error-message"
                                                data-testid="input-error-message"></span>
                                        </div><!---->
                                    </div>
                                    <div class="font-bold py-4">Hoặc chọn loại câu hỏi để thêm câu hỏi</div>
                                    <div class="qt-list-container">
                                        <div class="qt-list">
                                            <div class="flex">
                                                <div class="question-types-list bg-light-3 w-full flex-grow lg:w-160 rounded-l-lg"
                                                    data-testid="question-types-list-container">
                                                    <div class="grid w-full gap-2 grid-cols-2">
                                                        <div data-testid="for-super-container" class="for-super">
                                                            <a href="/create_quizz">
                                                                <button data-testid="create-question-type-MCQ"
                                                                    class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                    type="button">
                                                                    <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                            class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                            class="question-type-icon relative flex items-center justify-center bg-lilac text-light rounded h-full aspect-square"><i
                                                                                class="flex items-center far fa-check"
                                                                                data-testid="question-type-icon"
                                                                                style="font-size: 11px;"></i></span></div>
                                                                    <div class="flex items-center w-full"><span
                                                                            class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Nhiều
                                                                            lựa chọn</span><!----><!----></div>
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-BLANK"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-lilac text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-rectangle-wide"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Điền
                                                                        vào chỗ trống</span><!----><!----></div>
                                                            </button></div>
                                                    </div><!---->
                                                    <div class="mt-5 mb-2 text-xs font-semibold text-dark-4"><span> Câu trả
                                                            lời kết thúc mở</span></div>
                                                    <div class="grid w-full gap-2 grid-cols-2">
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-DRAW"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-pen-swirl"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Vẽ</span><!----><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-OPEN"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-align-left"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">mở
                                                                        kết thúc</span><!----><!----></div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-VIDEO"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-video"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Trả
                                                                        lời video</span><!----><!----></div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-AUDIO"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-microphone-alt"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Trả
                                                                        lời audio</span><!----><!----></div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-POLL"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-poll"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">Khảo
                                                                        sát</span><!----><!----></div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                data-testid="create-question-type-WORDCLOUD"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%"
                                                                type="button">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-a text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-cloud-word"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div class="flex items-center w-full"><span
                                                                        class="flex text-sm font-semibold text-left truncate whitespace-normal text-dark-2">từ
                                                                        đám mây</span><!----><!----></div>
                                                            </button></div>
                                                    </div><!---->
                                                    <div class="mt-5 mb-2 text-xs font-semibold text-dark-4"><span> Tương
                                                            tác/Tư duy bậc cao</span></div>
                                                    <div class="grid w-full gap-2 grid-cols-2">
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-MATCH"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-layer-plus"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Ghép đôi</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-REORDER"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-signal-alt"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Sắp xếp lại</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button"
                                                                data-testid="create-question-type-DRAGNDROP"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-hand-paper"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Kéo và thả</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-DROPDOWN"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-caret-square-down"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Thả xuống</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-HOTSPOT"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-bullseye-pointer"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Điểm đánh dấu</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button"
                                                                data-testid="create-question-type-DND_IMAGE"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-message-image"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Dán nhãn</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button"
                                                                data-testid="create-question-type-CLASSIFICATION"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-brand-f text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-columns-3"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>phân loại</span><!---->
                                                                </div>
                                                            </button></div>
                                                    </div>
                                                    <div class="mt-5 mb-2 text-xs font-semibold text-dark-4"><span>
                                                            Toán</span></div>
                                                    <div class="grid w-full gap-2 grid-cols-2">
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-EQUATION"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-ds-warn-500 text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center fal fa-function"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Đáp án toán học</span><!---->
                                                                </div>
                                                            </button></div>
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-GRAPHING"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><span
                                                                            class="inline-flex align-center justify-center rounded relative border border-solid border-super-light w-4 h-4 bg-super-faded text-super"><i
                                                                                class="flex items-center fas fa-bolt-lightning absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                                                                                style="font-size: 9px;"></i></span></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-ds-warn-500 text-light rounded h-full aspect-square"><i
                                                                            class="flex items-center far fa-chart-line"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    <span>Vẽ đồ thị</span><!---->
                                                                </div>
                                                            </button></div>
                                                    </div>
                                                    <div class="mt-5 mb-2 text-xs font-semibold text-dark-4"><span>
                                                            Khác</span></div>
                                                    <div class="grid w-full gap-2 grid-cols-2">
                                                        <div data-testid="for-super-container" class="for-super"><button
                                                                type="button" data-testid="create-question-type-SLIDEV2"
                                                                class="flex items-start p-1 rounded-lg w-full text-dark-3 hover:bg-dark-5%">
                                                                <div class="relative w-6 h-6 mr-2 rounded"><span
                                                                        class="absolute z-1 flex -top-1/4 -right-1/4"><!----></span><span
                                                                        data-testid="question-type-icon-container"
                                                                        class="question-type-icon relative flex items-center justify-center bg-ds-light-300 text-light rounded h-full aspect-square !text-dark-3"><i
                                                                            class="flex items-center far fa-presentation"
                                                                            data-testid="question-type-icon"
                                                                            style="font-size: 11px;"></i></span></div>
                                                                <div
                                                                    class="flex flex-1 text-sm font-semibold text-left truncate whitespace-normal text-dark-2">
                                                                    Trình chiếu</div>
                                                            </button></div>
                                                    </div>
                                                </div>
                                                <div class="question-type-explainer flex flex-col p-4 gap-4 bg-light-2 border border-dark-6 border-l-1 rounded-lg flex-1"
                                                    data-testid="question-type-explainer"><!---->
                                                    <div
                                                        class="relative w-full aspect-video bg-dark-1 overflow-hidden rounded-sm">
                                                        <div
                                                            class="absolute top-0 left-0 h-full w-full flex items-center justify-center">
                                                            <i class="flex items-center fas fa-sync text-light-2 animate-spin"
                                                                style="font-size: 12px;"></i>
                                                        </div><video class="rounded-sm object-fill"
                                                            src="https://cf.quizizz.com/videos/qtype/fib.v2.min.mp4"
                                                            loop="" height="152" autoplay=""
                                                            aria-hidden="true"></video>
                                                    </div>
                                                    <div class="flex-1 flex flex-col justify-between mt-4">
                                                        <a href="">
                                                            <div class="text-dark-2 text-sm font-semibold">Điền vào chỗ
                                                                trống <!----></div>
                                                        </a>
                                                        <div class="text-dark-4 text-xs font-semibold">Nhắc học sinh
                                                            về văn bản và kiểm tra xem chúng có nhớ chính xác cách
                                                            viết của từ acommodate accomodate accommodate không.
                                                        </div>
                                                    </div>
                                                    <div translate="no"
                                                        class="lozenge items-center inline-flex text-tn font-semibold rounded px-1 rounded bg-opacity-20 bg-brand-b text-brand-b">
                                                        <!----><!----><span class="">Tự động phân loại</span>
                                                    </div>
                                                </div>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </section>
                    </div><!----><!----><!---->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
