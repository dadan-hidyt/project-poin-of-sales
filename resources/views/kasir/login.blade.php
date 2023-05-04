<x-kasir-login>
    @livewire('kasir.form-login')
    <x-slot name="script">
        <script>
            window.addEventListener('pin_salah',(e)=>{
                alert(e.detail)
            })
        </script>
    </x-slot>
</x-kasir-login>
