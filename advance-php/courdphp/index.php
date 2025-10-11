<!-- Header -->
<?php require 'include/header.php'; ?>

<div class="container my-5 text-center">
    <form action="home.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto border p-4 rounded shadow">
        
        <!-- Username -->
        <div class="mb-3">
            <input type="text" name="user_name" class="form-control" placeholder="Enter your username" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <!-- File Upload -->
        <div class="mb-3">
            <input type="file" name="file" class="form-control" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>

        <!-- Gender -->
        <div class="mb-3 text-start">
            <label class="form-label d-block mb-2">Gender:</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" id="male" value="Male" class="form-check-input" required>
                <label for="male" class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="gender" id="female" value="Female" class="form-check-input">
                <label for="female" class="form-check-label">Female</label>
            </div>
        </div>

        <!-- Country -->
        <div class="mb-3 text-start">
            <label for="country" class="form-label">Select Your Country:</label>
            <select name="country" id="country" class="form-select" required>
                <option value="">-- Select Country --</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
            </select>
        </div>

        <!-- Submit -->
        <div class="mb-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
        </div>

    </form>
</div>

<!-- Footer -->
<?php require 'include/footer.php'; ?>
