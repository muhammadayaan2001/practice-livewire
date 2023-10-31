        {{-- Create Employee Form --}}
        <form wire:submit.prevent="submitEmployee">
            <h2 class="display-6 mb-3">Create New Employee</h2>
            <div class="row g-2">
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="first_name" class="form-control" id="floatingInputGrid"
                            placeholder="first Name">
                        <label for="floatingInputGrid">First Name</label>
                        @error('first_name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="last_name" class="form-control" id="floatingInputGrid"
                            placeholder="Last Name">
                        <label for="floatingInputGrid">Last Name</label>
                        @error('last_name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="email" wire:model="email" class="form-control" id="floatingInputGrid"
                            placeholder="name@example.com">
                        <label for="floatingInputGrid">Email address</label>
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <select class="form-select" wire:model="gender" id="floatingSelectGrid"
                            aria-label="Floating label select example">
                            <option>Select Gender</option>
                            <option selected value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="floatingSelectGrid">Gender</label>
                        @error('gender')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" wire:model="address" placeholder="Leave a employee address here" id="floatingTextarea2"
                    style="height:130px; max-height: 150px"></textarea>
                <label for="floatingTextarea2">Address</label>
                @error('address')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="row g-2">
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="phone" class="form-control" id="floatingInputGrid"
                            placeholder="Phone">
                        <label for="floatingInputGrid">Phone</label>
                        @error('phone')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="age" class="form-control" id="floatingInputGrid"
                            placeholder="Age">
                        <label for="floatingInputGrid">Age</label>
                        @error('age')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="job_title" class="form-control" id="floatingInputGrid"
                            placeholder="Job Title">
                        <label for="floatingInputGrid">Job Title</label>
                        @error('job_title')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-floating">
                        <input type="text" wire:model="salary" class="form-control" id="floatingInputGrid"
                            placeholder="Salary">
                        <label for="floatingInputGrid">Salary</label>
                        @error('salary')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
