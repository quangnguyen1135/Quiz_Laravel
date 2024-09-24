@extends('layout.master')
@section('content')
    <!-- Modal Layer -->
   
@endsection

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

    // Optionally, close the modal if clicking outside the modal content
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
});

</script>