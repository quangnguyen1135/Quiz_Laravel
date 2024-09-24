@extends('admin.layout.master')

@section('content')
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="row justify-content-center">
                <!-- Quiz Questions -->
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    {{-- <h4 class="card-title">{{ $quiz->title }} - Questions</h4> --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Question Text</th>
                                            <th>Question Type</th>
                                            <th>Options</th>
                                            <th>Point</th>
                                            <th>Time</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($questions as $question)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $question->question_text }}</td>
                                                <td>{{ $question->question_type }}</td>

                                                <td>
                                                    <ul>
                                                        @foreach ($question->options as $option)
                                                            <li>{{ $option->option_text }}
                                                                {{ $option->correct ? '(Correct)' : '' }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>{{ $question->points }}</td>
                                                <td>{{ $question->time }}</td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#editQuestionModal"
                                                    onclick="loadQuestionData({{ $quiz->id }}, {{ $question->id }})">
                                                    <i class="las la-pen text-secondary font-16"></i>
                                                 </a>
                                                 
                                                    
                                                    {{-- <a href="{{ route('admin.questions.delete', $question->id) }}" onclick="return confirm('Are you sure you want to delete this question?')">
                                                <i class="las la-trash-alt text-secondary font-16"></i>
                                            </a> --}}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No questions found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Question Modal -->
    <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <form id="editQuestionForm" method="POST"
                    action="{{ route('admin.quizzes.update_qs', ['quizId' => $quizId, 'questionId' => '1']) }}">
              
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="questionText" class="form-label">Question Text</label>
                            <input type="text" class="form-control" id="questionText" name="questionText" required>
                        </div>

                        <div class="mb-3">
                            <label for="question_type" class="form-label">Question Type</label>
                            <select class="form-select" id="question_type" name="question_type" required>
                                <option value="multiple-choice">Multiple-choice</option>
                                <option value="true-false">True/False</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <label for="questionOptions" class="form-label">Options</label>
                            <div id="questionOptions">
                                <!-- Option inputs will be dynamically populated here -->
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="addOptionInput()">Add Option</button>
                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-5">
                                <label for="points">Điểm</label>
                                <select class="form-select" id="points" name="points" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="time">Thời gian</label>
                                <select class="form-select" id="time" name="time" required>
                                    <option value="30">30 seconds</option>
                                    <option value="60">1 minute</option>
                                    <option value="90">1 minute 30 seconds</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

<script>
function loadQuestionData(quizId, questionId) {
    $.ajax({
        url: '/admin/quizzes/' + quizId + '/questions/' + questionId,
        method: 'GET',
        success: function(response) {
            const question = response.question;

            // Set question text
            $('#questionText').val(question.question_text);
            $('#points').val(question.points);
            $('#time').val(question.time);

            // Set question type
            $('#question_type').val(question.question_type);

            // Populate the options
            $('#questionOptions').empty();
            question.options.forEach(function(option) {
                addOptionInput(option.option_text, option.correct, option.id);
            });

            // Set the form action for updating
            $('#editQuestionForm').attr('action', `/admin/quizzes/${quizId}/questions/${questionId}`);
        },
        error: function(error) {
            console.error('Error fetching question data:', error);
        }
    });
}

    function addOptionInput(optionText = '', isCorrect = false, optionId = null) {
        const optionHtml = `
        <div class="input-group mb-2">
            <input type="hidden" name="option_ids[]" value="${optionId || ''}">
            <input type="text" class="form-control" name="options[]" value="${optionText}" required>
            <div class="input-group-text">
                <input type="checkbox" name="correct[]" value="${optionId || ''}" ${isCorrect ? 'checked' : ''}> Correct
            </div>
            <button type="button" class="btn btn-danger" onclick="removeOptionInput(this)">Remove</button>
        </div>`;
        $('#questionOptions').append(optionHtml);
    }

    function removeOptionInput(element) {
        $(element).closest('.input-group').remove();
    }
</script>
