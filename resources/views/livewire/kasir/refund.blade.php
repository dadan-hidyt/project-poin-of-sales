
<form wire:submit.prevent='refund' action="">
    <input @class(['form-control mb-2', session()->has('error') ? 'is-invalid' : '']) wire:model='pin' type="text" placeholder="Silahkan ketikan pin anda untuk memperoses refund!" >
    @if (session()->has('error'))
        <p class="text-mutted text-danger">{{ session()->get('error') }}</p>
    @endif
    <button class="btn btn-warning">Prosess</button>
 </form>