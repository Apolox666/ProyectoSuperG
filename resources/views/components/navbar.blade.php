<header class="header bg-white shadow py-4 px-4">
    <div class="header-content flex items-center flex-row">
        
        <div class="flex ml-auto flex-row items-center gap-10">
            <form method="POST" id="logout-form" action="{{ route('logout') }}" class="ml-auto " x-data>
                @csrf
                <div class="flex text-red-600">
                   
                    <button type="button" class="text-red-600 hover:text-red-400 font-bold" onclick="confirmLogout()">Cerrar
                        sesión</button>
                        
                </div>
                

            </form>
        </div>
    </div>
</header>
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
