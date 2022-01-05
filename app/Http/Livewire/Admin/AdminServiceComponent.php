<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $scategories = ServiceCategory::simplePaginate(10);
        return view('livewire.admin.admin-service-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
