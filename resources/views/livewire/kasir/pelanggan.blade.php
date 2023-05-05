<table class="table  datanew ">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Pelanggan</th>
            <th>No.Phone</th>
            <th>Point</th>
            {{-- <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->poin }}</td>
            {{-- <td class="d-flex align-items-center">

                <button type="button" class="btn btn-warning text-white btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPelanggan-{{ $item->id }}">
                    <i class="bx bx-edit-alt"></i>
                </button>
                <button type="button" class="btn btn-danger text-white btn-sm" id="confirm-color">
                    <i class="bx bx-trash"></i>
                </button>
            </td> --}}
        </tr>
        {{-- <div wire:ignore.self class="modal fade" id="editPelanggan-{{ $item->id }}" tabindex="-1" aria-labelledby="editPelangganLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-editPelanggan border-0">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editPelangganLabel">Edit Pelanggan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bx bx-x"></i></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <input value="{{ $item->nama }}" wire:model.defer='nama'  type="text" class="form-control" id="namaPelanggan" value="Jhoone Bae" placeholder="Nama Pelanggan">
                            </div>
                            <div class="mb-3">
                                <input value="{{ $item->no_hp }}" wire:model.defer='telp'  type="text" class="form-control" id="no.phone" value="+62891283213682" placeholder="No.Phone">
                            </div>
        
                            <button type="button" wire:click='ad' class="btn btn-primary w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        @endforeach
    </tbody>
</table>