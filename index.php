<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
    }

    #splash-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      opacity: 0;
      animation: fadeIn 2s forwards; /* Adjust the animation duration as needed */
    }

    #splash-content {
      text-align: center;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    #main-content {
      display: none; /* Hide main content initially */
    }
  </style>
</head>
<body>

<div id="splash-screen">
  <div id="splash-content">
    <h1>Health Center Information Management System</h1>
    <p>Loading...</p>
  </div>
</div>

<!-- Your main content goes here -->
<div id="main-content">
  
</div>

<script>
  // Simulate loading time and navigate after 1.5 seconds
  setTimeout(function() {
    // Hide the splash screen
    document.getElementById('splash-screen').style.display = 'none';

    // Show the main content
    document.getElementById('main-content').style.display = 'block';

    // Navigate to dashboard.php
    window.location.href = 'dashboard.php';
  }, 3000); // Adjust the timeout value as needed
</script>

</body>
</html>
