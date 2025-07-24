const sidebar = document.getElementById('sidebar');
const floatingSubmenu = document.getElementById('floatingSubmenu');
const navItems = document.querySelectorAll('.nav-item');

function closeAllNavItemsExcept(current) {
    navItems.forEach(item => {
        if (item !== current) {
            item.classList.remove('open', 'active');
        }
    });
}

function toggleSubmenu(item, submenu) {
    const isCollapsed = sidebar.classList.contains('collapsed');
    if (isCollapsed) {
        handleCollapsedSubmenu(item, submenu);
    } else {
        item.classList.toggle('open');
    }
}

function handleItemClick(item) {
    setActiveItem(item);
    closeFloatingSubmenu();
}

function setActiveItem(item) {
    navItems.forEach(i => i.classList.remove('active'));
    item.classList.add('active');
}

function closeFloatingSubmenu() {
    floatingSubmenu.classList.remove('show');
}

function onToggleBtnClick(item, submenu, event) {
    event.stopPropagation();
    closeAllNavItemsExcept(item);
    toggleSubmenu(item, submenu);
}

function onNavItemClick(item, event) {
    if (!event.target.closest('.drop-submenu')) {
        handleItemClick(item);
    }
}

navItems.forEach(item => {
    const toggleBtn = item.querySelector('.drop-submenu');
    const submenu = item.nextElementSibling;

    if (toggleBtn && submenu?.classList.contains('submenu')) {
        toggleBtn.addEventListener('click', e => onToggleBtnClick(item, submenu, e));
        item.addEventListener('click', e => onNavItemClick(item, e));
    } else {
        item.addEventListener('click', () => handleItemClick(item));
    }
});
