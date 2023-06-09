<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    </style>
</head>
<body>
    <form action="">
        <table>
            <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Roll No</th>
            <th>Father Name</th>
            </tr>
           <tr>
            <td>Arif Jamal</td>
            <td>BSCS8A(MORNING)</td>
            <td>19-Arid-822</td>
            <td>Muhammad Jamal</td>
           </tr>
        </table>
        <br>
        <br>
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="enter your name">
        <br><br>
        <label for="">Email:</label>
        <input type="text" name="email" placeholder="enter your email">
        <br><br>
        <label for="">passowrd:</label>
        <input type="text" name="password" placeholder="enter your password">
        <br><br>
        <label for="">confirm Password:</label>
        <input type="text" name="confirm password" placeholder="enter your confirm password">

    </form>
</body>
</html>