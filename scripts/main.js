document.addEventListener('DOMContentLoaded', () => {
    // --- DOM Elements ---
    const contactModal = document.getElementById('contactModal');
    const contactForm = document.getElementById('contactForm');
    const navbar = document.getElementById('navbar');

    // --- Navbar Scroll Effect ---
    if (navbar) {
        const handleScroll = () => {
            if (window.scrollY > 20) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Call once on load
    }

    // --- Theme Toggle Logic ---
    const themeToggles = document.querySelectorAll('#themeToggle, #mobileThemeToggle');
    
    // Check saved preference or system preference
    const savedTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
    
    if (savedTheme === 'light') {
        document.body.classList.add('light-theme');
    }

    themeToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('light-theme');
            const currentTheme = document.body.classList.contains('light-theme') ? 'light' : 'dark';
            localStorage.setItem('theme', currentTheme);
        });
    });

    // --- Bootstrap Modal Listeners ---
    if (contactModal) {
        // Focus first field when modal is open
        contactModal.addEventListener('shown.bs.modal', () => {
            const firstInput = contactForm.querySelector('input, textarea');
            if (firstInput) firstInput.focus();
        });
        
        // Reset errors when modal is hidden
        contactModal.addEventListener('hidden.bs.modal', () => {
            resetFormErrors();
        });
    }

    const closeModal = () => {
        const modalInstance = bootstrap.Modal.getInstance(contactModal);
        if (modalInstance) {
            modalInstance.hide();
        }
    };

    // --- Form Handling & Validation ---
    const validateEmail = (email) => {
        const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(String(email).toLowerCase());
    };

    const showError = (input, message) => {
        const formGroup = input.closest('.form-floating');
        if (formGroup) {
            formGroup.classList.add('has-error');
            const errorEl = formGroup.querySelector('.error-message');
            if (errorEl) {
                errorEl.textContent = message;
            }
        }
    };

    const clearError = (input) => {
        const formGroup = input.closest('.form-floating');
        if (formGroup) {
            formGroup.classList.remove('has-error');
        }
    };

    const resetFormErrors = () => {
        const formGroups = contactForm.querySelectorAll('.form-floating');
        formGroups.forEach(group => group.classList.remove('has-error'));
    };

    // Remove error classes when typing or focusing
    const formInputs = contactForm.querySelectorAll('input, textarea');
    formInputs.forEach(input => {
        input.addEventListener('input', () => {
            if (input.value.trim() !== '') {
                clearError(input);
            }
        });
        
        input.addEventListener('blur', () => {
            if (input.value.trim() === '') {
                showError(input, 'This field is required');
            } else if (input.type === 'email' && !validateEmail(input.value.trim())) {
                showError(input, 'Please enter a valid email address');
            }
        });
    });

    // Handle form submission
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        resetFormErrors();
        
        let isValid = true;
        const nameInput = document.getElementById('formName');
        const emailInput = document.getElementById('formEmail');
        const messageInput = document.getElementById('formMessage');

        // Validation Checks
        if (nameInput.value.trim() === '') {
            showError(nameInput, 'Name is required');
            isValid = false;
        }
        
        if (emailInput.value.trim() === '') {
            showError(emailInput, 'Email is required');
            isValid = false;
        } else if (!validateEmail(emailInput.value.trim())) {
            showError(emailInput, 'Please enter a valid email address');
            isValid = false;
        }
        
        if (messageInput.value.trim() === '') {
            showError(messageInput, 'Message cannot be empty');
            isValid = false;
        }

        if (!isValid) {
            // Shake the modal content slightly for visual error feedback
            const modalContent = contactModal.querySelector('.modal-content');
            if (modalContent) {
                modalContent.style.animation = 'none';
                setTimeout(() => {
                    modalContent.style.animation = 'shake 0.4s ease';
                }, 10);
            }
            return;
        }

        // Form is valid - Trigger submission micro-animation
        const submitBtn = contactForm.querySelector('.btn-submit-form');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnSpinner = submitBtn.querySelector('.spinner');
        
        // State: Loading
        submitBtn.disabled = true;
        btnText.textContent = 'Sending Message...';
        btnSpinner.style.display = 'inline-block';
        
        // Disable inputs
        formInputs.forEach(input => input.disabled = true);

        // Simulate API post (1.5 seconds delay)
        setTimeout(() => {
            // State: Success
            btnSpinner.style.display = 'none';
            submitBtn.classList.add('success');
            btnText.innerHTML = '&#10003; Message Sent Successfully!';
            
            // Wait 2 seconds, then close modal and reset form
            setTimeout(() => {
                closeModal();
                
                // Reset state for future interactions
                setTimeout(() => {
                    contactForm.reset();
                    formInputs.forEach(input => input.disabled = false);
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('success');
                    btnText.textContent = 'Send Message';
                }, 500);
            }, 2000);
        }, 1500);
    });
});

