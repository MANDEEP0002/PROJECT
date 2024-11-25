 <!-- Assuming you have a layout -->
<x-layout>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">User Profile</h4>
        </div>
        <div class="card-body">
            <form id="user-profile-form">
                <!-- Username -->
                <div class="mb-3">
                    <label for="user-name" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user-name" name="name" value="{{ $user->name }}" readonly>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="user-email" class="form-label">User Email</label>
                    <input type="email" class="form-control" id="user-email" name="email" value="{{ $user->email }}" readonly>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="user-password" class="form-label">User Password</label>
                    <input type="password" class="form-control" id="user-password" value="**********" readonly>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <!-- Edit Button -->
                    <a href="{{ url('/editprofile', $user->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>

                    <!-- Delete Button -->
                    <a href="{{ url('/deleteprofile'.'/'. $user->id) }}" class="btn btn-danger">
                        <i class="bi bi-trash"></i> delete
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layout>