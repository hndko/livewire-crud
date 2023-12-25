<?php

namespace App\Livewire;

use App\Models\CustomerModel;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $nama_lengkap = '';
    public $email = '';
    public $no_telepon = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save(CustomerModel $customerModel)
    {
        $validated = $this->validate([
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email|unique:customer|max:255',
            'no_telepon' => 'required|numeric'
        ]);

        $customerModel->create($validated);
        $this->reset(); // Reset form fields
        session()->flash('message', 'Customer created successfully!');
    }
}
