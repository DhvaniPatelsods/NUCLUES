<?php

namespace App\Exports;
use App\Models\manage_complience_information;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class Expertreportgroup implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
     public function __construct($data)
    {
        $this->data = $data;
    }

        public function view(): View
    {
        return view('backend.report.clientgroup', ['data' => $this->data]);
    }
  
}
