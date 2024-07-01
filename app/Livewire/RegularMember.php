<?php

namespace App\Livewire;

use App\Models\RegularMember as ModelsRegularMember;
use Livewire\Component;
use Livewire\WithPagination;

class RegularMember extends Component
{
    public function render()
    {
        $regularMembers = ModelsRegularMember::paginate(10);

        return view('livewire.regular-member', [
            'regularMembers' => $regularMembers
        ]);
    }
}
