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
    const formBody = document.getElementById('formBody');
    const formSuccessContainer = document.getElementById('formSuccessContainer');

    if (contactModal) {
        // Focus first field when modal is open
        contactModal.addEventListener('shown.bs.modal', () => {
            if (formBody && formBody.style.display !== 'none') {
                const firstInput = contactForm.querySelector('input, textarea');
                if (firstInput) firstInput.focus();
            }
        });

        // Reset form and view state when modal is hidden
        contactModal.addEventListener('hidden.bs.modal', () => {
            resetFormErrors();
            if (contactForm) contactForm.reset();
            const submitBtn = contactForm ? contactForm.querySelector('.btn-submit-form') : null;
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('success');
                const btnText = submitBtn.querySelector('.btn-text');
                const btnSpinner = submitBtn.querySelector('.spinner');
                if (btnText) btnText.textContent = 'Send Message';
                if (btnSpinner) btnSpinner.style.display = 'none';
            }
            const formInputs = contactForm ? contactForm.querySelectorAll('input, textarea') : [];
            formInputs.forEach(input => input.disabled = false);
            
            if (formBody) formBody.style.display = 'block';
            if (formSuccessContainer) formSuccessContainer.style.display = 'none';
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

    const formGlobalError = document.getElementById('formGlobalError');

    const resetFormErrors = () => {
        const formGroups = contactForm.querySelectorAll('.form-floating');
        formGroups.forEach(group => group.classList.remove('has-error'));
        if (formGlobalError) {
            formGlobalError.style.display = 'none';
            formGlobalError.textContent = '';
        }
    };

    const showGlobalError = (message) => {
        if (formGlobalError) {
            formGlobalError.textContent = message;
            formGlobalError.style.display = 'block';
        }
    };

    // Remove error classes when typing or focusing
    const formInputs = contactForm.querySelectorAll('input, textarea');
    formInputs.forEach(input => {
        input.addEventListener('input', () => {
            if (input.value.trim() !== '') {
                clearError(input);
            }
            if (formGlobalError) {
                formGlobalError.style.display = 'none';
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

        // --- CRITICAL FIX: Construct FormData BEFORE disabling inputs! ---
        // Disabled form elements are excluded from FormData serialization in browser DOM.
        const formData = new FormData(contactForm);

        // Form is valid - Send AJAX POST to sendmail.php
        const submitBtn = contactForm.querySelector('.btn-submit-form');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnSpinner = submitBtn.querySelector('.spinner');

        // State: Loading
        submitBtn.disabled = true;
        btnText.textContent = 'Sending Message...';
        btnSpinner.style.display = 'inline-block';

        // Disable inputs during network request
        formInputs.forEach(input => input.disabled = true);

        fetch(contactForm.getAttribute('action') || 'sendmail.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                btnSpinner.style.display = 'none';
                if (data.status === 'success') {
                    if (formBody) formBody.style.display = 'none';
                    if (formSuccessContainer) {
                        formSuccessContainer.style.display = 'block';
                        // Restart SVG animations
                        const svg = formSuccessContainer.querySelector('.checkmark-svg');
                        if (svg) {
                            const newSvg = svg.cloneNode(true);
                            svg.parentNode.replaceChild(newSvg, svg);
                        }
                    }
                } else {
                    submitBtn.disabled = false;
                    formInputs.forEach(input => input.disabled = false);
                    btnText.textContent = 'Send Message';
                    showGlobalError(data.message || 'Failed to send message. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error submitting form:', error);
                btnSpinner.style.display = 'none';
                submitBtn.disabled = false;
                formInputs.forEach(input => input.disabled = false);
                btnText.textContent = 'Send Message';
                showGlobalError('An error occurred while sending. Please try again.');
            });
    });

    // --- Typewriter Effect ---
    const typewriter = document.getElementById('typewriter');
    if (typewriter) {
        const text = 'IT Consulting';
        typewriter.innerHTML = text.split('').map((char, index) => {
            return `<span class="char" style="transition-delay: ${index * 60}ms">${char === ' ' ? '&nbsp;' : char}</span>`;
        }).join('');

        // Trigger smooth reveal animation
        setTimeout(() => {
            typewriter.classList.add('active');
        }, 1200);
    }
});

