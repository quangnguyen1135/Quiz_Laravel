<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
    <style>
        #image-preview {
            max-width: 100%;
            max-height: 200px;
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>
    <div id="drop-zone" style="border: 2px dashed #ccc; padding: 20px; text-align: center;">
        Kéo và thả hình ảnh vào đây hoặc nhấp để chọn
        <input id="file-upload" name="file-upload" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" style="display: none;">
    </div>
    <img id="image-preview" class="max-w-full max-h-40" alt="Image Preview" style="display: none;">
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('file-upload');
            const imagePreview = document.getElementById('image-preview');
    
            dropZone.addEventListener('click', function () {
                fileInput.click();
            });
    
            dropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                e.stopPropagation();
                dropZone.style.backgroundColor = '#e0e0e0'; // Thay đổi màu nền khi kéo
            });
    
            dropZone.addEventListener('dragleave', function () {
                dropZone.style.backgroundColor = ''; // Khôi phục màu nền khi bỏ qua
            });
    
            dropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                e.stopPropagation();
                dropZone.style.backgroundColor = ''; // Khôi phục màu nền
    
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files; // Gán file từ drag-and-drop vào input
                    handleFile(files[0]); // Xử lý file
                }
            });
    
            fileInput.addEventListener('change', function () {
                const file = fileInput.files[0];
                if (file) {
                    handleFile(file);
                }
            });
    
            function handleFile(file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Hiển thị preview ảnh
                };
                reader.readAsDataURL(file); // Đọc file dưới dạng data URL
            }
        });
    </script>
    
</body>
</html>
