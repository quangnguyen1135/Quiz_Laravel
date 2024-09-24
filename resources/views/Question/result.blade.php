@extends('layout.master')

@section('content')
<div class="app-content h-full w-full transition-all relative">
    <div class="relative bg-no-repeat bg-cover bg-center grid themed-background classic theme-classic bg-basecolor in-game-wrapper-container"
        style="background-image: url('https://cf.quizizz.com/themes/v2/classic/bg_image.jpg'); min-height: 641px;">
        <div class="w-full h-full relative">
            <!-- Header Section -->
            <div translate="no"
                class="app-header-container z-101 fixed top-0 left-0 right-0 p-2 sm:p-4 text-ds-light-500 text-base">
                <!-- Header content -->
            </div>

            <!-- Main content -->
            <div class="page-container without-app-header height-full" style="opacity: 1;">
                <div class="screen screen-summary relative min-h-full pt-18">
                    <div class="themed black screen-container rounded-t-xl">
                        <div class="main-section-title text-center">
                            <p class="font-medium text-base text-ds-light-500">Kết quả của bạn</p>
                        </div>
                        <div class="w-full text-center flex justify-center">
                            <div class="game-type-title-wrapper flex-view mt-2 inline-flex py-1.5 px-2.5 sm:py-1 sm:px-3 h-6 items-center bg-ds-light-500-10 rounded">
                                <i class="game-type-icon-user font-black text-[10px] text-center text-ds-light-500 mr-2 icon-fas-user"></i>
                                <div class="game-type-title text-xs text-ds-light-500 font-medium">Đánh giá solo.</div>
                            </div>
                        </div>
                        <div class="main-section justify-content-center">
                            <div class="top-section-wrapper">
                                <div class="top-section-container">
                                    <div class="text-ds-light-300 w-full flex justify-center pt-2 pb-6 font-bold text-xl">
                                        Xin chúc mừng, bạn đã hoàn thành bài kiểm tra.
                                    </div>
                                    <div class="user-data-container flex-view justify-between">
                                        <div class="top-section py-2 px-3">
                                            <div class="animated fadeIn anim-300-duration player-stats flex-view flex-col">
                                                <div class="player-name mb-0">
                                                    <span class="name">{{ auth()->user()->name ?? "Khách" }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accuracy-info-section flex-view flex-col">
                                        <div class="accuracy-bar-wrapper">
                                            <label class="accuracy-label font-medium text-xs text-ds-light-300">
                                                Câu đúng
                                            </label>
                                            <div class="accuracy-bar">
                                                @if ($result['total_questions'] > 0)
                                                    <div class="accuracy-success-fill" style="width: calc({{ ($result['correct_answers'] / $result['total_questions']) * 100 }}% - 2px);"></div>
                                                    <div class="accuracy-danger-fill" style="width: calc({{ (1 - ($result['correct_answers'] / $result['total_questions'])) * 100 }}% - 2px);"></div>
                                                    <div class="show-tooltip cursor-pointer" tabindex="-1" style="left: calc({{ ($result['correct_answers'] / $result['total_questions']) * 100 }}% - 18px);">
                                                        <div class="accuracy-label-tooltip">{{ ($result['correct_answers'] / $result['total_questions']) * 100 }}% </div>
                                                        <div class="content top apply-shadow size-xs">{{ $result['correct_answers'] }} / {{ $result['total_questions'] }} pts</div>
                                                    </div>
                                                @else
                                                    <div>No questions answered.</div>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <div class="accuracy-info-second-row flex-view">
                                            <div class="top-section info-container flex-view">
                                                <div class="value-and-title-container flex-view flex-col">
                                                    <span class="info-title font-medium text-xs text-ds-light-300">Điểm số</span>
                                                    <span class="player-score">{{ $result['score'] }}</span>
                                                </div>
                                                <div class="icon-wrapper score flex-view all-center">
                                                    <i class="icon-fas-coins"></i>
                                                </div>
                                            </div>
                                            <div class="top-section info-container flex-view">
                                                <div class="value-and-title-container flex-view flex-col">
                                                    <span class="info-title font-medium text-xs text-ds-light-300">Thời gian</span>
                                                    <span class="player-score">{{ $result['time_taken'] }} giây</span>
                                                </div>
                                                <div class="icon-wrapper score flex-view all-center">
                                                    <i class="icon-fas-hourglass-start"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions Section -->
                                <div class="bottom-section">
                                    <div class="action-btn-wrapper">
                                        <a href="{{ route('quizzes.start', ['quiz' => $result['quizz_id']]) }}" 
                                            class="cta_btn play-again-btn primary font-bold transition-all anim-ds-300 bg-ds-primary text-ds-light-500 hover:bg-ds-primary-hover active:bg-ds-primary-active">
                                             Chơi lại
                                         </a>
                                    </div>
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