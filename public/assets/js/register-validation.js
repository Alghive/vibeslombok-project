document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.querySelector('form[action*="register"]');
    const emailInput = document.querySelector('input[name="email"]');
    const passwordInput = document.querySelector('input[name="password"]');
    const confirmPasswordInput = document.querySelector('input[name="password_confirmation"]');
    const nameInput = document.querySelector('input[name="name"]');

    // Email validation
    if (emailInput) {
        emailInput.addEventListener('blur', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                showError(this, 'Format email tidak valid');
            } else if (email) {
                // Check if email is available
                checkEmailAvailability(email);
            } else {
                clearError(this);
            }
        });
    }

    // Password validation
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            
            if (password.length < 8) {
                showError(this, 'Password minimal 8 karakter');
            } else {
                clearError(this);
            }
            
            // Check password confirmation
            if (confirmPasswordInput && confirmPasswordInput.value) {
                validatePasswordConfirmation();
            }
        });
    }

    // Password confirmation validation
    if (confirmPasswordInput) {
        confirmPasswordInput.addEventListener('input', validatePasswordConfirmation);
    }

    // Name validation
    if (nameInput) {
        nameInput.addEventListener('blur', function() {
            const name = this.value.trim();
            
            if (name.length < 2) {
                showError(this, 'Nama minimal 2 karakter');
            } else if (name.length > 255) {
                showError(this, 'Nama maksimal 255 karakter');
            } else {
                clearError(this);
            }
        });
    }

    // Form submission validation
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const errors = [];
            
            // Check required fields
            const requiredFields = ['name', 'email', 'password', 'password_confirmation'];
            requiredFields.forEach(field => {
                const input = document.querySelector(`input[name="${field}"]`);
                if (input && !input.value.trim()) {
                    errors.push(`${field} harus diisi`);
                    showError(input, `${field} harus diisi`);
                }
            });

            // Check terms agreement
            const termsCheckbox = document.querySelector('input[type="checkbox"]');
            if (termsCheckbox && !termsCheckbox.checked) {
                errors.push('Anda harus menyetujui terms & conditions');
                showError(termsCheckbox, 'Anda harus menyetujui terms & conditions');
            }

            if (errors.length > 0) {
                e.preventDefault();
                showFormErrors(errors);
            }
        });
    }

    function checkEmailAvailability(email) {
        fetch('/register/check-email', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.available) {
                showError(emailInput, data.message);
            } else {
                clearError(emailInput);
            }
        })
        .catch(error => {
            console.error('Error checking email:', error);
        });
    }

    function validatePasswordConfirmation() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        
        if (confirmPassword && password !== confirmPassword) {
            showError(confirmPasswordInput, 'Konfirmasi password tidak cocok');
        } else {
            clearError(confirmPasswordInput);
        }
    }

    function showError(element, message) {
        clearError(element);
        
        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback d-block';
        errorDiv.textContent = message;
        
        element.classList.add('is-invalid');
        element.parentNode.appendChild(errorDiv);
    }

    function clearError(element) {
        element.classList.remove('is-invalid');
        const errorDiv = element.parentNode.querySelector('.invalid-feedback');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    function showFormErrors(errors) {
        // Remove existing error alerts
        const existingAlert = document.querySelector('.alert-danger');
        if (existingAlert) {
            existingAlert.remove();
        }

        // Create error alert
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger';
        alertDiv.innerHTML = `
            <ul class="mb-0">
                ${errors.map(error => `<li>${error}</li>`).join('')}
            </ul>
        `;

        // Insert at the top of the form
        const form = document.querySelector('form');
        form.insertBefore(alertDiv, form.firstChild);
    }
});
