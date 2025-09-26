<?php
define('PROJECT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/CS15LabExam/source-code');
define('BASE_URL_STYLE', '/CS15LabExam/source-code');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Main Page</title>

  <!-- Shoelace & Styles -->
  <link rel="stylesheet" href="<?= BASE_URL_STYLE ?>/StyleSheet/main.css"/>
  <link rel="stylesheet" href="<?= BASE_URL_STYLE ?>/StyleSheet/mainpage.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/themes/dark.css"/>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.20.1/cdn/shoelace.js"></script>

  <!-- Optional: Your JS -->
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/mainpageFunctions.js"></script>
  <script defer src="<?= BASE_URL_STYLE ?>/JavaScript/logoutFunctions.js"></script>

  <style>
    /* Container for vertical stacking with nice spacing */
    .page-container {
      display: flex;
      flex-direction: column;
      gap: 32px;
      padding: 24px;
      max-width: 900px;
      margin: auto;
      align-items: flex-start;
    }

    /* Gallery grid: responsive with min width */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 12px;
      width: 100%;
    }

    /* Images inside cards fill width and maintain aspect ratio */
    sl-card img {
      width: 100%;
      height: auto;
      border-radius: 6px;
      user-select: none;
    }

    /* Heading spacing */
    sl-card h2 {
      margin-top: 0;
      margin-bottom: 12px;
    }

    /* Badge container */
    .teams-container {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 10px;
    }

    /* Accessibility */
    img {
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="content">
    <!-- Top Navigation -->
    <div class="topNavigationBar">
      <div class="topNavigationBar1" style="width: 100%; display: flex; align-items: center;">
        <?php require PROJECT_ROOT . "/Components/sidebar.php"; ?>
        <label style="font-size: 18px; font-weight: 600;" aria-current="page">| Main Page</label>
      </div>
    </div>

    <!-- Main Content Container -->
    <main class="page-container" role="main" aria-label="Intramurals 2025 main content">

      <!-- Welcome & Schedule Card -->
      <sl-card>
        <h2>🎉 Welcome to Intramurals 2025!</h2>
        <p>Get ready for four days full of fun, sportsmanship, and exciting competitions! Here's the full schedule:</p>
        <h2>📅 Event Schedule</h2>
        <sl-divider></sl-divider>
        <ul style="line-height: 1.8; margin-top: 10px;">
          <li><strong>Day 1 - Opening Ceremony & Basketball</strong>: Official opening with parade and keynote speech, followed by the thrilling basketball tournament kickoff.</li>
          <li><strong>Day 2 - Volleyball & Track and Field</strong>: Team volleyball matches and individual track events, including sprints and relays.</li>
          <li><strong>Day 3 - E-sports & Badminton</strong>: Competitive e-sports matches in popular games and intense badminton battles on the courts.</li>
          <li><strong>Day 4 - Championship Games & Awards</strong>: Final championship matches across all sports, culminating with an awards ceremony recognizing outstanding players and teams.</li>
        </ul>
      </sl-card>

      <!-- Teams Card -->
      <sl-card>
        <h2>🔥 Participating Teams</h2>
        <sl-divider></sl-divider>
        <p style="margin-top: 10px;">Our intramurals wouldn't be complete without these fierce competitors. Each team brings unique strengths and spirit to the games:</p>
        <div class="teams-container" role="list" aria-label="List of participating teams">
          <sl-badge variant="danger" pill role="listitem" aria-label="Red Dragons Team">Red Dragons</sl-badge>
          <sl-badge variant="primary" pill role="listitem" aria-label="Blue Sharks Team">Blue Sharks</sl-badge>
          <sl-badge variant="success" pill role="listitem" aria-label="Green Hornets Team">Green Hornets</sl-badge>
          <sl-badge variant="warning" pill role="listitem" aria-label="Yellow Tigers Team">Yellow Tigers</sl-badge>
        </div>
      </sl-card>

      <!-- Photo Gallery Card -->
      <sl-card>
        <h2>📸 Photo Gallery</h2>
        <sl-divider></sl-divider>
        <p style="margin-top: 10px;">Relive the best moments from previous intramurals! Click on any photo for a closer look (feature coming soon).</p>

        <div class="gallery-grid" role="list" aria-label="Intramurals photo gallery">
          <sl-card role="listitem" aria-label="Basketball Finals photo">
            <img src="https://www.arellano.edu.ph/sites/default/files/inline-images/intrams-2024-14.JPG" alt="Basketball Finals - Red Dragons versus Blue Sharks" />
            <strong style="display: block; margin-top: 8px;">Basketball Finals</strong>
            <small>Red Dragons vs Blue Sharks, an intense and close-fought game.</small>
          </sl-card>

          <sl-card role="listitem" aria-label="Opening Ceremony photo">
            <img src="https://www.arellano.edu.ph/sites/default/files/inline-images/intrams-2024-17.JPG" alt="Opening Ceremony Parade with teams marching" />
            <strong style="display: block; margin-top: 8px;">Opening Ceremony</strong>
            <small>The parade and team introductions to kick off the event.</small>
          </sl-card>

          <sl-card role="listitem" aria-label="Track and Field photo">
            <img src="https://www.canyonspringshighschool.org/ourpages/auto/2014/11/13/32164639/hurdles.jpg" alt="Relay race in progress during Track and Field event" />
            <strong style="display: block; margin-top: 8px;">Track & Field</strong>
            <small>Relay races showcasing speed and teamwork.</small>
          </sl-card>

          <sl-card role="listitem" aria-label="E-Sports tournament photo">
            <img src="https://news.uoregon.edu/sites/default/files/styles/landscape_xl/public/field/image/esports_lounge.jpg?itok=W6ktiry9" alt="E-Sports tournament setup with players focused on their screens" />
            <strong style="display: block; margin-top: 8px;">E-Sports Arena</strong>
            <small>Competitive matches with thrilling gameplay moments.</small>
          </sl-card>
        </div>
      </sl-card>

    </main>
  </div>
</body>
</html>
<!-- Fix this to make it University of Mindanao Intramurals page.

if possible just migrate it especially the sidebar.

the content can be change to your desire. -->