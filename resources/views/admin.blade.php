<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WellMind Admin Dashboard</title>

  <!-- ✅ Local Bootstrap (offline) -->
  <link rel="stylesheet" href="bootstrap.min.css" />

  <!-- ✅ Google Fonts (optional, can be offline if needed) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f8ff;
      margin: 0;
      overflow-x: hidden;
    }

    /* Sidebar Styling */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background: linear-gradient(180deg, #90caf9, #e3f2fd);
      color: #0d47a1;
      padding: 25px 15px;
      display: flex;
      flex-direction: column;
      box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
    }

    .sidebar h4 {
      text-align: center;
      font-weight: 700;
      margin-bottom: 35px;
      color: #0d47a1;
    }

    .sidebar button {
      background: transparent;
      border: none;
      color: #0d47a1;
      text-align: left;
      padding: 12px 14px;
      border-radius: 10px;
      margin-bottom: 12px;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
    }

    .sidebar button:hover,
    .sidebar button.active {
      background-color: #bbdefb;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transform: translateX(5px);
    }

    .sidebar .logout-btn {
      margin-top: auto;
      background-color: #e53935;
      color: white;
      border-radius: 10px;
      padding: 12px;
      border: none;
      font-weight: 600;
    }

    .sidebar .logout-btn:hover {
      background-color: #c62828;
    }

    /* Main Content */
    .content {
      margin-left: 260px;
      padding: 30px;
      transition: margin-left 0.3s;
    }

    .content h3 {
      color: #0d47a1;
      font-weight: 700;
      margin-bottom: 20px;
    }

    /* Table Styling */
    .table {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
      background-color: white;
    }

    .table thead {
      background-color: #0d47a1;
      color: white;
    }

    .btn {
      border-radius: 6px;
    }

    .btn-warning {
      background-color: #ffb300;
      border: none;
    }

    .btn-danger {
      background-color: #e53935;
      border: none;
    }

    .btn-warning:hover {
      background-color: #ffa000;
    }

    .btn-danger:hover {
      background-color: #c62828;
    }

    .btn-primary {
      background-color: #1976d2;
      border: none;
    }

    .btn-primary:hover {
      background-color: #1565c0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
        flex-direction: row;
        justify-content: space-around;
        box-shadow: none;
      }

      .sidebar button {
        text-align: center;
      }

      .content {
        margin-left: 0;
        padding: 20px;
      }
    }

    /* Subtle Fade In Animation */
    .fade-section {
      animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4>WellMind Admin</h4>
    <button class="active" onclick="showSection('testimonials', this)">Testimonials</button>
    <button onclick="showSection('messages', this)">Messages</button>
    <button onclick="showSection('settings', this)">Settings</button>
    <button class="logout-btn">Logout</button>
  </div>

  <!-- Content -->
  <div class="content container-fluid">

    <!-- Testimonials -->
    <div id="testimonials" class="table-section fade-section">
      <h3>Testimonials</h3>
      <table class="table table-striped table-bordered mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Testimonial</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Jane Doe</td>
            <td>This platform helped me manage my anxiety better!</td>
            <td>2025-10-10</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Alex Green</td>
            <td>I’ve seen real improvement since joining!</td>
            <td>2025-10-18</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Messages -->
    <div id="messages" class="table-section fade-section" style="display:none;">
      <h3>Messages</h3>
      <table class="table table-striped table-bordered mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Sender</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Smith</td>
            <td>john@example.com</td>
            <td>I’d love to know more about therapy sessions.</td>
            <td>2025-10-20</td>
            <td>
              <button class="btn btn-sm btn-warning">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Settings -->
    <div id="settings" class="table-section fade-section" style="display:none;">
      <h3>Settings</h3>
      <form class="mt-4 p-4 bg-white rounded shadow-sm">
        <div class="mb-3">
          <label class="form-label fw-semibold">Admin Name</label>
          <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Password</label>
          <input type="password" class="form-control" placeholder="Enter new password">
        </div>
        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
      </form>
    </div>

  </div>

  <!-- ✅ Local Bootstrap JS -->
  <script src="bootstrap.bundle.min.js"></script>

  <!-- JS to Toggle Sections -->
  <script>
    function showSection(sectionId, btn) {
      document.querySelectorAll('.table-section').forEach(sec => sec.style.display = 'none');
      document.getElementById(sectionId).style.display = 'block';

      document.querySelectorAll('.sidebar button').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    }
  </script>

</body>
</html>
