<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Attributes\On;

class ProfileCard extends Component
{
    use WithFileUploads;

    public $user;
    public $user_details;
    public $imageBase64;
    public $is_view_profile = false;


    // protected $listeners = ['store_profile_image' ];


    // protected $listeners = ['store_profile_image'];




    public function mount($id = null)
    {
        // if($id){

        // }

        if ($id) {
            $this->user = User::findOrFail($id);
            // $this->is_view_profile = false;
            $this->is_view_profile = true;
        } else {
            $this->user = Auth::user();
        }

        // $this->user = auth()->user();
        $this->user_details = $this->user->user_detail;

        // // Decode the base64 image data if it exists
        // if ($this->user_details->user_image) {
        //     $this->imageBase64 = base64_decode($this->user_details->user_image);
        // }
    }







    #[On('post-created')]
    public function store_profile_image($value = '')
    {


        if (isset($value) && $value != '') {
            // dd("asdasdasd", $value);
            // $this->validate();

            // Convert the image to Base64
            // $imageBase64File = base64_encode(file_get_contents($value));
            // dd($this->image_base64);
            // Handle the validated data
            // For example, save the image to the database or process it
            $this->user_details->user_image = $this->storeBase64($value);
            $this->user_details->save();

            $this->storeBase64($value);
            // dd("asdasdasd", $value);

            return session()->flash('message', 'Image uploaded successfully!');
            // Reset the form
            // $this->reset('image_base64');

        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function storeBase64($imageBase64)
    {

        // Split the data type and the base64 data
        $dataParts = explode(';', $imageBase64);
        // dd($dataParts, $imageBase64);
        // if (count($dataParts) != 2) {
        //     // Handle the error, e.g., throw an exception or return an error message
        //     throw new \Exception('Invalid base64 data provided.');
        // }

        $base64Parts = explode(',', $dataParts[1]);
        if (count($base64Parts) != 2) {
            // Handle the error, e.g., throw an exception or return an error message
            throw new \Exception('Invalid base64 data provided.');
        }

        $imageBase64 = base64_decode($base64Parts[1]);

        $imageName = auth()->user()->id . "_" . time() . '.png';
        $path = public_path() . "/storage/profile_img/" . $imageName;

        file_put_contents($path, $imageBase64);

        return $imageName;
    }


    public function render()
    {
        return view('livewire.profile-card');
    }
}
