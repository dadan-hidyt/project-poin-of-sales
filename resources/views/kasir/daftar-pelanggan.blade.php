<x-kasir-layout>
    
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header py-2 border-1 border-bottom">
                        <h3 class="card-title mt-4">Daftar Pelanggan - Saung Teko</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            @livewire('kasir.pelanggan', ['pelanggan'=>$pelanggan])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-kasir-layout>