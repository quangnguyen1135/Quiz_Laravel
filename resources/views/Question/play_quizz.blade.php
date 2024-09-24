@extends('layout.master')

@section('content')
    <div class="app-content h-full w-full transition-all relative"><!---->
        <div class="relative bg-no-repeat bg-cover bg-center grid themed-background classic theme-classic bg-basecolor in-game-wrapper-container"
            media="[object Object]"
            style="background-image: url(&quot;https://cf.quizizz.com/themes/v2/classic/bg_image.jpg&quot;); --theme-bg-image: url(&quot;https://cf.quizizz.com/themes/v2/classic/bg_image.jpg&quot;); min-height: 641px; --animation-speed-multiplier: 1;">
            <div class="w-full h-full relative"><!---->
                <div translate="no"
                    class="app-header-container z-101 fixed top-0 left-0 right-0 p-2 sm:p-4 text-ds-light-500 text-base">

                    <div class="powerup-effects-wrapper absolute top-full w-full pointer-events-none">
                        <div translate="no" class="powerup-effects-center-container">
                            <p class="effects-container"></p>
                            <p class="applied-effects-container"></p>
                        </div>
                    </div>
                    <div class="actions-wrapper gap-1 sm:gap-3 in-quiz"><!---->
                        <div
                            class="actions-parent relative flex flex-1 justify-between items-center w-full gap-1 sm:gap-3 h-full">
                            <div class="actions-container flex gap-1 sm:gap-3"><!---->
                                <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                    <div class="container flex flex-col w-12 sm:w-22 h-9 sm:h-10 relative self-start">
                                        <button
                                            class="btn inclined-shimmer overflow-hidden initial-rank w-12 sm:w-22 h-full absolute flex flex-row gap-1 p-2 sm:py-2 items-center sm:px-3 rounded-lg justify-between bg-gradient-to-b from-candy_bg_start to-candy_bg_end blur-20 border-ds-light-500-20 border bg-clip-padding hover:brightness-125 active:brightness-75 cursor-pointer">
                                            <div
                                                class="absolute h-4 w-auto left-1 right-1 border-t-[0.5px] rounded-md top-1 border-ds-light-500-50 border-gradient-to-b">
                                            </div><img
                                                src="https://cf.quizizz.com/join/img/gameplay-leaderboard/rank_pill_badge.svg"
                                                class="hidden sm:block sm:w-5 sm:h-5"><span
                                                class="candy-text-shadow text-center leading-5 font-bold flex-1 text-sm sm:text-base">-</span>
                                        </button>
                                    </div>
                                </div><!---->
                                <div data-cy="time-30-sec"
                                    class="text-sm md:text-base relative whitespace-nowrap min-w-fit h-9 sm:h-10">
                                    <div
                                        class="border border-ds-light-500-20 overflow-container overflow-hidden w-full h-full relative rounded-lg bg-ds-light-500-10">
                                        <div class="v-popper v-popper--theme-tooltip w-full h-full">
                                            <div
                                                class="px-2 md:px-3 py-1.5 z-40 relative candy-text-shadow text-ds-light-500 font-bold h-full flex items-center text-ds-light-500">
                                                Thưởng</div>
                                        </div>
                                        <div class="absolute bottom-0 w-full h-full bg-gradient-to-r from-ds-light-500-30 to-ds-light-500-66 z-1 actionBar"
                                            style="width: 13.3333%;"></div>
                                    </div>
                                </div><!---->
                            </div>
                            <div class="flex absolute left-0 right-0 justify-center -translate-x-2">
                                <!---->
                            </div>
                            <div class="v-popper v-popper--theme-tooltip w-auto h-full">
                                <div class="inline"><!----></div>
                            </div><!----><button aria-label=""
                                class="box-border select-none font-bold border text-center disabled:cursor-auto disabled:text-ds-light-500-30 disabled:bg-ds-light-500-10 disabled:hover:bg-ds-light-500-10 text-ds-light-500 bg-ds-light-500-20 border-transparent hover:bg-ds-light-500-30 active:bg-ds-light-500-10 text-base sm:text-xl w-8 sm:w-10 h-8 sm:h-10 rounded cursor-pointer blur-20 h-9 w-9 sm:h-10 cursor-pointer rounded-lg"
                                data-testid="button"
                                style="--fb-default-bg: rgba(255,255,255,0.1); --fb-hover-bg: rgba(255,255,255,0.2);"><i
                                    class="icon-fas-cog mr-1 !mr-0"></i><!----></button><!----><button aria-label=""
                                class="box-border select-none font-bold border text-center disabled:cursor-auto disabled:text-ds-light-500-30 disabled:bg-ds-light-500-10 disabled:hover:bg-ds-light-500-10 text-ds-light-500 bg-ds-light-500-20 border-transparent hover:bg-ds-light-500-30 active:bg-ds-light-500-10 px-3 py-1 sm:py-2 text-sm sm:text-base w-fit rounded cursor-pointer blur-20 h-9 w-9 sm:h-10 sm:w-10 rounded-lg"
                                data-testid="button"
                                style="--fb-default-bg: rgba(255,255,255,0.1); --fb-hover-bg: rgba(255,255,255,0.2);"><!----><svg
                                    class="w-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.5 3.25C6.09766 3.25 6.625 3.77734 6.625 4.375C6.625 5.00781 6.09766 5.5 5.5 5.5H3.25V7.75C3.25 8.38281 2.72266 8.875 2.125 8.875C1.49219 8.875 1 8.38281 1 7.75V4.375C1 3.77734 1.49219 3.25 2.125 3.25H5.5ZM17.875 3.25C18.4727 3.25 19 3.77734 19 4.375V7.75C19 8.38281 18.4727 8.875 17.875 8.875C17.2422 8.875 16.75 8.38281 16.75 7.75V5.5H14.5C13.8672 5.5 13.375 5.00781 13.375 4.375C13.375 3.77734 13.8672 3.25 14.5 3.25H17.875ZM5.5 14.5C6.09766 14.5 6.625 15.0273 6.625 15.625C6.625 16.2578 6.09766 16.75 5.5 16.75H2.125C1.49219 16.75 1 16.2578 1 15.625V12.25C1 11.6523 1.49219 11.125 2.125 11.125C2.72266 11.125 3.25 11.6523 3.25 12.25V14.5H5.5ZM17.875 11.125C18.4727 11.125 19 11.6523 19 12.25V15.625C19 16.2578 18.4727 16.75 17.875 16.75H14.5C13.8672 16.75 13.375 16.2578 13.375 15.625C13.375 15.0273 13.8672 14.5 14.5 14.5H16.75V12.25C16.75 11.6523 17.2422 11.125 17.875 11.125Z"
                                        fill="currentColor"></path>
                                </svg><!----></button><!---->
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"><!---->
                            <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                <div
                                    class="flex flex-1 flex-shrink-0 pr-2 py-2 sm:py-1 justify-between items-center rounded-lg bg-ds-light-500-10 h-9 sm:h-10 w-fit max-w-fit">
                                    <canvas data-testid="streak-pill-rive-canvas" class="w-10 h-10 -mr-1" width="40"
                                        height="40"></canvas><span data-testid="streak-pill-level"
                                        class="leading-5 candy-text-shadow text-lg sm:text-xl font-bold">0</span>
                                </div>
                            </div><!---->
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"><!---->
                            <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                <div
                                    class="flex flex-1 flex-shrink-0 pr-2 py-2 sm:py-1 justify-between items-center rounded-lg bg-ds-light-500-10 h-9 sm:h-10 w-fit max-w-fit">
                                    <canvas data-testid="streak-pill-rive-canvas" class="w-10 h-10 -mr-1" width="40"
                                        height="40"></canvas><span data-testid="streak-pill-level"
                                        class="leading-5 candy-text-shadow text-lg sm:text-xl font-bold">0</span>
                                </div>
                            </div><!---->
                        </div>
                        <div class="d-flex">
                            <div class="absolute top-1/2 left-1/3"><!---->
                                <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                    <div
                                        class="flex flex-1 flex-shrink-0 pr-2 py-2 sm:py-1 justify-between items-center rounded-lg bg-ds-light-500-10 h-9 sm:h-10 w-fit max-w-fit">
                                        <canvas data-testid="streak-pill-rive-canvas" class="w-10 h-10 -mr-1" width="40"
                                            height="40"></canvas><span data-testid="streak-pill-level"
                                            class="leading-5 candy-text-shadow text-lg sm:text-xl font-bold">
                                            <div id="current-question-score">Điểm của câu hỏi: 0</div>
                                        </span>
                                    </div>
                                </div><!---->
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"><!---->
                                <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                    <div
                                        class="flex flex-1 flex-shrink-0 pr-2 py-2 sm:py-1 justify-between items-center rounded-lg bg-ds-light-500-10 h-9 sm:h-10 w-fit max-w-fit">
                                        <canvas data-testid="streak-pill-rive-canvas" class="w-10 h-10 -mr-1" width="40"
                                            height="40"></canvas><span data-testid="streak-pill-level"
                                            class="leading-5 candy-text-shadow text-lg sm:text-xl font-bold">Điểm của
                                            question đang làm</span>
                                    </div>
                                </div><!---->
                            </div>
                        </div>
                        <div class="absolute top-1/2 right-1/2 -translate-x-1/2 -translate-y-1/2"><!---->
                            <div class="v-popper v-popper--theme-tooltip h-full w-auto">
                                <div
                                    class="flex flex-1 flex-shrink-0 pr-2 py-2 sm:py-1 justify-between items-center rounded-lg bg-ds-light-500-10 h-9 sm:h-10 w-fit max-w-fit">
                                    <canvas data-testid="streak-pill-rive-canvas" class="w-10 h-10 -mr-1" width="40"
                                        height="40"></canvas><span data-testid="streak-pill-level"
                                        class="leading-5 candy-text-shadow text-lg sm:text-xl font-bold">tổng điểm</span>
                                </div>
                            </div><!---->
                        </div>
                    </div><!---->
                </div><!---->
                <div class="page-container page-container in-quiz with-control-center" style="opacity: 1;"><!---->
                    <div id="screen-game" class="screen screen-game">
                        <div id="transitioner-container-portto" class="transitioner-container">
                            <div class="absolute z-1 mt-20 left-4 top-1"><!----></div>
                            <div class="transitioner w-full h-full">
                                <div class="transitioner w-full h-full">
                                    <div class="select-none card-container card-view-controller"
                                        doescurrentquestionhavecorrectanswer="true">
                                        <div class="event-container"><!---->
                                            <div class="transitioner w-full h-full">
                                                <div class="question-theme p-4 quiz-container" data-cy="quiz-container"
                                                    data-testid="quiz-container" data-quesid="614873b543dfd2001df91a9f"
                                                    data-quesidandattemptcount="614873b543dfd2001df91a9f-NaN"
                                                    isquestionmatchandreorderbased="false" isquestionorderbased="false"
                                                    isquestionmatchbased="false" slidesflowcontroltype="partial">

                                                    <div class="quiz-container-inner flex flex-col gap-2">
                                                        <div
                                                            class="h-1/2 w-full flex flex-col justify-center items-center">
                                                            <div data-testid="question-container"
                                                                class="question-container relative mt-1.5 sm:mt-1 py-1 flex justify-center items-center transition-all duration-300 ease-in">
                                                                <div
                                                                    class="box-border relative blur-10 transition-all duration-300 ease-in border border-transparent bg-transparent rounded-lg w-fit h-full max-h-full sm:min-w-[60%] min-w-full sm:h-auto h-min h-fit self-center !bg-ds-dark-500-50 !border-ds-light-500-10">
                                                                    <div
                                                                        class="pill absolute left-1/2 -translate-x-1/2 -translate-y-1/2 text-ds-light-500 bg-ds-dark-500-80 px-3 py-1 rounded-full blur-20 border-ds-light-500-20 border text-sm flex flex-row">
                                                                        <p>
                                                                            <span data-cy="current-question-number"
                                                                                role="current-question-number">1</span>/
                                                                            <span data-cy="total-question-number"
                                                                                role="total-question-number">{{ $totalQuestions }}</span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="p-4 sm:p-6 h-full">
                                                                        <div
                                                                            class="h-full flex flex-col gap-4 sm:flex-row overflow-y-auto items-center sm:overflow-y-hidden">
                                                                            <div aria-describedby="questionText"
                                                                                data-cy="text-container"
                                                                                data-testid="question-container-text"
                                                                                class="text-light-1 transition-all duration-300 ease-in flex-1 sm:overflow-y-auto">
                                                                                <div class="w-full h-full"
                                                                                    data-cy="read-aloud-container">
                                                                                    <div id="questionText"
                                                                                        class="resizeable-text"
                                                                                        shouldscroll="true"
                                                                                        style="font-size: 28px;">
                                                                                        @foreach ($questions as $question)
                                                                                            <div
                                                                                                class="text-container w-full h-full">
                                                                                                <div
                                                                                                    class="resizeable gap-x-2 question-text-color text-light font-bold">
                                                                                                    <p
                                                                                                        style="display:inline">
                                                                                                        <strong>
                                                                                                            {{ $question['question_text'] }}
                                                                                                        </strong>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full text-center rounded-t-lg mb-2 h-1/2">
                                                            <div class="flex flex-col gap-y-2 h-full">
                                                                <div class="options-grid flex w-full h-full gap-3"
                                                                    style="--totalOptions: 4;">
                                                                    @foreach ($question['options'] as $option)
                                                                        <button
                                                                            class="option p-1 rounded-lg relative option-1 hover:cursor-pointer is-selectable is-mcq flex-1"
                                                                            tabindex="0" role="option"
                                                                            data-cy="option-"
                                                                            data-correct="{{ $option['correct'] ? 'Correct' : 'Incorrect' }}"
                                                                            style="max-width: 25%; overflow-x: auto;">
                                                                            <div class="h-full rounded-lg relative">
                                                                                <div
                                                                                    class="bpl-container overflow-visible w-full th-black option-inner flex h-full">
                                                                                    <div class="bpl-prog-container"
                                                                                        style="display: none;">
                                                                                        <div class="bpl-progress"
                                                                                            style="transition-duration: 19.6s;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <span
                                                                                        class="bpl-content-container w-full"
                                                                                        style="display: inherit; flex-direction: inherit; align-items: inherit; justify-content: inherit;">
                                                                                        <div
                                                                                            class="absolute w-full top-0.5 flex justify-center items-center transition-opacity duration-200 top-shine">
                                                                                            <div
                                                                                                class="w-4/5 h-0.5 bg-gradient-to-r from-transparent via-ds-light-500-50 to-transparent">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="w-full h-full"
                                                                                            data-cy="read-aloud-container">
                                                                                            <div id="optionText"
                                                                                                class="resizeable-text"
                                                                                                style="font-size: 24px;">
                                                                                                <div
                                                                                                    class="text-container w-full">
                                                                                                    <div
                                                                                                        class="resizeable gap-x-2">
                                                                                                        <p
                                                                                                            style="display:inline">
                                                                                                            {{ $option['option_text'] }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                            </div><!---->
                                        </div><!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="qg_ui_overlay_game"></div>
            </div>
        </div>
        <div class="toast-manager" translate="no">
            <div class="transition"></div>
        </div>
    </div>
@endsection
@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
<style>
    .h-1/2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50%;
        width: 100%;
    }

    .question-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 60%;
        min-width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 20px;
    }

    .question-container .p-4 {
        padding: 2rem;
    }

    .question-container .resizeable-text {
        text-align: center;
        font-size: 28px;
    }

    .quiz-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        height: 100%;
    }

    .quiz-container-inner {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 20px;
    }

    #questionText {
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        color: #fff;
    }

    .options-grid {
        display: grid;
        grid-template-columns: repeat(var(--totalOptions, 4), 1fr);
        gap: 15px;
        width: 100%;
        height: auto;
        justify-items: center;
    }

    .option {
        padding: 10px;
        background-color: #f5f5f5;
        color: #333;
        font-size: 24px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100%;
        width: 100%;
        max-width: 100%;
    }

    .option:hover {
        cursor: pointer;
        background-color: #ddd;
    }

    #optionText {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        font-size: 24px;
        text-align: center;
    }

    .option.correct {
        background-color: green !important;
        color: white;
    }

    .option.incorrect {
        background-color: red !important;
        color: white;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .quiz-container-inner {
            padding: 10px;
        }

        .options-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .option {
            font-size: 18px;
            padding: 8px;
        }

        #questionText {
            font-size: 24px;
        }
    }

    @media (max-width: 480px) {
        .options-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .option {
            font-size: 16px;
            padding: 6px;
        }

        #questionText {
            font-size: 20px;
        }
    }

    .bg-blue {
        background-color: #007bff;
    }

    .bg-yellow {
        background-color: #ffc107;
    }

    .bg-pink {
        background-color: #ff66b2;
    }

    .bg-turquoise {
        background-color: #40e0d0;
    }

    /* Brightness effect */
    .brightened {
        filter: brightness(1.1);
    }

    .option:hover {
        filter: brightness(1.2);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const questions = @json($questions);
        const quizId = @json($id); // Access quizId


        let currentQuestionIndex = 0;
        let maxTime = 10; // Time limit for each question in seconds
        let maxPoints = 1000; // Maximum points for each question
        let timeRemaining = maxTime;
        let totalScore = 0;
        let interval;
        let answersArray = {};
        let timeExpired = false; // Flag to indicate if time has expired
        function showQuestion(index) {
            if (index >= questions.length) {
                submitResults();
                return;
            }

            let question = questions[index];
            document.getElementById('questionText').innerHTML = question.question_text;

            const optionsGrid = document.querySelector('.options-grid');
            optionsGrid.innerHTML = '';

            question.options.forEach((option) => {
                const button = document.createElement('button');
                button.className = 'option p-1 rounded-lg';
                button.textContent = option.option_text;
                button.dataset.correct = option.correct;
                button.dataset.optionId = option.id;
                button.onclick = function() {
                    handleOptionClick(button);
                };
                optionsGrid.appendChild(button);
            });


            document.querySelector('[role="current-question-number"]').textContent = index + 1;
            document.querySelector('[role="total-question-number"]').textContent = questions.length;

            startTimer(); // Start the timer for this question
        }

        function handleOptionClick(selectedButton) {
            clearInterval(interval); // Stop the timer

            const optionButtons = document.querySelectorAll('.option');
            optionButtons.forEach(button => {
                button.classList.remove('correct', 'incorrect');
            });

            const questionId = questions[currentQuestionIndex].id;

            if (timeExpired) {
                // Show correct answers when time is up
                optionButtons.forEach(button => {
                    if (button.dataset.correct == '1') {
                        button.classList.add('correct');
                    }
                });
            } else {
                // Handle normal option click
                const isCorrect = selectedButton.dataset.correct == '1';
                if (isCorrect) {
                    selectedButton.classList.add('correct');
                    alert('Correct! You earn points based on the time left.');
                    updateScore();
                } else {
                    selectedButton.classList.add('incorrect');
                    alert('Incorrect! The correct answer is shown in green.');

                    optionButtons.forEach(button => {
                        if (button.dataset.correct == '1') {
                            button.classList.add('correct');
                        }
                    });
                }

                // Update answersArray with the selected answer
                const selectedOptionId = selectedButton.dataset.optionId;
                answersArray[questionId] = selectedOptionId;
            }

            setTimeout(() => {
                currentQuestionIndex++;
                showQuestion(currentQuestionIndex);
            }, 1000);
        }

        function startTimer() {
            timeRemaining = maxTime;
            timeExpired = false;
            interval = setInterval(() => {
                if (timeRemaining > 0) {
                    timeRemaining--;
                    updateTimeBasedScoreDisplay();
                } else {
                    clearInterval(interval);
                    timeExpired = true;
                    alert('Time is up!');
                    handleOptionClick(null);
                }
            }, 1000);
        }

        function updateTimeBasedScoreDisplay() {
            const timeBasedScore = calculateTimeBasedScore();
            document.getElementById('current-question-score').textContent = timeBasedScore;
        }

        function calculateTimeBasedScore() {
            let timeFactor = timeRemaining / maxTime;
            return Math.round(maxPoints * timeFactor);
        }

        function updateScore() {
            const currentQuestionScore = calculateTimeBasedScore();
            totalScore += currentQuestionScore;

            // Update the total score display
            const scoreElement = document.getElementById('total-score');
            if (scoreElement) {
                scoreElement.textContent = totalScore;
            }

            // Update the score for the current question
            const currentScoreElement = document.getElementById('current-question-score');
            if (currentScoreElement) {
                currentScoreElement.textContent = currentQuestionScore;
            }
        }

        function submitResults() {
            const data = {
                quizz_id: quizId,
                total_questions: questions.length,
                answers: answersArray,
                time_taken: maxTime - timeRemaining
            };

            // Log the data that will be sent to the server
            console.log("Submitting data:", data);
            fetch('{{ route('quizzes.submitAnswer') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)

                })
                .then(response => {
                    console.log('Response status:', response.status);
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            throw new Error(
                            `Server error: ${errorData.message || 'Unknown error'}`);
                        });
                    }
                    return response.json();
                })

                .then(data => {
                    window.location.href = `{{ route('quizzes.results', ['quiz' => '__QUIZ_ID__']) }}`
                        .replace('__QUIZ_ID__', quizId);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
        showQuestion(currentQuestionIndex);
    });
</script>
