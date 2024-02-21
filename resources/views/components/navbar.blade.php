<header class="bg-gray-800 py-6 px-12 flex items-center">
    <form method="POST" id="logout-form" action="{{ route('logout') }}" class="ml-auto " x-data>
        @csrf
        <button type="button" class="text-red-500 hover:text-red-400" onclick="confirmLogout()">Cerrar sesión</button>
    </form>
</header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmLogout() {
        Swal.fire({
            title: '¿Estás seguro de cerrar sesión?',
            text: '¡Tu sesión actual se cerrará!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, cerrar sesión',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>
