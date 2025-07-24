
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
const floatingSubmenu = document.getElementById('floatingSubmenu');

sidebarToggle.addEventListener('click', function () {
    sidebar.classList.toggle('collapsed');

    const openItems = document.querySelectorAll('.nav-item.open');
    openItems.forEach(item => {
        item.classList.remove('open');
    });
    floatingSubmenu.classList.remove('show');
});

const navItems = document.querySelectorAll('.nav-item');
let activeFloatingSubmenu = null;

navItems.forEach((item, index) => {
    const toggleBtn = item.querySelector('.drop-submenu');
    const submenu = item.nextElementSibling;

    if (toggleBtn && submenu && submenu.classList.contains('submenu')) {
        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();

            if (sidebar.classList.contains('collapsed')) {
                handleCollapsedSubmenu(item, submenu, e);
                return;
            }

            navItems.forEach(i => {
                if (i !== item && i.classList.contains('open')) {
                    i.classList.remove('open');
                }
            });

            item.classList.toggle('open');
        });

        item.addEventListener('click', (e) => {
            if (!e.target.closest('.drop-submenu')) {
                navItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                if (sidebar.classList.contains('collapsed')) {
                    return;
                }
            }
        });
    } else {
        item.addEventListener('click', (e) => {
            navItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');

            navItems.forEach(i => {
                if (i.classList.contains('open')) {
                    i.classList.remove('open');
                }
            });
            floatingSubmenu.classList.remove('show');
        });
    }
});

function handleCollapsedSubmenu(item, submenu, e) {
    const rect = item.getBoundingClientRect();
    const sidebarRect = sidebar.getBoundingClientRect();
    const submenuItems = submenu.querySelectorAll('.submenu-item');

    floatingSubmenu.innerHTML = '';

    submenuItems.forEach(submenuItem => {
        const clonedItem = submenuItem.cloneNode(true);
        floatingSubmenu.appendChild(clonedItem);
    });

    const itemCenterY = rect.top + (rect.height / 2);
    const submenuHeight = floatingSubmenu.offsetHeight || 120;

    floatingSubmenu.style.top = Math.max(0, itemCenterY - (submenuHeight / 2)) + 'px';
    floatingSubmenu.style.left = sidebarRect.width + 'px';

    // Toggle floating submenu
    if (activeFloatingSubmenu === item) {
        floatingSubmenu.classList.remove('show');
        activeFloatingSubmenu = null;
    } else {
        floatingSubmenu.classList.add('show');
        activeFloatingSubmenu = item;
    }
}

document.addEventListener('click', (e) => {
    if (!e.target.closest('.sidebar') && !e.target.closest('.floating-submenu')) {
        floatingSubmenu.classList.remove('show');
        activeFloatingSubmenu = null;
    }
});

navItems.forEach((item, index) => {
    const submenu = item.nextElementSibling;

    if (submenu && submenu.classList.contains('submenu')) {
        item.addEventListener('mouseenter', (e) => {
            if (sidebar.classList.contains('collapsed')) {
                handleCollapsedSubmenu(item, submenu, e);
            }
        });

        item.addEventListener('mouseleave', (e) => {
            if (sidebar.classList.contains('collapsed')) {
                setTimeout(() => {
                    if (!floatingSubmenu.matches(':hover') && !item.matches(':hover')) {
                        floatingSubmenu.classList.remove('show');
                        activeFloatingSubmenu = null;
                    }
                }, 100);
            }
        });
    }
});

floatingSubmenu.addEventListener('mouseenter', () => {
    if (sidebar.classList.contains('collapsed')) {
        floatingSubmenu.classList.add('show');
    }
});

floatingSubmenu.addEventListener('mouseleave', () => {
    if (sidebar.classList.contains('collapsed')) {
        setTimeout(() => {
            if (activeFloatingSubmenu && !activeFloatingSubmenu.matches(':hover')) {
                floatingSubmenu.classList.remove('show');
                activeFloatingSubmenu = null;
            }
        }, 100);
    }
});

// Handle submenu item clicks
document.addEventListener('click', (e) => {
    if (e.target.classList.contains('submenu-item')) {
        document.querySelectorAll('.submenu-item').forEach(item => {
            item.classList.remove('active');
        });
        e.target.classList.add('active');
    }
});


function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('open');
}

function handleMenuClick(action) {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.remove('open');

}

document.addEventListener('click', function (event) {
    const dropdown = document.getElementById('userDropdown');
    if (!dropdown.contains(event.target)) {
        dropdown.classList.remove('open');
    }
});

// Close dropdown on escape key
document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        document.getElementById('userDropdown').classList.remove('open');
    }
});


// SEARCH  FUNCTIONALITY 


// NOTIFICATION FUNCTIONALITY 
document.addEventListener('DOMContentLoaded', function () {
    const notificationTrigger = document.getElementById('notificationTrigger');
    const notificationContainer = document.querySelector('.notification-container');
    const notificationDropdown = document.getElementById('notificationDropdown');

    // Sample notification data
    const notifications = [
        {
            id: 1,
            type: 'urgent',
            text: 'ICU beds at 95% capacity',
            time: '5 min ago',
            timestamp: Date.now() - 5 * 60 * 1000
        },
        {
            id: 2,
            type: 'warning',
            text: 'Dr. Smith license expires in 30 days',
            time: '1 hour ago',
            timestamp: Date.now() - 60 * 60 * 1000
        },
        {
            id: 3,
            type: 'info',
            text: 'Monthly audit scheduled for next week',
            time: '2 hours ago',
            timestamp: Date.now() - 2 * 60 * 60 * 1000
        },
        {
            id: 4,
            type: 'urgent',
            text: 'Emergency generator maintenance due',
            time: '3 hours ago',
            timestamp: Date.now() - 3 * 60 * 60 * 1000
        }
    ];

    // Update notification badge
    function updateNotificationBadge() {
        const badge = document.getElementById('notificationBadge');
        const unreadCount = notifications.length;
        badge.textContent = unreadCount;
        badge.style.display = unreadCount > 0 ? 'flex' : 'none';
    }

    // Toggle notification dropdown
    notificationTrigger.addEventListener('click', function (e) {
        e.stopPropagation();
        notificationContainer.classList.toggle('open');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (!notificationContainer.contains(event.target)) {
            notificationContainer.classList.remove('open');
        }
    });

    // Close dropdown on escape key
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            notificationContainer.classList.remove('open');
        }
    });

    // Handle notification item clicks
    document.addEventListener('click', function (event) {
        if (event.target.closest('.notification-item')) {
            const notificationItem = event.target.closest('.notification-item');
            console.log('Notification clicked:', notificationItem);
            // Add your notification handling logic here

            // Optional: Mark as read and update badge
            // markAsRead(notificationId);
        }
    });

    // Initialize
    updateNotificationBadge();
});

// Notification action functions
function refreshNotifications() {
    console.log('Refreshing notifications...');
    // Add refresh logic here

    // Show loading state
    const refreshBtn = event.target.closest('.action-btn');
    refreshBtn.style.opacity = '0.5';

    setTimeout(() => {
        refreshBtn.style.opacity = '1';
        console.log('Notifications refreshed');
    }, 1000);handleMenuClick
}

function notificationSettings() {
    console.log('Opening notification settings...');
    // Add settings logic here
}

function viewAllNotifications() {
    console.log('Viewing all notifications...');
    // Add navigation logic here
    document.querySelector('.notification-container').classList.remove('open');
}
