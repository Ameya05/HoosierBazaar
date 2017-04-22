<?php
$servername = "localhost";
$username = "root";
$password = "test";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Mens Columbia Crimson Indiana Hoosiers Flanker Full Zip Fleece Jacket', 'S' , '55.24' , '111' , 'Yes' , 'http://www.indianauniversitystore.com/Indiana_Hoosiers_Mens_Jackets/Mens_Columbia_Crimson_Indiana_Hoosiers_Flanker_Full_Zip_Fleece_Jacket' , 'Jackets' , 'You can be found at every Indiana game, cheering on the Hoosiers, irregardless of the weather. When Mother Nature makes it breezy and cold, show off your team pride in style in this Flanker jacket from Columbia. This fleece jacket features an embroidered Indiana logo on the left chest, an Olympic collar, two front pockets, and a bungee cord on the bottom that’s designed to keep you extra cool. Do not risk missing a game due to being sick; when it gets a bit chilly, throw on this festive jacket and cheer on the Hoosiers to victory.' , 'Columbia');";

$sql .= "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Womens Antigua Crimson Indiana Hoosiers Pique Xtra-Lite Polo', 'S', '35.69' , '111' , 'Yes' , 'http://www.indianauniversitystore.com/Indiana_Hoosiers_Ladies_Polos/Womens_Antigua_Crimson_Indiana_Hoosiers_Pique_Xtra-Lite_Polo' ,'Polos', 'Celebrate your love for the Indiana Hoosiers with this Antigua Pique Xtra-Lite polo!' , 'Antigua' );";

$sql .= "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Adidas Indiana Hoosiers Infant Girls Turtleneck Cheer Dress - Crimson' , 'S' , '29.74' , '111' , 'Yes' , 'http://www.indianauniversitystore.com/Indiana_Hoosiers_Kids_Skirts_And_Dresses/adidas_Indiana_Hoosiers_Infant_Girls_Turtleneck_Cheer_Dress_-_Crimson' , 'Skirts and Dresses' , ' ' , 'Adidas');";

$sql .= "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Indiana Hoosiers adidas Vintage Script Logo Tri-Blend T-Shirt - Heathered Crimson' , 'M' , '29.99' , '222' , 'No' , 'http://www.fanatics.com/COLLEGE_Indiana_Hoosiers_Hot_New_Arrivals/Indiana_Hoosiers_adidas_Vintage_Script_Logo_Tri-Blend_T-Shirt_-_Heathered_Crimson' , 'T-shirt' , 'You love to show off your die-hard fandom for the Indiana Hoosiers as often as possible. Now you can share your long lasting loyalty with everyone when you put on this Indiana Hoosiers Vintage Logo tri-blend T-shirt from adidas. The crisp graphics on this tee are amazing and will ensure your enthusiasm for the Indiana Hoosiers is everlasting.' , 'Adidas');";

$sql .= "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Indiana Hoosiers Moccasin Slippers' , 'S' , '29.99' , '222' , 'No' , 'http://www.fanatics.com/COLLEGE_Indiana_Hoosiers_Footwear/Indiana_Hoosiers_Moccasin_Slippers' , 'Footwear' , 'If there is anything you love more than the Indiana Hoosiers, it is relaxing at home after a long day. Now you can combine those two passions and comfortably show off your dedication to the team by wearing these Moccasin slippers. These slippers feature Indiana Hoosiers-inspired embroidered graphics, which are the mark of a true fan. Whether you are reveling in a recent team win or just getting some rest before the big game tomorrow, these Indiana Hoosiers slippers will make you feel like a proud fan.' , 'Forever Collectibles');";

$sql .= "INSERT INTO Product (name, size, price, store_id , is_discounted, link, category, description, brand)
VALUES ('Indiana Hoosiers Womens Finalist Quarter-Zip Pullover Jacket - Gray/Black' , 'S' , '61.99' , '333' , 'No' , 'https://www.collegebasketballstore.com/indiana-hoosiers-womens-finalist-quarter-zip-pullover-jacket-gray-black/p-2397824' , 'Sweatshirts' , 'You are a massive Indiana Hoosiers fan and love to wear as much gear as you can to show that hardcore fandom. When you get this Indiana Hoosiers Finalist quarter-zip pullover jacket, you'll be prepared for the elements. This jacket features awesome printed Indiana Hoosiers graphics, perfect for showing your die-hard loyalty no matter the weather.', 'Camp David');";

if ($conn->multi_query($sql) === TRUE) {
    echo "Inserted into products sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>