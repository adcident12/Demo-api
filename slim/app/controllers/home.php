<?php
namespace App\Controllers;
class Home extends Main {
    public function index() {
        echo 'index home';
    }
    public function showUser() {
        $sql = "SELECT * FROM user";
        $result = $this->db->prepare($sql);
        $result->execute();
        $data = $result->fetchAll(\PDO::FETCH_OBJ);
        echo json_encode($data);
    }
    public function showUserByid($request, $response) {
        $id = $request->getAttribute('id');
        $sql = "SELECT * FROM user where user_id = $id";
        $result = $this->db->prepare($sql);
        $result->execute();
        $data = $result->fetch(\PDO::FETCH_OBJ);
        echo json_encode($data);
    }
    public function findUserByname($request, $response) {
        $userfristname = $request->getParsedBody()['userfristname'];
        $sql = "SELECT * FROM user where user_fristname LIKE'%$userfristnam%'";
        $result = $this->db->prepare($sql);
        $result->execute();
        $data = $result->fetch(\PDO::FETCH_OBJ);
        echo json_encode($data);
    }
}
?>