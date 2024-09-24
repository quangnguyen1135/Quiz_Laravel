<script src="{{ asset('/') }}1001049829/14/modernizr.min70ea.js?v=162" type='text/javascript'></script>
<script src="{{ asset('/') }}asset/scripts/app.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Function to toggle dropdown visibility
        function toggleDropdown(button) {
            const listBox = button.nextElementSibling; // Get the corresponding <ul> element
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            // Close all dropdowns
            document.querySelectorAll('.listbox').forEach(box => {
                if (box !== listBox) {
                    box.classList.add('scale-y-0');
                    box.classList.remove('scale-y-100');
                    box.previousElementSibling.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle the current dropdown
            button.setAttribute('aria-expanded', !isExpanded);
            listBox.classList.toggle('scale-y-0', isExpanded);
            listBox.classList.toggle('scale-y-100', !isExpanded);
        }

        // Add click event listeners to select buttons
        document.querySelectorAll('.listbox-button').forEach(button => {
            button.addEventListener('click', () => {
                toggleDropdown(button);
            });
        });

        // Handle clicks on listbox items
        document.querySelectorAll('.listbox .option').forEach(option => {
            option.addEventListener('click', () => {
                const button = option.closest('.select-box').querySelector('.listbox-button');
                const hiddenInput = option.closest('.select-box').querySelector(
                    'input[type="hidden"]');
                const placeholder = button.querySelector('.title');

                hiddenInput.value = option.getAttribute('data-value') || option.getAttribute(
                    'value');
                placeholder.textContent = option.querySelector('.item-title').textContent
                    .trim();

                button.setAttribute('aria-expanded', 'false');
                option.closest('.listbox').classList.add('scale-y-0');
                option.closest('.listbox').classList.remove('scale-y-100');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.select-box')) {
                document.querySelectorAll('.listbox').forEach(box => {
                    box.classList.add('scale-y-0');
                    box.classList.remove('scale-y-100');
                    box.previousElementSibling.setAttribute('aria-expanded', 'false');
                });
            }
        });
    });

    document.querySelector('[data-testid="dropdown"]').addEventListener('click', function() {
        const dropdownMenu = document.querySelector('[data-testid="dropdown-menu"]');
        dropdownMenu.classList.toggle('hidden');
    });

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

        // Đóng dropdown sau khi chọn
        document.querySelector('[data-testid="dropdown-menu"]').classList.add('hidden');
    }

    document.querySelector('[data-testid="dropdown"]').addEventListener('click', function() {
        const dropdownMenu = document.querySelector('[data-testid="dropdown-menu"]');
        dropdownMenu.classList.toggle('hidden');
    });

    document.querySelector('[data-testid="dropdown"]').addEventListener('click', function(event) {
        event.stopPropagation(); // Ngăn chặn sự kiện này truyền ra ngoài
        const dropdownMenu = document.querySelector('[data-testid="dropdown-menu"]');
        dropdownMenu.classList.toggle('hidden');
    });

    // Đóng dropdown khi nhấn ra ngoài
    document.addEventListener('click', function(event) {
        const dropdownMenu = document.querySelector('[data-testid="dropdown-menu"]');
        const dropdownButton = document.querySelector('[data-testid="dropdown"]');

        if (!dropdownButton.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });


    // Optional: Setup for specific dropdowns, if needed
    function setupDropdown(buttonId, listBoxClass, hiddenInputId, placeholderClass) {
        const button = document.querySelector(`#${buttonId}`);
        const listBox = document.querySelector(`.${listBoxClass}`);
        const options = document.querySelectorAll(`.${listBoxClass} .option`);
        const hiddenInput = document.querySelector(`#${hiddenInputId}`);
        const placeholder = document.querySelector(`.${placeholderClass}`);

        options.forEach(option => {
            option.addEventListener('click', function() {
                hiddenInput.value = this.getAttribute('data-value') || this.getAttribute('value');
                placeholder.textContent = this.textContent.trim();
                listBox.classList.remove('scale-y-100'); // Ẩn dropdown sau khi chọn
                button.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // AJAX setup for CSRF token
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            "X-Requested-With": "XMLHttpRequest"
        }
    });
    
</script>
