<form action="" method="post">
    <div class="row">
        @forelse ($this->strukModel as $item)
        <div class="col-6">
            <div class="form-group">
                <label>{{ $item->nama }}</label>
                <div class="input-group">
                    <input wire:model="struk.{{ $item->key }}" type="text" class="form-control" aria-label="Text input with checkbox" />
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <label class="checkbox checkbox-inline">
                                <input type="checkbox" />
                                <span></span>
                            </label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>
</form>

<script>
    window.onload = function(){

    }
</script>
