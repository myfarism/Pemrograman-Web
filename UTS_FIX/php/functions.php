<?php
include 'db.php';

function getPageContent($page_name) {
    global $conn;
    $sql = "SELECT content FROM pages WHERE page_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $page_name);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()['content'];
}

function getGalleryImages() {
    global $conn;
    $sql = "SELECT image_url, caption FROM gallery";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getProjects() {
    global $conn;
    $sql = "SELECT title, description, image_url FROM projects";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getSertifs() {
    global $conn;
    $sql = "SELECT title, image_url, link FROM sertif";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getAboutContent() {
    global $conn; 

    $query = "SELECT content FROM about"; 
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['content'];
    } else {
        return "No Data"; 
    }
}

function getIntroTitle() {
    global $conn;

    $query = "SELECT title FROM intro";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['title'];
    } else {
        return "No data";
    }
}

function getIntroContent() {
    global $conn;

    $query = "SELECT content FROM intro";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['content'];
    } else {
        return "No data";
    }
}

function getContactDetails() {
    global $conn;
    $sql = "SELECT email, phone, link_instagram, link_github FROM contact";
    
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return [
                'email' => 'No Data',
                'phone' => 'No Data',
                'link_instagram' => 'No Data',
                'link_github' => 'No Data'
            ];
        }
    } 
}


?>
