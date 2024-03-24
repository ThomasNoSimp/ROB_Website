// Title script
const titles = document.getElementsByClassName('title');
for (let title of titles) {
    title.addEventListener('click', () => {
        window.location.reload();
    });
}

// Discord server script
const joinServerButtons = document.getElementsByClassName('join-server-button');
for (let joinServerButton of joinServerButtons) {
    joinServerButton.addEventListener('click', () => {
        window.open('https://discord.gg/WWtbRBeARG', '_blank');
    });
}

// Menu Buttons
// Profile
const profiles = document.getElementsByClassName('profile-content-container');
let loggedIn = false;
for (let profile of profiles) {
    profile.addEventListener('click', () => {
        if (loggedIn === false) {
            window.location.href = 'login.html';
        }
        else {
            window.location.href = 'profile.html';
        }
    });
}

// Jobs
const jobs = document.getElementsByClassName('jobs-content-container');
for (let job of jobs) {
    job.addEventListener('click', () => {
        window.location.href = 'jobs.html';
        // TODO: Add Logics
    });
}

// Shop
const shops = document.getElementsByClassName('shop-content-container');
for (let shop of shops) {
    shop.addEventListener('click', () => {
        window.location.href = 'shop.html';
        // TODO: Add Logics
    });
}

// Help
const helps = document.getElementsByClassName('help-content-container');
for (let help of helps) {
    help.addEventListener('click', () => {
        window.location.href = 'help.html';
    });
}