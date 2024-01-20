<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\student\Student as Students;

class Student extends Component
{
    public $students, $name, $student_id;
    public $updateStudent = false;
    protected $listeners = [
        'deleteStudent'=>'destroy'
    ];
    // Validation Rules
    protected $rules = [
        'name'=>'required'
    ];
    public function render()
    {
        $this->students = Students::select('id','name')->get();
        return view('livewire.student');
    }
    public function resetFields(){
        $this->name = '';
    }
    public function store(){
        // Validate Form Request
        $this->validate();
        try{
            // Create Category
            Students::create([
                'name'=>$this->name
            ]);

            // Set Flash Message
            session()->flash('success','Student created successfully!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        }catch(\Exception $e){
            // Set Flash Message
            session()->flash('error','Something goes wrong while creating student!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
    }
    public function edit($id){
        $student = Students::findOrFail($id);
        $this->name = $student->name;
        $this->student_id = $student->id;
        $this->updateStudent = true;
    }
    public function cancel()
    {
        $this->updateStudent = false;
        $this->resetFields();
    }
    public function update(){
        // Validate request
        $this->validate();
        try{
            // Update category
            Students::find($this->student_id)->fill([
                'name'=>$this->name,
            ])->save();
            session()->flash('success','Student updated successfully!!');
            $this->cancel();
        }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating student!!');
            $this->cancel();
        }
    }
    public function destroy($id){
        try{
            Students::find($id)->delete();
            session()->flash('success',"Student deleted successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting student!!");
        }
    }
}
