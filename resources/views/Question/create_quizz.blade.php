@extends('layout.master')
@section('content')
    <div
        class="flex bg-light-3 flex-col gap-6 relative py-6 px-4 md:px-6 h-fit w-full min-h-full md:min-h-0 md:mx-auto md:my-30 md:w-1/2 md:rounded-lg">
        <header data-testid="modal-header" class="flex w-full">
            <div data-testid="modal-base-icon"
                class="flex items-center justify-center mr-3 rounded-full min-w-10 min-h-10 max-h-10 max-w-10 bg-lilac-faded text-ds-lilac-500">
                <i class="flex items-center fas fa-sparkles" style="font-size: 16px;"></i>
            </div>
            <div class="flex justify-center flex-col">
                <div data-testid="modal-header-title" class="font-sans font-semibold text-base text-dark-2 flex">Tuyệt vời,
                    bạn gần như đã hoàn tất</div>
                <div data-testid="modal-header-subtitle"
                    class="font-sans font-normal text-sm text-dark-4 flex items-center"><!----> Xem lại cài đặt bài quiz và
                    bạn sẵn sàng tiếp tục</div>
            </div>
        </header>
        <form action="{{ route('frontend.store_quizz') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div data-testid="modal-close-button" class="absolute top-0 right-0 m-2">
                <a href="/"><button
                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center w-8 h-8 bg-transparent text-dark-4 hover:bg-dark-10% active:bg-dark-5% rounded transparent-floating-dark relative min-w-max font-normal font-normal"
                        aria-label="Close modal" type="button" translate="no"
                        data-testid="quiz-settings-modal-close-button"><i class="flex items-center fa fa-times"
                            style="font-size: 12px;"></i><!----><span class="title"
                            title=""></span><!----><!----><!----><!----><!----><!----></button></a>
            </div>

            <body class="flex w-full h-auto min-h-0">
                <div class="flex flex-col-reverse w-full gap-4 md:grid md:grid-cols-2">
                    <section data-testid="quiz-details" class="flex flex-col gap-4">
                        <div class="relative w-full"><label class="font-semibold text-xs mb-1 ml-1 text-dark-4"
                                for="">Tên <!----></label>
                            <div class="relative"><!---->
                                <input id="title" name="title" data-hj-allow="" autofocus
                                    data-testid="quiz-title-input" aria-describedby="input-error-message"
                                    aria-invalid="true" aria-required="false" type="text" title="title"
                                    class="focus:outline-none h-10 w-full py-2 text-sm placeholder-sm remove-number-selector pl-3 border border-solid border-dark-6 rounded focus:ring-2 focus:ring-lilac focus:ring-offset-0 bg-light-3 text-dark-2  border-dark-4 placeholder-dark-5 pr-3 !pr-12"
                                    placeholder="Bài Quiz không có tiêu đề " autocomplete="off" lang=""
                                    maxlength="64" tabindex="0"><!----><!----><!----><!----><!---->
                            </div>
                            @if ($errors->has('title'))
                                <div class="flex pt-1 text-xs font-semibold text-red" aria-live="assertive">
                                    <span class="w-4 h-4 flex items-center justify-center mr-0.5">
                                        <i class="flex items-center far fa-exclamation-circle" style="font-size: 11px;"></i>
                                    </span>
                                    <span id="input-error-message"
                                        data-testid="input-error-message">{{ $errors->first('title') }}</span>
                                </div>
                            @endif

                        </div>

                        <div aria-required="true">
                            <div class="select-box">
                                <div id="497" class="label font-semibold text-xs mb-1 ml-1 text-dark-4">Chủ đề</div>
                                <div class="select w-full inline-flex relative">
                                    <button id="498" type="button" data-testid="publish-modal-grade-input-select-box"
                                        class="listbox-button flex items-center cursor-pointer box-border text-left rounded font-semibold text-sm text-dark-3 p-4 border border-dark-6 text-dark-2 pl-2 pr-1 py-2 h-10 w-full"
                                        aria-haspopup="listbox" aria-labelledby="497 498" aria-expanded="false"
                                        name="category_id">
                                        <div class="flex items-center justify-center mr-2 w-6 h-6" aria-hidden="true">
                                            <i class="flex items-center far fa-book" style="font-size: 12px;"></i>
                                        </div>
                                        <!-- Placeholder hiển thị khi chưa chọn gì -->
                                        <div class="title w-full truncate text-sm text-gray-400"
                                            data-cy="select-box-placeholder" aria-live="assertive">Chọn môn học có liên quan
                                        </div>
                                        <div class="ml-auto flex items-center justify-center w-6 h-6" aria-hidden="true">
                                            <i class="flex items-center fas fa-caret-down text-dark-3"
                                                aria-hidden="true"></i>
                                        </div>
                                    </button>
                                    <ul class="listbox overflow-y-auto z-30 list bg-light-3 shadow-soft-high w-full transform rounded transition-transform mt-1 max-h-50 scale-y-0 origin-top"
                                        aria-labelledby="497" role="listbox">
                                        @foreach ($categories as $category)
                                            <li id="{{ $category->id }}" data-value="{{ $category->id }}"
                                                class="option hover:bg-dark-5% cursor-pointer p-2 flex border-2 border-transparent border-b-dark-5%"
                                                role="option" aria-selected="false">
                                                <div class="text-dark-2">
                                                    <div class="item-title font-semibold text-sm">{{ $category->name }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="hidden" name="category_id" id="category_id">
                            </div>
                        </div>

                        <div aria-required="true">
                            <div class="select-box">
                                <div id="497" class="label font-semibold text-xs mb-1 ml-1 text-dark-4">Lớp</div>
                                <div class="select w-full inline-flex relative">
                                    <button id="498" type="button"
                                        data-testid="publish-modal-grade-input-select-box"
                                        class="listbox-button flex items-center cursor-pointer box-border text-left rounded font-semibold text-sm text-dark-3 p-4 border border-dark-6 text-dark-2 pl-2 pr-1 py-2 h-10 w-full"
                                        aria-haspopup="listbox" aria-labelledby="497 498" aria-expanded="false"
                                        name="grade_id">
                                        <div class="flex items-center justify-center mr-2 w-6 h-6" aria-hidden="true">
                                            <i class="flex items-center far fa-graduation-cap"
                                                style="font-size: 12px;"></i>
                                        </div>
                                        <div class="title w-full truncate text-sm text-gray-400"
                                            data-cy="select-box-placeholder" aria-live="assertive">Chọn lớp, bậc học phù
                                            hợp
                                        </div>
                                        <div class="ml-auto flex items-center justify-center w-6 h-6" aria-hidden="true">
                                            <i class="flex items-center fas fa-caret-down text-dark-3"
                                                aria-hidden="true"></i>
                                        </div>
                                    </button>
                                    <ul class="listbox overflow-y-auto z-30 list bg-light-3 shadow-soft-high w-full transform rounded transition-transform mt-1 max-h-50 scale-y-0 origin-top"
                                        aria-labelledby="497" role="listbox">
                                        @foreach ($grades as $grade)
                                            <li id="{{ $grade->id }}" data-value="{{ $grade->id }}"
                                                data-testid="publish-modal-grade-input-select-box-option-{{ $grade->id }}"
                                                class="option hover:bg-dark-5% cursor-pointer p-2 flex border-2 border-transparent border-b-dark-5%"
                                                role="option" aria-selected="false">
                                                <div class="text-dark-2">
                                                    <div class="item-title font-semibold text-sm">{{ $grade->name }}</div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input type="hidden" name="grade_id" id="grade_id">
                            </div>
                        </div>

                        <div aria-required="true">
                            <div class="select-box">
                                <div id="518" class="label font-semibold text-xs mb-1 ml-1 text-dark-4">Ngôn ngữ
                                    <!---->
                                </div>
                                <div class="select w-full inline-flex relative"><!----><button id="519"
                                        type="button" data-testid="publish-modal-language-input-select-box"
                                        class="listbox-button flex items-center cursor-pointer box-border text-left rounded font-semibold text-sm text-dark-3 p-4 border border-dark-6 text-dark-2 pl-2 pr-1 py-2 h-10 w-full"
                                        aria-haspopup="listbox" aria-labelledby="518 519" aria-expanded="false"
                                        name="language"><!---->
                                        <div class="flex items-center justify-center mr-2 w-6 h-6" aria-hidden="true"><i
                                                class="flex items-center far fa-language" style="font-size: 12px;"></i>
                                        </div>
                                        <div class="title w-full truncate text-sm" data-cy="select-box-value:"
                                            aria-live="assertive"><!----> English</div>
                                        <div class="ml-auto flex items-center justify-center w-6 h-6" aria-hidden="true">
                                            <i class="flex items-center fas fa-caret-down text-dark-3"
                                                aria-hidden="true"></i>
                                        </div>
                                    </button>
                                    <ul class="listbox overflow-y-auto z-30 list bg-light-3 shadow-soft-high w-full transform rounded transition-transform mt-10 max-h-50 scale-y-0 origin-top"
                                        aria-labelledby="518" role="listbox" activedescendant="520"
                                        style="position: fixed; top: 406.5px; min-width: 310px; width: 309.5px; left: 365.5px;">
                                        <!---->
                                        <li id="520" value="English"
                                            data-testid="publish-modal-language-input-select-box-option-0"
                                            class="option hover:bg-dark-5% cursor-pointer p-2 flex border-2 border-b-2 border-lilac bg-lilac-faded text-lilac border-lilac-faded"
                                            role="option" aria-selected="true"><!----><!---->
                                            <div class="text-lilac">
                                                <div class="item-title font-semibold text-sm">English <!----></div><!---->
                                            </div><!----><!----><!---->
                                        </li>
                                        <li id="521" value="Spanish; Castilian"
                                            data-testid="publish-modal-language-input-select-box-option-1"
                                            class="option hover:bg-dark-5% cursor-pointer p-2 flex border-2 border-transparent border-b-dark-5%"
                                            role="option" aria-selected="false"><!----><!---->
                                            <div class="text-dark-2">
                                                <div class="item-title font-semibold text-sm">Spanish; Castilian <!---->
                                                </div>
                                                <!---->
                                            </div><!----><!----><!---->
                                        </li>
                                    </ul>
                                </div><!---->
                                <input type="hidden" name="language" id="language">
                            </div>
                        </div>
                    </section>
                    <section class="h-full flex items-center justify-center">
                        <div class="aspect-square flex flex-auto">
                            <input type="hidden" id="image-path" name="image_path">

                            <div class="flex w-full justify-center h-full" data-testid="image-box-container"
                                id="upload-section" tabindex="0">
                                <div
                                    class="flex h-full w-full bg-light-2 cursor-pointer rounded border-dark-6 border-2 border-dashed flex-col items-center justify-center gap-2">
                                    <button id="open-modal-image-upload-button"
                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center w-9 h-9 bg-dark-50% text-light hover:bg-dark-60% active:bg-dark-50% rounded dark relative min-w-max v-popper--has-tooltip"
                                        aria-label="Upload image" type="button" translate="no">
                                        <i class="flex items-center fa fa-plus" style="font-size: 14px;"></i>
                                    </button>
                                    <span class="open-sans text-xs text-dark-4">Thêm ảnh bìa</span>
                                </div>
                            </div>
                            <div>
                                <div id="image-controls" class="hidden">
                                    <button id="change-image" class="btn btn-primary">Change</button>
                                    <button id="delete-image" class="btn btn-danger">Delete</button>
                                </div>
                                <img id="uploaded-image-preview" class="max-w-full max-h-40 hidden mt-4"
                                    alt="Uploaded Image Preview">
                            </div>
                            <!-- Add this img tag for displaying the uploaded image -->
                        </div>
                    </section>
                </div>
            </body>
            <footer class="flex w-full"><!---->
                <div class="flex flex-grow gap-2 justify-end"><!---->
                    <button type="submit"
                        class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-8 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded primary relative min-w-max"
                        aria-label="Xuất bản" type="button" translate="no"
                        data-testid="quiz-settings-modal-primary-button"><!----><!----><span class="title"
                            title="Xuất bản">Tạo Quiz</span><!----><!----><!----><!----><!----><!----></button>
                </div>
            </footer>
        </form>
        <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div
                class="bg-light-3 flex-col gap-6 relative py-6 px-4 md:px-6 h-fit w-full min-h-full md:min-h-0 md:mx-auto md:w-1/2 md:rounded-lg">
                <header class="flex w-full">
                    <div
                        class="flex items-center justify-center mr-3 rounded-full min-w-10 min-h-10 bg-lilac-faded text-lilac">
                        <i class="fas fa-image" style="font-size: 16px;"></i>
                    </div>
                    <div class="flex justify-center flex-col">
                        <div class="font-sans font-semibold text-base text-dark-2">Thêm hình ảnh</div>
                        <div class="font-sans font-normal text-sm text-dark-4 flex items-center">
                            <i class="far fa-paste mr-2" style="font-size: 16px;"></i>
                            Sử dụng ctrl + V để dán hình ảnh từ clipboard của bạn
                        </div>
                    </div>
                </header>
                <div class="absolute top-0 right-0 m-2">
                    <button id="close-modal" type="button"
                        class="w-8 h-8 bg-transparent text-dark-4 hover:bg-dark-10% rounded">
                        <i class="fa fa-times" style="font-size: 12px;"></i>
                    </button>
                </div>
                <div class="flex w-full h-auto">
                    <div class="flex flex-auto flex-col gap-4 h-120">
                        <div class="flex">
                            <div class="tab-active" data-testid="tab-0">
                                <i class="fas fa-upload"></i> <span>Tải lên</span>
                            </div>
                        </div>
                        <form id="upload-form" enctype="multipart/form-data">
                            @csrf
                            <div
                                class="flex flex-auto bg-light-2 flex-col border-dark-6 border relative min-h-0 rounded p-4">
                                <input id="file-upload" name="image"
                                    class="absolute inset-0 z-20 w-full h-full opacity-0 cursor-pointer" type="file"
                                    accept="image/jpg,image/jpeg,image/png,image/gif" required>
                                <div class="mt-4 flex justify-center items-center">
                                    <img id="image-preview" class="max-w-full max-h-40 hidden" alt="Image Preview" />
                                </div>
                                <div id="upload-instructions" class="flex flex-auto justify-center items-center flex-col">
                                    <span class="text-dark-4 text-sm">Kéo hình ảnh của bạn vào đây</span>
                                    <span class="text-dark-4 text-xs">hoặc</span>
                                    <button type="button"
                                        class="transition-colors duration-200 ease-in-out px-4 py-1 text-sm font-semibold h-8 bg-lilac-faded text-lilac">
                                        Tải lên từ thiết bị
                                    </button>
                                    <span class="text-dark-4 text-xs font-normal pt-6">Sử dụng JPG, PNG hoặc GIF, tối đa 5
                                        MB</span>
                                </div>
                            </div>
                        </form>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openModalButton = document.getElementById('open-modal-image-upload-button');
        const closeModalButton = document.getElementById('close-modal');
        const modal = document.getElementById('image-modal');
        const fileInput = document.getElementById('file-upload');
        const imagePreview = document.getElementById('image-preview');
        const uploadInstructions = document.getElementById('upload-instructions');
        const uploadedImagePreview = document.getElementById(
            'uploaded-image-preview'); // New element for preview
        const uploadSection = document.getElementById('upload-section'); // Section to hide
        const changeImageBtn = document.getElementById('change-image'); // "Change" button
        const deleteImageBtn = document.getElementById('delete-image'); // "Delete" button
        const imagePathInput = document.getElementById('image-path'); // Hidden input for image path

        // Open modal
        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        // Close modal
        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden');
            imagePreview.classList.add('hidden'); // Hide the image preview when closing the modal
            uploadInstructions.classList.remove('hidden'); // Show the upload instructions
            fileInput.value = ''; // Reset file input when modal is closed
        });

        // Validate file upload (image types and max 5MB)
        fileInput.addEventListener('change', function() {
            let formData = new FormData();
            let file = fileInput.files[0];

            formData.append('image', file);

            // AJAX request to upload the image
            fetch('{{ route('upload.image') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.path) {
                        // Display the uploaded image
                        uploadedImagePreview.src = data.path;
                        uploadedImagePreview.classList.remove('hidden');

                        // Update the hidden input field with the image path
                        imagePathInput.value = data.path;

                        // Show controls and hide upload section
                        document.getElementById('upload-section').classList.add('hidden');
                        imageControls.classList.remove('hidden');
                    } else {
                        console.log(data.error);
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        changeImageBtn.addEventListener('click', function() {
            fileInput.click();
        });

        deleteImageBtn.addEventListener('click', function() {
            // Remove the image preview and clear the path
            uploadedImagePreview.src = '';
            uploadedImagePreview.classList.add('hidden');
            imagePathInput.value = ''; // Clear the hidden input field

            // Show upload section and hide controls
            document.getElementById('upload-section').classList.remove('hidden');
            imageControls.classList.add('hidden');

            // Optionally, you can make an AJAX request to delete the image from the server
            fetch('{{ route('delete.image') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        imagePath: uploadedImagePreview.src
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Image deleted successfully');
                    } else {
                        console.log(data.error);
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
</script>
