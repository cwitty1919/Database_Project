<?php

include 'dblogin.php';
include './execute_query.php';

$dropdb = "DROP DATABASE IF EXISTS $dbname;";
execute_query($dropdb, $conn);


$createdb = "CREATE DATABASE $dbname;";

echo "Executing query: $createdb <br>";

if ($conn->query($createdb) === TRUE) {
    echo "Database created successfuly <br><br>";
} else {
    $deathstring = "Error creating database: $conn->error <br>";
    die($deathstring);
}

$sql = "USE $dbname;";
execute_query($sql, $conn);
//Create Tables

//Vendors 

$sql = "CREATE TABLE Vendor( id TINYINT NOT NULL AUTO_INCREMENT, name CHAR(30), address CHAR(50), status CHAR(6), phone_number CHAR(12), email CHAR(30), PRIMARY KEY (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Vendor (name, address, status, phone_number, email) VALUES ('Rio Grande Games', 'PO Box 1033, Placitas, NM', 'OPEN', '101-110-1010', 'info@riograndegames.com'), ('Steve Jackson Games','3735 Promontory Point Drive Austin, TX', 'OPEN', '512-447-7866','info@sjgames.com'),('Mayfair Games', '8060 St. Louis Ave. Skokie, IL', 'OPEN', '847-677-6655', 'retailer@mayfairgames.com'), ('Z-Man Games', '10258 Corporate Circle Manhattan, NY', 'OPEN', '450-424-0655', 'info@zmangames.com'), ('Gibman Games', '1797 E. Minotaur Dr. Newhaven, CT', 'CLOSED', '109-221-9597', 'info@gibmangames.com'), ('AppleSnapple Games', '2945 Cider Dr. Portland, OR', 'CLOSED', '145-995-9977', 'info@applesnapplegames.com');";

execute_query($sql, $conn);

//Vendor Zipcode

$sql = "CREATE TABLE Vendor_Zip_Code( vendor_id TINYINT NOT NULL, zipcode CHAR(5), PRIMARY KEY (vendor_id), FOREIGN KEY (vendor_id) REFERENCES Vendor (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Vendor_Zip_Code(vendor_id, zipcode) VALUES (1, 87043), (2, 78760), (3, 60076), (4, 10026), (5, 06051), (6, 97201); ";

execute_query($sql, $conn);

//Purchaser Accounts

$sql = "CREATE TABLE Accounts (id MEDIUMINT NOT NULL AUTO_INCREMENT, username CHAR(50), password CHAR(50), name CHAR(50), address CHAR(50), PRIMARY KEY (id) );";

execute_query($sql, $conn);

$sql = "INSERT INTO Accounts (username, password, name, address) VALUES ('Angus5979','x978ooplmn', 'Angus Beef', '4945 E. Haven Ct. Denver, CO'), ('MAD7986', 'lmorp17764', 'Madison Brooks', '4995 Glenwood Ave. Newport Beach, CA'), ('Dam90097', 'por334544e', 'Damien Ranulf', '905 Bulwark Place Bose, ID'), ('flower9578', 'ffmgn7849', 'Rose Tyler', '45754'), ('Pounder8686', 'xskfefne898', 'Jesse Boykins', '4643 Topaz Ave, Tampa Bay, FL');";

execute_query($sql, $conn);

//Purchaser Account Zipcodes

$sql = "CREATE TABLE Account_Zipcode( account_id TINYINT NOT NULL, zipcode CHAR(5));";

execute_query($sql, $conn);

$sql = "INSERT INTO Account_Zipcode(account_id, zipcode) VALUES (1, 80067), (2, 92660), (3, 83701), (4, 10026), (5, 33626); ";

execute_query($sql, $conn);

//Players

$sql = "CREATE TABLE Player(id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(50), address CHAR(50), age TINYINT, gender CHAR(1), wins TINYINT, losses TINYINT, PRIMARY KEY (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Player (name, address, age, wins, losses) VALUES ('James Norton', '5675 Jeppeson Ave. New Orleans, LA', 34, 8 , 4), ('Mary Veneer', '67950 Candlestick Way Bose, ID', 29, 4, 1), ('Lindsay Greene', '8964 Sourghum Way Billings, MT', 36, 8, 9), ('David Blaine', '2374 Great White Ave. Santa Fe, NM', 44, 2, 11), ('Jesse James', '3890 Camela Ave Austin, TX', 31, 4, 6), ('Georgia OKeefe', '9384 El Paso Ave Santa Fe, NM', 54, 17, 5);";

execute_query($sql, $conn);

//Player Zipcodes

$sql = "CREATE TABLE Player_Address(player_id int, zipcode int);";

execute_query($sql, $conn);

$sql = "INSERT INTO Player_Address Values (1, 70112), (2, 83701), (3, 59010), (4, 87501), (5, 73301), (6, 87501);";

execute_query($sql, $conn);

//Judges

$sql = "CREATE TABLE Judge (id TINYINT NOT NULL AUTO_INCREMENT, name CHAR(50), address CHAR(50), age TINYINT, number_of_games_judged TINYINT, Primary KEY (id) );";

execute_query($sql, $conn);

$sql = "INSERT INTO Judge (name, address, age, number_of_games_judged) VALUES ('John Boehner', '5589 Crystalpeak Dr. Boulder, CO', 35, 15), ('Kelly Jameson', '3465 Mount Meeker Street Gunbarrell, CO', 38, 25), ('Jeremy Rockson', '48450 E. Bonham Ave. San Bernadino, CA', 45, 35), ('Krystal Venera', '3493 Ferguson Street Portland, OR', 36, 9), ('Wesley Sanders', '7748 Banana Street Tama Bay, FL', 44, 23), ('Emily Desanders', '3892 Cherry Ave Denver, CO', 50, 45);";

execute_query($sql, $conn);

//Judges Zipcode

$sql = "CREATE TABLE Judge_Zipcode(judge_id int, zipcode int);";

execute_query($sql, $conn);

$sql = "INSERT INTO Judge_Zipcode VALUES (1, 80303), (2, 80503), (3, 92401), (4, 97201), (5, 33565), (6, 80123);";

execute_query($sql, $conn);

//Store

$sql = "CREATE TABLE Store(id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30), address CHAR(30), PRIMARY KEY (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Store (name, address) VALUES ('Locness Games', '3456 Wilberfore Way'), ('GameTribe', '3903 Totem Drive'), ('Benny Games', '2232 Gunnison Court'), ('Friendly Games', '2334 Benson Ave'), ('Jimmy Joe Games', '4540 Candyland Lane'), ('Castle Games', '1234 Townsend Lane');";

execute_query($sql, $conn);

//Store City

$sql = "CREATE TABLE Store_City (store_id int, city CHAR(30));";

execute_query($sql, $conn);

$sql = "INSERT INTO Store_City VALUES (1, 'Boulder'), (2, 'Boulder'), (3, 'San Bernadino'), (4, 'Tampa Bay'), (5, 'Boise'), (6, 'Billings');";

execute_query($sql, $conn);

//Store State

$sql = "CREATE TABLE Store_State (store_id int, state CHAR(2));";

execute_query($sql, $conn);

$sql = "INSERT INTO Store_State VALUES (1, 'CO'), (2, 'CO'), (3, 'CA'), (4, 'FL'), (5, 'ID'), (6, 'MT');";

execute_query($sql, $conn);

//Store Zipcode

$sql = "CREATE TABLE Store_Zipcode (store_id int, zipcode int);";

execute_query($sql, $conn);

$sql = "INSERT INTO Store_Zipcode VALUES (1, 80303), (2, 80303), (3, 92401), (4, 33565), (5, 83701), (6, 59101);";

execute_query($sql, $conn);

//Board Games

$sql = "CREATE TABLE Board_Games(id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30), cost DOUBLE, quantity int, vendor_id int , number_of_players int, PRIMARY KEY (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Board_Games (name, cost, quantity, vendor_id, number_of_players) VALUES ('Dominion', 35.00, 10, 1, 6), ('Munchkin', 20.00, 4, 2, 6), ('Agricola', 45.00, 2, 3, 4), ('Slapper', 13.00, 10, 5, 5), ('Goosehunter', 26.00, 9, 6, 6), ('Settlers of Catan', 48.00, 1, 3, 4);";

execute_query($sql, $conn);

//Board Game Editions

$sql = "CREATE TABLE Product_Edition (serial_number int, edition char(20));";

execute_query($sql, $conn);

$sql = "INSERT INTO Product_Edition VALUES (1, 'Normal'), (4, 'Gold'), (3, 'Diamond'), (1, 'Seaside'), (2, 'Normal'), (2, 'Adeventure Time');";

execute_query($sql, $conn);

///Shipment Record

$sql = "CREATE TABLE Purchase_Record(serial_number int NOT NULL AUTO_INCREMENT, board_game_id int, store_id int, date DATE, PRIMARY KEY (serial_number) );";

execute_query($sql, $conn);

$sql = "INSERT INTO Purchase_Record(board_game_id, store_id, date) VALUES (1, 1, '2010-10-02'), (2, 2, '2010-11-01'), (3, 3, '2010-03-05'), (4, 4, '2010-05-04'), (5, 5, '2010-06-09'), (6, 6, '2010-02-24');";

execute_query($sql, $conn);

//Sales Record

$sql = "CREATE TABLE Sales_Record(serial_number int, store_id int,  board_game_id int, date DATE, purchaser_name CHAR(50));";

execute_query($sql, $conn);

$sql = "INSERT INTO Sales_Record(serial_number, board_game_id, store_id, date, purchaser_name) VALUES (1, 1, 1, '2010-12-02', \"Madison Brown\"), (2, 2, 2, '2010-11-01',\"Damien Ranulf\"), (4, 3, 3, '2010-03-05', \"Madison Brooks\"), (5, 4, 4, '2010-05-04', \"Larry King\");";

execute_query($sql, $conn);

//Tournaments

$sql = "CREATE TABLE Tournament(id INT NOT NULL AUTO_INCREMENT, name CHAR(30), date DATE, store_id int, board_game_id int, number_of_participants int, prize_amount DOUBLE, winner_id int, judge_id int, PRIMARY KEY (id));";

execute_query($sql, $conn);

$sql = "INSERT INTO Tournament(name, date, store_id, board_game_id, number_of_participants, prize_amount, winner_id, judge_id) VALUES ('Last Munchkin Standing', '2010-04-15', 1, 2, 16, 25.00, 2, 1), ('Slap Attack!', '2010-06-21', 5, 4, 8, 12.00, 2, 2), (\"Farmer's Apocalypse\", '2010-10-10', 6, 3, 50.00, 32, 5, 3);";

execute_query($sql, $conn);

echo "All queries executed successfuly";

$conn->close();
?>
