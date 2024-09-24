
document.getElementById('hamburger-menu').addEventListener('click', function() {
    var sidebar = document.querySelector('.main-navigation-container');
    if (sidebar.style.display === 'flex') {
        sidebar.style.display = 'none';
    } else {
        sidebar.style.display = 'flex';
    }
});
