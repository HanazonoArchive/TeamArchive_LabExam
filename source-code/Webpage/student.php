<?php
define('PROJECT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/TeamArchive_LabExam/source-code');
define('BASE_URL_STYLE', '/TeamArchive_LabExam/source-code');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Profile - UM Intramurals</title>
  <link rel="stylesheet" href="<?= BASE_URL_STYLE ?>/StyleSheet/mainpage.css"/>
  <link rel="stylesheet" href="<?= BASE_URL_STYLE ?>/StyleSheet/student.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css"/>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/mainpageFunctions.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/logoutFunctions.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/studentFunctions.js"></script>
</head>
<body>
  <!-- Sidebar Component -->
  <?php require PROJECT_ROOT . "/Components/sidebar.php"; ?>
  
  <div class="content">
    <header class="top-navigation">
      <div class="nav-container">
        <div class="nav-left">
          <div class="sidebar-trigger">
            <sl-button class="sidebar-button-nav">
              <sl-icon name="layout-sidebar"></sl-icon>
            </sl-button>
          </div>
          <div class="nav-brand">
            <sl-icon name="person-circle" class="brand-icon"></sl-icon>
            <div class="brand-text">
              <span class="brand-title">Student Profile</span>
              <span class="brand-subtitle">Personal Information</span>
            </div>
          </div>
        </div>
        <div class="nav-right">
          <sl-badge variant="primary" class="status-badge">
            <sl-icon slot="prefix" name="shield-check"></sl-icon>
            Verified Student
          </sl-badge>
          <div class="nav-date">
            <sl-icon name="calendar3"></sl-icon>
            <span>September 26, 2025</span>
          </div>
        </div>
      </div>
    </header>
    
    <main class="main-content">
      <nav class="sl-theme-dark">
        <!-- Loading State -->
        <div id="loading-state" class="loading-container">
          <sl-spinner style="font-size: 3rem;"></sl-spinner>
          <p>Loading student profile...</p>
        </div>

        <!-- Access Denied State -->
        <div id="access-denied" class="access-denied-container" style="display: none;">
          <section class="access-denied-section">
            <div class="access-denied-content">
              <sl-icon name="lock-fill" class="access-icon"></sl-icon>
              <h2>Access Restricted</h2>
              <p>You must be logged in to view your student profile.</p>
              <sl-button variant="primary" size="large" onclick="window.location.href='<?= BASE_URL_STYLE ?>/Webpage/login.html'">
                <sl-icon slot="prefix" name="person-plus"></sl-icon>
                Login to Continue
              </sl-button>
            </div>
          </section>
        </div>

        <!-- Student Profile Content -->
        <div id="profile-content" style="display: none;">
          <!-- Profile Header -->
          <section class="profile-header-section">
            <div class="profile-header-content">
              <div class="profile-avatar">
                <sl-icon name="person-circle" class="avatar-icon"></sl-icon>
              </div>
              <div class="profile-basic-info">
                <h1 id="student-name">Loading...</h1>
                <p id="student-id" class="student-id">Loading...</p>
                <p id="student-department" class="department">Loading...</p>
                <div class="profile-badges">
                  <sl-badge id="year-level-badge" variant="primary">Loading...</sl-badge>
                  <sl-badge id="status-badge" variant="success">Loading...</sl-badge>
                </div>
              </div>
            </div>
          </section>

          <!-- Profile Information Cards -->
          <section class="profile-info-section">
            <div class="info-cards-grid">
              <!-- Academic Information -->
              <sl-card class="info-card academic-card">
                <div slot="header" class="card-header">
                  <sl-icon name="mortarboard-fill"></sl-icon>
                  <h3>Academic Information</h3>
                </div>
                <div class="card-content">
                  <div class="info-row">
                    <span class="info-label">Academic Year:</span>
                    <span id="academic-year" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Semester:</span>
                    <span id="semester" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Total Units:</span>
                    <span id="total-units" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Current GPA:</span>
                    <span id="gpa" class="info-value highlight">Loading...</span>
                  </div>
                </div>
              </sl-card>

              <!-- Contact Information -->
              <sl-card class="info-card contact-card">
                <div slot="header" class="card-header">
                  <sl-icon name="telephone-fill"></sl-icon>
                  <h3>Contact Information</h3>
                </div>
                <div class="card-content">
                  <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span id="student-email" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Phone:</span>
                    <span id="student-phone" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Address:</span>
                    <span id="student-address" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Country:</span>
                    <span id="student-country" class="info-value">Loading...</span>
                  </div>
                </div>
              </sl-card>

              <!-- Sports Registration -->
              <sl-card class="info-card sports-card">
                <div slot="header" class="card-header">
                  <sl-icon name="trophy-fill"></sl-icon>
                  <h3>Sports Registration</h3>
                </div>
                <div class="card-content">
                  <div id="sports-list" class="sports-list">
                    <p class="loading-text">Loading sports...</p>
                  </div>
                  <sl-button variant="primary" size="small" class="register-more-btn">
                    <sl-icon slot="prefix" name="plus-circle"></sl-icon>
                    Register for More Sports
                  </sl-button>
                </div>
              </sl-card>

              <!-- Personal Information -->
              <sl-card class="info-card personal-card">
                <div slot="header" class="card-header">
                  <sl-icon name="person-fill"></sl-icon>
                  <h3>Personal Information</h3>
                </div>
                <div class="card-content">
                  <div class="info-row">
                    <span class="info-label">Gender:</span>
                    <span id="student-gender" class="info-value">Loading...</span>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Hobbies:</span>
                    <div id="hobbies-list" class="hobbies-list">Loading...</div>
                  </div>
                  <div class="info-row">
                    <span class="info-label">Member Since:</span>
                    <span id="member-since" class="info-value">Loading...</span>
                  </div>
                </div>
              </sl-card>
            </div>
          </section>

          <!-- Achievements Section -->
          <section class="achievements-section">
            <div class="section-header">
              <h2>Achievements & Awards</h2>
              <p>Your accomplishments and recognitions</p>
            </div>
            <div id="achievements-grid" class="achievements-grid">
              <p class="loading-text">Loading achievements...</p>
            </div>
          </section>

          <!-- Quick Actions Section -->
          <section class="quick-actions-section">
            <div class="section-header">
              <h2>Quick Actions</h2>
              <p>Manage your profile and registrations</p>
            </div>
            <div class="quick-actions-grid">
              <sl-button variant="primary" size="large" class="action-btn">
                <sl-icon slot="prefix" name="pencil-square"></sl-icon>
                Edit Profile
              </sl-button>
              <sl-button variant="default" size="large" class="action-btn">
                <sl-icon slot="prefix" name="download"></sl-icon>
                Download Transcript
              </sl-button>
              <sl-button variant="success" size="large" class="action-btn">
                <sl-icon slot="prefix" name="trophy"></sl-icon>
                View Sports Schedule
              </sl-button>
              <sl-button variant="warning" size="large" class="action-btn">
                <sl-icon slot="prefix" name="gear"></sl-icon>
                Account Settings
              </sl-button>
            </div>
          </section>
        </div>
      </nav>
    </main>
  </div>
</body>
</html>