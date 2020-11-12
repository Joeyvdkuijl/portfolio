<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

// function getUsers() {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `users`";
//     $statement = $connection->query( $sql );

//     return $statement->fetchAll();
// }

// function getUserByEmail($email) {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `users` WHERE `email` = :email";
//     $statement = $connection->prepare( $sql );
    
//     $statement->execute( ['email' => $email]);

//     if ( $statement->rowCount() === 1){
//         return $statement->fetch();
//     }

//     return false;
// }
//  function getUserById($user_id) {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `users` WHERE `id` = :id";
//     $statement = $connection->prepare( $sql );
    
//     $statement->execute( ['id' => $user_id]);

//     if ( $statement->rowCount() === 1){
//         return $statement->fetch();
//     }

//     return false;
// }
// function getUserByResetCode($reset_code) {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `users` WHERE `password_reset` = :code";
//     $statement = $connection->prepare( $sql );
    
//     $statement->execute( ['code' => $reset_code]);

//     if ( $statement->rowCount() === 1){
//         return $statement->fetch();
//     }

//     return false;
// }
// function updatePassword( $user_id, $new_password ) {
// 	$safe_new_password = password_hash($new_password, PASSWORD_DEFAULT);
// 	$sql = "UPDATE `users` SET `password` = :password, `password_reset` = NULL WHERE `id` = :id";
// 	$connection = dbConnect();
// 	$statement = $connection->prepare($sql);
// 	$params = [
// 		'password' => $safe_new_password,
// 		'id' => $user_id
// 	];

// 	return $statement->execute($params);
// }
// function getSkills() {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `skills`";
//     $statement = $connection->query( $sql );

//     return $statement->fetchAll();
// }
// function getAllSkills($id) {
//     $connection = dbConnect();
//     $sql = "SELECT * FROM `skills` WHERE 'id' = :id";
//     $statement = $connection->query( $sql );
//     $param = [
//         'id' => $id
//     ];
//     $statement->execute($param);
//     return $statement->fetchAll();
// }

function getProject($id) {
    $connection = dbConnect();
    $sql = 'SELECT * FROM projecten WHERE id = :id';
    $statement = $connection->prepare($sql);
    $params = [
        'id' => $id
    ];
    $statement->execute($params);
    return $statement->fetchAll();
}
function getProjectImages($id) {
    $connection = dbConnect();
    $sql = 'SELECT * FROM images WHERE project_id = :id';
    $statement = $connection->prepare($sql);
    $params = [
        'id' => $id
    ];
    $statement->execute($params);
    return $statement->fetchAll();
}
function getProjectMethods($id) {
    $connection = dbConnect();
    $sql = 'SELECT * FROM methods WHERE project_id = :id';
    $statement = $connection->prepare($sql);
    $params = [
        'id' => $id
    ];
    $statement->execute($params);
    return $statement->fetchAll();
}