<x-kasir-layout>

    <div class="container">

        @livewire('tutup-kasir', ['kasir' => $kasir])

    </div>

    <x-slot name='footer_script'>

        <script type="text/javascript">
            $('.inputNominal').mask("#.##0", {
                reverse: true
            });
        </script>

        <script>
            window.addEventListener('suksess_tutup', function(e) {
                notyf.success("Kasir Berhasil di tutup! Halaman Akan refresh setelah 5 detik");
                setTimeout(() => {
                    window.location.replace("{{ route('kasir.logout') }}")
                }, 5000);
            })
            window.addEventListener('error', function(e) {
                notyf.error(e.detail);
               
            })
           
        </script>

    </x-slot>

</x-kasir-layout>
