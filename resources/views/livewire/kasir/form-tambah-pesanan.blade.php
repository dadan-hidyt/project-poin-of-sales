<form wire:submit.prevent="pesan" action="POS.html">
    <select wire:model='type' class="form-select outline-none mb-3" aria-label="Default select example">
        <option selected>Pilih Metode Pesan</option>
        <option value="FREE_TABLE">Free Table</option>
        <option value="MEJA">Meja</option>
    </select>


    @if ($type !== 'FREE_TABLE')
        <select wire:model='id_meja' class="form-select outline-none my-3" aria-label="Default select example">
            <option selected>Pilih Meja</option>
            @foreach ($this->meja as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    @endif

    <!-- note -->
    <!-- <span class="note my-3" style="font-size:11px ;">Pilih meja muncul ketika select pesan Meja*</span> -->
    <!-- tutup note -->

    <select wire:model.defer='id_pelanggan' class="form-select outline-none my-3" aria-label="Default select example">
        <option selected>Pilih Pelanggan</option>
        <option value="">Tamu</option>
        @foreach ($pelanggan as $item)
        <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->kode_pelanggan }}</option>
        @endforeach
        
    </select>

    <div class="my-3">
        <input wire:keyup='cekKapasitasMeja($event.target.value)' wire:model='jumlah_pelanggan' type="number" placeholder="Jumlah Pelanggan" min="0" @class(['form-control', session()->has('error') ? 'is-invalid' : '' ])
            id="exampleInputPassword1">
            @if (session()->has('error'))
                <span class="form-text text-danger">Jumlah pelanggan melebihi kapasitas meja!</span>
            @endif
    </div>

    <div class="mt-3">
        <input type="submit" class="btn btn-warning text-white w-100" value="Tambah Pesanan">
    </div>

</form>
