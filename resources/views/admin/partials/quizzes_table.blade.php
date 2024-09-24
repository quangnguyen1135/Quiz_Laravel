<tbody>
    @foreach ($quizzes as $quizz)
        <tr>
            <td>{{ $quizz->id }}</td>
            <td>
                {{ $quizz->title }} - ({{ $quizz->questions_count }} )
            </td>
            <td>{{ $quizz->user->name }}</td>
            <td>{{ $quizz->level }}</td>
            <td>{{ $quizz->category->name }}</td>
            <td>{{ $quizz->language }}</td>
            <td>
                <img src="{{ asset($quizz->image) }}" alt="Image" width="50">
            </td>
            <td>{{ $quizz->is_published ? 'On' : 'Off' }}</td>
            <td>{{ $quizz->created_at }}</td>
            <td class="text-end">
                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle arrow-none" id="dLabel{{ $quizz->id }}" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="las la-ellipsis-v fs-20 text-muted"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel{{ $quizz->id }}">
                        <a class="dropdown-item" href="{{ route('admin.quizzes.detail_quiz', $quizz->id) }}">Detail</a>
                        
                        <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editQuizModal" onclick="editQuiz({{ $quizz->id }})">
                            Edit
                        </button>

                        <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this quiz?')) { document.getElementById('delete-form-{{ $quizz->id }}').submit(); }">Delete</a>
                        <form id="delete-form-{{ $quizz->id }}" action="{{ route('quizzes.destroy', $quizz->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
<!-- Pagination -->
<div class="mt-4">
    {{ $quizzes->links() }}
</div>