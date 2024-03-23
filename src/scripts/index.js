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
for (let profile of profiles) {
    profile.addEventListener('click', () => {
        window.location.href = 'profile.html';
        // TODO: Add Logics
    });
}

// Jobs
