<?php

namespace App;

class Category extends Koneksi {

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
    }

    public function input()
	{
		$i_cat_name = $_POST['i_cat_name'];
		$i_cat_text = $_POST['i_cat_text'];

		$sql = "INSERT INTO category VALUES (NULL, :cat_name, :cat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $i_cat_name);
		$stmt->bindParam(":cat_text", $i_cat_text);
		$stmt->execute();
	}
	public function edit($id)
	{
		$sql = "SELECT * FROM category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$i_cat_name = $_POST['i_cat_name'];
		$i_cat_text = $_POST['i_cat_text'];
		$i_cat_id = $_POST['i_cat_id'];
		$sql = "UPDATE category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $i_cat_name);
		$stmt->bindParam(":cat_text", $i_cat_text);
		$stmt->bindParam(":cat_id", $i_cat_id);
		$stmt->execute();
	}

}