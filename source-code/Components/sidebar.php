<?php
define('BASE_URL', '/CS15LabExam/source-code');
define('SPECIFIC_URL', '/CS15LabExam')
?>
<link rel="stylesheet" href="<?= BASE_URL ?>/StyleSheet/sidebar.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css" />
<script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace.js"></script>
<script src="<?= BASE_URL ?>/JavaScript/logoutFunctions.js"></script>

<div class="sidebar">
  <nav class="sl-theme-dark">
    <sl-drawer label="Intramurals" placement="start" class="drawer-header-actions" style="--size: 280px; font-weight: 500;">
      <sl-icon-button href="<?= BASE_URL ?>/Webpage/dashboard.php" slot="header-actions" name="box-arrow-up-right"></sl-icon-button>
      <sl-menu>
        <div class="sidebar-brand">
          <sl-icon name="trophy-fill" class="brand-icon"></sl-icon>
          <div class="brand-info">
            <div class="brand-title">UNIVERSITY OF MINDANAO</div>
            <div class="brand-subtitle">Intramural Sports 2025</div>
          </div>
        </div>
        <sl-divider></sl-divider>
        
        <div class="nav-section">
          <label class="section-header">
            <sl-icon name="compass"></sl-icon>
            Navigation
          </label>
          <sl-menu-item>
            <sl-icon slot="prefix" name="house-fill"></sl-icon>
            <a href="<?= BASE_URL ?>/Webpage/mainpage.php">Home</a>
          </sl-menu-item>
          <sl-menu-item id="login_menu_item">
            <sl-icon slot="prefix" name="person-circle"></sl-icon>
            <a href="<?= BASE_URL ?>/Webpage/login.html">Sign In / Sign Up</a>
          </sl-menu-item>
        </div>
        
        <sl-divider></sl-divider>
        
        <div class="user-info-section">
          <div class="user-welcome">
            <sl-icon name="person-circle" class="user-icon"></sl-icon>
            <div class="user-details">
              <div id="welcome_message" class="welcome-text">Welcome! Guest</div>
              <div id="welcome_account" class="status-text">You are Currently! Not Login</div>
            </div>
          </div>
        </div>
      </sl-menu>
      
      <sl-button id="logout_button" slot="footer" variant="danger" type="button" size="small" disabled>
        <sl-icon slot="prefix" name="box-arrow-right"></sl-icon>
        Logout
      </sl-button>
      <sl-button href="https://um.edu.ph/" slot="footer" variant="primary" target="_blank" size="small">
        <sl-icon name="globe" style="font-size: 14px;"></sl-icon>
        UM Website
      </sl-button>
    </sl-drawer>

    <script>
      const drawer = document.querySelector('.drawer-header-actions');
      
      // Wait for DOM to be fully loaded to find the navigation button
      document.addEventListener('DOMContentLoaded', function() {
        const navButton = document.querySelector('.sidebar-button-nav');
        
        if (navButton && drawer) {
          navButton.addEventListener('click', () => drawer.show());
        }
      });
    </script>
  </nav>
</div>