<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Popup Background */
.popup {
  display: none; /* Hidden by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
  justify-content: center;
  align-items: center;
}

/* Popup Box */
.popup-content {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  width: 80%;
  max-width: 400px;
  text-align: center;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
  animation: fadeIn 0.3s ease-in-out;
}

/* Close Button */
.close {
  float: right;
  font-size: 22px;
  font-weight: bold;
  cursor: pointer;
  color: #333;
}

/* Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.9); }
  to   { opacity: 1; transform: scale(1); }
}

  </style>
</head>
<body>
  <!-- Button to Open Popup -->
<button id="openPopup">Open Popup</button>

<!-- Popup -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span id="closePopup" class="close">&times;</span>
    <h2>Welcome to HRN Tech Solution</h2>
    <p>This is a popup example using HTML, CSS, and JavaScript.</p>
  </div>
</div>

<script>
  // Get Elements
const openBtn = document.getElementById("openPopup");
const closeBtn = document.getElementById("closePopup");
const popup = document.getElementById("popup");

// Open Popup
openBtn.addEventListener("click", () => {
  popup.style.display = "flex";
});

// Close Popup when clicking X
closeBtn.addEventListener("click", () => {
  popup.style.display = "none";
});

// Close Popup when clicking outside content
window.addEventListener("click", (e) => {
  if (e.target === popup) {
    popup.style.display = "none";
  }
});

</script>
</body>
</html>