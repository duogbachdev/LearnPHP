<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DuogBachDev</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="https://donate-duogbachdev.vercel.app/img/favicon.png" type="image/x-icon">
</head>

<body>
  <div id="root">
    <header class="header">
      <div>
        <i class="fa-solid fa-bars"></i>
      </div>
      <div class="header_text">
        <p><span>Admin Crud Dashboard</span></p>
        <p>DuogBachDev</p>
      </div>
      <div class="header_icon">
        <i class="fa-solid fa-palette"></i>
        <i class="fa-solid fa-expand"></i>
        <div class="header_text2">
          <p><span>DuogBachDev</span></p>
          <p>Admin</p>
        </div>
        <i class="fa-solid fa-user"></i>
        <i class="fa-solid fa-chevron-right"></i>
      </div>
    </header>

    <main class="main">
      <div class="main_nav">
        <i class="fa-solid fa-house"></i>
        <p>&#47;</p>
        <p>Address</p>
      </div>

      <div class="main_btn">
        <div class="main_btnSum">
          <button class="main_btnAddnew">
            <i class="fa-solid fa-circle-plus"></i>
            <p>Add new</p>
          </button>
          <button class="main_btnExp">
            <i class="fa-solid fa-upload"></i>
            <p>export</p>
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>


        <div class="main_search">
          <button class="fa-chevron">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
          <input type="text" placeholder="Search...?" />
          <button class="fa-magnifying">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>

        <div class="main_Slt">
          <p>Results</p>
          <select name="" id="">
            <option value="20">20</option>
            <option value="15">15</option>
            <option value="10">10</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>

      <div class="main_Addnew hide">
        <form id="form_Addnew" action="">
          <div class="input_Address">
            <label for="">Address</label>
            <input id="address" type="text">
          </div>
          <div class="input_City">
            <label for="">City</label>
            <input id="city" type="text">
          </div>
          <div class="input_Postal">
            <label for="">Postal code</label>
            <input id="postal" type="text">
          </div>
          <button id="submit" type="submit">Submit</button>
        </form>
      </div>
      <div class="main_table">
        <table class="table-container">
          <thead>
            <th>Action</th>
            <th>Address</th>
            <th>City</th>
            <th>Postal code</th>
          </thead>
          <!-- <tbody>
            <tr>
              <td>
                <i class="fa-solid fa-eye"></i>
                <i class="fa-solid fa-pen-to-square"></i>
                <i class="fa-solid fa-circle-xmark"></i>
              </td>
              <td>Thai Binh</td>
              <td>Thai Binh</td>
              <td>Thai Binh</td>
            </tr>
          </tbody> -->
        </table>
      </div>

      <div class="main_page">
        <div class="page">
          <p>Page</p>
          <button><span>1</span></button>
          <button>2</button>
          <button>3</button>
          <button>4</button>
          <button>5</button>
          <button>6</button>
          <button><i class="fa-solid fa-angle-right"></i></button>
          <button><i class="fa-solid fa-angles-right"></i></button>
        </div>

        <div>Results 1 to 20 of 603</div>
      </div>
    </main>
  </div>
  <script src="./main.js"></script>
</body>

</html>