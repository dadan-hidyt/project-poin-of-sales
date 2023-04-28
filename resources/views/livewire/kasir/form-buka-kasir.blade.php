  <!-- Modal Detail Meja -->

  <div wire:ignore class="modal fade" id="bukaKasir" tabindex="-1" aria-labelledby="bukaKasirLabel"
      data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-bukaKasir" style="width:360px;">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="modal-title d-flex align-items-center" id="bukaKasirLabel">
                      <i class="bx bx-dish fs-4 me-2"></i>
                      <div class="fs-6" style="margin-top: 2px;">
                          <span>Buka Kasir</span>
                          <span> - </span>
                          <span> Petugas Kasir </span>
                      </div>
                  </div>
                  @if ($status === false)
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                              class="bx bx-x"></i></button>
                  @endif
              </div>
              <div class="modal-body py-4">

                  <form wire:submit.prevent='submit' action="#" class="buka-kasir_form">
                      <div>
                          <label for="Kas awal" class="mb-2">
                              Kas Awal
                          </label>
<<<<<<< HEAD
                          <input wire:model.defer='kas_awal' type="text" @class(['form-control inputNominal', $errors->has('kas_awal') ? 'is-invalid' : ''])
                              id="inputNominal" aria-describedby="kasHelp">
=======
                          <input wire:model.defer='kas_awal' type="text" class="form-control inputNominal text-end"
                              id="inputNominal" aria-describedby="kasHelp" placeholder="Rp.">
>>>>>>> f8023c47a02da58b4de73eab8a141abe20ca9923
                          <div id="kasHelp" class="form-text mt-2">Uang Kas awal yang dipegang oleh kasir</div>
                        @error('kas_awal')
                            <span class='text-danger'>{{$message}}</span>
                        @enderror
                      </div>


              </div>
              <div class="modal-footer border-top py-4">
                  <div class="container d-flex align-item-center justify-content-between">
                      <button class="btn btn-primary p-1 px-2">Buka kasir</button>
                      </form>
                      <div
                          class="buka-kasir_date d-flex align-items-center justify-content-start flex-row-reverse opacity-7">
                          <i class="bx bx-calendar fs-5 ms-2"></i>
                          <span>{{ now() }}</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Tutup Modal Tambah Pesanan -->


  <x-slot name='footer_script'>

      <script type="text/javascript">
          $(window).on('load', function() {
              @if ($status === true)
                  $('#bukaKasir').modal('show');
              @else
                  $('#bukaKasir').modal('hide');
              @endif
          });
          //hide modal jika sukses atau  brehasil

          window.addEventListener('success',function(){
            alert("Kasir berhasil di buka pada ");
            $('#bukaKasir').modal('hide')
          })

          $('.inputNominal').mask("#.##0", {reverse: true});


      </script>

  </x-slot>
