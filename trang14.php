<?php
$dsn = 'mysql:host=localhost;dbname=part5';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

}

// Insert
$sql = "INSERT INTO my_contacts (id, full_names, gender, contact_no, email, city, country)
        VALUES (:id, :full_names, :gender, :contact_no, :email, :city, :country)";
$stmt = $pdo->prepare($sql);

// Ràng buộc giá trị vào tham số
$stmt->bindParam(':id', $id);
$stmt->bindParam(':full_names', $full_names);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':contact_no', $contact_no);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':country', $country);

// Gán giá trị
$id = 5;
$full_names = 'Anh';
$gender = 'Male';
$contact_no = 'DuongKhue';
$email = 'anh@example.com';
$city = 'Rome';
$country = 'Italy';

// Update
$sql = "UPDATE my_contacts SET email = :email WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => 'phamngocanh202.2004@.com', 'id' => 24]);

// Hiển thị
$sql = "SELECT * FROM my_contacts";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch()) {
    echo "id: " . $row['id'] . "<br>";
    echo "full names: " . $row['full_names'] . "<br>";
    echo "gender: " . $row['gender'] . "<br>";
    echo "contact No: " . $row['contact_no'] . "<br>";
    echo "email: " . $row['email'] . "<br>";
    echo "city: " . $row['city'] . "<br>";
    echo "country: " . $row['country'] . "<br><br>";
}
?>
