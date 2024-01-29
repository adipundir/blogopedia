<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Your Blog</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
}

.dashboard-stats,
.recent-posts,
.user-profile {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f2f2f2;
}

.stats-container {
    display: flex;
    justify-content: space-between;
}

.stat {
    text-align: center;
}

.recent-posts ul {
    list-style: none;
    padding: 0;
}

.recent-posts li {
    margin-bottom: 10px;
}

.user-profile img {
    border-radius: 50%;
    max-width: 100px;
    height: auto;
    margin-bottom: 10px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
<body>

    <header>
        <h1>Your Blog Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Posts</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="dashboard-stats">
        <h2>Site Statistics</h2>
        <div class="stats-container">
            <div class="stat">
                <p class="value">100</p>
                <p class="label">Total Posts</p>
            </div>
            <div class="stat">
                <p class="value">50</p>
                <p class="label">Published Posts</p>
            </div>
            <div class="stat">
                <p class="value">10</p>
                <p class="label">Drafts</p>
            </div>
        </div>
    </section>

    <section class="recent-posts">
        <h2>Recent Posts</h2>
        <ul>
            <li><a href="#">Post Title 1</a></li>
            <li><a href="#">Post Title 2</a></li>
            <li><a href="#">Post Title 3</a></li>
        </ul>
    </section>

    <section class="user-profile">
        <h2>User Profile</h2>
        <div class="profile-details">
            <img src="profile-picture.jpg" alt="Profile Picture">
            <p class="username">JohnDoe123</p>
            <p class="email">john.doe@example.com</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Blog. All rights reserved.</p>
    </footer>

</body>
</html>
