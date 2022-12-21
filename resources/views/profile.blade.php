<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>MahasisWork | profile</title>
</head>
<body>

  <div class="contain">

    <div class="wrapper">
      <div class="contacts">
        <div class="container-fluid my-5">
          <div class="profile-pic-div">
            <img src="img/pp.jpg" id="photo">
            <input type="file" id="file" accept="img/*">
            <label for="file" id="uploadBtn">Change Photos</label>
          </div>
            <script src="js/profile.js"></script>
        </div>
        <h1>Our contacts</h1>
  
        <ul>
          <li>
            <a href="https://www.instagram.com/hsnasyah/"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/qr/VVUIWZ7NF6ZFM1"><i class="fab fa-whatsapp"></i></a>
          </li>
          <li>Dezazzz99@gmail.com</li>
        </ul>
      </div>
  
      <div class="form">
        <h3>Edit Profile</h3>
        <form action="">
          <p>
            <label for="">Name</label>
            <input type="text" placeholder="Delana Ezaz">
          </p>
          <p>
            <label for="">Username</label>
            <input type="text" placeholder="Dezaz">
          </p>
          <p>
            <label for="">Email Address</label>
            <input type="email" placeholder="Dezazzz99@gmail.com">
          </p>
          <p>
            <label for="">Skill</label>
            <input type="text" placeholder="Graphic Design">
          </p>
          <p>
            <label for="">University</label>
            <input type="text" placeholder="Lomonosov Moscow State University">
          </p>
          <p>
            <label for="">Address</label>
            <input type="text" placeholder="Prechistenka street, 13c2">
          </p>
          <p>
            <label for="">Instagram</label>
            <input type="url" placeholder="https://www.instagram.com/delanaezaz/">
          </p>
          <p>
            <label for="">Whatsapp</label>
            <input type="url" placeholder="https://wa.me/qr/VVUIWZ7NF6ZFM1v">
          </p>
          <p>
            <label for="">About</label>
            <input type="text" placeholder="My passion for graphic design goes back to grade and middle school. After high school, that passion led me to explore UI/UX design and motion graphics. I bring all that to bear as a designer, but my forte is graphic design."></input>
          </p>
          <p>
            <button>Update</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
