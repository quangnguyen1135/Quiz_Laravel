@guest
    <header id="main-header" class="flex gap-2 h-14.5 md:block">
        <div id="app-header" class="main-header h-fit flex-grow border-light-1 border-b z-10" translate="no">
            <nav class="bg-light-3 px-1 py-2 md:w-screen text-dark-3 flex flex-row relative justify-between h-auto">
                <div class="flex flex-row items-center md:hidden md:pl-3">
                    <div class="flex flex-row items-center md:hidden">
                        <button id="hamburger-menu">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="/" class="pl-2">
                            <img class="object-contain w-20 h-full p-1 mr-auto"
                                src="{{ asset('/') }}asset/img/quizizz_logos/purple-brandmark-600x164.png"
                                alt="logo">
                        </a>
                    </div>

                </div>
                <div class="flex-none md:flex-grow md:justify-end flex flex-row space-x-2">
                    <div class="flex space-x-2 flex-row pl-0 md:pl-2 h-10">
                        <button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center w-8 h-8 bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3 rounded-full"
                            aria-label="search">
                            <i class="far fa-search" style="font-size:12px;"></i>
                        </button>
                        <button
                            class="transition-colors duration-200 ease-in-out flex items-center justify-center px-3 py-1 text-xs font-semibold h-full bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3 rounded">
                            Enter code
                        </button>
                        @auth
                            <div class="flex h-10 items-center">
                                <button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-full bg-dark-5% active:bg-dark-10% text-dark-2 hover:text-dark-3 rounded-full">
                                    <i class="fa-regular fa-bell"></i>
                                </button>
                            </div>
                        @else
                            <div class="flex h-10">
                                <a href="#" class="open-modal-button">
                                    <button
                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-full bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded mr-2">
                                        Log in
                                    </button>
                                </a>
                                <a href="##" id="open-registration-modal">
                                    <button
                                        class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-full bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded md:block">
                                        Sign up
                                    </button>
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </header>
@endguest

<div id="modal-layer-2" class="z-5 absolute inset-0 flex items-center justify-center">
    <div class="modal-mask fixed inset-0 bg-black bg-opacity-50"></div>
    <div class="modal-wrapper bg-white rounded-lg p-6 max-w-lg mx-auto relative">
        <button type="button" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
            aria-label="Close modal">
            <i class="fa fa-times"></i>
        </button>
        <h2 class="text-2xl font-bold mb-4">Đăng nhập vào Quizziz</h2>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <button type="submit"
                class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-full bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded md:block py-2 px-4 rounded-md">Login</button>
        </form>
        <section class="mt-6">
            <h3 class="text-lg font-semibold mb-4">Or continue with</h3>
            <section class="flex flex-col space-y-3">
                <!-- Continue with Google -->
                <button
                    class="flex items-center justify-between px-4 py-2 border border-gray-300 rounded-md shadow-sm hover:shadow-md">
                    <span class="flex items-center space-x-4">
                        <img src="https://cf.quizizz.com/img/logos/google-logo-1.png" alt="Google" class="w-5 h-5">
                        <span class="font-semibold">Continue with Google</span>
                    </span>
                    <i class="fa fa-arrow-right"></i>
                </button>
                <!-- Continue with Email -->
                <button
                    class="flex items-center justify-between px-4 py-2 border border-gray-300 rounded-md shadow-sm hover:shadow-md">
                    <span class="flex items-center space-x-4">
                        <img src="https://cf.quizizz.com/image/envelope-regular.png" alt="Email" class="w-5 h-5">
                        <span class="font-semibold">Continue with Email</span>
                    </span>
                    <i class="fa fa-arrow-right"></i>
                </button>
                <!-- Continue with Facebook -->
                <button
                    class="flex items-center justify-between px-4 py-2 border border-gray-300 rounded-md shadow-sm hover:shadow-md">
                    <span class="flex items-center space-x-4">
                        <img src="https://cf.quizizz.com/image/facebook(1).png" alt="Facebook" class="w-5 h-5">
                        <span class="font-semibold">Continue with Facebook</span>
                    </span>
                    <i class="fa fa-arrow-right"></i>
                </button>
            </section>
        </section>
    </div>
</div>

<div id="modal-layer-registration" class="z-5 absolute inset-0 flex items-center justify-center">
    <div class="modal-mask fixed inset-0 bg-black bg-opacity-50"></div>
    <div class="modal-wrapper bg-white rounded-lg p-6 max-w-lg mx-auto relative">
        <button type="button" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
            aria-label="Close registration modal">
            <i class="fa fa-times"></i>
        </button>
        <h2 class="text-2xl font-bold mb-4">Sign up for Quizziz</h2>
        <form action="{{ route('registration.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="form-group mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Bạn là:</label>
                <select name="role" id="role"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Chọn vai trò</option>
                    <option value="teacher">Giáo viên/ Giảng viên</option>
                    <option value="student">Học sinh/ Sinh viên</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <div class="form-group mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                    Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
            </div>
            <button type="submit"
                class="transition-colors duration-200 ease-in-out flex items-center justify-center px-4 py-1 text-sm font-semibold h-full bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded md:block">Register</button>
        </form>
    </div>
</div>


<div class="main-navigation-container h-full main-nav">
    <div class="main-navigation flex flex-col h-full bg-light-3 border-r border-light-1 max-w-min filter-box-shadow">
        <a href="/" class="logo md:block" aria-label="Quizizz" title="Quizizz">
            <img class="object-contain w-20 h-full p-1 mr-auto"
                src="{{ asset('/') }}asset/img/quizizz_logos/purple-brandmark-600x164.png" alt="logo">
        </a>
        <div class="user-details">
            <div class="pb-2 p-4 user-section">
                <div class="relative min-w-40 max-w-40">
                    <div class="flex items-center mb-3">
                        <a href="/profile/6530d670aa3baa53fa6a0f02"
                            class="inline-block text-sm font-semibold text-dark-2 cursor-pointer">
                            @if (Auth::check())
                                <div class="inline-block align-bottom">
                                    Mr. {{ auth()->user()->name }}
                                </div>
                        </a>
                        <div
                            class="lozenge items-center inline-flex text-tn font-semibold rounded px-1 bg-dark-5% text-dark-3">
                            Tài khoản cơ bản
                        </div>
                    @else
                        <div class="inline-block align-bottom">
                            Có một tài khoản?
                            <a href="#" class="open-modal-button">
                                <button
                                    class="transition-colors duration-200 ease-in-out flex items-center justify-center px-3 py-1 text-xs font-semibold h-6 base bg-lilac-faded text-lilac hover:text-lilac-light active:text-lilac-dark rounded secondary relative min-w-max mb-4"
                                    type="button" translate="no">Đăng nhập
                                </button>
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                <button
                    class="transition-colors duration-200 ease-in-out flex items-center justify-center px-2 py-1.5 text-xs font-semibold h-full bg-super-20% text-super-dark hover:text-super-light active:text-super-dark rounded-2xl">
                    Nâng cấp ngay bây giờ
                </button>
            </div>
            <div class="mb-4 relative block w-full" style="padding-left: 0.5rem; padding-right: 1.5rem;">
                <a href="/create_quizz"
                    
                        class="transition-colors duration-200 ease-in-out flex flex items-center justify-center px-7.5 py-2.5 text-lg font-semibold q-shadow mb-1 h-10 base bg-lilac text-light-3 hover:bg-lilac-light active:bg-lilac-dark rounded-lg primary relative min-w-max w-full open-modal-button"
                        data-target="#modal-layer-2">
                        <i class="flex items-center fas fa-sparkles mr-2" style="font-size: 16px;"></i>
                        <span class="title" title="Tạo mới">Tạo mới</span>
                    

                </a>
            </div>
        </div>
        <div class="sidebar-navigation flex flex-col overflow-y-auto justify-between h-full">
            <a href="/admin"
                class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4">
                <i class="flex items-center fal fa-map-marked-alt" style="font-size: 12px;"></i>
                <span class="text-sm whitespace-nowrap pl-1">Khám phá</span>
            </a>
            <a href="/my-quizzes"
                class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4 open-modal-button"
                data-target="#modal-layer-2">
                <i class="flex items-center fal fa-books" style="font-size: 12px;"></i>
                <span class="text-sm whitespace-nowrap pl-1">Thư viện của tôi</span>
            </a>

            <a href="/admin/reports"
                class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4">
                <i class="flex items-center fal fa-analytics" style="font-size: 12px;"></i>
                <span class="text-sm whitespace-nowrap pl-1">Báo cáo</span>
            </a>
            <a href="/admin/classes"
                class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4">
                <i class="flex items-center fal fa-users-class" style="font-size: 12px;"></i>
                <span class="text-sm whitespace-nowrap pl-1">Các lớp học</span>
            </a>
            <a href="/settings"
                class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4">
                <i class="flex items-center fal fa-cog" style="font-size: 12px;"></i>
                <span class="text-sm whitespace-nowrap pl-1">Cài đặt</span>
            </a>
            @auth
                <button type="button" onclick="document.getElementById('logout-form').submit();"
                    class="link flex items-center pl-4 whitespace-nowrap w-full hover:bg-light-1 cursor-pointer py-2 text-dark-4"
                    aria-label="Đăng xuất">
                    <div class="flex items-center justify-center w-6">
                        <i class="flex items-center far fa-sign-out" style="font-size: 12px;"></i>
                    </div>
                    <span class="text-sm whitespace-nowrap pl-1">Đăng xuất</span>
                </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth

            <button aria-label="Ít hơn"
                class="link flex w-full items-center py-2 pl-4 hover:bg-dark-5% cursor-pointer text-dark-3"
                data-testid="sidebar-desktop-more-button" type="button">
                <i class="flex items-center fal fa-chevron-down" style="font-size: 12px;"></i>
            </button>
        </div>
        <div class="m-4 cursor-pointer flex flex-col items-center gap-1">
            <span class="font-semibold text-xxs">Hãy dùng thử tiện ích mở rộng AI Chrome của chúng tôi</span>
            <img class="border border-dark-5 rounded hover:bg-ds-light-400" height="49"
                src="https://cf.quizizz.com/img/quizizz_ai/ai_extension_banner.webp" width="160">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('modal-layer-2');
        const closeButton = modal.querySelector('[aria-label="Close modal"]');

        // Open Modal Function (Call this function when you want to show the modal)
        function openModal() {
            modal.style.display = 'flex'; // Display the modal
        }

        // Close Modal Function
        function closeModal() {
            modal.style.display = 'none'; // Hide the modal
        }

        // Attach Close Button Event
        closeButton.addEventListener('click', closeModal);

        // Close modal when clicking outside of the modal content
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Trigger modal open for both buttons
        const openModalButtons = document.querySelectorAll('.open-modal-button');
        openModalButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                        e.preventDefault(); // Prevent default link behavior

                        @auth
                        window.location.href = button.getAttribute('href');
                    @else
                        openModal();
                    @endauth
                });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const registrationModal = document.getElementById('modal-layer-registration');
        const closeRegistrationButton = registrationModal.querySelector(
            '[aria-label="Close registration modal"]');

        // Open Registration Modal Function
        function openRegistrationModal() {
            registrationModal.style.display = 'flex'; // Show registration modal
        }

        // Close Registration Modal Function
        function closeRegistrationModal() {
            registrationModal.style.display = 'none'; // Hide registration modal
        }

        // Attach Close Button Event
        closeRegistrationButton.addEventListener('click', closeRegistrationModal);

        // Close the modal if clicking outside the modal content
        registrationModal.addEventListener('click', (e) => {
            if (e.target === registrationModal) {
                closeRegistrationModal();
            }
        });

        // Example trigger: Button to open registration modal
        const openRegistrationModalButton = document.getElementById('open-registration-modal');
        if (openRegistrationModalButton) {
            openRegistrationModalButton.addEventListener('click', () => {
                openRegistrationModal();
            });
        }
    });
</script>
