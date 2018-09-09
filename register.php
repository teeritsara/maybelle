<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #996666	;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 1000px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #FFEFD5;
    height: 1000px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #FFE4E1	;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>ทำไมต้อง Run</h1>
    <form method="post" action="result1.php">
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname" >
  <br>
  Age:<br>
  <input type="text" name="age">
  <br>
  Gender<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other  
  <br>
  <br>
  Address :<br>
  <form action="/action_page.php">
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
  
  <br>
  Email:<br>
  <input type="text" name="email" >
  <br>
  ID Student:<br>
  <input type="text" name="id" >
  <br>
  ชั้นปีศึกษา<br>
  <input type="radio" name="grade" value="1" checked> 1<br>
  <input type="radio" name="grade" value="2"> 2<br>
  <input type="radio" name="grade" value="3"> 3<br>
  <input type="radio" name="grade" value="4"> 4 <br>
  <input type="radio" name="grade" value="other"> other
  <br>
  Size เสื้อ <br>
  <input type="radio" name="size" value="S" checked> S<br>
  <input type="radio" name="size" value="M"> M<br>
  <input type="radio" name="size" value="L"> L  <br>
  <input type="radio" name="size" value="XL"> XL
  
  <br>
  ทำไมถึงอยากเข้าร่วมกิจกรรม "Run for ตุ๊ดตู่ กันเถอะ":<br>
  <textarea name="mess" rows="6" cols="45"></textarea>
  <br>
  <input type="submit" value="Submit">
  <br>
</form> 

  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>