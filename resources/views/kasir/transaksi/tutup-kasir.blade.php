<x-kasir-layout>

    <div class="container">
       
        @livewire('tutup-kasir', ['kasir'=>$kasir])

    </div>
    <x-slot name='footer_script'>

        <script type="text/javascript">
  
            $('.inputNominal').mask("#.##0", {reverse: true});
  
  
        </script>
  
    </x-slot>

</x-kasir-layout>