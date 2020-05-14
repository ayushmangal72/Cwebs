<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "swiggy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signup1 (firstname, lastname, email,username,password)
VALUES ('John', 'Doe', 'john@example.com','ayushmangal123','ayush123')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
/* /*
            $conn = mysqli_connect($host,$user,$pass,$database) or die ($error);
            if ($conn->connect_error)
                        {
                            die("Connection failed: " . $conn->connect_error);
                        }
            else
            {
            $sql = "INSERT INTO signup1(firstname,lastname,email,username,password)
            values('".$firstname."','".$lastname."','".$email."','".$username."','".$password."')")
            or die('You need to insert values OR username is already taken .');
        
            if ($conn->query($sql) === TRUE) 
            {
            echo "New record created successfully";
            }
            else
            {
            echo "Error creating database: ";
            }
            }}

$conn->close();
}