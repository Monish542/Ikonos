<!doctype html>
<html lang="en">
    <head>
        <title>Ikonos-Technologies</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Ikonos is a modern, forward-thinking creative agency designing premium experiences for global brands. Contact us to kickstart your next project." />

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
        <link rel="alternate icon" type="image/jpeg" href="assets/favicon.jpg" />

        <!-- Bootstrap CSS v5.3.8 (Optional helper grid/utilities) -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        
        <!-- Custom Styles -->
        <link rel="stylesheet" href="styles/style.css" />
    </head>

    <body>
        <div class="bg-shapes-container">
            <!-- 3D Rotating Glass Cube (Large) -->
            <div class="cube-3d">
                <div class="cube-face cube-face-front"></div>
                <div class="cube-face cube-face-back"></div>
                <div class="cube-face cube-face-left"></div>
                <div class="cube-face cube-face-right"></div>
                <div class="cube-face cube-face-top"></div>
                <div class="cube-face cube-face-bottom"></div>
            </div>

            <!-- 3D Rotating Glass Cube (Small) -->
            <div class="cube-3d cube-small">
                <div class="cube-face cube-face-front"></div>
                <div class="cube-face cube-face-back"></div>
                <div class="cube-face cube-face-left"></div>
                <div class="cube-face cube-face-right"></div>
                <div class="cube-face cube-face-top"></div>
                <div class="cube-face cube-face-bottom"></div>
            </div>
            
            <!-- 3D Lit Glass Sphere (Large) -->
            <div class="sphere-3d"></div>

            <!-- 3D Lit Glass Sphere (Small) -->
            <div class="sphere-3d sphere-small"></div>
            
            <!-- 3D Gyro Rings (Large) -->
            <div class="gyro-3d">
                <div class="gyro-ring gyro-ring-1"></div>
                <div class="gyro-ring gyro-ring-2"></div>
                <div class="gyro-ring gyro-ring-3"></div>
            </div>

            <!-- 3D Gyro Rings (Small) -->
            <div class="gyro-3d gyro-small">
                <div class="gyro-ring gyro-ring-1"></div>
                <div class="gyro-ring gyro-ring-2"></div>
                <div class="gyro-ring gyro-ring-3"></div>
            </div>

            <!-- Glowing Background Blobs -->
            <div class="hero-shape hero-shape-1"></div>
            <div class="hero-shape hero-shape-2"></div>
            <div class="hero-shape hero-shape-3"></div>
        </div>
        <header>
            <nav class="header-navbar" id="navbar">
                <a href="#" class="nav-logo" id="navLogo">
                    IKONOS<span class="logo-dot"></span>
                </a>
                <ul class="nav-menu d-none d-md-flex" id="navMenu">
                    <li class="nav-item"><a href="#home" class="nav-link" id="navLinkHome">Home</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link" id="navLinkServices">Services</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link" id="navLinkAbout">About</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link" id="navLinkPortfolio">Portfolio</a></li>
                </ul>
                <div class="nav-cta d-none d-md-flex align-items-center gap-3" id="navCta">
                    <button class="btn-theme-toggle" id="themeToggle" aria-label="Toggle light/dark theme">
                        <!-- Sun (visible in dark mode) -->
                        <svg class="sun-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path></svg>
                        <!-- Moon (visible in light mode) -->
                        <svg class="moon-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
                    </button>
                    <button class="btn-contact-trigger" id="desktopCtaBtn" data-bs-toggle="modal" data-bs-target="#contactModal">Get in Touch</button>
                </div>
                <div class="d-flex d-md-none align-items-center gap-2">
                    <button class="btn-theme-toggle" id="mobileThemeToggle" aria-label="Toggle light/dark theme">
                        <svg class="sun-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path></svg>
                        <svg class="moon-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></svg>
                    </button>
                    <button class="mobile-toggle border-0 bg-transparent" id="mobileToggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>

            <!-- Offcanvas Mobile Navigation Menu -->
            <div class="offcanvas offcanvas-start border-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-between">
                    <a href="#" class="nav-logo m-0" id="offcanvasLogo">
                        IKONOS<span class="logo-dot"></span>
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
                    <ul class="offcanvas-nav-list list-unstyled text-center m-0">
                        <li class="offcanvas-nav-item mb-4"><a href="#home" class="offcanvas-nav-link" data-bs-dismiss="offcanvas">Home</a></li>
                        <li class="offcanvas-nav-item mb-4"><a href="#services" class="offcanvas-nav-link" data-bs-dismiss="offcanvas">Services</a></li>
                        <li class="offcanvas-nav-item mb-4"><a href="#about" class="offcanvas-nav-link" data-bs-dismiss="offcanvas">About</a></li>
                        <li class="offcanvas-nav-item mb-4"><a href="#portfolio" class="offcanvas-nav-link" data-bs-dismiss="offcanvas">Portfolio</a></li>
                        <li class="offcanvas-nav-item mt-4">
                            <button class="btn-contact-trigger" data-bs-toggle="modal" data-bs-target="#contactModal" data-bs-dismiss="offcanvas">Get in Touch</button>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <main>
            <section class="hero-section" id="home">
                <div class="hero-content">
                    <!-- Modern Glowing Tagline/Pills -->
                    <div class="hero-tag-pills mb-4 mt-5">
                        <span class="tag-pill"><span class="tag-dot"></span>Railway Consulting</span>
                        <span class="tag-pill"><span class="tag-dot"></span>IoT & Cabling</span>
                        <span class="tag-pill"><span class="tag-dot"></span>Strategic IT Advisory</span>
                    </div>

                    <h1 class="hero-title" id="heroTitle">Next Gen <span class="text-gradient" id="typewriter">IT Consulting</span> For Visionary Brands</h1>
                    <p class="hero-subtitle" id="heroSubtitle">Ikonos Technologies provides simple, unique and innovative end to end solutions to the clients. Our people have diverse skills and strong exposure in the industry, our team is committed, audacious in accepting new challenges and we push ourselves for client satisfaction.</p>
                    
                    <!-- Dual CTA Buttons -->
                    <div class="hero-ctas">
                        <div class="btn-hero-wrapper">
                            <button class="btn-hero-cta" id="heroCtaBtn" data-bs-toggle="modal" data-bs-target="#contactModal">Start Your Project</button>
                        </div>
                        <a href="#services" class="btn-secondary-hero">Explore Services &darr;</a>
                    </div>

                    <!-- Trust indicators / Client Logos -->
                    <!-- <div class="hero-trust">
                        <p class="trust-title">TRUSTED BY ACCELERATED ENTERPRISES</p>
                        <div class="trust-brands">
                            <span>Vortex SaaS</span>
                            <span>Aura Telemetry</span>
                            <span>Apex Cloud Systems</span>
                            <span>Sentinel Sec</span>
                            <span>Zenith Fintech</span>
                        </div>
                    </div> -->
                </div>
            </section>

            <!-- Services Section -->
            <section class="services-section pt-1 pb-2" id="services">
                <div class="container pt-1 pb-2">
                    <div class="row mb-5 text-center justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">Our Expertise</h2>
                            <p class="section-subtitle">We deliver highly tailored, end-to-end technical solutions designed to drive digital acceleration and business growth.</p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
                        <!-- Service 1: UI/UX Design -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path><path d="M2 12h20"></path></svg>
                                </div>
                                <h3 class="service-title">UI/UX Design</h3>
                                <p class="service-desc">Crafting intuitive, highly polished user interfaces and seamless, user-centric experiences optimized for conversion and brand engagement.</p>
                            </div>
                        </div>
                        <!-- Service 2: Software Development -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                </div>
                                <h3 class="service-title">Software Development</h3>
                                <p class="service-desc">Building custom enterprise software, cloud applications, and high-performance websites using state-of-the-art tech stacks.</p>
                            </div>
                        </div>
                        <!-- Service 3: Railway Consulting -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15l4-10h8l4 10H4z"></path><path d="M4 15v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4"></path><path d="M8 10h8"></path><path d="M9 21v-2"></path><path d="M15 21v-2"></path><circle cx="8" cy="15" r="1"></circle><circle cx="16" cy="15" r="1"></circle></svg>
                                </div>
                                <h3 class="service-title">Railway Consulting</h3>
                                <p class="service-desc">Specialized railway infrastructure engineering, trackside & optical cabling, smart IoT integration, telemetry, and automated signaling solutions.</p>
                            </div>
                        </div>
                        <!-- Service 4: Hardware Projects -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                                </div>
                                <h3 class="service-title">Hardware Projects</h3>
                                <p class="service-desc">Designing custom IoT solutions, embedded hardware components, firmware integration, and smart device configurations.</p>
                            </div>
                        </div>
                        <!-- Service 5: IT Consulting -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                </div>
                                <h3 class="service-title">IT Consulting</h3>
                                <p class="service-desc">Formulating IT roadmaps, system integrations, security compliance, cloud migrations, and tech architecture advisory.</p>
                            </div>
                        </div>
                        <!-- Service 6: Outsourced Software Development -->
                        <div class="col">
                            <div class="service-card h-100">
                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
                                </div>
                                <h3 class="service-title">Outsourced Software Dev</h3>
                                <p class="service-desc">Managing full-cycle product delivery through dedicated offshore engineering teams, keeping quality high and overhead low.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="about-section pt-5 pb-1" id="about">
                <div class="container pt-5 pb-1">
                    <div class="row align-items-center g-5">
                        <!-- Left Copy Column -->
                        <div class="col-lg-5">
                            <h2 class="section-title text-start mb-4">Crafting the Future of Technology</h2>
                            <p class="about-lead mb-4">Ikonos is a modern technology studio built on engineering excellence and infrastructure design. We help forward-thinking enterprises design products, engineer railway systems, and deploy smart hardware at scale.</p>
                            <p class="about-text mb-5">Whether you need end-to-end railway cabling and IoT trackside telemetry, custom hardware systems, or full outsourcing software engineering—we have the agility and competence to deliver.</p>
                            <div class="d-flex align-items-center gap-4 hero-ctas">
                                <button class="btn-contact-trigger" data-bs-toggle="modal" data-bs-target="#contactModal">Start a Project</button>
                                <a href="#portfolio" class="btn-secondary-link text-decoration-none">View Featured Work &rarr;</a>
                            </div>
                        </div>
                        <!-- Right Image Tiles Mosaic Column (Unordered / Staggered Layout for All 6 Services) -->
                        <div class="col-lg-7 d-none d-lg-block">
                            <div class="mosaic-tiles-grid grid-6-tiles">
                                <!-- Tile 1: UI/UX Design -->
                                <div class="mosaic-tile tile-stagger-1">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/ui_ux_design.webp" alt="UI/UX Design" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">UI/UX Design</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Tile 2: Software Development -->
                                <div class="mosaic-tile tile-stagger-2">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/software_dev.webp" alt="Software Development" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">Software Dev</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Tile 3: Railway Consulting -->
                                <div class="mosaic-tile tile-stagger-3">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/railway_cabling.webp" alt="Railway Consulting & Cabling" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">Railway Consulting</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Tile 4: IoT Hardware -->
                                <div class="mosaic-tile tile-stagger-4">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/iot_sensors.webp" alt="Hardware Projects" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">Hardware & IoT</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Tile 5: IT Consulting -->
                                <div class="mosaic-tile tile-stagger-5">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/it_consulting.webp" alt="IT Consulting" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">IT Consulting</span>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- Tile 6: Outsourced Software Dev -->
                                <div class="mosaic-tile tile-stagger-6">
                                    <div class="tile-image-wrapper">
                                        <img src="assets/outsourced_dev.webp" alt="Outsourced Software Dev" class="img-fluid tile-img" />
                                        <!-- <div class="tile-image-overlay">
                                            <span class="tile-badge-floating">Outsourced Dev</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio Section -->
            <section class="portfolio-section pt-5 pb-5" id="portfolio">
                <div class="container pt-5 pb-5">
                    <div class="row mb-5 text-center justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="section-title">Featured Work</h2>
                            <p class="section-subtitle">A glimpse of the software architectures, IoT hardware systems, and digital designs we've crafted for visionaries.</p>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <!-- Project 1 -->
                        <div class="col">
                            <div class="portfolio-card h-100">
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-1"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">VLRC</h3>
                                        <p class="portfolio-project-desc">Legal practice management system for timesheets, case tracking, user administration, invoicing, billing, reporting, and productivity.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>Timesheet Management</li>
                                                <li>Case Management</li>
                                                <li>User Management</li>
                                                <li>Invoices</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 2 -->
                        <div class="col">
                            <div class="portfolio-card h-100">
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-2"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">TURIYA</h3>
                                        <p class="portfolio-project-desc">An educational application for local Malaysian-Indian students to foster solidarity through the use of the national Malay language, enhancing multi-ethnic cooperation.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>Content Management</li>
                                                <li>Tests</li>
                                                <li>User Management</li>
                                                <li>Profile</li>
                                                <li>Certificates</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="col">
                            <div class="portfolio-card h-100">
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-3"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">RDMS — Railway Database Management System</h3>
                                        <p class="portfolio-project-desc">A Document Management portal for users affiliated with Railways to handle and manage documents across sections under respective railway divisions.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>User Management</li>
                                                <li>Document Classification by Division & Station</li>
                                                <li>Manage Code & Station Manuals</li>
                                                <li>Manage Equipment Manuals</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 4 -->
                        <div class="col">
                            <div class="portfolio-card h-100">
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-4"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">Railway Employees Examination System</h3>
                                        <p class="portfolio-project-desc">Automated digital examination and evaluation platform for railway personnel training and viva assessments.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>Viva Management System</li>
                                                <li>Upload Questions</li>
                                                <li>Manage Exams & Results</li>
                                                <li>Notify Trainees</li>
                                                <li>MCQ Image & Option Uploads</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 5 -->
                        <div class="col">
                            <div class="portfolio-card h-100">
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-5"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">IOCL — Indian Oil Corporation Limited</h3>
                                        <p class="portfolio-project-desc">Implemented network infrastructure and CCTV surveillance systems across operational locations, including installation, testing, and technical support.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>LAN Setup</li>
                                                <li>CCTV Installation</li>
                                                <li>Video Monitoring</li>
                                                <li>Network Security</li>
                                                <li>Technical Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 6 -->
                        <div class="col">
                            <div class="portfolio-card h-100 position-relative">
                                <span class="badge-ongoing-floating">Ongoing Project</span>
                                <div class="portfolio-img-container">
                                    <div class="portfolio-placeholder-img p-img-6"></div>
                                    <div class="portfolio-overlay">
                                        <h3 class="portfolio-project-title">Indian Railway Network & Surveillance</h3>
                                        <p class="portfolio-project-desc">Turnkey network infrastructure and CCTV surveillance implementation across operational railway divisions.</p>
                                        <div class="portfolio-features mt-2">
                                            <ul class="portfolio-features-list">
                                                <li>LAN Setup & Security</li>
                                                <li>CCTV Installation</li>
                                                <li>Locations: Hyderabad, Vijayawada, Hubballi</li>
                                                <li>Technical Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer-section py-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Brand Column -->
                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="nav-logo mb-3 d-inline-block text-decoration-none">
                            IKONOS<span class="logo-dot"></span>
                        </a>
                        <p class="footer-desc mb-4">We design, engineer, and consult on premium hardware systems and custom software environments for visionaries.</p>
                        <div class="footer-social-links d-flex gap-3 mb-3">
                            <a href="https://www.linkedin.com/company/ikonos-technologies/" target="_blank" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <!-- <a href="#" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                            </a> -->
                            <a href="mailto:info@ikonostechnologies.com" aria-label="Email Us">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </a>
                        </div>
                        <p class="footer-email m-0"><a href="mailto:info@ikonostechnologies.com" class="text-decoration-none text-light small fw-semibold">info@ikonostechnologies.com</a></p>
                    </div>
                    <!-- Services Links Column -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="footer-title mb-4">Our Services</h4>
                        <ul class="footer-links list-unstyled m-0">
                            <li class="mb-2"><a href="#services" class="text-decoration-none">UI/UX Design</a></li>
                            <li class="mb-2"><a href="#services" class="text-decoration-none">Software Development</a></li>
                            <li class="mb-2"><a href="#services" class="text-decoration-none">Railway Consulting</a></li>
                            <li class="mb-2"><a href="#services" class="text-decoration-none">Hardware Projects</a></li>
                            <li class="mb-2"><a href="#services" class="text-decoration-none">IT Consulting</a></li>
                            <li class="mb-2"><a href="#services" class="text-decoration-none">Outsourced Software Dev</a></li>
                        </ul>
                    </div>
                    <!-- Agency Links Column -->
                    <div class="col-lg-2 col-md-6">
                        <h4 class="footer-title mb-4">Company</h4>
                        <ul class="footer-links list-unstyled m-0">
                            <li class="mb-2"><a href="#about" class="text-decoration-none">About Us</a></li>
                            <li class="mb-2"><a href="#portfolio" class="text-decoration-none">Featured Work</a></li>
                            <li class="mb-2"><a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Contact CTA Column -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="footer-title mb-4">Start a Project</h4>
                        <p class="footer-cta-text mb-4">Ready to build something amazing? Connect with us and get a customized quote.</p>
                        <button class="btn-contact-trigger js-contact-trigger w-100" data-bs-toggle="modal" data-bs-target="#contactModal">Get in Touch</button>
                    </div>
                </div>
                <div class="footer-bottom border-top border-light mt-5 pt-4 text-center">
                    <p class="copyright m-0">&copy; 2026 IKONOS. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <!-- Contact Modal (Bootstrap Layout) -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <button type="button" class="btn-close-custom" id="modalCloseBtn" data-bs-dismiss="modal" aria-label="Close modal">&times;</button>
                    <div id="formBody">
                        <div class="modal-header-desc">
                            <h2 class="modal-title" id="modalTitle">Let's Create Together</h2>
                            <p class="modal-subtitle" id="modalSubtitle">Tell us about your project and we'll get back to you shortly.</p>
                        </div>
                        <form class="contact-form" id="contactForm" action="sendmail.php" method="POST" novalidate>
                            <div class="form-floating mb-3">
                                <input type="text" id="formName" name="name" class="form-control" placeholder="Full Name" required />
                                <label for="formName">Full Name</label>
                                <span class="error-message" id="nameError">This field is required</span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" id="formEmail" name="email" class="form-control" placeholder="Email Address" required />
                                <label for="formEmail">Email Address</label>
                                <span class="error-message" id="emailError">Please enter a valid email address</span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" id="formPhone" name="phone" class="form-control" placeholder="Phone Number" />
                                <label for="formPhone">Phone (Optional)</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea id="formMessage" name="message" class="form-control" placeholder="Project Details / Message" style="height: 110px;" required></textarea>
                                <label for="formMessage">Project Details / Message</label>
                                <span class="error-message" id="messageError">Message cannot be empty</span>
                            </div>
                            <div class="form-global-error mb-3" id="formGlobalError" style="display: none;"></div>
                            <button type="submit" class="btn-submit-form w-100" id="btnSubmitForm">
                                <span class="btn-text">Send Message</span>
                                <div class="spinner" id="formSpinner"></div>
                            </button>
                        </form>
                    </div>

                    <!-- Animated Success State View -->
                    <div class="form-success-container" id="formSuccessContainer" style="display: none;">
                        <div class="success-icon-wrapper mb-4">
                            <svg class="checkmark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark-circle" cx="26" cy="26" r="24" fill="none"/>
                                <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div>
                        <h3 class="success-title">Thank You!</h3>
                        <p class="success-message">Thank you for contacting <strong>IKONOS</strong>. Our team will reach you within 24hrs.</p>
                        <button type="button" class="btn btn-primary rounded-pill px-5 py-2.5 mt-3 btn-success-close" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>

        <!-- Custom JS Script -->
        <script src="scripts/main.js"></script>
    </body>
</html>
