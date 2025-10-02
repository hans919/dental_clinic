<?php require_once '../app/views/layouts/header.php'; ?>

<div class="header">
    <h1>Edit Patient</h1>
    <a href="<?php echo APP_URL; ?>/public/patient/detail/<?php echo $data['patient']->id; ?>" class="btn btn-outline">Back to Profile</a>
</div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Update Patient Information</h2>
        <p class="card-description">Modify patient details</p>
    </div>
    <div class="card-content">
        <form method="POST" action="<?php echo APP_URL; ?>/public/patient/edit/<?php echo $data['patient']->id; ?>">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
                <div class="form-group">
                    <label for="first_name" class="form-label">First Name *</label>
                    <input type="text" name="first_name" id="first_name" class="form-input" value="<?php echo $data['patient']->first_name; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="last_name" class="form-label">Last Name *</label>
                    <input type="text" name="last_name" id="last_name" class="form-input" value="<?php echo $data['patient']->last_name; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="date_of_birth" class="form-label">Date of Birth *</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-input" value="<?php echo $data['patient']->date_of_birth; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="gender" class="form-label">Gender *</label>
                    <select name="gender" id="gender" class="form-select" required>
                        <option value="male" <?php echo $data['patient']->gender == 'male' ? 'selected' : ''; ?>>Male</option>
                        <option value="female" <?php echo $data['patient']->gender == 'female' ? 'selected' : ''; ?>>Female</option>
                        <option value="other" <?php echo $data['patient']->gender == 'other' ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="phone" class="form-label">Phone *</label>
                    <input type="tel" name="phone" id="phone" class="form-input" value="<?php echo $data['patient']->phone; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-input" value="<?php echo $data['patient']->email; ?>">
                </div>
                
                <div class="form-group">
                    <label for="blood_type" class="form-label">Blood Type</label>
                    <select name="blood_type" id="blood_type" class="form-select">
                        <option value="">Select Blood Type</option>
                        <option value="A+" <?php echo $data['patient']->blood_type == 'A+' ? 'selected' : ''; ?>>A+</option>
                        <option value="A-" <?php echo $data['patient']->blood_type == 'A-' ? 'selected' : ''; ?>>A-</option>
                        <option value="B+" <?php echo $data['patient']->blood_type == 'B+' ? 'selected' : ''; ?>>B+</option>
                        <option value="B-" <?php echo $data['patient']->blood_type == 'B-' ? 'selected' : ''; ?>>B-</option>
                        <option value="AB+" <?php echo $data['patient']->blood_type == 'AB+' ? 'selected' : ''; ?>>AB+</option>
                        <option value="AB-" <?php echo $data['patient']->blood_type == 'AB-' ? 'selected' : ''; ?>>AB-</option>
                        <option value="O+" <?php echo $data['patient']->blood_type == 'O+' ? 'selected' : ''; ?>>O+</option>
                        <option value="O-" <?php echo $data['patient']->blood_type == 'O-' ? 'selected' : ''; ?>>O-</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="status" class="form-label">Status *</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="active" <?php echo $data['patient']->status == 'active' ? 'selected' : ''; ?>>Active</option>
                        <option value="inactive" <?php echo $data['patient']->status == 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
                
                <div class="form-group" style="grid-column: span 2;">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-textarea"><?php echo $data['patient']->address; ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="emergency_contact_name" class="form-label">Emergency Contact Name</label>
                    <input type="text" name="emergency_contact_name" id="emergency_contact_name" class="form-input" value="<?php echo $data['patient']->emergency_contact_name; ?>">
                </div>
                
                <div class="form-group">
                    <label for="emergency_contact_phone" class="form-label">Emergency Contact Phone</label>
                    <input type="tel" name="emergency_contact_phone" id="emergency_contact_phone" class="form-input" value="<?php echo $data['patient']->emergency_contact_phone; ?>">
                </div>
                
                <div class="form-group" style="grid-column: span 2;">
                    <label for="allergies" class="form-label">Allergies</label>
                    <textarea name="allergies" id="allergies" class="form-textarea"><?php echo $data['patient']->allergies; ?></textarea>
                </div>
                
                <div class="form-group" style="grid-column: span 2;">
                    <label for="medical_conditions" class="form-label">Medical Conditions</label>
                    <textarea name="medical_conditions" id="medical_conditions" class="form-textarea"><?php echo $data['patient']->medical_conditions; ?></textarea>
                </div>
            </div>
            
            <div style="margin-top: 2rem;">
                <button type="submit" class="btn btn-primary btn-lg">Update Patient</button>
                <a href="<?php echo APP_URL; ?>/public/patient/detail/<?php echo $data['patient']->id; ?>" class="btn btn-outline btn-lg">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php require_once '../app/views/layouts/footer.php'; ?>
