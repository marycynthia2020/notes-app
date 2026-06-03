@if(session('success'))
    <div id="toast"
         class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('toast')?.remove();
        }, 3000);
    </script>
@endif