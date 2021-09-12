<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCards extends Component
{
    public function render()
    {
        return <<<'blade'
        <div>
            <div class="card">
             <img src='' class="card-img-top" style="object-fit:contain;height:200px"/>
               <div class="card-body">
                  <h2>300/-</h2>
                  <h4>this is product title</h4>
                  <p class='small'>mobile</p>
               </div>
            </div> 
        </div>
        blade;
    }
}
