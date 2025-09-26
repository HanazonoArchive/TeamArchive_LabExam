<?php
define('PROJECT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/TeamArchive_LabExam/source-code');
define('BASE_URL_STYLE', '/TeamArchive_LabExam/source-code');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Main Page</title>
  <link rel="stylesheet" href="<?= BASE_URL_STYLE ?>/StyleSheet/mainpage.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css"/>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/mainpageFunctions.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/logoutFunctions.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/registrationFunctions.js"></script>
</head>
<body>
  <!-- Sidebar Component (Outside navigation for proper z-index) -->
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
            <sl-icon name="trophy-fill" class="brand-icon"></sl-icon>
            <div class="brand-text">
              <span class="brand-title">UM Intramurals</span>
              <span class="brand-subtitle">2025 Season</span>
            </div>
          </div>
        </div>
        <div class="nav-right">
          <sl-badge variant="success" class="status-badge">
            <sl-icon slot="prefix" name="circle-fill"></sl-icon>
            Live Events
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
      <!-- Hero Section -->
      <section class="hero-section">
        <div class="hero-content">
          <div class="hero-text">
            <sl-icon name="trophy-fill" class="hero-icon"></sl-icon>
            <h1>University of Mindanao</h1>
            <h2>Intramural Sports 2025</h2>
            <p>Where Champions Rise and Dreams Come Alive</p>
            <sl-button variant="primary" size="large" class="cta-button">
              <sl-icon slot="prefix" name="play-circle"></sl-icon>
              Join the Action
            </sl-button>
          </div>
          <div class="hero-stats">
            <div class="stat-card">
              <sl-icon name="people-fill"></sl-icon>
              <h3>2,500+</h3>
              <p>Active Athletes</p>
            </div>
            <div class="stat-card">
              <sl-icon name="calendar-event"></sl-icon>
              <h3>15</h3>
              <p>Sports Events</p>
            </div>
            <div class="stat-card">
              <sl-icon name="award"></sl-icon>
              <h3>8</h3>
              <p>Departments</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Sports Events Section -->
      <section class="sports-section">
        <div class="section-header">
          <h2>Upcoming Sports Events</h2>
          <p>Don't miss out on the exciting competitions ahead!</p>
        </div>
        <div class="sports-grid">
          <sl-card class="sport-card">
            <div slot="header" class="card-header basketball">
              <sl-icon name="circle-fill"></sl-icon>
              <h3>Basketball</h3>
            </div>
            <div class="event-details">
              <div class="event-info">
                <sl-icon name="calendar3"></sl-icon>
                <span>October 15-20, 2025</span>
              </div>
              <div class="event-info">
                <sl-icon name="geo-alt"></sl-icon>
                <span>UM Gymnasium</span>
              </div>
              <div class="event-info">
                <sl-icon name="people"></sl-icon>
                <span>8 Teams Registered</span>
              </div>
            </div>
            <sl-button slot="footer" variant="primary" outline>
              <sl-icon slot="prefix" name="info-circle"></sl-icon>
              View Details
            </sl-button>
          </sl-card>

          <sl-card class="sport-card">
            <div slot="header" class="card-header volleyball">
              <sl-icon name="circle"></sl-icon>
              <h3>Volleyball</h3>
            </div>
            <div class="event-details">
              <div class="event-info">
                <sl-icon name="calendar3"></sl-icon>
                <span>October 22-25, 2025</span>
              </div>
              <div class="event-info">
                <sl-icon name="geo-alt"></sl-icon>
                <span>UM Sports Complex</span>
              </div>
              <div class="event-info">
                <sl-icon name="people"></sl-icon>
                <span>12 Teams Registered</span>
              </div>
            </div>
            <sl-button slot="footer" variant="primary" outline>
              <sl-icon slot="prefix" name="info-circle"></sl-icon>
              View Details
            </sl-button>
          </sl-card>

          <sl-card class="sport-card">
            <div slot="header" class="card-header badminton">
              <sl-icon name="diamond"></sl-icon>
              <h3>Badminton</h3>
            </div>
            <div class="event-details">
              <div class="event-info">
                <sl-icon name="calendar3"></sl-icon>
                <span>November 5-8, 2025</span>
              </div>
              <div class="event-info">
                <sl-icon name="geo-alt"></sl-icon>
                <span>UM Multipurpose Hall</span>
              </div>
              <div class="event-info">
                <sl-icon name="people"></sl-icon>
                <span>24 Players Registered</span>
              </div>
            </div>
            <sl-button slot="footer" variant="primary" outline>
              <sl-icon slot="prefix" name="info-circle"></sl-icon>
              View Details
            </sl-button>
          </sl-card>
        </div>
      </section>

      <!-- News & Highlights Section -->
      <section class="news-section">
        <div class="section-header">
          <h2>Latest News & Highlights</h2>
          <p>Stay updated with the latest achievements and announcements</p>
        </div>
        <div class="news-container">
          <div class="featured-news">
            <sl-card class="news-card featured">
              <div class="news-image">
                <sl-icon name="trophy-fill" class="news-icon"></sl-icon>
              </div>
              <div class="news-content">
                <sl-badge variant="primary">BREAKING</sl-badge>
                <h3>Engineering Department Wins Overall Championship</h3>
                <p>The College of Engineering dominated this year's intramural games, securing victories in basketball, volleyball, and swimming competitions.</p>
                <div class="news-meta">
                  <span><sl-icon name="calendar3"></sl-icon> September 20, 2025</span>
                  <span><sl-icon name="eye"></sl-icon> 1,250 views</span>
                </div>
              </div>
            </sl-card>
          </div>
          
          <div class="news-list">
            <sl-card class="news-card">
              <div class="news-content">
                <sl-badge variant="success">ANNOUNCEMENT</sl-badge>
                <h4>New Swimming Pool Opens</h4>
                <p>UM inaugurates its new Olympic-sized swimming pool for upcoming aquatic events.</p>
                <div class="news-meta">
                  <span><sl-icon name="calendar3"></sl-icon> September 18, 2025</span>
                </div>
              </div>
            </sl-card>

            <sl-card class="news-card">
              <div class="news-content">
                <sl-badge variant="warning">REMINDER</sl-badge>
                <h4>Registration Deadline Extended</h4>
                <p>Football tournament registration extended until September 30, 2025.</p>
                <div class="news-meta">
                  <span><sl-icon name="calendar3"></sl-icon> September 15, 2025</span>
                </div>
              </div>
            </sl-card>

            <sl-card class="news-card">
              <div class="news-content">
                <sl-badge variant="neutral">UPDATE</sl-badge>
                <h4>New Sports Equipment Arrived</h4>
                <p>Latest badminton rackets and basketball gear now available for all teams.</p>
                <div class="news-meta">
                  <span><sl-icon name="calendar3"></sl-icon> September 12, 2025</span>
                </div>
              </div>
            </sl-card>
          </div>
        </div>
      </section>

      <!-- Leaderboard Section -->
      <section class="leaderboard-section">
        <div class="section-header">
          <h2>Department Rankings</h2>
          <p>Current standings for the 2025 Intramural Championship</p>
        </div>
        <div class="leaderboard-container">
          <div class="ranking-card gold">
            <div class="rank-position">
              <sl-icon name="trophy-fill"></sl-icon>
              <span class="rank-number">1st</span>
            </div>
            <div class="department-info">
              <h3>College of Engineering</h3>
              <div class="department-stats">
                <span class="points">1,250 pts</span>
                <span class="events-won">12 events won</span>
              </div>
            </div>
            <div class="department-badge">
              <sl-badge variant="warning">Champion</sl-badge>
            </div>
          </div>

          <div class="ranking-card silver">
            <div class="rank-position">
              <sl-icon name="award"></sl-icon>
              <span class="rank-number">2nd</span>
            </div>
            <div class="department-info">
              <h3>College of Business</h3>
              <div class="department-stats">
                <span class="points">980 pts</span>
                <span class="events-won">8 events won</span>
              </div>
            </div>
            <div class="department-badge">
              <sl-badge variant="neutral">Runner-up</sl-badge>
            </div>
          </div>

          <div class="ranking-card bronze">
            <div class="rank-position">
              <sl-icon name="award"></sl-icon>
              <span class="rank-number">3rd</span>
            </div>
            <div class="department-info">
              <h3>College of Medicine</h3>
              <div class="department-stats">
                <span class="points">875 pts</span>
                <span class="events-won">6 events won</span>
              </div>
            </div>
            <div class="department-badge">
              <sl-badge variant="success">3rd Place</sl-badge>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured Athletes Section -->
      <section class="athletes-section">
        <div class="section-header">
          <h2>Spotlight Athletes</h2>
          <p>Meet our outstanding performers this season</p>
        </div>
        <div class="athletes-grid">
          <sl-card class="athlete-card">
            <div class="athlete-avatar">
              <sl-icon name="person-circle" class="avatar-large"></sl-icon>
            </div>
            <div class="athlete-info">
              <h3>Maria Santos</h3>
              <p class="athlete-sport">Basketball MVP</p>
              <p class="athlete-department">College of Engineering</p>
              <div class="athlete-achievements">
                <sl-badge variant="primary">32 pts/game</sl-badge>
                <sl-badge variant="success">85% FG</sl-badge>
              </div>
            </div>
          </sl-card>

          <sl-card class="athlete-card">
            <div class="athlete-avatar">
              <sl-icon name="person-circle" class="avatar-large"></sl-icon>
            </div>
            <div class="athlete-info">
              <h3>John Reyes</h3>
              <p class="athlete-sport">Swimming Champion</p>
              <p class="athlete-department">College of Medicine</p>
              <div class="athlete-achievements">
                <sl-badge variant="primary">5 Gold Medals</sl-badge>
                <sl-badge variant="warning">Record Holder</sl-badge>
              </div>
            </div>
          </sl-card>

          <sl-card class="athlete-card">
            <div class="athlete-avatar">
              <sl-icon name="person-circle" class="avatar-large"></sl-icon>
            </div>
            <div class="athlete-info">
              <h3>Sarah Kim</h3>
              <p class="athlete-sport">Volleyball Captain</p>
              <p class="athlete-department">College of Business</p>
              <div class="athlete-achievements">
                <sl-badge variant="primary">Team Leader</sl-badge>
                <sl-badge variant="success">Best Setter</sl-badge>
              </div>
            </div>
          </sl-card>
        </div>
      </section>

      <!-- Live Stats Section -->
      <section class="stats-section">
        <div class="section-header">
          <h2>Live Tournament Statistics</h2>
          <p>Real-time data from ongoing competitions</p>
        </div>
        <div class="stats-grid">
          <div class="stat-widget">
            <div class="stat-icon">
              <sl-icon name="people-fill"></sl-icon>
            </div>
            <div class="stat-content">
              <h3>2,847</h3>
              <p>Total Participants</p>
              <div class="stat-trend positive">
                <sl-icon name="arrow-up"></sl-icon>
                <span>+12% from last year</span>
              </div>
            </div>
          </div>

          <div class="stat-widget">
            <div class="stat-icon">
              <sl-icon name="calendar-event-fill"></sl-icon>
            </div>
            <div class="stat-content">
              <h3>28</h3>
              <p>Events Completed</p>
              <div class="stat-trend positive">
                <sl-icon name="arrow-up"></sl-icon>
                <span>87% completion rate</span>
              </div>
            </div>
          </div>

          <div class="stat-widget">
            <div class="stat-icon">
              <sl-icon name="trophy-fill"></sl-icon>
            </div>
            <div class="stat-content">
              <h3>156</h3>
              <p>Medals Awarded</p>
              <div class="stat-trend positive">
                <sl-icon name="arrow-up"></sl-icon>
                <span>Record breaking</span>
              </div>
            </div>
          </div>

          <div class="stat-widget">
            <div class="stat-icon">
              <sl-icon name="stopwatch"></sl-icon>
            </div>
            <div class="stat-content">
              <h3>4</h3>
              <p>Records Broken</p>
              <div class="stat-trend neutral">
                <sl-icon name="dash"></sl-icon>
                <span>This season</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Upcoming Schedule Section -->
      <section class="schedule-section">
        <div class="section-header">
          <h2>This Week's Schedule</h2>
          <p>Don't miss these exciting matches and events</p>
        </div>
        <div class="schedule-timeline">
          <div class="timeline-item active">
            <div class="timeline-marker">
              <sl-icon name="circle-fill"></sl-icon>
            </div>
            <div class="timeline-content">
              <div class="event-time">Today, 2:00 PM</div>
              <h4>Basketball Finals</h4>
              <p>Engineering vs Business - Main Gymnasium</p>
              <sl-badge variant="danger">LIVE</sl-badge>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-marker">
              <sl-icon name="circle"></sl-icon>
            </div>
            <div class="timeline-content">
              <div class="event-time">Tomorrow, 9:00 AM</div>
              <h4>Swimming Competition</h4>
              <p>Individual Medley - Aquatic Center</p>
              <sl-badge variant="primary">Upcoming</sl-badge>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-marker">
              <sl-icon name="circle"></sl-icon>
            </div>
            <div class="timeline-content">
              <div class="event-time">Friday, 3:30 PM</div>
              <h4>Volleyball Semifinals</h4>
              <p>Medicine vs IT - Sports Complex</p>
              <sl-badge variant="success">Scheduled</sl-badge>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-marker">
              <sl-icon name="circle"></sl-icon>
            </div>
            <div class="timeline-content">
              <div class="event-time">Saturday, 10:00 AM</div>
              <h4>Track & Field</h4>
              <p>100m Sprint Finals - Athletic Track</p>
              <sl-badge variant="success">Scheduled</sl-badge>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action Section -->
      <section class="cta-section">
        <div class="cta-content">
          <h2>Ready to Join the Competition?</h2>
          <p>Register now and represent your department in the most exciting intramural season yet!</p>
          <div class="cta-buttons">
            <sl-button id="register-btn" variant="primary" size="large">
              <sl-icon slot="prefix" name="person-plus"></sl-icon>
              Register Now
            </sl-button>
            <sl-button id="download-schedule-btn" variant="default" size="large">
              <sl-icon slot="prefix" name="download"></sl-icon>
              Download Schedule
            </sl-button>
          </div>
        </div>
      </section>
    </nav>
    </main>
  </div>
</body>
</html>
