<?php

namespace App\Livewire;

use App\Models\Salary;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CreateJob extends Component
{
    use WithFileUploads;

    public $title;
    public $salary;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company' => 'required|string',
        'last_day' => 'required|date',
        'description' => 'required|string',
        'image' => 'required|image',
    ];

    public function createJob()
    {
        $data = $this->validate();

        //guardar en R2
        $image = $this->image->store('jobs', 'public');
        dd($image);
        //Create job

        //Message

        //Redirect
    }

    public function render()
    {
        //Check DB salary
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.create-job', [
            'salaries' => $salaries,
            'categories' => $categories,
        ]);
    }
}
