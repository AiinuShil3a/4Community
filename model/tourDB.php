<?php
class Tour{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCommunity()
    {
        $sql = "SELECT DISTINCT location, name, activity, images FROM community LIMIT 4";
        $query = $this->ConDB->prepare($sql);
        
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        } else {
            return false;
        }
    }

    public function getCommunityByLocation($location)
    {
        $sql = "SELECT * FROM community WHERE location = :location";
        $query = $this->ConDB->prepare($sql);
        $query->bindParam(':location', $location, PDO::PARAM_STR);
    
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    public function getCommunityById($id)
    {
        $sql = "SELECT * FROM community WHERE id = :id";
        $query = $this->ConDB->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
    
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `community` WHERE `id`='".$id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function update($id,
    $name,
    $activity,
    $location,
    $images)
    {
        $sql = "UPDATE community SET name='$name',
        activity='$activity',
        location='$location',
        images='$images'
        WHERE id='$id'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function create($name, $activity, $location, $images)
{
    $sql = "INSERT INTO community (name, activity, location, images) VALUES (:name, :activity, :location, :images)";
    $query = $this->ConDB->prepare($sql);

    // กำหนดค่า parameter
    $query->bindParam(':name', $name);
    $query->bindParam(':activity', $activity);
    $query->bindParam(':location', $location);
    $query->bindParam(':images', $images);

    if ($query->execute()) {
        return true;
    } else {
        return false;
    }
}

}

?>