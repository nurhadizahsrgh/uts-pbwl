<?php

namespace App;

class Album extends Koneksi {

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT  album.*, photos.* FROM album, photos WHERE album.album_photos_id=photos.photos_id";
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
		$i_album_name = $_POST['i_album_name'];
        $i_album_text = $_POST['i_album_text'];
        $i_album_photos_id = $_POST['i_album_photos_id'];

		$sql = "INSERT INTO post VALUES (NULL, :album_name, :album_text, :album_photos_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $i_album_name);
        $stmt->bindParam(":album_text", $i_album_text);
        $stmt->bindParam(":album_photos_id", $i_album_photos_id);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$i_album_name = $_POST['i_album_name'];
        $i_album_text = $_POST['i_album_text'];
        $i_album_photos_id = $_POST['i_album_photos_id'];
		$sql = "UPDATE album.*, photos. SET :album_name=:album_name, :album_text=:album_text, :album_photos_id=:album_photos_id WHERE album.album_post_id=photos.photos_id";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $i_album_name);
        $stmt->bindParam(":album_text", $i_album_text);
        $stmt->bindParam(":album_photos_id", $i_album_photos_id);
		$stmt->execute();
	}

	public function delete ($id)
	{
		$sql = "DELETE FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();


	}
}