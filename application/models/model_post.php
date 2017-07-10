<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/5/2017
 * Time: 5:39 PM
 */

class model_post extends Model
{
    function get_data()
    {

    }

    function add_new_post($id, $title, $description, $content, $category, $tags) {
        $conn = $this->conn;
        mysqli_set_charset($conn,"utf8");
        if (!($stmt = $conn->prepare("INSERT INTO posts (id_post, title, description, content, category, tags) VALUES (?, ?, ?, ?, ?, ?)"))) {
             echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        }
        if (!$stmt->bind_param("ssssss", $id, $title, $description, $content, $category, $tags)) {
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
        }
        if (!$stmt->execute()) {
            echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        }
    }
}
