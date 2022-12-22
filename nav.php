<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


nav {
    font-family: 'Poppins', sans-serif;
    position: fixed;
    top: 0;
    left: 0;
    height: 70px;
    display: flex;
    align-items: center;
    width: 100%;
    background: rgb(236, 226, 226);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
}

nav .logo {
    display: flex;
    align-items: center;
    margin: 0 24px;
}

.logo .menu-icon {
    color: #333;
    font-size: 24px;
    margin-right: 14px;
    cursor: pointer;
}

.logo .logo-name-inner {
    color: #333;
    font-size: px;
    font-weight: 500;
}

.logo-name {
    margin-left: 280px;
    font-size: 22px;
    font-weight: 500;
    color: #333;
}

nav .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 260px;
    background: rgb(236, 226, 226);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    padding: 20px 0;
}

.sidebar .sidebar-content {
    padding: 30px 16px;
    display: flex;
    height: 90%;
    flex-direction: column;
    justify-content: space-between;
}

.list {
    list-style: none;

}

.nav-links {
    display: flex;
    align-items: center;
    padding: 14px 12px;
    border-radius: 8px;
    text-decoration: none;
}

.nav-links:hover {
    background-color: #4070f4;
}

.nav-links {
    margin-right: 14px;
    font-size: 20px;
    color: #707070;
}

.links {
    margin-top: 0.6px;
    padding: 1px;
    margin-left: 5px;
}

.link {
    font-size: 16px;
    color: #707070;
    font-weight: 400;
}

.nav-links:hover,
.nav-links:hover .link {
    color: #fff;
}

.logo-name {
    margin-left: 280px;
}
</style>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="navbar">
    <nav>
        <span class="logo-name">BillZ Automation</span>
        <div class="sidebar">
            <div class="logo">
                <i class='bx bx-menu menu-icon'></i>
                <span class="logo-name-inner">BillZ Automation
            </div>
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="/BillZ_Automation" class="nav-links"><i class='bx bx-home'></i>
                            <span class="links">Dashboard</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="billing.php" class="nav-links"><i class='bx bx-receipt'></i>
                            <span class="links">Billing</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="manage.php" class="nav-links"><i class='bx bxs-edit'></i>
                            <span class="links">Manage</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="reports.php" class="nav-links"><i class='bx bxs-pie-chart-alt-2'></i>
                            <span class="links">Reports</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom-content">
                    <li class="list">
                        <a href="setting.php" class="nav-links"><i class='bx bx-cog'></i>
                            <span class="links">Setting</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="includes/logout.php" class="nav-links"><i class='bx bx-log-out'></i>
                            <span class="links">Logout</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </nav>

</div>