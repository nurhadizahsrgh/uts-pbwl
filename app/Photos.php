<?php

namespace App;

class Photos extends Koneksi {

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT  photos.*, post.* FROM photos, post WHERE photos.photos_post_id=post.post_id";
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
		$i_photos_dates = $_POST['i_photos_dates'];
		$i_photos_title = $_POST['i_photos_title'];
        $i_photos_text = $_POST['i_photos_text'];
        $i_photos_post_id = $_POST['i_photos_post_id'];

		$sql = "INSERT INTO post VALUES (NULL, :photos_dates, :photos_title, :photos_text, :photos_post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photos_dates", $i_photos_dates);
		$stmt->bindParam(":photos_title", $i_photos_title);
        $stmt->bindParam(":photos_text", $i_photos_text);
        $stmt->bindParam(":photos_post_id", $i_photos_post_id);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM photos WHERE photos_id=:photos_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photos_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$i_photos_dates = $_POST['i_photos_dates'];
		$i_photos_title = $_POST['i_photos_title'];
        $i_photos_text = $_POST['i_photos_text'];
        $i_photos_post_id = $_POST['i_photos_post_id'];
		$sql = "UPDATE photos.*, post. SET photos_date=:photos_date, :photos_title=:photos_title, :photos_text=:photos_text, :photos_post_id=:photos_post_id WHERE photos.photos_post_id=post.post_id";

		$stmt = $this->db->prepare($sql);
        $stmt->bindParam(":photos_dates", $i_photos_dates);
		$stmt->bindParam(":slug", $i_slug);
		$stmt->bindParam(":photos_title", $i_photos_title);
        $stmt->bindParam(":photos_text", $i_photos_text);
        $stmt->bindParam(":photos_post_id", $i_photos_post_id);
		$stmt->execute();
	}
}