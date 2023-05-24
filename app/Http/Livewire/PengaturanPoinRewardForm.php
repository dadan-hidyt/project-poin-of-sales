<?php

namespace App\Http\Livewire;

use App\Models\PengaturanPoinReward;
use Livewire\Component;

class PengaturanPoinRewardForm extends Component
{
    public $default = 0;
    public $potongan_per_10_poin = 1000;
    protected $listeners = ['update_new'];

    public function update_new()
    {
        $this->default = PengaturanPoinReward::first()->potongan_per_10_poin;
    }
    public function mount()
    {
        $this->default = PengaturanPoinReward::first()->potongan_per_10_poin;
    }
    public function update()
    {
        if (PengaturanPoinReward::first()->update([
            'potongan_per_10_poin' => $this->potongan_per_10_poin,
        ])) {
            $this->emit('update_new');
        }
    }
    public function render()
    {
        return view('livewire.pengaturan-poin-reward-form');
    }
}
