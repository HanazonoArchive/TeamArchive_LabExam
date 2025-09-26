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
    <sl-drawer label="UM Intramurals" placement="start" class="drawer-header-actions" style="--size: 300px; font-weight: 500;">
      <sl-icon-button href="<?= BASE_URL ?>/Webpage/dashboard.php" slot="header-actions" name="box-arrow-up-right"></sl-icon-button>
      <sl-menu>
        <label style="padding-left: 10px;">Pages</label>
        <sl-divider></sl-divider>
        <sl-menu-item>
          <sl-icon slot="prefix" name="house"></sl-icon>
          <a href="<?= BASE_URL ?>/Webpage/mainpage.php">Main Page</a>
        </sl-menu-item> 
        <sl-divider></sl-divider>
        <sl-menu-item id="disabled_this_fucker">
          <sl-icon slot="prefix" name="person-circle"></sl-icon>
          <a href="<?= BASE_URL ?>/Webpage/login.html">Sign in / Sign up</a>
        </sl-menu-item>
        <sl-divider></sl-divider>
        <label id="welcome_message" style="padding-left: 10px;">Welcome! Guest</label>
        <br>
        <br>
        <label id="welcome_account" style="padding-left: 10px; font-weight: 300;">You are Currently! Not Login</label>
      </sl-menu>
      <br>
      <sl-button id="logout_button" slot="footer" variant="Neutral" type="button" disabled>Logout</sl-button>
      <sl-button href="https://github.com/" slot="footer" variant="success">
        <sl-icon name="github" style="font-size: 16px;"></sl-icon>
      </sl-button>
    </sl-drawer>
    <sl-button class="sidebar-button">
      <sl-icon name="layout-sidebar"></sl-icon>
    </sl-button>

    <script>
      const drawer = document.querySelector('.drawer-header-actions');
      const openButton = drawer.nextElementSibling;
      const closeButton = drawer.querySelector('sl-button[variant="primary"]');
      const newWindowButton = drawer.querySelector('.new-window');

      openButton.addEventListener('click', () => drawer.show());
    </script>
  </nav>
</div>