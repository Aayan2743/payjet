<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="container mt-2" id="changeBox">
        <div class="card p-3 mb-3">
            <h4>
                <i class="bi bi-caret-left-fill"></i>
                Change Your Password
            </h4>

            <div class="container">
                <div class="row mt-4">
                    <form wire:submit.prevent="updatePassword">
                        <div class="col">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="newPassword"
                                aria-describedby="newPassword"
                                placeholder="Enter New Password"
                                wire:model="newPassword">
                            @error('newPassword')<span>{{$message}}</span>@enderror
                        </div>
                        <div class="col">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="confirmPassword"
                                aria-describedby="confirmPassword"
                                placeholder="Confirm Password"
                                wire:model="confirmPassword">
                            @error('confirmPassword')<span>{{$message}}</span>@enderror
                        </div>
                        <div class="col align-self-center mt-4">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

            </div>
        </div>
    </div>
</div>

