<div>
    <form class="modal-content animate" wire:submit.prevent="registerNow" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <h2>Register</h2>
        </div>
        <div class="container d-flex justify-content-between flex-wrap py-2">
            <div class="inputgroup d-flex">
                <label>On Behalf </label>
                <select wire:model="on_behalf" name="">
                    <option value=" ">Select On Behalf</option>
                    @foreach ($on_behalf_select as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}
                        </option>
                    @endforeach
                    {{-- <option value="self">Self</option>
                    <option value="son">Son</option>
                    <option value="daughter">Daughter</option> --}}
                </select>
            </div>
            <div class="inputgroup d-flex">
                <label>Name of Person Who Created Profile (Optional) </label>
                <input type="text" wire:model="sibling_name" placeholder="Who Created Profile">
            </div>
            <div class="inputgroup d-flex">
                <label>Groom/Bride Name</label>
                <input type="text" wire:model="name" placeholder="Groom/Bride Name">
            </div>
            <div class="inputgroup d-flex">
                <label>Surname</label>
                <input type="text" wire:model="user_surname" placeholder="Surname">
            </div>
            <div class="inputgroup d-flex">
                <label>Gender</label>
                <select wire:model="gender" name="">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="inputgroup d-flex">
                <label>Email</label>
                <input type="Email" wire:model="email" placeholder="Email">
            </div>
            <div class="inputgroup d-flex">
                <label>DOB</label>
                <input type="date" wire:model="dob" name="">
            </div>
            <div class="inputgroup d-flex">
                <label>Mobile</label>
                <input type="tel" wire:model="phone" name="" placeholder="Mobile No.">
            </div>
            <div class="inputgroup d-flex">
                <label>Highest Degree</label>
                <input type="text" wire:model="degree" name="" placeholder="Highest Education">
            </div>
            <div class="inputgroup d-flex">
                <label>Area</label>
                <input type="text" wire:model="address" name="" placeholder="Area">
            </div>
            <div class="inputgroup d-flex">
                <label>Height</label>
                {{-- <select wire:model="height" name="">
                    <option value="">Select Height in CM</option>
                    @for ($i = 140; $i <= 190; $i++)

                    <option value="{{ $i }}">{{ $i }} CM
                    </option>
                    @endfor
                    <option value="5.0">5'0'{1.52 mts}</option>
                    <option value="5.1">5'0'{1.52 mts}</option>
                    <option value="5.2">5'0'{1.52 mts}</option>
                </select> --}}
                <select wire:model="height" name="">
                    <option value="">Select Height</option>
                    @for ($i = 140; $i <= 190; $i++)
                        @php
                            // Convert cm to inches
                            $inches = $i / 2.54;
                            // Get the feet part
                            $feet = floor($inches / 12);
                            // Get the remaining inches
                            $remainingInches = round($inches % 12);
                        @endphp
                        <option value="{{ $i }}">{{ $i }} CM
                            ({{ $feet }}'{{ $remainingInches }}")</option>
                    @endfor
                </select>

            </div>
            <div class="inputgroup d-flex">
                <label>Profession</label>
                {{-- <select wire:model="highest_education" name="">
                    <option value=" ">Select Highest Education</option>
                    @foreach ($highest_education_select as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}
                        </option>
                    @endforeach
                </select> --}}
                <input type="text" wire:model="occupation" name="" placeholder="Profession">
            </div>
            <div class="inputgroup d-flex">
                <label>Password</label>
                <input type="password" wire:model="password" name="" placeholder="Password">
            </div>
            <div class="inputgroup d-flex">
                <label>Confirm Password</label>
                <input type="password" wire:model="confirm_password" name="" placeholder="Confirm Password">
            </div>
        </div>
        <label for="" class="px-3">
            <input type="checkbox" wire:model="terms_condition" name="">By signing up, I agree to Term and
            Conditions</label>
        <div class="submitButtn"><button type="submit" value="Register">Register</button></div>
        <div class="text-center">Already A Member <a href="#">Log In</a></div>
    </form>
</div>
