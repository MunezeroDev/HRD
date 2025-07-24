<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HRD - Admin Dashboard</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- =====CHARTS JS ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
</head>

<body>
    <section class="section-container">
        <aside class="sidebar" id="sidebar">

            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <div class="logo">HRD</div>
                <div class="brand-text">Health Reach<br>Diagnostics</div>
            </div>

            <nav class="nav-menu scrollable-area">
                <ul>
                    <li class="nav-item active">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                        </svg>
                        <a class="nav-text">Dashboard</a>
                        <svg class="nav-icon drop-submenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"
                            fill="currentColor">
                            <path d="m280-400 200-200 200 200H280Z" />
                        </svg>
                    </li>

                    <ul class="submenu">
                        <li class="submenu-item aclie">Analytics</li>
                        <li class="submenu-item">Reports</li>
                        <li class="submenu-item">Statistics</li>
                        <li class="submenu-item">Insights</li>
                    </ul>

                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                        <a class="nav-text">Patients</a>
                    </li>

                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                        </svg>
                        <a class="nav-text">Reports</a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"
                            class="nav-icon drop-submenu">
                            <path d="m280-400 200-200 200 200H280Z" />
                        </svg>
                    </li>

                    <ul class="submenu">
                        <li class="submenu-item">Monthly Reports</li>
                        <li class="submenu-item">Annual Reports</li>
                        <li class="submenu-item">Custom Reports</li>
                    </ul>

                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                        </svg>
                        <a class="nav-text">Appointments</a>
                    </li>

                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                        <a class="nav-text">Settings</a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor"
                            class="nav-icon drop-submenu">
                            <path d="m280-400 200-200 200 200H280Z" />
                        </svg>
                    </li>

                    <ul class="submenu">
                        <li class="submenu-item">General Settings</li>
                        <li class="submenu-item">User Management</li>
                        <li class="submenu-item">Security</li>
                        <li class="submenu-item">Preferences</li>
                        <li class="submenu-item">General Settings</li>
                        <li class="submenu-item">User Management</li>
                        <li class="submenu-item">Security</li>
                        <li class="submenu-item">Preferences</li>
                    </ul>

                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>

                        <a class="nav-text">Patients</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Floating submenu for collapsed sidebar -->
        <ul class="floating-submenu" id="floatingSubmenu">
            <li class="submenu-item">Sample Item 1</li>
            <li class="submenu-item">Sample Item 2</li>
            <li class="submenu-item">Sample Item 3</li>
        </ul>


        <!-- Main Content -->
        <main class="main-content" id="mainContent">

            <!-- Top Bar -->
            <article class="topbar">
                <div class="toggle-section">
                    <button class="sidebar-toggle" id="sidebarToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="hamburger">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg>
                    </button>
                    <h1 class="topbar-title">Dashboard</h1>
                </div>

                <div class="search-container">
                    <div class="search-wrapper">
                        <input type="text" class="search-input" placeholder="Search patients, appointments, doctors..."
                            id="searchInput">
                        <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="M21 21l-4.35-4.35"></path>
                        </svg>
                        <div class="search-results" id="searchResults"></div>
                    </div>
                </div>


                <!-- User drop down menu -->
                <section class="user-notification-sect">
                    <div class="notification-container">
                        <button class="notification-trigger" id="notificationTrigger">
                            <svg class="notification-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="notification-badge" id="notificationBadge">4</span>
                        </button>

                        <div class="notification-dropdown" id="notificationDropdown">
                            <div class="notification-header">
                                <h3 class="notification-title">Notifications</h3>
                                <div class="notification-actions">
                                    <button class="action-btn" title="Refresh">
                                        <svg viewBox=" 0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="23 4 23 10 17 10"></polyline>
                                            <polyline points="1 20 1 14 7 14"></polyline>
                                            <path
                                                d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15">
                                            </path>
                                        </svg>
                                    </button>
                                    <button class="action-btn" title="Settings">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="notification-list" id="notificationList">
                                <!-- Sample notifications -->
                                <div class="notification-item urgent">
                                    <div class="notification-icon-wrapper urgent">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                    </div>
                                    <div class="notification-content">
                                        <div class="notification-text">ICU beds at 95% capacity</div>
                                        <div class="notification-time">5 min ago</div>
                                    </div>
                                </div>

                                <div class="notification-item warning">
                                    <div class="notification-icon-wrapper warning">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                            </path>
                                            <line x1="12" y1="9" x2="12" y2="13"></line>
                                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                        </svg>
                                    </div>
                                    <div class="notification-content">
                                        <div class="notification-text">Dr. Smith license expires in 30 days</div>
                                        <div class="notification-time">1 hour ago</div>
                                    </div>
                                </div>

                                <div class="notification-item info">
                                    <div class="notification-icon-wrapper info">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                        </svg>
                                    </div>
                                    <div class="notification-content">
                                        <div class="notification-text">Monthly audit scheduled for next week</div>
                                        <div class="notification-time">2 hours ago</div>
                                    </div>
                                </div>

                                <div class="notification-item urgent">
                                    <div class="notification-icon-wrapper urgent">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                    </div>
                                    <div class="notification-content">
                                        <div class="notification-text">Emergency generator maintenance due</div>
                                        <div class="notification-time">3 hours ago</div>
                                    </div>
                                </div>
                            </div>

                            <div class="notification-footer">
                                <button class="view-all-btn">
                                    View All Notifications
                                </button>
                            </div>
                        </div>
                    </div>



                    <div class="user-dropdown" id="userDropdown">
                        <button class="user-trigger">
                            <div class="user-avatar">A</div>
                            <div class="user-info">
                                <a class="user-name">Admin User</a>
                                <a class="user-role">Administrator</a>
                            </div>
                            <svg class="chevron" viewBox="0 0 20 20">
                                <path
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>

                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <div class="dropdown-user-info">
                                    <div class="dropdown-avatar">A</div>
                                    <div class="dropdown-user-details">
                                        <h4>Admin User</h4>
                                        <p>admin@company.com</p>
                                        <div class="status-indicator">
                                            <div class="status-dot"></div>
                                            <a class="status-text">Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                                </svg>
                                My Profile
                            </button>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path
                                        d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" />
                                </svg>
                                Account Settings
                            </button>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                Billing
                            </button>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                </svg>
                                Team Management
                            </button>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Preferences
                            </button>

                            <div class="dropdown-divider"></div>

                            <button class="dropdown-item">
                                <svg viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd" />
                                </svg>
                                Help & Support
                            </button>

                            <button class="dropdown-item danger">
                                <svg viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 01-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                Sign Out
                            </button>
                        </div>
                    </div>
                </section>


            </article>

            <!-- Quick Action Buttons Section -->
            <section class="quick-actions">
                <button type="button" class="quick-action-btn new-patient">
                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    <span>New Patient</span>
                </button>

                <button class="quick-action-btn schedule-appointment">
                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>Schedule Appointment</span>
                </button>

                <button class="quick-action-btn emergency-admission">
                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22,4 12,14.01 9,11.01"></polyline>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <span>Emergency Admission</span>
                </button>

                <button class="quick-action-btn lab-results">
                    <svg class=" action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14,2 14,8 20,8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10,9 9,9 8,9"></polyline>
                    </svg>
                    <span>Enter Lab Results</span>
                </button>

                <button class="quick-action-btn generate-invoice">
                    <svg class="action-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14,2 14,8 20,8"></polyline>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                        <line x1="12" y1="12" x2="12" y2="18"></line>
                    </svg>
                    <span>Generate Invoice</span>
                </button>

            </section>

            <div class="content scrollable-area ">

                <div class="dashboard-content">
                    <!-- Welcome Section -->
                    <div class="welcome-section">
                        <h2 class="welcome-title">Welcome to Health Reach Diagnostics Management System</h2>
                        <p class="welcome-subtitle">Last updated:
                            <span id="last-updated">12:30:32 AM</span>
                        </p>
                    </div>

                    <!-- Enhanced Stats Grid -->
                    <div class="stats-grid-enhanced">
                        <!-- Total Patients -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon patients">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">156</div>
                                <div class="stat-label">Total Patients</div>
                                <div class="stat-trend positive">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                        <polyline points="17 6 23 6 23 12"></polyline>
                                    </svg>
                                    <span>+8%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Active Doctors -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon doctors">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17,11 19,13 23,9"></polyline>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">24</div>
                                <div class="stat-label">Active Doctors</div>
                                <div class="stat-trend positive">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                        <polyline points="17 6 23 6 23 12"></polyline>
                                    </svg>
                                    <span>+2%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Today's Appointments -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon appointments">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">89</div>
                                <div class="stat-label">Today's Appointments</div>
                                <div class="stat-trend negative">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                        <polyline points="17 18 23 18 23 12"></polyline>
                                    </svg>
                                    <span>-5%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Available Beds -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon beds">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M2 4v16"></path>
                                    <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                                    <path d="M2 17h20"></path>
                                    <path d="M6 8v9"></path>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">12</div>
                                <div class="stat-label">Available Beds</div>
                                <div class="stat-trend negative">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                        <polyline points="17 18 23 18 23 12"></polyline>
                                    </svg>
                                    <span>-15%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Daily Revenue -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon revenue">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">$24,500</div>
                                <div class="stat-label">Daily Revenue</div>
                                <div class="stat-trend positive">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                        <polyline points="17 6 23 6 23 12"></polyline>
                                    </svg>
                                    <span>+12%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Critical Alerts -->
                        <div class="stat-card-enhanced">
                            <div class="stat-icon alerts">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                    </path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">3</div>
                                <div class="stat-label">Critical Alerts</div>
                                <div class="stat-trend neutral">
                                    <svg class="trend-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                        <polyline points="17 6 23 6 23 12"></polyline>
                                    </svg>
                                    <span>+1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <section class="charts-grid">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Admissions vs Discharges</h3>
                            <div class="chart-controls">
                                <button type="button" class="icon-button">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7,10 12,15 17,10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </button>
                                <select>
                                    <option>This Week</option>
                                    <option>This Month</option>
                                    <option>This Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="chart-container">
                            <canvas id="admissionsChart"></canvas>
                        </div>
                    </div>

                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Department Patient Load</h3>
                            <button class="icon-button">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7,10 12,15 17,10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="chart-container">
                            <canvas id="departmentChart" width="595" height="269"
                                style="display: block; box-sizing: border-box; height: 298.889px; width: 661.111px;"></canvas>
                        </div>
                    </div>
                </section>

                <!-- footer -->
                <footer class="footer">
                    <p>&copy; 2025 Health Reach Diagnostics. All rights reserved.</p>
                </footer>
            </div>

        </main>
    </section>

    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
</body>

</html>