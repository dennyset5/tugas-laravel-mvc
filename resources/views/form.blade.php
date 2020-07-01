<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome">
        <p>First Name:</p>
        <input type="text" required>
        <p>Last name:</p>
        <input type="text" required>
        <p>Gender:</p>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="radio" name="gender" value="Other"> Other
        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="language" value="indonesia"> Bahasa Indonesia <br>
        <input type="checkbox" name="language" value="english"> English <br>
        <input type="checkbox" name="language" value="other"> Other
        <p>Bio:</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">Sign up</button>
    </form>
</body>

</html>