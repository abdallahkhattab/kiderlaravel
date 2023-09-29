@if (session()->has('message'))
    <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050">
        <div id="myToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session()->get('message') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myToast = new bootstrap.Toast(document.getElementById('myToast'), {
                autohide: true,
                delay: 3000 // Adjust the time as needed
            });
            myToast.show();
        });
    </script>
@endif


