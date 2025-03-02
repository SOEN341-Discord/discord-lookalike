<div class="message">
  <!-- Profile picture on the left -->
  <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" class="profile-pic" alt="Avatar">

  <!-- Message content -->
  <div class="message-content">
    <p>{{ $message }}</p>
  </div>
</div>

<style>
/* Ensure proper alignment */
.message {
  display: flex;
  align-items: center; /* Aligns items horizontally */
  gap: 10px;
  padding: 10px;
  background-color: #f9f9f9;
  border-radius: 8px;
  max-width: 60%; /* Adjust width as needed */
}

/* Profile picture styling */
.profile-pic {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}

/* Message content styling */
.message-content {
  background: #fff;
  padding: 8px 12px;
  border-radius: 6px;
  max-width: 100%;
  word-wrap: break-word;
}

.message-content p {
  margin: 0;
}
</style>
