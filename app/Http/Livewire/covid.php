<?php

namespace App\Http\Livewire;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Livewire\Component;

class Covid extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedState = null;
    public $selectedState2 = null;
    public $selectedState3 = null;
    public $selectedState4 = null;
    public $selectedState5 = null;

    public function mount($selectedState5 = null)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();
        $this->selectedState5 = $selectedState5;

        if (!is_null($selectedState5)) { //jika rw di isi
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($selectedState5);//mencari data rw di DB
            if ($rw) { 
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();//mengambil data kelurahan melalui id_rw 
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();//mengambil data kecamtan melalui id_kelurahan
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kelurahan->kecamatan->id_kota)->get();//mengambil data kota melalui id_kecamatan
                $this->kota = Kota::where('id_provinsi', $rw->kelurahan->kecamatan->kota->id_provinsi)->get();//mengambil data provinsi melalui id_kota
                $this->selectedState =$rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->selectedState2 = $rw->kelurahan->kecamatan->id_kota;
                $this->selectedState3 = $rw->kelurahan->id_kecamatan;
                $this->selectedState4 = $rw->id_kelurahan;
            }
        }
    }

    public function render()
    {
        return view('livewire.covid');
    }

    public function updatedSelectedState($provinsi)
    {
        $this->kota = Kota::where('id_provinsi', $provinsi)->get();
        $this->selectedState2 = NULL;
        $this->selectedState3 = NULL;
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;
    }
    public function updatedSelectedState2($kota)
    {
        $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        $this->selectedState3 = NULL;
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;
    }

    public function updatedSelectedState3($kecamatan)
    {
        $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;
    }
    public function updatedSelectedState4($kelurahan)
    {
        if (!is_null($kelurahan)) {
            $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        }else{
            $this->selectedState5 = NULL;
        }
    }
}